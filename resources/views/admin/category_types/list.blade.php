@extends('admin.layouts.app')

@section('title', 'ADMIN PANEL')

@section('content')


 <div class="page-content">

            <!-- Start Container Fluid -->
            <div class="container-xxl">

                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-2 mb-3">
                                    <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                        <iconify-icon icon="solar:users-group-two-rounded-bold-duotone" class="fs-32 text-primary avatar-title"></iconify-icon>
                                    </div>
                                    <div>
                                        <h4 class="mb-0">All Categories</h4>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="text-muted fw-medium fs-22 mb-0">+22.63k</p>
                                    <div>
                                        <span class="badge text-success bg-success-subtle fs-12"><i class="bx bx-up-arrow-alt"></i>34.4%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-2 mb-3">
                                    <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                        <iconify-icon icon="solar:bill-list-bold-duotone" class="fs-32 text-primary avatar-title"></iconify-icon>
                                    </div>
                                    <div>
                                        <h4 class="mb-0">Invoice & Payment</h4>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="text-muted fw-medium fs-22 mb-0">$38,908.00</p>
                                    <div>
                                        <span class="badge text-success bg-success-subtle fs-12"><i class="bx bx-up-arrow-alt"></i>45.9%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-xl-12">
                         <div class="card">
                              <div class="d-flex card-header justify-content-between align-items-center">
                                   <div>
                                        <h4 class="card-title">All Categories List</h4>
                                   </div>
                                 
                              </div>
                              <div>
                                   <div class="table-responsive">
                                        <table class="table align-middle mb-0 table-hover table-centered">
                                             <thead class="bg-light-subtle">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Image</th>
                                                        <th>Category</th>
                                                        <th>Type Title (UZ)</th>
                                                        <th>Type Title (EN)</th>
                                                        <th>Type Title (RU)</th>
                                                        <th>Actions</th>
                                                    </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($types as $type)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>

                                                        {{-- Rasmni chiqarish --}}
                                                        <td>
                                                            <img src="{{ asset('storage/' . $type->image) }}" 
                                                                alt="Category Type Image" 
                                                                class="rounded avatar-sm" 
                                                                style="object-fit: cover; width: 50px; height: 50px;">
                                                        </td>

                                                        {{-- Category nomi --}}
                                                        <td>{{ $type->category->title_uz ?? '—' }}</td>

                                                        {{-- Title lar --}}
                                                        <td>{{ $type->title_uz }}</td>
                                                        <td>{{ $type->title_en }}</td>
                                                        <td>{{ $type->title_ru }}</td>

                                                        {{-- Harakatlar --}}
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                <a href="{{ route('category-types.edit', $type->id) }}" class="btn btn-sm btn-soft-primary">Edit</a>
                                                                <form method="POST" action="{{ route('category-types.destroy', $type->id) }}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-sm btn-soft-danger" onclick="return confirm('Delete?')">Delete</button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="7">No Category Types found.</td>
                                                        </tr>
                                                @endforelse

                                            </tbody>

                                        </table>
                                   </div>
                                   <!-- end table-responsive -->
                              </div>
                              <div class="card-footer border-top">
                                   <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-end mb-0">
                                             <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                                             <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                             <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                             <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                             <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                                        </ul>
                                   </nav>
                              </div>
                         </div>
                    </div>

               </div>
            </div>
            <!-- End Container Fluid -->

            <!-- ========== Footer Start ========== -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <script>document.write(new Date().getFullYear())</script> &copy; Larkon. Crafted by <iconify-icon icon="iconamoon:heart-duotone" class="fs-18 align-middle text-danger"></iconify-icon> <a
                                href="https://1.envato.market/techzaa" class="fw-bold footer-text" target="_blank">Techzaa</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- ========== Footer End ========== -->

        </div>



@endsection
