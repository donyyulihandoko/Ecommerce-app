@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="container mt-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h2 class="h4"><i class="bi bi-grid me-2"></i>Category List</h2>
                            <a href="{{ route('categories.create') }}" class="btn btn-primary">
                                <i class="bi bi-plus-lg"></i> Add Category
                            </a>
                        </div>

                        <div class="card shadow-sm">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover align-middle mb-0">
                                        <thead class="table-light">
                                            <tr class="text-center">
                                                <th style="width: 5%;">No</th>
                                                <th style="width: 15%;">Image</th>
                                                <th class="text-start">Category Name</th>
                                                <th class="text-start" style="width: 15%">Slug</th>
                                                <th class="text-start"style="width: 15%">Products</th>
                                                <th style="width: 25%;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($categories as $category)
                                                <tr class="text-center" id="chart">
                                                    <td>{{ $loop->iteration }}</td>

                                                    <td class="text-center align-middle">
                                                        <img src="{{ Storage::url($category->image) }}"
                                                            style="width: 100px;" alt="{{ $category->name }}">
                                                    </td>

                                                    <td class="text-start">
                                                        <strong>{{ $category->name }}</strong>
                                                    </td>

                                                    <td class="text-start"><strong>{{ $category->slug }}</strong></td>
                                                    <td class="text-start"><strong> {{ $category->slug }} </strong>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group" role="group">
                                                            <a href="{{ route('categories.edit', $category->slug) }}"
                                                                class="btn btn-sm btn-outline-warning"><i
                                                                    class="bi bi-pencil"></i></a>

                                                            <form action="{{ route('categories.destroy', $category) }}"
                                                                method="POST" id="delete-form-{{ $category }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="button"
                                                                    class="btn btn-outline-danger delete-btn"
                                                                    data-id="{{ $category }}">
                                                                    <i class="bi bi-trash"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center py-5">
                                                        <div class="empty-state">
                                                            <i class="bi bi-folder-x display-1 text-muted"></i>
                                                            <h5 class="mt-3">Belum Ada Data</h5>
                                                            <p class="text-muted">Silahkan tambahkan data brand pertama
                                                                Anda.</p>
                                                            <a href="{{ route('categories.create') }}"
                                                                class="btn btn-outline-primary btn-sm mt-2">
                                                                <i class="bi bi-plus-circle"></i> Buat Sekarang
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforelse

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
@endsection
