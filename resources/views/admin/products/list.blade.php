@extends('admin.layouts.app')

@section('title', 'All Products')

@section('content')

<div class="page-content">
    <div class="container-xxl">

        <div class="row">
            <div class="col-xl-12">
                <div class="card">

                    <div class="d-flex card-header justify-content-between align-items-center">
                        <h4 class="card-title">All Products List</h4>
                        <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm">+ Add New Product</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle table-hover table-centered mb-0">
                                <thead class="bg-light-subtle">
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Category Type</th>
                                        <th>Title (UZ)</th>
                                        <th>Type</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($products as $product)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>

                                            {{-- Birinchi rasm --}}
                                            <td>
                                               @php
                                                    $images = is_string($product->images) ? json_decode($product->images, true) : ($product->images ?? []);
                                                @endphp
                                                @if (!empty($images) && is_array($images))
                                                    <img src="{{ asset('storage/' . $images[0]) }}" class="rounded avatar-sm" style="object-fit: cover; width: 50px; height: 50px;" alt="Product Image">
                                                @else
                                                    <span class="text-muted">No Image</span>
                                                @endif

                                            </td>

                                            {{-- Kategoriya turi --}}
                                            <td>{{ $product->categoryType->title_uz ?? '—' }}</td>

                                            {{-- Title --}}
                                            <td>{{ $product->title_uz }}</td>

                                            {{-- Pullik yoki tekin --}}
                                            <td>
                                                @if ($product->type == 1)
                                                    <span class="badge bg-success">Tekin</span>
                                                @else
                                                    <span class="badge bg-warning">Pullik</span>
                                                @endif
                                            </td>

                                            {{-- Harakatlar --}}
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-soft-primary">Edit</a>
                                                    <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-soft-danger" onclick="return confirm('Delete?')">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">No products found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                                    <div class="card-footer border-top">
                                        <nav aria-label="Page navigation example">
                                             <ul class="pagination justify-content-end mb-0">
                                                   {{ $products->links() }}
                                             </ul>
                                        </nav>
                                   </div>

                </div>
            </div>
        </div>

    </div>
</div>

@endsection
