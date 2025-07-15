@extends('front.layouts.app')

@section('title', 'START-UP @SUXROB')

@section('content')

<!-- start page title area -->
    <div class="rn-breadcrumb-inner ptb--30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <h5 class="title text-center text-md-start">{{$categorytypes->title_en}}</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-list">
                        <li class="item"><a href="index.html">Home</a></li>
                        <li class="separator"><i class="feather-chevron-right"></i></li>
                        <li class="item current">{{$categorytypes->title_en}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title area -->
    <!-- Start product area -->
    <div class="rn-product-area rn-section-gapTop">
        <div class="container">
            <div class="row mb--30 align-items-center">
                <div class="col-12">
                    <h3 class="title mb--0" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">{{$categorytypes->title_en}}</h3>
                </div>
            </div>

            <div class="default-exp-wrapper">
                <div class="inner">
                    <div class="filter-select-option">
                        <label class="filter-leble">CATEGORIES</label>
                        <select>
                            @forelse ($types as $type)
                            <option value="{{$type->id}}">{{$type->title_en}}</option>
                            @empty
                            <option >Error</option>
                            @endforelse  
                        </select>
                    </div>
                 
                    <div class="filter-select-option">
                        <label class="filter-leble">Tanlang</label>
                        <select>
                            <option data-display="Collections">Pullik</option>
                            <option value="1">Tekin</option>
                        </select>
                    </div>

                </div>
            </div>

            <div class="row g-5 mt_dec--30">
                <!-- start single product -->

                @forelse ($products as $product)
                <div class="col-5 col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                    <div class="product-style-one no-overlay with-placeBid">
                        <div class="card-thumbnail">
                                                @php
                                                    $images = is_string($product->images) ? json_decode($product->images, true) : ($product->images ?? []);
                                                @endphp
                                                @if (!empty($images) && is_array($images))
                                                      <a href="{{ route('productdetail.show', $product->id) }}">
                                                            <img src="{{ asset('storage/' . $images[0]) }}" alt="NFT_portfolio">
                                                        </a>
                                                @else
                                                    <span class="text-muted">No Image</span>
                                                @endif
                          
                            <a href="{{ route('productdetail.show', $product->id) }}" class="btn btn-primary">Yuklash</a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="{{ route('productdetail.show', $product->id) }}" class="avatar" data-tooltip=""><img src="{{ asset('assets/images/icons/boy-avater.png') }}" alt="Nft_Profile"></a>
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
                        <a href="{{ route('productdetail.show', $product->id) }}"><span class="product-name">{{$product->title_en}}</span></a>
                        <div class="bid-react-area">
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">322</span>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <h3>error</h3>
                @endforelse  
            </div>
        </div>
    </div>
    <!-- end product area -->
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
