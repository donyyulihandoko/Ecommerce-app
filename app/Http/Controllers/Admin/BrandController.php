<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use App\Services\BrandService;
use App\Services\UserService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\RedirectResponse;


class BrandController extends Controller
{
    private UserService $userService;
    private BrandService $brandService;

    public function __construct(UserService $userService, BrandService $brandService)
    {
        $this->userService = $userService;
        $this->brandService = $brandService;
    }

    public function index(): Response
    {
        return response()->view('admin.brand.index', [
            'title' => 'Brands Page',
            'brands' => $this->brandService->getBrands(),
        ]);
    }


    public function create()
    {
        return response()->view('admin.brand.create', [
            'title' => 'Create Brand Page'
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


    public function store(BrandRequest $request): RedirectResponse
    {
        try {
            $this->brandService->addBrand($request->validated());

            $this->logActivity('Brand Created', [
                'payload' => $request->except('image')
            ]);

            return response()->redirectToRoute('brands.index')->with('success', 'Brand created successfully!');
        } catch (Exception $e) {

            report($e);
            return redirect()->back()
                ->withInput() // Menjaga teks yang sudah diketik user tidak hilang
                ->with('error', 'Failed to create brand. Please try again.');
        }
    }


    public function edit(Brand $brand)
    {
        return response()->view('admin.brand.edit', [
            'title' => 'Edit Brand Page',
            'brand' => $brand
        ]);
    }


    public function update(BrandRequest $request, Brand $brand): RedirectResponse
    {
        try {
            $this->brandService->updateBrand($brand, $request->validated());
            $this->logActivity('Brand Updated', [
                'brand_id' => $brand->id,
                'changes' => $request->except(['image', '_token', '_method'])
            ]);

            return response()->redirectToRoute('brands.index')->with('success', 'Brand updated successfully!');
        } catch (Exception $e) {
            report($e);
            return redirect()->back()
                ->withInput() // Menjaga teks yang sudah diketik user tidak hilang
                ->with('error', 'Failed to update brand. Please try again.');
        }
    }


    public function destroy(Brand $brand): RedirectResponse
    {
        try {
            $this->brandService->removeBrand($brand);

            $this->logActivity('Brand Deleted', [
                'brand_id' => $brand->id,
                'brand_name' => $brand->name
            ]);

            return redirect()->back()->with('success', 'Brand deleted successfully!');
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->with('error', 'Brand deleted failed!');
        }
    }
}
