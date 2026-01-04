<?php

namespace Tests\Feature\Admin;

use App\Models\Brand;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class BrandControllerTest extends TestCase
{
    use RefreshDatabase;

    private User $admin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->admin = User::factory()->admin()->create();
        Storage::fake('public');
    }
    public function test_index_success()
    {

        $response = $this->actingAs($this->admin)->get(route('brands.index'));

        $response->assertStatus(200)
            ->assertSeeText('Brands Page');
    }

    public function test_index_failed_wrong_role_users()
    {
        $user = User::factory()->user()->create();
        $response = $this->actingAs($user)->get(route('brands.index'));

        $response->assertStatus(403);
    }

    public function test_create_success()
    {

        $response = $this->actingAs($this->admin)->get(route('brands.create'));

        $response->assertStatus(200)
            ->assertSeeText('Create Brand Page');
    }

    public function test_store_success()
    {
        $file = UploadedFile::fake()->image('brand-logo.jpg');
        $response = $this->actingAs($this->admin)->post(route('brands.store'), [
            'name' => 'Brand Test',
            'slug' => 'brand-test',
            'image' => $file
        ]);

        $response->assertStatus(302)
            ->assertRedirectToRoute('brands.index')
            ->assertSessionHas('success', 'Brand created successfully!');

        $this->assertDatabaseHas('brands', [
            'name' => 'Brand Test'
        ]);
    }

    public function test_store_failed_duplicate_slug()
    {
        Brand::factory()->create([
            'name' => 'Existing Brand',
            'slug' => 'brand-test'
        ]);

        $response = $this->actingAs($this->admin)
            ->from(route('brands.create'))
            ->post(route('brands.store'), [
                'name' => 'New Brand',
                'slug' => 'brand-test',
                'image' => 'new-image.jpg'
            ]);

        // 3. Assertion
        $response->assertStatus(302)
            ->assertRedirectBack()
            ->assertSessionHasErrors([
                'slug' => 'The slug has already been taken.'
            ]);
    }
    public function test_store_failed_empty_data()
    {
        $response = $this->actingAs($this->admin)
            ->from(route('brands.create'))
            ->post(route('brands.store'), [
                'name' => '',
                'slug' => '',
                'image' => ''
            ]);

        $response->assertStatus(302)
            ->assertRedirectBack()
            ->assertSessionHasErrors([
                'name' => 'The name field is required.',
                'slug' => 'The slug field is required.',
                'image' => 'The image field is required.'
            ]);
    }

    public function test_edit_success()
    {
        $brand = Brand::factory()->create([
            'name' => 'Old Brand Name',
            'slug' => 'old-brand-slug'
        ]);

        $response = $this->actingAs($this->admin)->get(route('brands.edit', $brand));

        $response->assertStatus(200)
            ->assertSee('Edit Brand Page')
            ->assertSee('Old Brand Name')
            ->assertViewHas('brand', $brand);
    }

    public function test_edit_failed_not_found()
    {
        $response = $this->actingAs($this->admin)->get(route('brands.edit', 'non-existent-slug'));

        $response->assertStatus(404);
    }

    public function test_update_without_changing_image_success()
    {
        $initialPath = 'brand-images/existing-logo.jpg';
        $oldImage = UploadedFile::fake()->image('existing-logo.jpg');
        $oldImage->storeAs('brand-images', 'existing-logo.jpg', 'public');

        $brand = Brand::factory()->create([
            'image' => $initialPath
        ]);

        $response = $this->actingAs($this->admin)->put(route('brands.update', $brand), [
            'name' => 'Brand Test Update',
            'slug' => 'brand-test-update',
            'image' =>  null
        ]);

        $response->assertStatus(302)
            ->assertRedirectToRoute('brands.index')
            ->assertSessionHas('success', 'Brand updated successfully!');

        $this->assertDatabaseHas('brands', [
            'name' => 'Brand Test Update'
        ]);

        $brand->refresh();
        $this->assertTrue(Storage::disk('public')->exists($initialPath));
    }

    public function test_update_with_new_image_success()
    {
        $oldPath = 'brand-images/old.jpg';
        UploadedFile::fake()->image('old.jpg')->storeAs('brand-images', 'old.jpg', 'public');
        $brand = Brand::factory()->create(['image' => $oldPath]);

        $newImage = UploadedFile::fake()->image('new-brand-logo.jpg');

        $response = $this->actingAs($this->admin)->put(route('brands.update', $brand), [
            'name' => 'Brand Test Update',
            'slug' => 'brand-test-update',
            'image' =>  $newImage
        ]);

        $response->assertStatus(302)
            ->assertRedirectToRoute('brands.index')
            ->assertSessionHas('success', 'Brand updated successfully!');

        $this->assertDatabaseHas('brands', [
            'name' => 'Brand Test Update'
        ]);

        $brand->refresh();
        $this->assertTrue(Storage::disk('public')->exists($brand->image));
        $this->assertFalse(Storage::disk('public')->exists($oldPath), "File lama seharusnya dihapus saat file baru diupload");
    }

    public function test_update_failed_empty_data()
    {
        $brand = Brand::factory()->create();

        $response = $this->actingAs($this->admin)
            ->from(route('brands.edit', $brand))
            ->put(route('brands.update', $brand), [
                'name' => '',
                'slug' => '',
                'image' => null
            ]);

        $response->assertStatus(302)
            ->assertRedirectBack()
            ->assertSessionHasErrors([
                'name' => 'The name field is required.',
                'slug' => 'The slug field is required.',
            ]);
    }

    public function test_destroy_success()
    {
        $file = UploadedFile::fake()->image('brand.jpg');
        $path = $file->store('brand-images', 'public');
        $brand = Brand::factory()->create(['image' => $path]);

        $response = $this->actingAs($this->admin)
            ->from(route('brands.index'))
            ->delete(route('brands.destroy', $brand));

        $response->assertStatus(302)
            ->assertRedirectBack()
            ->assertSessionHas('success', 'Brand deleted successfully!');

        $this->assertDatabaseMissing('brands', ['id' => $brand->id]);
        $this->assertFalse(Storage::disk('public')->exists($path));
    }

    public function test_destroy_failed_data_not_found()
    {
        $response = $this->actingAs($this->admin)->delete(route('brands.destroy', 'not-existing'));

        $response->assertStatus(404);
    }
}
