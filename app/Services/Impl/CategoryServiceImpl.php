<?php

namespace App\Services\Impl;

use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class CategoryServiceImpl implements CategoryService
{
    public function getCategories(): Collection
    {
        return Category::latest()->get();
    }

    private function mapFormData(array $data): array
    {
        return [
            'name' => $data['name'],
            'slug' => $data['slug'],
            'image' => $data['image']
        ];
    }

    private function handleImage(?UploadedFile $file, ?string $oldPath = null): ?string
    {
        if (!$file) {
            return $oldPath;
        }
        if ($oldPath) {
            Storage::disk('public')->delete($oldPath);
        }
        return $file->store('category-images', 'public');
    }

    public function addCategory(array $data): Category
    {
        return DB::transaction(function () use ($data) {
            $data['image'] = $this->handleImage($data['image'] ?? null);
            $formData = $this->mapFormData($data);
            return Category::create($formData);
        });
    }

    public function updateCategory(Category $category, array $data): bool
    {
        return DB::transaction(function ()  use ($category, $data) {
            $data['image'] = $this->handleImage($data['image'] ?? null, $category->image);
            $formData = $this->mapFormData($data);
            return $category->update($formData);
        });
    }

    public function removeCategory(Category $category): bool
    {
        return DB::transaction(function () use ($category) {
            $imagePath = $category->image;
            $deleted = $category->delete();

            if ($deleted && $imagePath) {
                Storage::disk('public')->delete($imagePath);
            }
            return (bool) $deleted;
        });
    }
}
