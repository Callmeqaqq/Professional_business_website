
@extends('layouts.site')
{{--@extends('layouts.head')--}}
@section('main')
    <div class="product-area pb-60">
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
                                    <a href="{{$item->Slug}}">
                                        <img src="{{asset('images/product/'.$item->Images)}}" alt="">
                                    </a>
                                    <div class="product-badge badge-top badge-right badge-pink">
                                            @if ($item->Discount != 0)
                                            <span>-{{$item->Discount*100}}%</span>
                                            @endif
                                    </div>
                                    <div class="product-action-2-wrap">
                                        <button class="product-action-btn-2" title="Add To Cart"><i class="pe-7s-cart"></i> Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="{{$item->Slug}}">{{$item->ProductName}}</a></h3>
                                    <div class="product-price">
                                        @if ($item->Discount != 0)
                                        <span class="old-price">{{number_format((100*$item->Price)/((1-$item->Discount)*100))}} <sup>vnđ</sup></span>
                                        @endif
                                        <span class="new-price">{{number_format($item->Price)}} <sup>vnđ</sup></span>
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
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-35">
                                <div class="product-img img-zoom mb-25">
                                    <a href="product-details.html">
                                        <img src="images/product/product-9.png" alt="">
                                    </a>
                                    <div class="product-badge badge-top badge-right badge-pink">
                                        <span>-10%</span>
                                    </div>
                                    <div class="product-action-wrap">
                                        <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i></button>
                                        <button class="product-action-btn-1" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="pe-7s-look"></i>
                                        </button>
                                    </div>
                                    <div class="product-action-2-wrap">
                                        <button class="product-action-btn-2" title="Add To Cart"><i class="pe-7s-cart"></i> Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-details.html">Modern Lounge Chairs</a></h3>
                                    <div class="product-price">
                                        <span class="old-price">$25.89 </span>
                                        <span class="new-price">$20.25 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- Sản Phẩm Giảm Giá--}}
                <div id="pro-3" class="tab-pane">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-35">
                                <div class="product-img img-zoom mb-25">
                                    <a href="product-details.html">
                                        <img src="images/product/product-4.png" alt="">
                                    </a>
                                    <div class="product-badge badge-top badge-right badge-pink">
                                        <span>-10%</span>
                                    </div>
                                    <div class="product-action-wrap">
                                        <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i></button>
                                        <button class="product-action-btn-1" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="pe-7s-look"></i>
                                        </button>
                                    </div>
                                    <div class="product-action-2-wrap">
                                        <button class="product-action-btn-2" title="Add To Cart"><i class="pe-7s-cart"></i> Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-details.html">Stylish Swing Chair</a></h3>
                                    <div class="product-price">
                                        <span class="old-price">$25.89 </span>
                                        <span class="new-price">$20.25 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop()
