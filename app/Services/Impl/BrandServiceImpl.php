<?php

namespace App\Services\Impl;

use App\Models\Brand;
use App\Services\BrandService;
use Exception;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class BrandServiceImpl implements BrandService
{
    public function getBrands(): Collection
    {
        return Brand::latest()->get();
    }

    private function mapFormBrandData(array $data): array
    {
        return [
            'name' => $data['name'],
            'slug' => $data['slug'],
            'image' => $data['image']
        ];
    }

    private function handleImage(?UploadedFile $file, ?string $oldPath = null): ?string
    {
        // Jika tidak ada file baru yang diupload
        if (!$file) {
            return $oldPath;
        }

        // Jika ada file lama (proses update), hapus dari storage
        if ($oldPath) {
            Storage::disk('public')->delete($oldPath);
        }

        // Simpan file baru dan kembalikan path-nya
        return $file->store('brand-images', 'public');
    }

    public function addBrand(array $data): Brand
    {
        return DB::transaction(function () use ($data) {

            $data['image'] = $this->handleImage($data['image'] ?? null);
            $formData = $this->mapFormBrandData($data);
            return Brand::create($formData);
        });
    }

    public function updateBrand(Brand $brand, array $data): bool
    {
        return DB::transaction(function () use ($brand, $data) {
            $data['image'] = $this->handleImage($data['image'] ?? null, $brand->image);
            $formData = $this->mapFormBrandData($data);
            return $brand->update($formData);
        });
    }

    public function removeBrand(Brand $brand): bool
    {
        return DB::transaction(function () use ($brand) {
            $imagePath = $brand->image;
            $deleted = $brand->delete();

            if ($deleted && $imagePath) {
                Storage::disk('public')->delete($imagePath);
            }
            return (bool) $deleted;
        });
    }
}
