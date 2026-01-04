<?php

namespace Tests\Feature\Admin;

use App\Models\Brand;
use App\Services\BrandService;
use Exception;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class BrandServiceTest extends TestCase
{
    use RefreshDatabase;
    private BrandService $brandService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->brandService = $this->app->make(BrandService::class);
        Storage::fake('public');
    }

    public function test_service_container_not_null()
    {
        self::assertNotNull($this->brandService);
    }

    public function test_get_brands_success()
    {
        Brand::factory(10)->create();
        $response = $this->brandService->getBrands();

        self::assertCount(10, $response);
        self::assertNotNull($response);
    }

    public function test_add_brand_success()
    {
        $file = UploadedFile::fake()->image('brand-logo.jpg');

        $data = [
            'name' => 'Brand Test',
            'slug' => 'brand-test',
            'image' => $file
        ];

        $brand = $this->brandService->addBrand($data);

        $this->assertEquals($data['name'], $brand->name);
        $this->assertEquals($data['slug'], $brand->slug);


        $this->assertDatabaseHas('brands', [
            'name' => 'Brand Test',
            'slug' => 'brand-test',
        ]);

        $this->assertCount(1, $this->brandService->getBrands());
        $this->assertTrue(Storage::disk('public')->exists($brand->image));
    }

    public function test_add_brand_throw_validation_error()
    {
        $this->expectException(Exception::class);
        $this->brandService->addBrand([
            'slug' => 'without-name'
        ]);
    }

    public function test_update_brand_without_changing_image_success()
    {
        $initialPath = 'brand-images/existing-logo.jpg';
        $oldImage = UploadedFile::fake()->image('existing-logo.jpg');
        $oldImage->storeAs('brand-images', 'existing-logo.jpg', 'public');


        $brand = Brand::factory()->create([
            'image' => $initialPath
        ]);

        $data = [
            'name' => 'Brand Test Update',
            'slug' => 'brand-test-update',
            'image' => null
        ];

        $this->brandService->updateBrand($brand, $data);

        $brand->refresh();
        $this->assertEquals($data['name'], $brand->name);
        $this->assertEquals($data['slug'], $brand->slug);
        $this->assertEquals($initialPath, $brand->image);

        $this->assertTrue(Storage::disk('public')->exists($initialPath));

        $this->assertDatabaseHas('brands', [
            'name' => 'Brand Test Update',
            'slug' => 'brand-test-update',
        ]);
    }

    public function test_update_brand_with_new_image_success()
    {
        // Simpan path file lama
        $oldPath = 'brand-images/old-image.jpg';
        $oldImage = UploadedFile::fake()->image('old-image.jpg');

        // Pastikan file lama "ada" di storage fake
        $oldImage->storeAs('brand-images', 'old-image.jpg', 'public');

        $brand = Brand::factory()->create([
            'image' => $oldPath
        ]);

        $newImage = UploadedFile::fake()->image('new-image.jpg');

        $data = [
            'name' => 'Brand Test Update',
            'slug' => 'brand-test-update',
            'image' => $newImage
        ];

        $this->brandService->updateBrand($brand, $data);

        $this->assertTrue(Storage::disk('public')->exists($brand->refresh()->image));
        $this->assertFalse(Storage::disk('public')->exists($oldPath), "File lama seharusnya sudah dihapus dari storage");

        $this->assertDatabaseHas('brands', [
            'name' => 'Brand Test Update',
            'slug' => 'brand-test-update',
        ]);
    }

    public function test_update_brand_throw_validation_error()
    {
        $brand = Brand::factory()->create();

        $this->expectException(Exception::class);
        $this->brandService->updateBrand($brand, [
            'slug' => 'without-name'
        ]);
    }

    public function test_remove_brand_success()
    {

        $file = UploadedFile::fake()->image('brand.jpg');
        $path = $file->store('brand-images', 'public');
        $brand = Brand::factory()->create(['image' => $path]);

        $result =  $this->brandService->removeBrand($brand);

        $this->assertTrue($result);
        $this->assertDatabaseMissing('brands', [
            'id' => $brand->id
        ]);
        $this->assertCount(0, Brand::all());
        $this->assertFalse(Storage::disk('public')->exists($path), "File seharusnya ikut terhapus saat brand didelete");
    }
}
