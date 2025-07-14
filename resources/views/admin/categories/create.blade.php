@extends('admin.layouts.app')

@section('title', 'Create Category')

@section('content')
<div>
    <div class="page-content">
        <div class="container-xxl">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add New Category</h4>
                        </div>
                        <div class="card-body">
                                @if(session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif
                            <form action="{{ route('categories.store') }}" method="POST">
                                @csrf
                                 <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Title (UZ)</label>
                                        <input type="text" name="title_uz" class="form-control" placeholder="Enter title uz" required>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Title (EN)</label>
                                        <input type="text" name="title_en" class="form-control" placeholder="Enter title en">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Title (RU)</label>
                                        <input type="text" name="title_ru" class="form-control" placeholder="Enter title ru">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Icon</label>
                                        <input type="text" name="icon" class="form-control" placeholder="Enter Icon name">
                                    </div>
                                </div>
                      
                            </div>
                                <div class="card-footer border-top text-end">
                                    <button type="submit" class="btn btn-primary">Saqlash</button>
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
