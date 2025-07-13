@extends('admin.layouts.app')

@section('title', 'Edit Customer')

@section('content')
<div>
    <div class="page-content">
        <div class="container-xxl">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Customer</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('customer.update', $customer->id) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label text-dark">Firstname</label>
                                            <input type="text" name="firstname" class="form-control" value="{{ $customer->firstname }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label text-dark">Lastname</label>
                                            <input type="text" name="lastname" class="form-control" value="{{ $customer->lastname }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label text-dark">Username</label>
                                            <input type="text" name="username" class="form-control" value="{{ $customer->username }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label text-dark">Email</label>
                                            <input type="email" name="email" class="form-control" value="{{ $customer->email }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label text-dark">Phone</label>
                                            <input type="text" name="phone" class="form-control" value="{{ $customer->phone }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label text-dark">Gender</label>
                                            <select name="gender" class="form-control">
                                                <option value="male" {{ $customer->gender == 'male' ? 'selected' : '' }}>Male</option>
                                                <option value="female" {{ $customer->gender == 'female' ? 'selected' : '' }}>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label text-dark">Role</label>
                                            <select name="role" class="form-control">
                                                <option value="user" {{ $customer->role == 'user' ? 'selected' : '' }}>User</option>
                                                <option value="admin" {{ $customer->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer border-top text-end">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
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
