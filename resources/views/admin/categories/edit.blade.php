@extends('admin.layouts.app')

@section('title', 'Kategoriya tahrirlash')

@section('content')
<div>
    <div class="page-content">
        <div class="container-xxl">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Kategoriya tahrirlash</h4>
                        </div>
                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label text-dark">Title (UZ)</label>
                                            <input type="text" name="title_uz" class="form-control" placeholder="Enter title uz" value="{{ old('title_uz', $category->title_uz) }}" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label text-dark">Title (EN)</label>
                                            <input type="text" name="title_en" class="form-control" placeholder="Enter title en" value="{{ old('title_en', $category->title_en) }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label text-dark">Title (RU)</label>
                                            <input type="text" name="title_ru" class="form-control" placeholder="Enter title ru" value="{{ old('title_ru', $category->title_ru) }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label text-dark">Icon</label>
                                            <input type="text" name="icon" class="form-control" placeholder="Enter icon name" value="{{ old('icon', $category->icon) }}">
                                        </div>
                                    </div>
                                    

                                 
                                </div>

                                <div class="card-footer border-top text-end">
                                    <button type="submit" class="btn btn-primary">Yangilash</button>
                                    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Orqaga</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
