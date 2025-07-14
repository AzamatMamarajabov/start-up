@extends('admin.layouts.app')

@section('title', 'Create Product')

@section('content')
<div class="page-content">
    <div class="container-xxl">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Yangi Mahsulot Qo'shish</h4>
                    </div>

                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-lg-4">
                                    <label class="form-label text-dark">Kategoriya turi</label>
                                    <select name="category_type_id" class="form-control" required>
                                        <option value="">-- Tanlang --</option>
                                        @foreach($categoryTypes as $type)
                                            <option value="{{ $type->id }}">{{ $type->title_uz }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-4">
                                    <label class="form-label text-dark">Title (UZ)</label>
                                    <input type="text" name="title_uz" class="form-control" required>
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-label text-dark">Title (EN)</label>
                                    <input type="text" name="title_en" class="form-control">
                                </div>

                                <div class="col-lg-4">
                                    <label class="form-label text-dark">Title (RU)</label>
                                    <input type="text" name="title_ru" class="form-control">
                                </div>

                                <div class="col-lg-4">
                                    <label class="form-label text-dark">Tavsif (UZ)</label>
                                    <textarea name="text_uz" class="form-control"></textarea>
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-label text-dark">Tavsif (EN)</label>
                                    <textarea name="text_en" class="form-control"></textarea>
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-label text-dark">Tavsif (RU)</label>
                                    <textarea name="text_ru" class="form-control"></textarea>
                                </div>

                                <div class="col-lg-4">
                                    <label class="form-label text-dark">Mahsulot turi</label>
                                    <select name="product_type" class="form-control">
                                        <option value="1">Tekin</option>
                                        <option value="0">Pullik</option>
                                    </select>
                                </div>

                                <div class="col-lg-4">
                                    <label class="form-label text-dark">Type</label>
                                    <select name="type" class="form-control">
                                        <option value="0">Rasm</option>
                                        <option value="1">Video</option>
                                    </select>
                                </div>

                                <div class="col-lg-4">
                                    <label class="form-label text-dark">Fayl yuklash</label>
                                    <input type="file" name="file" class="form-control">
                                </div>

                                <div class="col-lg-4">
                                    <label class="form-label text-dark">Rasmlar yuklash</label>
                                    <input type="file" name="images[]" class="form-control" multiple>
                                    <small class="text-muted">JPG, PNG, GIF formatlar</small>
                                </div>
                            </div>

                            <div class="card-footer text-end border-top mt-3">
                                <button type="submit" class="btn btn-success">Saqlash</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
