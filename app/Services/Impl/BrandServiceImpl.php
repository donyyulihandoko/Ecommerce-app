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
        try {
            $data['image'] = $this->handleImage($data['image'] ?? null);
            $formData = $this->mapFormBrandData($data);
            return Brand::create($formData);
        } catch (Exception $e) {
            report($e);
            throw $e;
        }
    }

    public function updateBrand(Brand $brand, array $data): bool
    {
        try {
            $data['image'] = $this->handleImage($data['image'] ?? null, $brand->image);
            $formData = $this->mapFormBrandData($data);
            return $brand->update($formData);
        } catch (Exception $e) {
            report($e);
            throw $e;
        }
    }

    public function removeBrand(Brand $brand): bool
    {
        // if ($brand->products()->exists()) {
        //     throw new Exception("Brand cannot be deleted because it has associated products.");
        // }

        return DB::transaction(function () use ($brand) {
            try {

                $imagePath = $brand->image;
                $deleted = $brand->delete();

                if ($deleted && $imagePath) {
                    Storage::disk('public')->delete($imagePath);
                }

                return (bool) $deleted;
            } catch (Exception $e) {
                report($e);
                throw $e;
            }
        });
    }
}
