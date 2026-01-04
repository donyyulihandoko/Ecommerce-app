<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Services\CategoryService;
use App\Services\UserService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    private UserService $userService;
    private CategoryService $categoryService;

    public function __construct(UserService $userService, CategoryService $categoryService)
    {
        $this->userService = $userService;
        $this->categoryService = $categoryService;
    }

    public function index(): Response
    {
        return response()->view('admin.category.index', [
            'title' => 'Categories Page',
            'categories' => $this->categoryService->getCategories()
        ]);
    }


    public function create(): Response
    {
        return response()->view('admin.category.create', [
            'title' => 'Create Category Page'
        ]);
    }

    private function logActivity(string $event, array $extra = [])
    {
        Log::info($event, array_merge([
            'admin' => $this->userService->getUserLogin()->name ?? 'Unknown',
            'ip' => request()->ip(),
            'url' => request()->fullUrl(),
        ], $extra));
    }

    public function store(CategoryRequest $request): RedirectResponse
    {
        try {
            $this->categoryService->addCategory($request->validated());

            $this->logActivity('Category Created', [
                'payload' => $request->except(['image', '_token'])
            ]);

            return response()->redirectToRoute('categories.index')
                ->with('success', 'Category created successfully!');
        } catch (Exception $e) {
            report($e);
            return redirect()->back()
                ->with('error', 'Category created failed!');
        }
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category): Response
    {
        return response()->view('admin.category.edit', [
            'title' => 'Edit Category Page',
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category): RedirectResponse
    {
        try {
            $this->categoryService->updateCategory($category, $request->validated());

            $this->logActivity('Brand Updated', [
                'category_id' => $category->id,
                'changes' => $request->except(['image', '_token', '_method'])
            ]);

            return response()->redirectToRoute('categories.index')
                ->with('success', 'Category updated successfully!');
        } catch (Exception $e) {
            report($e);

            return redirect()->back()->withInput()
                ->with('error', 'Category updated failed!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try {
            $this->categoryService->removeCategory($category);

            $this->logActivity('Category Deleted', [
                'brand_id' => $category->id,
                'brand_name' => $category->name
            ]);

            return redirect()->back()->with('success', 'Category deleted successfully!');
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->with('error', 'Category deleted failed!');
        }
    }
}
