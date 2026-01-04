@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h2 class="h4"><i class="bi bi-patch-check me-2"></i>Edit Category</h2>
                                    <a href="{{ route('categories.index') }}" class="btn btn-primary btn-sm">
                                        <i class="bi bi-arrow-left"></i> Back to List
                                    </a>
                                </div>

                                <div class="card shadow-sm border-0 bg-white">
                                    <div class="card-body p-4">
                                        <form action="{{ route('categories.update', $category) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf @method('PUT')

                                            <div class="mb-3">
                                                <label for="name" class="form-label fw-bold">Category Name</label>
                                                <input type="text" class="form-control form-control-lg slug-source"
                                                    id="name" name="name"
                                                    placeholder="Enter the official name of the brand." required
                                                    value="{{ $category->name }}">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="slug" class="form-label fw-bold">Slug</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control slug-target" id="slug"
                                                        name="slug" placeholder="Enter the slug of the brand." required
                                                        value="{{ $category->slug }}" readonly>
                                                    @error('slug')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                <label for="brandLogo" class="form-label fw-bold">Brand Logo / Image</label>
                                                <input class="form-control" type="file" id="brandLogo" name="image"
                                                    accept="image/*" onchange="previewImage(event)"
                                                    value="{{ $category->image }}">
                                                @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <div class="form-text text-danger">Recommended size: 500x500px (Max 2MB).
                                                </div>

                                                <div class="mt-3">
                                                    @if ($category->image)
                                                        <img src="{{ Storage::url($category->image) }}" id="output"
                                                            class="img-thumbnail"
                                                            style="width: 120px; height: 120px; object-fit: cover;">
                                                    @else
                                                        <img id="output" class="img-thumbnail d-none"
                                                            style="width: 120px; height: 120px; object-fit: cover;">
                                                    @endif

                                                </div>
                                            </div>

                                            <hr class="my-4 text-muted">

                                            <div class="d-flex justify-content-end gap-2">
                                                <button type="reset" class="btn btn-light px-4">Reset</button>
                                                <button type="submit" class="btn btn-success px-5">
                                                    <i class="bi bi-cloud-upload me-2"></i>Update Category
                                                </button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
