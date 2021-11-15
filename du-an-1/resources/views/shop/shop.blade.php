@extends('layouts.site')
@section('main')
{{--Style cho pagination--}}
<style>
    .pagination{
        justify-content: center;
    }
    .page-item.active .page-link {
        background-color: #ff6347;
        border-color: #ff6347;
    }
    .page-link {
        color: black;
    }
    .page-link:hover {
        color: #ff6347;
    }
    .pagination a:focus {
        color: black;
        box-shadow: 0 0 5px #ff6347;
    }
</style>

{{--{{ Breadcrumbs::render('shop') }}--}}
@if(isset($data[0]->CategoryName))
    {{Breadcrumbs::render('productCategory',$data[0]->CategoryName, $data[0]->CategorySlug)}}
@else
    {{Breadcrumbs::render('shop')}}
@endif
<div class="shop-area shop-page-responsive pt-100 pb-100">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="shop-topbar-wrapper mb-40">
                    <div class="shop-topbar-left" data-aos="fade-up" data-aos-delay="200">
                        <div class="showing-item">
                            <span>Có {{count($data->items())}}/ {{$data->total()}} sản phẩm đang được hiển thị</span>
                        </div>
                    </div>
                </div>
                <div class="shop-bottom-area">
                    <div class="tab-content jump">
                        <div id="shop-1" class="tab-pane active">
                            <div class="row">
                                @foreach($data as $item)
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                    <div class="product-wrap mb-35" data-aos="fade-up" data-aos-delay="200">
                                    <div class="product-img img-zoom mb-25">
                                        <a href="{{asset('products/'.$item->Slug)}}">
                                            <img src="{{ asset('images/product/'.$item->Images) }}" alt="">
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
                                        <h3><a href="{{asset('products/'.$item->Slug)}}">{{$item->ProductName}}</a></h3>
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

                            <div  class="paginate" style="">
                                {{$data -> links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="sidebar-wrapper">
                    <div class="sidebar-widget mb-40" data-aos="fade-up" data-aos-delay="200">
                        <div class="search-wrap-2">
{{--                            <form class="search-2-form">--}}
                            <div class="search-2-form">
                                <input placeholder="Tìm kiếm sản phẩm*" id="search-all" type="text">
                                <button class="button-search"><i class=" ti-search "></i></button>
                            </div>
{{--                            </form>--}}
                        </div>
                    </div>
                    <div class="sidebar-widget sidebar-widget-border mb-40 pb-35" data-aos="fade-up" data-aos-delay="200">
                        <div class="sidebar-widget-title mb-30">
                            <h3>Tìm kiếm theo giá</h3>
                        </div>
                        <div class="price-filter">
                            <div id="slider-range"></div>
                            <div class="price-slider-amount">
                                <div class="label-input">
                                    <label>Giá:</label>
                                    <input type="text" id="amount" name="price" placeholder="........" />
                                </div>
                                <button type="button">Tìm</button>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget sidebar-widget-border mb-40 pb-35" data-aos="fade-up" data-aos-delay="200">
                        <div class="sidebar-widget-title mb-25">
                            <h3>Danh Mục Sản Phẩm</h3>
                        </div>
                        <div class="sidebar-list-style">
                            <ul>
                                @foreach($category as $cat)
                                <li><a href="{{asset('category/'.$cat->CategorySlug)}}">{{$cat->CategoryName}} <span></span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget sidebar-widget-border mb-40 pb-35" data-aos="fade-up" data-aos-delay="200">
                        <div class="sidebar-widget-title mb-25">
                            <h3>Chọn Màu</h3>
                        </div>
                        <div class="sidebar-widget-color sidebar-list-style">
                            <ul>
                                <li><a class="black" href="#">Đen <span>4</span></a></li>
                                <li><a class="blue" href="#">Xanh <span>9</span></a></li>
                                <li><a class="brown" href="#">Xám <span>5</span></a></li>
                                <li><a class="red" href="#">Đỏ <span>3</span></a></li>
                                <li><a class="orange" href="#">Cam <span>4</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop()

