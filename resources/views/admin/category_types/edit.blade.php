@extends('admin.layouts.app')

@section('title', 'Update Category Type')

@section('content')
<div class="page-content">
    <div class="container-xxl">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update Category Type</h4>
                    </div>

                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('category-types.update', $categorytype->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Title (UZ)</label>
                                        <input type="text" name="title_uz" class="form-control" value="{{ old('title_uz', $categorytype->title_uz) }}" required>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Title (EN)</label>
                                        <input type="text" name="title_en" class="form-control" value="{{ old('title_en', $categorytype->title_en) }}">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Title (RU)</label>
                                        <input type="text" name="title_ru" class="form-control" value="{{ old('title_ru', $categorytype->title_ru) }}">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Kategoriya tanlang</label>
                                        <select name="category_id" class="form-control" required>
                                            <option value="">-- Tanlang --</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ $categorytype->category_id == $category->id ? 'selected' : '' }}>
                                                    {{ $category->title_uz }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Rasm yuklash</label>
                                        <input type="file" name="image" class="form-control">
                                        <small class="text-muted">PNG, JPG, GIF. Max: 2MB</small>

                                        @if($categorytype->image)
                                            <div class="mt-2">
                                                <img src="{{ asset('storage/' . $categorytype->image) }}" width="100" height="100" style="object-fit: cover;" class="rounded">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer text-end border-top">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
