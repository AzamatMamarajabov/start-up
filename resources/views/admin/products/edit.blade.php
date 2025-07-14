@extends('admin.layouts.app')

@section('title', 'Edit Product')

@section('content')
<div class="page-content">
    <div class="container-xxl">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Product</h4>
                    </div>

                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Title (UZ)</label>
                                        <input type="text" name="title_uz" class="form-control" value="{{ old('title_uz', $product->title_uz) }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Title (EN)</label>
                                        <input type="text" name="title_en" class="form-control" value="{{ old('title_en', $product->title_en) }}">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Title (RU)</label>
                                        <input type="text" name="title_ru" class="form-control" value="{{ old('title_ru', $product->title_ru) }}">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Category Type</label>
                                        <select name="category_type_id" class="form-control" required>
                                            <option value="">-- Tanlang --</option>
                                            @foreach($categoryTypes as $type)
                                                <option value="{{ $type->id }}" {{ $product->category_type_id == $type->id ? 'selected' : '' }}>
                                                    {{ $type->title_uz }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Fayl yuklash (PDF, DOC, ZIP...)</label>
                                        <input type="file" name="file" class="form-control">
                                        @if($product->file)
                                            <p class="mt-2">
                                                <a href="{{ asset('storage/' . $product->file) }}" target="_blank">Yuklangan faylni ko‘rish</a>
                                            </p>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Rasmlar yuklash (1 yoki bir nechta)</label>
                                        <input type="file" name="images[]" class="form-control" multiple>
                                       @if ($product->images && is_array($product->images))
                                            <div class="mt-2 d-flex flex-wrap gap-2">
                                                @foreach ($product->images as $img)
                                                    <img src="{{ asset('storage/' . $img) }}" height="80" alt="Product Image">
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Tavsif (UZ)</label>
                                        <textarea name="text_uz" class="form-control" rows="3">{{ old('text_uz', $product->text_uz) }}</textarea>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tavsif (EN)</label>
                                        <textarea name="text_en" class="form-control" rows="3">{{ old('text_en', $product->text_en) }}</textarea>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tavsif (RU)</label>
                                        <textarea name="text_ru" class="form-control" rows="3">{{ old('text_ru', $product->text_ru) }}</textarea>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Product turi</label>
                                        <select name="type" class="form-control">
                                            <option value="1" {{ $product->type == 1 ? 'selected' : '' }}>Tekin</option>
                                            <option value="0" {{ $product->type == 0 ? 'selected' : '' }}>Pullik</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer text-end border-top">
                                <button type="submit" class="btn btn-success">Yangilash</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
