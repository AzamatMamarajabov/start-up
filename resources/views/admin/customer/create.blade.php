@extends('admin.layouts.app')

@section('title', 'Create Customer')

@section('content')
<div>
    <div class="page-content">
        <div class="container-xxl">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add New Customer</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('customer.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label text-dark">Firstname</label>
                                            <input type="text" name="firstname" class="form-control" placeholder="Enter firstname">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label text-dark">Lastname</label>
                                            <input type="text" name="lastname" class="form-control" placeholder="Enter lastname">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label text-dark">Username</label>
                                            <input type="text" name="username" class="form-control" placeholder="Enter username">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label text-dark">Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label text-dark">Phone</label>
                                            <input type="text" name="phone" class="form-control" placeholder="Enter phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label text-dark">Gender</label>
                                            <select name="gender" class="form-control">
                                                <option value="">Select Gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label text-dark">Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Enter password">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label text-dark">Role</label>
                                            <select name="role" class="form-control">
                                                <option value="user">User</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer border-top text-end">
                                    <button type="submit" class="btn btn-primary">Create Customer</button>
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
