@extends('front.layouts.app')

@section('title', 'START-UP @SUXROB')

@section('content')

    <!-- start page title area -->
    <div class="rn-breadcrumb-inner ptb--30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <h5 class="title text-center text-md-start">Product Details</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-list">
                        <li class="item"><a href="{{route('home')}}">Home</a></li>
                        <li class="separator"><i class="feather-chevron-right"></i></li>
                        <li class="item current">Product Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title area -->

    <!-- start product details area -->
    <div class="product-details-area rn-section-gapTop">
        <div class="container">
            <div class="row g-5">
                <!-- product image area -->

                @php
                    $images = json_decode($product->images, true); // JSON formatni massivga aylantiramiz
                @endphp

                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="product-tab-wrapper rbt-sticky-top-adjust">
                        <div class="pd-tab-inner">
                            <div class="nav rn-pd-nav rn-pd-rt-content nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                @foreach ($images as $index => $image)
                                    <button class="nav-link @if($index === 0) active @endif" 
                                            id="v-pills-tab-{{ $index }}" 
                                            data-bs-toggle="pill" 
                                            data-bs-target="#v-pills-{{ $index }}" 
                                            type="button" 
                                            role="tab" 
                                            aria-controls="v-pills-{{ $index }}" 
                                            aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                                        <span class="rn-pd-sm-thumbnail">
                                            <img src="{{ asset('storage/' . $image) }}" alt="Nft_Profile">
                                        </span>
                                    </button>
                                @endforeach
                            </div>

                            <div class="tab-content rn-pd-content" id="v-pills-tabContent">
                                @foreach ($images as $index => $image)
                                    <div class="tab-pane fade @if($index === 0) show active @endif" 
                                        id="v-pills-{{ $index }}" 
                                        role="tabpanel" 
                                        aria-labelledby="v-pills-tab-{{ $index }}">
                                        <div class="rn-pd-thumbnail">
                                            <img src="{{ asset('storage/' . $image) }}" alt="Nft_Profile">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- product image area end -->

                <div class="col-lg-5 col-md-12 col-sm-12 mt_md--50 mt_sm--60">
                    <div class="rn-pd-content-area">
                        <div class="pd-title-area">
                            <h4 class="title">{{$product->title_en}}</h4>
                            <div class="pd-react-area">
                                <div class="heart-count">
                                    <i data-feather="heart"></i>
                                    <span>33</span>
                                </div>
                                <div class="count">
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
                            </div>
                        </div>
                        <span class="bid">Height bid <span class="price">0.11wETH</span></span>
                        <h6 class="title-name">
                            #22 Portal , Info bellow
                        </h6>
                        <div class="catagory-collection">
                            <div class="catagory">
                                <span>Catagory <span class="color-body">
                                        </span></span>
                                <div class="top-seller-inner-one">
                                    <div class="top-seller-wrapper">
                                        <div class="thumbnail">
                                            <a href="{{ route('productshow.show', $producttype->id) }}"><img src="{{ asset('storage/' . $producttype->image) }}" alt="Nft_Profile"></a>
                                        </div>
                                        <div class="top-seller-content">
                                            <a href="#">
                                                <h6 class="name">{{$producttype->title_en}}</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                        <a class="btn btn-primary-alta" href="#">Unlockable content included</a>
                        <div class="rn-bid-details">
                           
                            <div class="place-bet-area">
                                <div class="rn-bet-create">
                                    <div class="bid-list winning-bid">
                                        <h6 class="title">Tarif rejalar</h6>
                                        <div class="top-seller-inner-one">
                                            <div class="top-seller-wrapper">
                                               
                                                <div class="top-seller-content">
                                                    <span class="heighest-bid"><a href="#">1 OY UCHUN 65.000 UZS</a></span>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bid-list left-bid">
                                        <h6 class="title">Obuna uchun chegirma</h6>
                                        <div class="countdown mt--15" data-date="2025-12-09">
                                            <div class="countdown-container days">
                                                <span class="countdown-value">1</span>
                                                <span class="countdown-heading">D's</span>
                                            </div>
                                            <div class="countdown-container hours">
                                                <span class="countdown-value">4</span>
                                                <span class="countdown-heading">H's</span>
                                            </div>
                                            <div class="countdown-container minutes">
                                                <span class="countdown-value">23</span>
                                                <span class="countdown-heading">Min's</span>
                                            </div>
                                            <div class="countdown-container seconds">
                                                <span class="countdown-value">12</span>
                                                <span class="countdown-heading">Sec</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <a class="btn btn-primary-alta mt--30" href="#">Place a Bid</a> -->
                                <button type="button" class="btn btn-primary-alta mt--30" data-bs-toggle="modal" data-bs-target="#placebidModal">Place a Bid</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End product details area -->


    <!-- New items Start -->
    <div class="rn-new-items rn-section-gapTop">
        <div class="container">
            <div class="row mb--30 align-items-center">
                <div class="col-12">
                    <h3 class="title mb--0" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Recent View</h3>
                </div>
            </div>
            <div class="row g-5">
                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800" class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="{{ asset('assets/images/portfolio/portfolio-01.jpg') }}" alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="{{ asset('assets/images/client/client-1.png') }}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Jone Due"><img src="{{ asset('assets/images/client/client-2.png') }}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Nisat Tara"><img src="{{ asset('assets/images/client/client-3.png') }}" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">9+ Place Bit.</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a href="product-details.html"><span class="product-name">Preatent</span></a>
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
                <div data-sal="slide-up" data-sal-delay="200" data-sal-duration="800" class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="{{ asset('assets/images/portfolio/portfolio-02.jpg') }}" alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="{{ asset('assets/images/client/client-4.png') }}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Nira Ara"><img src="{{ asset('assets/images/client/client-5.png') }}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Fatima Afrafy"><img src="{{ asset('assets/images/client/client-6.png') }}" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">10+ Place Bit.</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a href="product-details.html"><span class="product-name">Diamond Dog</span></a>
                        <span class="latest-bid">Highest bid 5/11</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.892wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">420</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->

                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="250" data-sal-duration="800" class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="{{ asset('assets/images/portfolio/portfolio-03.jpg') }}" alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="{{ asset('assets/images/client/client-1.png') }}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Janin Ara"><img src="{{ asset('assets/images/client/client-8.png') }}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Atif Islam"><img src="{{ asset('assets/images/client/client-9.png') }}" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">10+ Place Bit.</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a href="product-details.html"><span class="product-name">OrBid6</span></a>
                        <span class="latest-bid">Highest bid 2/31</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.2128wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">12</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->

                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="{{ asset('assets/images/portfolio/portfolio-04.jpg') }}" alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="{{ asset('assets/images/client/client-1.png') }}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="{{ asset('assets/images/client/client-3.png') }}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="{{ asset('assets/images/client/client-5.png') }}" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">8+ Place Bit.</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a href="product-details.html"><span class="product-name">Morgan11</span></a>
                        <span class="latest-bid">Highest bid 3/16</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.265wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->
                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="350" data-sal-duration="800" class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="{{ asset('assets/images/portfolio/portfolio-05.jpg') }}" alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="{{ asset('assets/images/client/client-2.png') }}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="{{ asset('assets/images/client/client-7.png') }}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="{{ asset('assets/images/client/client-9.png') }}" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">15+ Place Bit.</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a href="product-details.html"><span class="product-name">mAtal8</span></a>
                        <span class="latest-bid">Highest bid 6/50</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.244wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">205</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->
            </div>
        </div>
    </div>
    <!-- New items End -->

    



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
    <!-- Modal -->
    <div class="rn-popup-modal placebid-modal-wrapper modal fade" id="placebidModal" tabindex="-1" aria-hidden="true">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Obuna sotib olish</h3>
                </div>
                <div class="modal-body">
                    <p>Obuna faolashtirganingizdan keyin 1oy davomida barcha mahsulotlardan foydalanishingiz mumkun</p>
                    <div class="placebid-form-box">
                        <h5 class="title">1 oy uchun</h5>
                        <div class="bid-content">
                            <div class="bid-content-top">
                                <div class="bid-content-left">
                                    <input id="value" value="65.000" type="text" name="value">
                                    <span>UZS</span>
                                </div>
                            </div>

                            <div class="bid-content-mid">
                                <div class="bid-content-left">
                                    <span>Total bid amount</span>
                                </div>
                                <div class="bid-content-right">
                                    <span>100.000 UZS</span>
                                </div>
                            </div>
                        </div>
                        <div class="bit-continue-button">
                            <a href="" class="btn btn-primary w-100">SOTIB OLISH</a>
                            <button type="button" class="btn btn-primary-alta mt--10" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
