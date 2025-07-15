@extends('front.layouts.app')

@section('title', 'START-UP @SUXROB')

@section('content')
        <!-- start banner area -->
    <div class="banner-area banner-12 bg_image--23 bg_image with-down-shadow">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-xii-wrapper">
                        <div class="banner-content-wrapper">
                            <p class="pre-title">Khalimov start-up</p>
                            <h1 class="title">Khalimov start-up project </h1>
                            <p class="post-title">Unit of data stored on a digital ledger, called a blockchain, that certifies
                                a digital asset to be unique and therefore not interchangeable</p>
                            <a class="btn btn-primary btn-large" href="#">Explore</a>
                            <div class="wallet-image-wrapper">
                                <a href="#" class="avatar" data-tooltip="BITLY"><img src="assets/images/icons/wallet/4.png" alt="wallet_image"></a>
                                <a href="#" class="avatar" data-tooltip="D-Coin"><img src="assets/images/icons/wallet/7.png" alt="wallet_image"></a>
                                <a href="#" class="avatar" data-tooltip="Trans Card"><img src="assets/images/icons/wallet/8.png" alt="wallet_image"></a>
                                <a href="#" class="avatar" data-tooltip="Meta Mask"><img src="assets/images/icons/wallet/1.png" alt="wallet_image"></a>
                                <a href="#" class="avatar" data-tooltip="E-Currency"><img src="assets/images/icons/wallet/3.png" alt="wallet_image"></a>
                                <a href="#" class="avatar" data-tooltip="BitCoin"><img src="assets/images/icons/wallet/2.png" alt="wallet_image"></a>
                                <a href="#" class="avatar" data-tooltip="Attar Process"><img src="assets/images/icons/wallet/6.png" alt="wallet_image"></a>
                                <a href="#" class="avatar" data-tooltip="Mark JOrdan"><img src="assets/images/icons/wallet/5.png" alt="wallet_image"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End banner area -->



    <!-- start category area -->
    <div class="category-area pt--70">
        <div class="container">
            <div class="row g-5">
                @forelse ($categories as $category)
                <div class="col-lg-3 col-xl-2 col-md-4 col-sm-6" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <a class="category-style-one" href="{{ route('categories.show', $category->id) }}">
                        <i class="feather-{{$category->icon}}"></i>
                        <span class="category-label">{{$category->title_en}}</span>
                    </a>
                </div>
                @empty

                 <div class="col-lg-3 col-xl-2 col-md-4 col-sm-6" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <a class="category-style-one" href="#">
                        <i class="feather-image"></i>
                        <span class="category-label">Error</span>
                    </a>
                </div>
                 @endforelse
            </div>
        </div>
    </div>
    <!-- end category area -->


    <!-- collection area Start -->
    <div class="rn-collection-area rn-section-gapTop">
        <div class="container">
            <div class="row mb--50 align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <h3 class="title mb--0" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Top Collection</h3>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt_mobile--15">
                    <div class="view-more-btn text-start text-sm-end" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <a class="btn-transparent" href="#">VIEW ALL<i data-feather="arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <!-- start single collention -->
                <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800" class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12">
                    <a href="" class="rn-collection-inner-one">
                        <div class="collection-wrapper">
                            <div class="collection-big-thumbnail">
                                <img src="assets/images/collection/collection-lg-01.jpg" alt="Nft_Profile">
                            </div>
                            <div class="collenction-small-thumbnail">
                                <img src="assets/images/collection/collection-sm-01.jpg" alt="Nft_Profile">
                                <img src="assets/images/collection/collection-sm-02.jpg" alt="Nft_Profile">
                                <img src="assets/images/collection/collection-sm-03.jpg" alt="Nft_Profile">
                            </div>
                            <div class="collection-profile">
                                <img src="assets/images/client/client-15.png" alt="Nft_Profile">
                            </div>
                            <div class="collection-deg">
                                <h6 class="title">Cubic Trad</h6>
                                <span class="items">27 Items</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End single collention -->
                <!-- start single collention -->
                <div data-sal="slide-up" data-sal-delay="200" data-sal-duration="800" class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12">
                    <a href="" class="rn-collection-inner-one">
                        <div class="collection-wrapper">
                            <div class="collection-big-thumbnail">
                                <img src="assets/images/collection/collection-lg-03.jpg" alt="Nft_Profile">
                            </div>
                            <div class="collenction-small-thumbnail">
                                <img src="assets/images/collection/collection-sm-04.jpg" alt="Nft_Profile">
                                <img src="assets/images/collection/collection-sm-05.jpg" alt="Nft_Profile">
                                <img src="assets/images/collection/collection-sm-06.jpg" alt="Nft_Profile">
                            </div>
                            <div class="collection-profile">
                                <img src="assets/images/client/client-12.png" alt="Nft_Profile">
                            </div>
                            <div class="collection-deg">
                                <h6 class="title">Diamond Dog</h6>
                                <span class="items">20 Items</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End single collention -->
                <!-- start single collention -->
                <div data-sal="slide-up" data-sal-delay="250" data-sal-duration="800" class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12">
                    <a href="" class="rn-collection-inner-one">
                        <div class="collection-wrapper">
                            <div class="collection-big-thumbnail">
                                <img src="assets/images/collection/collection-lg-02.jpg" alt="Nft_Profile">
                            </div>
                            <div class="collenction-small-thumbnail">
                                <img src="assets/images/collection/collection-sm-07.jpg" alt="Nft_Profile">
                                <img src="assets/images/collection/collection-sm-08.jpg" alt="Nft_Profile">
                                <img src="assets/images/collection/collection-sm-09.jpg" alt="Nft_Profile">
                            </div>
                            <div class="collection-profile">
                                <img src="assets/images/client/client-13.png" alt="Nft_Profile">
                            </div>
                            <div class="collection-deg">
                                <h6 class="title">Morgan11</h6>
                                <span class="items">15 Items</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End single collention -->
                <!-- start single collention -->
                <div data-sal="slide-up" data-sal-delay="350" data-sal-duration="800" class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12">
                    <a href="" class="rn-collection-inner-one">
                        <div class="collection-wrapper">
                            <div class="collection-big-thumbnail">
                                <img src="assets/images/collection/collection-lg-04.jpg" alt="Nft_Profile">
                            </div>
                            <div class="collenction-small-thumbnail">
                                <img src="assets/images/collection/collection-sm-10.jpg" alt="Nft_Profile">
                                <img src="assets/images/collection/collection-sm-11.jpg" alt="Nft_Profile">
                                <img src="assets/images/collection/collection-sm-12.jpg" alt="Nft_Profile">
                            </div>
                            <div class="collection-profile">
                                <img src="assets/images/client/client-14.png" alt="Nft_Profile">
                            </div>
                            <div class="collection-deg">
                                <h6 class="title">Orthogon#720</h6>
                                <span class="items">10 Items</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End single collention -->
            </div>
        </div>
    </div>
    <!-- collection area End -->

   


  
  
    

    <!-- explore section with left side filter start -->
    <div class="explore-area rn-section-gapTop">
        <div class="container">
            <div class="row mb--40">
                <div class="col-12">
                    <h3 class="title">Find Your Non Replaceable Token</h3>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 order-2 order-lg-1">
                    <div class="nu-course-sidebar">

                        <!-- Start Widget Wrapper  -->
                        <div class="nuron-expo-filter-widget widget-shortby">
                            <div class="inner">
                                <h5 class="widget-title">Sort By</h5>
                                <div class="content">
                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="short-check1">
                                        <label for="short-check1">Newest</label>
                                    </div>
                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="short-check2">
                                        <label for="short-check2">Oldest</label>
                                    </div>
                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="short-check3">
                                        <label for="short-check3">Popular Courses</label>
                                    </div>
                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="short-check4">
                                        <label for="short-check4">Featured On This Month</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Widget Wrapper  -->

                        <!-- Start Widget Wrapper  -->
                        <div class="nuron-expo-filter-widget widget-category mt--30">
                            <div class="inner">
                                <h5 class="widget-title">Categories</h5>
                                <div class="content">
                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="cat-check1">
                                        <label for="cat-check1">Art &amp; Design <span>(24)</span></label>
                                    </div>
                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="cat-check2">
                                        <label for="cat-check2">Web Development <span>(12)</span></label>
                                    </div>
                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="cat-check3">
                                        <label for="cat-check3">Business Management <span>(8)</span></label>
                                    </div>
                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="cat-check4">
                                        <label for="cat-check4">Digital Marketing <span>(3)</span></label>
                                    </div>
                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="cat-check5">
                                        <label for="cat-check5">Music &amp; Fashion <span>(13)</span></label>
                                    </div>
                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="cat-check6">
                                        <label for="cat-check6">Financial Management <span>(25)</span></label>
                                    </div>
                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="cat-check7">
                                        <label for="cat-check7">Sports <span>(19)</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Widget Wrapper  -->

                        <!-- Start Widget Wrapper  -->
                        <div class="nuron-expo-filter-widget widget-shortby mt--30">
                            <div class="inner">
                                <h5 class="widget-title">Level</h5>
                                <div class="content">
                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="level-check1">
                                        <label for="level-check1">All Skill</label>
                                    </div>
                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="level-check2">
                                        <label for="level-check2">Beginner</label>
                                    </div>
                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="level-check3">
                                        <label for="level-check3">Intermediate</label>
                                    </div>
                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="level-check4">
                                        <label for="level-check4">High</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Widget Wrapper  -->

                        <!-- Start Widget Wrapper  -->
                        <div class="nuron-expo-filter-widget widget-shortby mt--30">
                            <div class="inner">
                                <h5 class="widget-title">Price</h5>
                                <div class="content">
                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="price-check1">
                                        <label for="price-check1">All Prices</label>
                                    </div>
                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="price-check2">
                                        <label for="price-check2">Price: Low to High</label>
                                    </div>
                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="price-check3">
                                        <label for="price-check3">Price: High to Low</label>
                                    </div>
                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="price-check4">
                                        <label for="price-check4">Free Paid</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Widget Wrapper  -->

                        <!-- Start Widget Wrapper  -->
                        <div class="nuron-expo-filter-widget widget-shortby mt--30">
                            <div class="inner">
                                <h5 class="widget-title">Language</h5>
                                <div class="content">
                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="lang-check1">
                                        <label for="lang-check1">All Language</label>
                                    </div>
                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="lang-check2">
                                        <label for="lang-check2">Arabic</label>
                                    </div>
                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="lang-check3">
                                        <label for="lang-check3">English</label>
                                    </div>
                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="lang-check4">
                                        <label for="lang-check4">Russian</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Widget Wrapper  -->

                        <!-- Start Widget Wrapper  -->
                        <div class="nuron-expo-filter-widget widget-shortby mt--30">
                            <div class="inner">
                                <h5 class="widget-title">Short By Rating</h5>
                                <div class="content">
                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="rating-check1">
                                        <label for="rating-check1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="rating-check2">
                                        <label for="rating-check2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill off" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="rating-check3">
                                        <label for="rating-check3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill off" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill off" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="rating-check4">
                                        <label for="rating-check4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill off" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill off" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill off" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                        </label>
                                    </div>

                                    <div class="nuron-form-check">
                                        <input type="checkbox" id="rating-check5">
                                        <label for="rating-check5">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill off" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill off" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill off" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill off" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Widget Wrapper  -->

                        <!-- Start Widget Wrapper  -->
                        <div class="nuron-expo-filter-widget widget-shortby mt--30">
                            <div class="inner">
                                <h5 class="widget-title">Filter By Price</h5>
                                <div class="content">
                                    <div class="price_filter s-filter clear">
                                        <form action="#" method="GET">
                                            <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                                <div class="ui-slider-range ui-widget-header ui-corner-all"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            </div>
                                            <div class="slider__range--output">
                                                <div class="price__output--wrap">
                                                    <div class="price--output">
                                                        <span>Price :</span><input type="text" id="amount" readonly="">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Widget Wrapper  -->

                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="row g-5">
                        <!-- start single product -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="product-style-one no-overlay with-placeBid">
                                <div class="card-thumbnail">
                                    <a href="{{ route('profile') }}">
                                        <img src="assets/images/portfolio/portfolio-01.jpg" alt="NFT_portfolio">
                                    </a>
                                    <a href="{{ route('profile') }}" class="btn btn-primary">Place Bid</a>
                                </div>
                                <div class="product-share-wrapper">
                                    <div class="profile-share">
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-2.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-3.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-4.png" alt="Nft_Profile"></a>
                                        <a class="more-author-text" href="#">9+ Place Bit.</a>
                                    </div>
                                    <div class="share-btn share-btn-activation dropdown">
                                        <button class="icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                            </svg>
                                        </button>

                                        <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                            <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                                Share
                                            </button>
                                            <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                                Report
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <a href="{{ route('profile') }}"><span class="product-name">Diamond Dog</span></a>
                                <span class="latest-bid">Highest bid 1/20</span>
                                <div class="bid-react-area">
                                    <div class="last-bid">0.244wETH</div>
                                    <div class="react-area">
                                        <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                            <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                        </svg>
                                        <span class="number">322</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single product -->

                        <!-- start single product -->
                        <div class="col-lg-4 col-md-6 col-sm-12" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">
                            <div class="product-style-one no-overlay with-placeBid">
                                <div class="card-thumbnail">
                                    <a href="{{ route('profile') }}">
                                        <img src="assets/images/portfolio/portfolio-02.jpg" alt="NFT_portfolio">
                                    </a>
                                    <a href="{{ route('profile') }}" class="btn btn-primary">Place Bid</a>
                                </div>
                                <div class="product-share-wrapper">
                                    <div class="profile-share">
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-1.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-10.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-11.png" alt="Nft_Profile"></a>
                                        <a class="more-author-text" href="#">10+ Place Bit.</a>
                                    </div>
                                    <div class="share-btn share-btn-activation dropdown">
                                        <button class="icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                            </svg>
                                        </button>

                                        <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                            <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                                Share
                                            </button>
                                            <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                                Report
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <a href="{{ route('profile') }}"><span class="product-name">OrBid6</span></a>
                                <span class="latest-bid">Highest bid 1/20</span>
                                <div class="bid-react-area">
                                    <div class="last-bid">0.244wETH</div>
                                    <div class="react-area">
                                        <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                            <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                        </svg>
                                        <span class="number">322</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single product -->

                        <!-- start single product -->
                        <div class="col-lg-4 col-md-6 col-sm-12" data-sal="slide-up" data-sal-delay="250" data-sal-duration="800">
                            <div class="product-style-one no-overlay with-placeBid">
                                <div class="card-thumbnail">
                                    <a href="{{ route('profile') }}">
                                        <img src="assets/images/portfolio/portfolio-03.jpg" alt="NFT_portfolio">
                                    </a>
                                    <a href="{{ route('profile') }}" class="btn btn-primary">Place Bid</a>
                                </div>
                                <div class="product-share-wrapper">
                                    <div class="profile-share">
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-1.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-10.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-11.png" alt="Nft_Profile"></a>
                                        <a class="more-author-text" href="#">10+ Place Bit.</a>
                                    </div>
                                    <div class="share-btn share-btn-activation dropdown">
                                        <button class="icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                            </svg>
                                        </button>

                                        <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                            <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                                Share
                                            </button>
                                            <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                                Report
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <a href="{{ route('profile') }}"><span class="product-name">Morgan11</span></a>
                                <span class="latest-bid">Highest bid 1/20</span>
                                <div class="bid-react-area">
                                    <div class="last-bid">0.244wETH</div>
                                    <div class="react-area">
                                        <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                            <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                        </svg>
                                        <span class="number">322</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single product -->

                        <!-- start single product -->
                        <div class="col-lg-4 col-md-6 col-sm-12" data-sal="slide-up" data-sal-delay="300" data-sal-duration="800">
                            <div class="product-style-one no-overlay with-placeBid">
                                <div class="card-thumbnail">
                                    <a href="{{ route('profile') }}">
                                        <img src="assets/images/portfolio/portfolio-04.jpg" alt="NFT_portfolio">
                                    </a>
                                    <a href="{{ route('profile') }}" class="btn btn-primary">Place Bid</a>
                                </div>
                                <div class="product-share-wrapper">
                                    <div class="profile-share">
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-1.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-10.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-9.png" alt="Nft_Profile"></a>
                                        <a class="more-author-text" href="#">21+ Place Bit.</a>
                                    </div>
                                    <div class="share-btn share-btn-activation dropdown">
                                        <button class="icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                            </svg>
                                        </button>

                                        <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                            <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                                Share
                                            </button>
                                            <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                                Report
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <a href="{{ route('profile') }}"><span class="product-name">mAtal8</span></a>
                                <span class="latest-bid">Highest bid 1/20</span>
                                <div class="bid-react-area">
                                    <div class="last-bid">0.244wETH</div>
                                    <div class="react-area">
                                        <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                            <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                        </svg>
                                        <span class="number">322</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single product -->

                        <!-- start single product -->
                        <div class="col-lg-4 col-md-6 col-sm-12" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800">
                            <div class="product-style-one no-overlay with-placeBid">
                                <div class="card-thumbnail">
                                    <a href="{{ route('profile') }}">
                                        <img src="assets/images/portfolio/portfolio-05.jpg" alt="NFT_portfolio">
                                    </a>
                                    <a href="{{ route('profile') }}" class="btn btn-primary">Place Bid</a>
                                </div>
                                <div class="product-share-wrapper">
                                    <div class="profile-share">
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-10.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-11.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-9.png" alt="Nft_Profile"></a>
                                        <a class="more-author-text" href="#">12+ Place Bit.</a>
                                    </div>
                                    <div class="share-btn share-btn-activation dropdown">
                                        <button class="icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                            </svg>
                                        </button>

                                        <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                            <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                                Share
                                            </button>
                                            <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                                Report
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <a href="{{ route('profile') }}"><span class="product-name">PlatOrgan</span></a>
                                <span class="latest-bid">Highest bid 1/20</span>
                                <div class="bid-react-area">
                                    <div class="last-bid">0.244wETH</div>
                                    <div class="react-area">
                                        <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                            <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                        </svg>
                                        <span class="number">322</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single product -->

                        <!-- start single product -->
                        <div class="col-lg-4 col-md-6 col-sm-12" data-sal="slide-up" data-sal-delay="400" data-sal-duration="800">
                            <div class="product-style-one no-overlay with-placeBid">
                                <div class="card-thumbnail">
                                    <a href="{{ route('profile') }}">
                                        <img src="assets/images/portfolio/portfolio-06.jpg" alt="NFT_portfolio">
                                    </a>
                                    <a href="{{ route('profile') }}" class="btn btn-primary">Place Bid</a>
                                </div>
                                <div class="product-share-wrapper">
                                    <div class="profile-share">
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-1.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-10.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-11.png" alt="Nft_Profile"></a>
                                        <a class="more-author-text" href="#">5+ Place Bit.</a>
                                    </div>
                                    <div class="share-btn share-btn-activation dropdown">
                                        <button class="icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                            </svg>
                                        </button>

                                        <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                            <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                                Share
                                            </button>
                                            <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                                Report
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <a href="{{ route('profile') }}"><span class="product-name">Orthogon#720</span></a>
                                <span class="latest-bid">Highest bid 1/20</span>
                                <div class="bid-react-area">
                                    <div class="last-bid">0.244wETH</div>
                                    <div class="react-area">
                                        <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                            <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                        </svg>
                                        <span class="number">322</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single product -->

                        <!-- start single product -->
                        <div class="col-lg-4 col-md-6 col-sm-12" data-sal="slide-up" data-sal-delay="450" data-sal-duration="800">
                            <div class="product-style-one no-overlay with-placeBid">
                                <div class="card-thumbnail">
                                    <a href="{{ route('profile') }}">
                                        <img src="assets/images/portfolio/portfolio-07.jpg" alt="NFT_portfolio">
                                    </a>
                                    <a href="{{ route('profile') }}" class="btn btn-primary">Place Bid</a>
                                </div>
                                <div class="product-share-wrapper">
                                    <div class="profile-share">
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-6.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-5.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-10.png" alt="Nft_Profile"></a>
                                        <a class="more-author-text" href="#">9+ Place Bit.</a>
                                    </div>
                                    <div class="share-btn share-btn-activation dropdown">
                                        <button class="icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                            </svg>
                                        </button>

                                        <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                            <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                                Share
                                            </button>
                                            <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                                Report
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <a href="{{ route('profile') }}"><span class="product-name">Orgajis</span></a>
                                <span class="latest-bid">Highest bid 1/20</span>
                                <div class="bid-react-area">
                                    <div class="last-bid">0.244wETH</div>
                                    <div class="react-area">
                                        <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                            <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                        </svg>
                                        <span class="number">322</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single product -->

                        <!-- start single product -->
                        <div class="col-lg-4 col-md-6 col-sm-12" data-sal="slide-up" data-sal-delay="500" data-sal-duration="800">
                            <div class="product-style-one no-overlay with-placeBid">
                                <div class="card-thumbnail">
                                    <a href="{{ route('profile') }}">
                                        <img src="assets/images/portfolio/portfolio-05.jpg" alt="NFT_portfolio">
                                    </a>
                                    <a href="{{ route('profile') }}" class="btn btn-primary">Place Bid</a>
                                </div>
                                <div class="product-share-wrapper">
                                    <div class="profile-share">
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-1.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-10.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-11.png" alt="Nft_Profile"></a>
                                        <a class="more-author-text" href="#">16+ Place Bit.</a>
                                    </div>
                                    <div class="share-btn share-btn-activation dropdown">
                                        <button class="icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                            </svg>
                                        </button>

                                        <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                            <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                                Share
                                            </button>
                                            <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                                Report
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <a href="{{ route('profile') }}"><span class="product-name">Preatent</span></a>
                                <span class="latest-bid">Highest bid 1/20</span>
                                <div class="bid-react-area">
                                    <div class="last-bid">0.244wETH</div>
                                    <div class="react-area">
                                        <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                            <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                        </svg>
                                        <span class="number">322</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single product -->

                        <!-- start single product -->
                        <div class="col-lg-4 col-md-6 col-sm-12" data-sal="slide-up" data-sal-delay="550" data-sal-duration="800">
                            <div class="product-style-one no-overlay with-placeBid">
                                <div class="card-thumbnail">
                                    <a href="{{ route('profile') }}">
                                        <img src="assets/images/portfolio/portfolio-09.jpg" alt="NFT_portfolio">
                                    </a>
                                    <a href="{{ route('profile') }}" class="btn btn-primary">Place Bid</a>
                                </div>
                                <div class="product-share-wrapper">
                                    <div class="profile-share">
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-10.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-11.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-1.png" alt="Nft_Profile"></a>
                                        <a class="more-author-text" href="#">22+ Place Bit.</a>
                                    </div>
                                    <div class="share-btn share-btn-activation dropdown">
                                        <button class="icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                            </svg>
                                        </button>

                                        <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                            <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                                Share
                                            </button>
                                            <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                                Report
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <a href="{{ route('profile') }}"><span class="product-name">Preatent</span></a>
                                <span class="latest-bid">Highest bid 1/20</span>
                                <div class="bid-react-area">
                                    <div class="last-bid">0.244wETH</div>
                                    <div class="react-area">
                                        <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                            <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                        </svg>
                                        <span class="number">322</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single product -->
                        <!-- start single product -->
                        <div class="col-lg-4 col-md-6 col-sm-12" data-sal="slide-up" data-sal-delay="600" data-sal-duration="800">
                            <div class="product-style-one no-overlay with-placeBid">
                                <div class="card-thumbnail">
                                    <a href="{{ route('profile') }}">
                                        <img src="assets/images/portfolio/portfolio-10.jpg" alt="NFT_portfolio">
                                    </a>
                                    <a href="{{ route('profile') }}" class="btn btn-primary">Place Bid</a>
                                </div>
                                <div class="product-share-wrapper">
                                    <div class="profile-share">
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-4.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-5.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-8.png" alt="Nft_Profile"></a>
                                        <a class="more-author-text" href="#">13+ Place Bit.</a>
                                    </div>
                                    <div class="share-btn share-btn-activation dropdown">
                                        <button class="icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                            </svg>
                                        </button>

                                        <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                            <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                                Share
                                            </button>
                                            <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                                Report
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <a href="{{ route('profile') }}"><span class="product-name">Preatent</span></a>
                                <span class="latest-bid">Highest bid 1/20</span>
                                <div class="bid-react-area">
                                    <div class="last-bid">0.244wETH</div>
                                    <div class="react-area">
                                        <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                            <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                        </svg>
                                        <span class="number">322</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single product -->
                        <!-- start single product -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="product-style-one no-overlay with-placeBid">
                                <div class="card-thumbnail">
                                    <a href="{{ route('profile') }}">
                                        <img src="assets/images/portfolio/portfolio-01.jpg" alt="NFT_portfolio">
                                    </a>
                                    <a href="{{ route('profile') }}" class="btn btn-primary">Place Bid</a>
                                </div>
                                <div class="product-share-wrapper">
                                    <div class="profile-share">
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-2.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-3.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-4.png" alt="Nft_Profile"></a>
                                        <a class="more-author-text" href="#">9+ Place Bit.</a>
                                    </div>
                                    <div class="share-btn share-btn-activation dropdown">
                                        <button class="icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                            </svg>
                                        </button>

                                        <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                            <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                                Share
                                            </button>
                                            <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                                Report
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <a href="{{ route('profile') }}"><span class="product-name">Diamond Dog</span></a>
                                <span class="latest-bid">Highest bid 1/20</span>
                                <div class="bid-react-area">
                                    <div class="last-bid">0.244wETH</div>
                                    <div class="react-area">
                                        <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                            <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                        </svg>
                                        <span class="number">322</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single product -->
                        <!-- start single product -->
                        <div class="col-lg-4 col-md-6 col-sm-12" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">
                            <div class="product-style-one no-overlay with-placeBid">
                                <div class="card-thumbnail">
                                    <a href="{{ route('profile') }}">
                                        <img src="assets/images/portfolio/portfolio-02.jpg" alt="NFT_portfolio">
                                    </a>
                                    <a href="{{ route('profile') }}" class="btn btn-primary">Place Bid</a>
                                </div>
                                <div class="product-share-wrapper">
                                    <div class="profile-share">
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-1.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-10.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-11.png" alt="Nft_Profile"></a>
                                        <a class="more-author-text" href="#">10+ Place Bit.</a>
                                    </div>
                                    <div class="share-btn share-btn-activation dropdown">
                                        <button class="icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                            </svg>
                                        </button>

                                        <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                            <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                                Share
                                            </button>
                                            <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                                Report
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <a href="{{ route('profile') }}"><span class="product-name">OrBid6</span></a>
                                <span class="latest-bid">Highest bid 1/20</span>
                                <div class="bid-react-area">
                                    <div class="last-bid">0.244wETH</div>
                                    <div class="react-area">
                                        <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                            <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                        </svg>
                                        <span class="number">322</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single product -->
                        <!-- start single product -->
                        <div class="col-lg-4 col-md-6 col-sm-12" data-sal="slide-up" data-sal-delay="250" data-sal-duration="800">
                            <div class="product-style-one no-overlay with-placeBid">
                                <div class="card-thumbnail">
                                    <a href="{{ route('profile') }}">
                                        <img src="assets/images/portfolio/portfolio-03.jpg" alt="NFT_portfolio">
                                    </a>
                                    <a href="{{ route('profile') }}" class="btn btn-primary">Place Bid</a>
                                </div>
                                <div class="product-share-wrapper">
                                    <div class="profile-share">
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-1.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-10.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-11.png" alt="Nft_Profile"></a>
                                        <a class="more-author-text" href="#">10+ Place Bit.</a>
                                    </div>
                                    <div class="share-btn share-btn-activation dropdown">
                                        <button class="icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                            </svg>
                                        </button>

                                        <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                            <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                                Share
                                            </button>
                                            <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                                Report
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <a href="{{ route('profile') }}"><span class="product-name">Morgan11</span></a>
                                <span class="latest-bid">Highest bid 1/20</span>
                                <div class="bid-react-area">
                                    <div class="last-bid">0.244wETH</div>
                                    <div class="react-area">
                                        <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                            <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                        </svg>
                                        <span class="number">322</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single product -->
                        <!-- start single product -->
                        <div class="col-lg-4 col-md-6 col-sm-12" data-sal="slide-up" data-sal-delay="300" data-sal-duration="800">
                            <div class="product-style-one no-overlay with-placeBid">
                                <div class="card-thumbnail">
                                    <a href="{{ route('profile') }}">
                                        <img src="assets/images/portfolio/portfolio-04.jpg" alt="NFT_portfolio">
                                    </a>
                                    <a href="{{ route('profile') }}" class="btn btn-primary">Place Bid</a>
                                </div>
                                <div class="product-share-wrapper">
                                    <div class="profile-share">
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-1.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-10.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-9.png" alt="Nft_Profile"></a>
                                        <a class="more-author-text" href="#">21+ Place Bit.</a>
                                    </div>
                                    <div class="share-btn share-btn-activation dropdown">
                                        <button class="icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                            </svg>
                                        </button>

                                        <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                            <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                                Share
                                            </button>
                                            <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                                Report
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <a href="{{ route('profile') }}"><span class="product-name">mAtal8</span></a>
                                <span class="latest-bid">Highest bid 1/20</span>
                                <div class="bid-react-area">
                                    <div class="last-bid">0.244wETH</div>
                                    <div class="react-area">
                                        <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                            <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                        </svg>
                                        <span class="number">322</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single product -->
                        <!-- start single product -->
                        <div class="col-lg-4 col-md-6 col-sm-12" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800">
                            <div class="product-style-one no-overlay with-placeBid">
                                <div class="card-thumbnail">
                                    <a href="{{ route('profile') }}">
                                        <img src="assets/images/portfolio/portfolio-05.jpg" alt="NFT_portfolio">
                                    </a>
                                    <a href="{{ route('profile') }}" class="btn btn-primary">Place Bid</a>
                                </div>
                                <div class="product-share-wrapper">
                                    <div class="profile-share">
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-10.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-11.png" alt="Nft_Profile"></a>
                                        <a href="{{ route('profile') }}" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img src="assets/images/client/client-9.png" alt="Nft_Profile"></a>
                                        <a class="more-author-text" href="#">12+ Place Bit.</a>
                                    </div>
                                    <div class="share-btn share-btn-activation dropdown">
                                        <button class="icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                            </svg>
                                        </button>

                                        <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                            <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                                Share
                                            </button>
                                            <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                                Report
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <a href="{{ route('profile') }}"><span class="product-name">PlatOrgan</span></a>
                                <span class="latest-bid">Highest bid 1/20</span>
                                <div class="bid-react-area">
                                    <div class="last-bid">0.244wETH</div>
                                    <div class="react-area">
                                        <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                            <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                        </svg>
                                        <span class="number">322</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single product -->
                        <nav class="pagination-wrapper" aria-label="Page navigation example">
                            <ul class="pagination single-column-blog">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- explore section with left side filter End -->
    <!-- start nuron vedio area -->
    <div class="vedio-area rn-section-gapTop">
        <div class="container">
            <div class="row mb--40">
                <div class="title-area text-center">
                    <h3 class="title mb--15">Meet with Nuron</h3>
                    <p class="subtitle">An NFT is a digital asset that represents real-world objects like art, music, in-game items and videos. They are bought and sold online.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 position-relative">
                    <a id="play-video" class="video-play-button btn-large with-animation" href="#">
                        <span></span>
                    </a>
                    <!-- start vedio image wrapper -->
                    <div class="vedio-wrapper">
                        <img src="assets/images/bg/bg-image-22.jpg" alt="">
                    </div>
                    <!-- end vedio image wrapper -->
                    <div id="video-overlay" class="video-overlay">
                        <a class="video-overlay-close">×</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end nuron vedio area -->





    <!-- Modal -->
    <div class="rn-popup-modal share-modal-wrapper modal fade" id="shareModal" tabindex="-1" aria-hidden="true">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content share-wrapper">
                <div class="modal-header share-area">
                    <h5 class="modal-title">Share this NFT</h5>
                </div>
                <div class="modal-body">
                    <ul class="social-share-default">
                        <li><a href="#"><span class="icon"><i data-feather="facebook"></i></span><span class="text">facebook</span></a></li>
                        <li><a href="#"><span class="icon"><i data-feather="twitter"></i></span><span class="text">twitter</span></a></li>
                        <li><a href="#"><span class="icon"><i data-feather="linkedin"></i></span><span class="text">linkedin</span></a></li>
                        <li><a href="#"><span class="icon"><i data-feather="instagram"></i></span><span class="text">instagram</span></a></li>
                        <li><a href="#"><span class="icon"><i data-feather="youtube"></i></span><span class="text">youtube</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="rn-popup-modal report-modal-wrapper modal fade" id="reportModal" tabindex="-1" aria-hidden="true">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content report-content-wrapper">
                <div class="modal-header report-modal-header">
                    <h5 class="modal-title">Why are you reporting?
                    </h5>
                </div>
                <div class="modal-body">
                    <p>Describe why you think this item should be removed from marketplace</p>
                    <div class="report-form-box">
                        <h6 class="title">Message</h6>
                        <textarea name="message" placeholder="Write issues"></textarea>
                        <div class="report-button">
                            <button type="button" class="btn btn-primary mr--10 w-auto">Report</button>
                            <button type="button" class="btn btn-primary-alta w-auto" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
