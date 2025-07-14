@extends('front.layouts.app')

@section('title', 'START-UP @SUXROB')

@section('content')


   <div class="rn-breadcrumb-inner ptb--30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <h5 class="title text-center text-md-start">Categories</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-list">
                        <li class="item"><a href="{{route('home')}}">Home</a></li>
                        <li class="separator"><i class="feather-chevron-right"></i></li>
                        <li class="item current">{{$category->title_en}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title area -->



    <div class="en-product-area rn-section-gap">
        <div class="container">
            <div class="row mb--30">
                <div class="col-12">
                    <h3 class="title">{{$category->title_en}}</h3>
                </div>
            </div>
            <div class="row">
                <div class="banner-one-slick slick-activation-03 slick-arrow-style-one rn-slick-dot-style slick-gutter-15">
                    

                @forelse ($categorytypes as $categorytype)
                    <div class="single-slide-product">
                        <div class="product-style-one no-overlay">
                            <div class="card-thumbnail">
                                <a href="{{ route('productshow.show', $categorytype->id) }}"><img src="{{ asset('storage/' . $categorytype->image) }}" alt="NFT_portfolio"></a>
                            </div>
                          
                            <a href="{{ route('productshow.show', $categorytype->id) }}" style="display:block; margin-top: 30px;">
                                <span class="product-name">{{$categorytype->title_en}}</span>
                            </a>

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

                    @endforelse   
                    @forelse ($categorytypes as $categorytype)
                    <div class="single-slide-product">
                        <div class="product-style-one no-overlay">
                            <div class="card-thumbnail">
                                <a href="{{ route('productshow.show', $categorytype->id) }}"><img src="{{ asset('storage/' . $categorytype->image) }}" alt="NFT_portfolio"></a>
                            </div>
                          
                            <a href="{{ route('productshow.show', $categorytype->id) }}" style="display:block; margin-top: 30px;">
                                <span class="product-name">{{$categorytype->title_en}}</span>
                            </a>

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

                    @endforelse   

           

                </div>
            </div>
        </div>
    </div>

@endsection
