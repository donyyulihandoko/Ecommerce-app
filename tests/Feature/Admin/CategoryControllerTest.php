<?php

namespace Tests\Feature\Admin;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class CategoryControllerTest extends TestCase
{
    use RefreshDatabase;

    private User $admin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->admin = User::factory()->admin()->create();
    }

    public function test_index_success()
    {
        $response = $this->actingAs($this->admin)->get(route('categories.index'));

        $response->assertStatus(200)
            ->assertSeeText('Categories Page');
    }

    public function test_index_failed_wrong_role_users()
    {
        $user = User::factory()->user()->create();
        $response = $this->actingAs($user)->get(route('categories.index'));

        $response->assertStatus(403);
    }

    public function test_create_success()
    {
        $response = $this->actingAs($this->admin)->get(route('categories.create'));

        $response->assertStatus(200)
            ->assertSeeText('Create Category Page');
    }

    public function test_store_success()
    {
        $data = [
            'name' => 'Category Test',
            'slug' => 'category-test',
            'image' => UploadedFile::fake()->image('category-test.jpg')
        ];

        $response = $this->actingAs($this->admin)->post(route('categories.store'), $data);

        $response->assertStatus(302)
            ->assertRedirectToRoute('categories.index')
            ->assertSessionHas('success', 'Category created successfully!');
    }

    public function test_store_failed_empty_data()
    {
        $response = $this->actingAs($this->admin)
            ->from(route('categories.create'))
            ->post(route('categories.store'), []);

        $response->assertStatus(302)
            ->assertRedirectBack()
            ->assertSessionHasErrors([
                'name' => 'The name field is required.',
                'slug' => 'The slug field is required.',
                'image' => 'The image field is required.'
            ]);
    }

    public function test_store_failed_unique_slug()
    {
        // set up existing data
        Category::factory()->create([
            'name' => 'Category Test',
            'slug' => 'category-test',
            'image' => UploadedFile::fake()->image('category-test.jpg')
        ]);

        // set up new data
        $data = [
            'name' => 'Category Test',
            'slug' => 'category-test',
            'image' => UploadedFile::fake()->image('category-test.jpg')
        ];

        $response = $this->actingAs($this->admin)
            ->from(route('categories.create'))
            ->post(route('categories.store'), $data);

        // assert
        $response->assertStatus(302)
            ->assertRedirectBack()
            ->assertSessionHas('error', 'Category created failed!');
    }

    public function test_edit_success()
    {
        $category = Category::factory()->create([
            'name' => 'Old Category Name',
            'slug' => 'old-category-slug'
        ]);

        $response = $this->actingAs($this->admin)->get(route('categories.edit', $category));

        $response->assertStatus(200)
            ->assertSee('Edit Category Page')
            ->assertSee('Old Category Name')
            ->assertViewHas('category', $category);
    }

    public function test_edit_failed_not_found()
    {
        $response = $this->actingAs($this->admin)->get(route('categories.edit', 'non-existent-slug'));

        $response->assertStatus(404);
    }


    public function test_update_success_without_changing_image()
    {
        // set up data image
        $initialPath = 'category-images/existing-image.jpg';
        $existingImage = UploadedFile::fake()->image('existing-image.jpg');
        $existingImage->storeAs('category-images', 'existing-image.jpg', 'public');
        $category = Category::factory()->create([
            'image' => $initialPath
        ]);

        // set up update data
        $response = $this->actingAs($this->admin)->put(route('categories.update', $category), [
            'name' => 'Category Test Update',
            'slug' => 'category-test-update',
            'image' =>  null
        ]);

        // assert
        $response->assertStatus(302)
            ->assertRedirectToRoute('categories.index')
            ->assertSessionHas('success', 'Category updated successfully!');

        $this->assertDatabaseHas('categories', [
            'name' => 'Category Test Update'
        ]);

        $category->refresh();
        $this->assertTrue(Storage::disk('public')->exists($initialPath));
    }

    public function test_update_success_with_new_image()
    {
        // set up old data
        $oldPath = 'category-images/old-image.jpg';
        $oldImage = UploadedFile::fake()->image('old-image.jpg');
        $oldImage->storeAs('category-images', 'old-image.jpg', 'public');
        $category = Category::factory()->create([
            'image' => $oldPath
        ]);


        // set up update data
        $newImage = UploadedFile::fake()->image('new-image.jpg');

        $response = $this->actingAs($this->admin)->put(route('categories.update', $category), [
            'name' => 'Category Test Update',
            'slug' => 'category-test-update',
            'image' =>  $newImage
        ]);

        // assert
        $response->assertStatus(302)
            ->assertRedirectToRoute('categories.index')
            ->assertSessionHas('success', 'Category updated successfully!');

        $this->assertDatabaseHas('categories', [
            'name' => 'Category Test Update'
        ]);

        $category->refresh();
        $this->assertTrue(Storage::disk('public')->exists($category->image));
        $this->assertFalse(Storage::disk('public')->exists($oldPath), "File lama seharusnya dihapus saat file baru diupload");
    }

    public function test_update_failed_empty_data()
    {
        $category = Category::factory()->create();

        $response = $this->actingAs($this->admin)
            ->from(route('categories.edit', $category))
            ->put(route('categories.update', $category), [
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
        // set up existing data
        $existingImage = UploadedFile::fake()->image('category.jpg');
        $path = $existingImage->store('category-images', 'public');
        $category = Category::factory()->create(['image' => $path]);

        // set up delete data
        $response = $this->actingAs($this->admin)
            ->from(route('categories.index'))
            ->delete(route('categories.destroy', $category));

        // assert
        $response->assertStatus(302)
            ->assertRedirectBack()
            ->assertSessionHas('success', 'Category deleted successfully!');

        $this->assertDatabaseMissing('categories', ['id' => $category->id]);
        $this->assertFalse(Storage::disk('public')->exists($path));
    }

    public function test_destroy_failed_data_not_found()
    {
        $response = $this->actingAs($this->admin)->delete(route('categories.destroy', 'not-existing'));

        $response->assertStatus(404);
    }
}
