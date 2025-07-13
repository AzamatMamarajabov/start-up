<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
     <!-- Title Meta -->
     <meta charset="utf-8" />
     <title>Admin login</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="A fully responsive premium admin dashboard template" />
     <meta name="author" content="Techzaa" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />

     <link rel="shortcut icon" href="{{ asset('assets/images/logo/logo-dark.png') }}">

     <!-- Vendor css (Require in all Page) -->
     <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />

     <!-- Icons css (Require in all Page) -->
     <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

     <!-- App css (Require in all Page) -->
     <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

     <!-- Theme Config js (Require in all Page) -->
     <script src="{{ asset('assets/js/config.js') }}"></script>

</head>

<body class="h-100">
     <div class="d-flex flex-column h-100 p-3">
          <div class="d-flex flex-column flex-grow-1">
               <div class="row h-100">
                    <div class="col-xxl-7">
                         <div class="row justify-content-center h-100">
                              <div class="col-lg-6 py-lg-5">
                                   <div class="d-flex flex-column h-100 justify-content-center">
                                        <div class="auth-logo mb-4">
                                             <a href="index.html" class="logo-dark">
                                                  <img src="{{ asset('assets/images/logo/logo-dark.png') }}" height="24" alt="logo dark">
                                             </a>

                                             <a href="index.html" class="logo-light">
                                                  <img src="{{ asset('assets/images/logo/logo-white.png') }}" height="24" alt="logo light">
                                             </a>
                                        </div>

                                        <h2 class="fw-bold fs-24">Kirish</h2>

                                        <p class="text-muted mt-1 mb-4">Administrator paneliga kirish uchun elektron pochta manzilingizni yoki foydalanuvchi nomi va parolingizni kiriting.</p>

                                        <div class="mb-5">
                                           
                                        <form action="{{ route('admin.login.submit') }}" method="POST" class="authentication-form">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label" for="example-username">Email or Username</label>
                                                <input type="text" id="example-username" name="username" class="form-control"
                                                    placeholder="Enter your email or username" value="{{ old('username') }}">
                                                @error('username') <small class="text-danger">{{ $message }}</small> @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="example-password">Password</label>
                                                <input type="password" id="example-password" name="password" class="form-control"
                                                    placeholder="Enter your password">
                                                @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                                            </div>
                                            <div class="mb-3 text-center d-grid">
                                                <button class="btn btn-soft-primary" type="submit">Sign In</button>
                                            </div>
                                        </form>

                                            
                                        </div>

                                       
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-xxl-5 d-none d-xxl-flex">
                         <div class="card h-100 mb-0 overflow-hidden">
                              <div class="d-flex flex-column h-100">
                                   <img src="{{ asset('assets/images/small/img-10.jpg') }}" alt="" class="w-100 h-100">
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <!-- Vendor Javascript (Require in all Page) -->
     <script src="{{ asset('assets/js/vendor.js') }}"></script>

     <!-- App Javascript (Require in all Page) -->
     <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>