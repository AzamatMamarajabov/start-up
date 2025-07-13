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
                                        <h4 class="mb-0">All Customers</h4>
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
                                        <h4 class="card-title">All Customers List</h4>
                                   </div>
                                   <div class="dropdown">
                                        <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded" data-bs-toggle="dropdown" aria-expanded="false">
                                             This Month
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                             <!-- item-->
                                             <a href="#!" class="dropdown-item">Download</a>
                                             <!-- item-->
                                             <a href="#!" class="dropdown-item">Export</a>
                                             <!-- item-->
                                             <a href="#!" class="dropdown-item">Import</a>
                                        </div>
                                   </div>
                              </div>
                              <div>
                                   <div class="table-responsive">
                                        <table class="table align-middle mb-0 table-hover table-centered">
                                             <thead class="bg-light-subtle">
                                                    <tr>
                                                        <th><input type="checkbox" class="form-check-input"></th>
                                                        <th>Customer Name</th>
                                                        <th>Email</th>
                                                        <th>Status</th>
                                                        <th>User Name</th>
                                                        <th>Phone Number</th>
                                                        <th>Due Date</th>
                                                        <th>Gender</th>
                                                        <th>Action</th>
                                                    </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($customers as $customer)
                                                    <tr>
                                                       <td>
                                                            <div class="form-check">
                                                                 <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                 <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                            </div>
                                                       </td>
                                                       <td><img src="{{ asset($customer->profile_image ?? 'assets/images/icons/boy-avater.png') }}" class="avatar-sm rounded-circle me-2" alt="..."> {{$customer->firstname}} {{$customer->lastname}}</td>
                                                       <td><a href="javascript: void(0);" class="text-body">{{$customer->email}}</a> </td>
                                                       <td> <span class="badge bg-success-subtle text-success py-1 px-2">{{$customer->role}}</span> </td>
                                                       <td>{{$customer->username}} </td>
                                                       <td> {{$customer->phone}} </td>
                                                       <td> {{$customer->created_at}}</td>
                                                       <td> {{$customer->gender}} </td>
                                                       <td>
                                                        <div class="d-flex gap-2">
                                                            <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-soft-primary btn-sm">
                                                                <iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon>
                                                            </a>
                                                            <form method="POST" action="{{ route('customer.destroy', $customer->id) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-soft-danger btn-sm" onclick="return confirm('Are you sure?')">
                                                                    <iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>

                                                  </tr>
                                                @empty
                                                    <tr>
                                                       <td>
                                                           error
                                                       </td>
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
