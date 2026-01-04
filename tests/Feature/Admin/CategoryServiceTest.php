<?php

namespace Tests\Feature\Admin;

use App\Models\Category;
use Exception;
use App\Services\CategoryService;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class CategoryServiceTest extends TestCase
{
    use RefreshDatabase;

    private User $admin;
    private CategoryService $categoryService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->categoryService = $this->app->make(CategoryService::class);
        $this->admin = User::factory()->admin()->create();
        Storage::fake('public');
    }

    public function test_service_container_not_null()
    {
        $this->assertNotNull($this->categoryService);
    }

    public function test_get_categories_success()
    {
        Category::factory()->create();
        $response = $this->categoryService->getCategories();

        self::assertCount(1, $response);
        self::assertNotNull($response);
    }

    public function test_add_category_success()
    {
        $file = UploadedFile::fake()->image('category-image.jpeg');
        $data = [
            'name' => 'Category Test',
            'slug' => 'category-test',
            'image' => $file
        ];
        $result = $this->categoryService->addCategory($data);

        $this->assertEquals($data['name'], $result->name);
        $this->assertEquals($data['slug'], $result->slug);

        $this->assertDatabaseHas('categories', [
            'name' => 'Category Test',
            'slug' => 'category-test',
        ]);

        $this->assertTrue(Storage::disk('public')->exists($result->image));
    }

    public function test_add_category_throw_validation_error()
    {
        $this->expectException(Exception::class);
        $this->categoryService->addCategory([
            'slug' => 'without-name'
        ]);
    }

    public function test_update_category_success_without_changing_image()
    {
        $initialPath = 'category-images/existing-logo.jpg';
        $file = UploadedFile::fake()->image('existing-logo.jpg');
        $file->storeAs('category-images', 'existing-logo.jpg', 'public');

        $category = Category::factory()->create([
            'image' => $initialPath
        ]);

        $data = [
            'name' => 'Category Update',
            'slug' => 'category-update',
            'image' => null
        ];

        $this->categoryService->updateCategory($category, $data);

        $category->refresh();
        $this->assertEquals($data['name'], $category->name);
        $this->assertEquals($data['slug'], $category->slug);
        $this->assertEquals($initialPath, $category->image);

        $this->assertTrue(Storage::disk('public')->exists($initialPath));

        $this->assertDatabaseHas('categories', [
            'name' => 'Category Update',
            'slug' => 'category-update'
        ]);
    }

    public function test_update_category_success_with_new_image()
    {
        $oldPath = 'brand-images/existing-logo.jpg';
        $oldImage = UploadedFile::fake()->image('existing-logo.jpg');
        $oldImage->storeAs('category-images', 'existing-logo.jpg', 'public');

        $category = Category::factory()->create([
            'image' => $oldPath
        ]);

        $newImage = UploadedFile::fake()->image('new-image.jpg');

        $data = [
            'name' => 'Category Update',
            'slug' => 'category-update',
            'image' => $newImage

        ];

        $this->categoryService->updateCategory($category, $data);

        $category->refresh();
        $this->assertTrue(Storage::disk('public')->exists($category->refresh()->image));
        $this->assertFalse(Storage::disk('public')->exists($oldPath), "File lama seharusnya sudah dihapus dari storage");


        $this->assertDatabaseHas('categories', [
            'name' => 'Category Update',
            'slug' => 'category-update'
        ]);
    }

    public function test_update_category_throw_validation_error()
    {
        $category = Category::factory()->create();

        $this->expectException(Exception::class);
        $this->categoryService->updatecategory($category, [
            'slug' => 'without-name'
        ]);
    }

    public function test_remove_category_success()
    {

        $file = UploadedFile::fake()->image('category.jpg');
        $path = $file->store('category-images', 'public');
        $category = Category::factory()->create(['image' => $path]);

        $result =  $this->categoryService->removeCategory($category);

        $this->assertTrue($result);
        $this->assertDatabaseMissing('brands', [
            'id' => $category->id
        ]);
        $this->assertCount(0, Category::all());
        $this->assertFalse(Storage::disk('public')->exists($path), "File seharusnya ikut terhapus saat brand didelete");
    }
}
