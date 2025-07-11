@extends('front.layouts.app')

@section('title', 'START-UP @SUXROB')

@section('content')

    
    <!-- start page title area -->
    <div class="rn-breadcrumb-inner ptb--30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <h5 class="title text-center text-md-start">Edit Profile</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-list">
                        <li class="item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="separator"><i class="feather-chevron-right"></i></li>
                        <li class="item current">Edit Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title area -->


  

    <!-- Start tabs area -->
    <div class="edit-profile-area rn-section-gapTop">
        <div class="container">
            <div class="row plr--70 padding-control-edit-wrapper pl_md--0 pr_md--0 pl_sm--0 pr_sm--0">
                <div class="col-12 d-flex justify-content-between mb--30 align-items-center">
                    <h4 class="title-left">Edit Your Profile</h4>
                    <a href="{{ route('profile') }}" class="btn btn-primary ml--10"><i class="feather-eye mr--5"></i> Preview</a>
                </div>
            </div>
            <div class="row plr--70 padding-control-edit-wrapper pl_md--0 pr_md--0 pl_sm--0 pr_sm--0">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <!-- Start tabs area -->
                    <nav class="left-nav rbt-sticky-top-adjust-five">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><i class="feather-edit"></i>Edit Profile Image</button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"> <i class="feather-unlock"></i>Change Password</button>
                        </div>
                    </nav>
                    <!-- End tabs area -->
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 mt_sm--30">
                    <div class="tab-content tab-content-edit-wrapepr" id="nav-tabContent">

                        <!-- sigle tab content -->
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <!-- start personal information -->
                              @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                             <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="nuron-information">
                                <div class="profile-change row g-5">
                                    <div class="profile-left col-lg-4">
                                        <div class="profile-image mb--30">
                                            <h6 class="title">Change Your Profile Picture</h6>
                                            <img id="rbtinput1" src="{{ asset($user->profile_image ?? 'uploads/profiles/default-profile.jpg') }}" alt="Profile-NFT">
                                        </div>
                                        <div class="button-area">
                                            <div class="brows-file-wrapper">
                                                <input type="file" name="profile_image" id="fatima">
                                                <label for="fatima" title="No File Choosen">
                                                    <span class="text-center color-white">Upload Profile</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="profile-left right col-lg-8">
                                        <div class="profile-image mb--30">
                                            <h6 class="title">Change Your Cover Photo</h6>
                                            <img id="rbtinput2" src="{{ asset($user->cover_image ?? 'uploads/covers/default-cover.jpg') }}" alt="Cover-NFT">
                                        </div>
                                        <div class="button-area">
                                            <div class="brows-file-wrapper">
                                                <input type="file" name="cover_image" id="nipa">
                                                <label for="nipa" title="No File Choosen">
                                                    <span class="text-center color-white">Upload Cover</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-form-wrapper mt-5">
                                        <div class="input-two-wrapper mb--15">
                                            <div class="first-name half-wid">
                                                <label for="firstname" class="form-label">First Name</label>
                                                <input type="text" id="firstname" name="firstname" value="{{ old('firstname', $user->firstname) }}">
                                            </div>
                                            <div class="last-name half-wid">
                                                <label for="lastname" class="form-label">Last Name</label>
                                                <input type="text" name="lastname" id="lastname" value="{{ old('lastname', $user->lastname) }}">
                                            </div>
                                        </div>

                                        <div class="email-area">
                                            <label for="email" class="form-label">Email Address</label>
                                            <input name="email" id="email" type="email" value="{{ old('email', $user->email) }}">
                                        </div>
                                    </div>

                                
                                    <div class="edit-bio-area mt--20">
                                        <label for="biography" class="form-label">Edit Your Bio</label>
                                        <textarea id="biography" name="biography">{{ old('biography', $user->biography) }}</textarea>
                                    </div>


                                    <div class="input-two-wrapper mt--15">
                                        <div class="half-wid currency">
                                            <!-- select gender -->
                                            <select name="gender" class="profile-edit-select">
                                                <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>Male</option>
                                                <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>Female</option>
                                                <option value="third" {{ $user->gender == 'third' ? 'selected' : '' }}>Third Gender</option>
                                            </select>
                                            <!-- end gender -->
                                        </div>
                                        <div class="half-wid phone-number">
                                                <label for="phone" class="form-label">Phone Number</label>
                                                <input name="phone" id="phone" type="text" value="{{ old('phone', $user->phone) }}">
                                        </div>
                                    </div>

                                    <div class="button-area save-btn-edit mt--30">
                                        <a href="{{ route('profile') }}" class="btn btn-primary-alta mr--15">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>

                            </div>
                            </form>
                            <!-- End personal information -->
                        </div>
                        <!-- End single tabv content -->
                        

                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <!-- change password area Start -->
                             <!-- Session messages -->
                           
                            <form action="{{ route('profile.updatePassword') }}" method="POST">
                                @csrf

                                <div class="nuron-information">
                                    <div class="condition">
                                        <h5 class="title">Create Your Password</h5>
                                        <p class="condition">
                                            Please use a strong password. Do not share it with others.
                                        </p>
                                        <hr />
                                    </div>

                                    <div class="input-two-wrapper mt--15">
                                        <div class="old-password half-wid">
                                            <label for="oldPass" class="form-label">Enter Old Password</label>
                                            <input name="old_password" id="oldPass" type="password" class="form-control" required>
                                        </div>
                                        <div class="new-password half-wid">
                                            <label for="new_password" class="form-label">Create New Password</label>
                                            <input name="new_password" id="newPass" type="password" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="email-area mt--15">
                                        <label for="rePass" class="form-label">Confirm Password</label>
                                        <input name="new_password_confirmation" id="rePass" type="password" class="form-control" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary save-btn-edit mt-3">Save</button>
                                </div>
                            </form>

                            <!-- change password area ENd -->
                        </div>

                       
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End tabs area -->




@endsection
