@extends('layouts.site')
@section('main')
    {{--    slider--}}
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="height:600px;">
            @foreach($slider as $sliderURL)
            <div class="carousel-item {{$sliderURL->SliderId==1?'active':''}}">
                <img src="{{$sliderURL->URL}}" class="d-block w-100" alt="#">
            </div>
                @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{--    Danh mục--}}
    <div class="category-area bg-gray-4 pt-95 pb-100">
        <div class="container">
            <div class="section-title-2 st-border-center text-center mb-75" data-aos="fade-up" data-aos-delay="200">
                <h2>Danh mục sản phẩm</h2>
            </div>
            <div class="category-slider-active-2 swiper-container">
                <div class="swiper-wrapper">
                    @foreach($category as $cat)
                        <div class="cat-container">
                            <div class="cat-img">
                                <center>
                                    <a href="category/{{$cat->CategorySlug}}">
                                        <img class="cat-normal-img"
                                             src="{{asset('images/product/'.$cat->CategoryImage)}}" alt="">
                                    </a>
                                </center>
                            </div>
                            <div class="cat-name">
                                <h4><a href="category/{{$cat->CategorySlug}}">{{$cat->CategoryName}}</a></h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- Sản Phẩm   --}}
    <div class="product-area pb-60 pt-30">
        <div class="container">
            {{-- NAV Sản Phẩm--}}
            <div class="section-title-tab-wrap mb-75">
                <div class="section-title-2" data-aos="fade-up" data-aos-delay="200">
                    <h2>Sản Phẩm Nổi Bật</h2>
                </div>
                <div class="tab-style-1 nav" data-aos="fade-up" data-aos-delay="400">
                    <a class="active" href="#pro-1" data-bs-toggle="tab">Sản phẩm mới </a>
                    <a href="#pro-2" data-bs-toggle="tab" class=""> Bán chạy </a>
                    <a href="#pro-3" data-bs-toggle="tab" class=""> Giảm giá </a>
                </div>
            </div>

            <div class="tab-content jump">
                {{-- Sản Phẩm Mới--}}
                <div id="pro-1" class="tab-pane active">
                    <div class="row">
                        @foreach($data as $item)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product-wrap mb-35" data-aos="fade-up" data-aos-delay="200">
                                    <div class="product-img img-zoom mb-25">
                                        <a href="products/{{$item->Slug}}">
                                            <img src="{{asset('images/product/'.$item->Images)}}" alt="">
                                        </a>
                                        <div class="product-badge badge-top badge-right badge-pink">
                                            @if ($item->Discount != 0)
                                                <span style="padding:5px; background-color: #d0011b; color:white; border-radius: 10px;">-{{$item->Discount*100}}%</span>
                                            @endif
                                        </div>
                                        <div class="product-action-2-wrap">
                                            @if (Session::has('LoggedUser'))
                                                <button slug="{{$item->Slug}}" onclick="AddToCart('{{$item->Slug}}')" class="product-action-btn-2" title="Thêm vào giỏ hàng"><i
                                                        class="pe-7s-cart"></i> Thêm vào giỏ hàng
                                                </button>
                                            @else
                                                <a href="/buyer/login" class="product-action-btn-2" title="Thêm vào giỏ hàng"><i
                                                        class="pe-7s-cart"></i> Thêm vào giỏ hàng
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a id="{{$item->ProductId}}" slug="{{$item->Slug}}"
                                               href="products/{{$item->Slug}}">{{$item->ProductName}}</a></h3>
                                        <div class="product-price">
                                            @if ($item->Discount != 0)
                                                <span class="old-price">{{number_format((100*$item->Price)/((1-$item->Discount)*100))}} <sup>vnđ</sup></span>
                                            @endif
                                            <span
                                                class="new-price">{{number_format($item->Price)}} <sup>vnđ</sup></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- Sản Phẩm Bán chạy--}}
                <div id="pro-2" class="tab-pane">
                    <div class="row">
                        @foreach($data as $item)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product-wrap mb-35" data-aos="fade-up" data-aos-delay="200">
                                    <div class="product-img img-zoom mb-25">
                                        <a href="products/{{$item->Slug}}">
                                            <img src="{{asset('images/product/'.$item->Images)}}" alt="">
                                        </a>
                                        <div class="product-badge badge-top badge-right badge-pink">
                                            @if ($item->Discount != 0)
                                                <span style="padding:5px; background-color: #d0011b; color:white; border-radius: 10px;">-{{$item->Discount*100}}%</span>
                                            @endif
                                        </div>
                                        <div class="product-action-2-wrap">
                                            @if (Session::has('LoggedUser'))
                                            <button slug="{{$item->Slug}}" onclick="AddToCart('{{$item->Slug}}')" class="product-action-btn-2" title="Thêm vào giỏ hàng"><i
                                                    class="pe-7s-cart"></i> Thêm vào giỏ hàng
                                            </button>
                                            @else
                                                <a href="/buyer/login" class="product-action-btn-2" title="Thêm vào giỏ hàng"><i
                                                        class="pe-7s-cart"></i> Thêm vào giỏ hàng
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a id="{{$item->ProductId}}" slug="{{$item->Slug}}"
                                               href="products/{{$item->Slug}}">{{$item->ProductName}}</a></h3>
                                        <div class="product-price">
                                            @if ($item->Discount != 0)
                                                <span class="old-price">{{number_format((100*$item->Price)/((1-$item->Discount)*100))}} <sup>vnđ</sup></span>
                                            @endif
                                            <span
                                                class="new-price">{{number_format($item->Price)}} <sup>vnđ</sup></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- Sản Phẩm Giảm Giá--}}
                <div id="pro-3" class="tab-pane">
                    <div class="row">
                        @foreach($discount as $item)
                            @if($item->Discount !=0)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product-wrap mb-35" data-aos="fade-up" data-aos-delay="200">
                                    <div class="product-img img-zoom mb-25">
                                        <a href="products/{{$item->Slug}}">
                                            <img src="{{asset('images/product/'.$item->Images)}}" alt="">
                                        </a>
                                        <div class="product-badge badge-top badge-right badge-pink">
                                            <span style="padding:5px; background-color: #d0011b; color:white; border-radius: 10px;">-{{$item->Discount*100}}%</span>
                                        </div>
                                        <div class="product-action-2-wrap">
                                            @if (Session::has('LoggedUser'))
                                            <button slug="{{$item->Slug}}" onclick="AddToCart('{{$item->Slug}}')" class="product-action-btn-2" title="Thêm vào giỏ hàng"><i
                                                    class="pe-7s-cart"></i> Thêm vào giỏ hàng
                                            </button>
                                            @else
                                                <a href="/buyer/login" class="product-action-btn-2" title="Thêm vào giỏ hàng"><i
                                                        class="pe-7s-cart"></i> Thêm vào giỏ hàng
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a id="{{$item->ProductId}}" slug="{{$item->Slug}}"
                                               href="products/{{$item->Slug}}">{{$item->ProductName}}</a></h3>
                                        <div class="product-price">
                                            @if ($item->Discount != 0)
                                                <span class="old-price">{{number_format((100*$item->Price)/((1-$item->Discount)*100))}} <sup>vnđ</sup></span>
                                            @endif
                                            <span
                                                class="new-price">{{number_format($item->Price)}} <sup>vnđ</sup></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-logo-area pb-95">
        <div class="container">
            <div class="section-title-2" data-aos="fade-up" data-aos-delay="200" style="margin-bottom: 40px">
                <h2>Nhà Phân Phối</h2>
            </div>
            <div class="brand-logo-active swiper-container">
                <div class="swiper-wrapper">
                    @foreach($company as $com)
                    <div class="swiper-slide">
                        <div class="single-brand-logo" data-aos="fade-up" data-aos-delay="200">
                            <a style="cursor: pointer;"><img src="{{asset('images/supplier/'.$com->Images)}}" alt=""></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script>

    </script>
@stop()
