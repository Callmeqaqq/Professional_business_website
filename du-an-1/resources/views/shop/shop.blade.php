@extends('layouts.site')
@section('main')
{{--Style cho pagination--}}
<style>
    .pagination{
        justify-content: center;
    }
    .page-item.active .page-link {
        background-color: #d0011b;
        border-color: #d0011b;
    }
    .page-link {
        color: black;
    }
    .page-link:hover {
        color: #d0011b;
    }
    .pagination a:focus {
        color: black;
        box-shadow: 0 0 5px #d0011b;
    }
    .row{
        animation: fadeEffect 1.5s;
    }
    @keyframes fadeEffect {
        from {opacity: 0;}
        to {opacity: 1;}
    }
    input[type=radio]:checked + label>p {
        padding:5px;
        background-color: #d0011b;
        color:white;
        font-size: 14px;
        border-radius:15px;
        margin:5px;
    }
    input[type=radio] + label>p {
        padding:5px;
        background-color: white;
        color:#d0011b;
        font-size: 14px;
        border-radius:15px;
        margin:5px;
        border:1px solid #d0011b;
    }
</style>
<div class="banner">
    <img style="width:100%;" src="{{asset('./images/banner/banner_shop.jpg')}}" alt="">
</div>

<div class="shop-area shop-page-responsive pb-100">
    <div class="container">
        {{--{{ Breadcrumbs::render('shop') }}--}}
        @if(isset($data[0]->CategoryName))
            {{Breadcrumbs::render('productCategory',$data[0]->CategoryName, $data[0]->CategorySlug)}}
        @else
            {{Breadcrumbs::render('shop')}}
        @endif
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
{{--                <div class="shop-topbar-wrapper mb-40">--}}
{{--                    <div class="shop-topbar-left" data-aos="fade-up" data-aos-delay="200">--}}
{{--                        <div class="showing-item">--}}
{{--                            <span>Có {{count($data->items())}}/ {{$data->total()}} sản phẩm đang được hiển thị</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


                <div class="shop-bottom-area">
                    <div class="tab-content jump">
                        <form action="">
                            @csrf
                        <div id="shop-1" class="tab-pane active load-product">
{{--                            <div class="row" >--}}
{{--                                @foreach($data as $item)--}}
{{--                                <div class="col-lg-4 col-md-4 col-sm-6 col-12">--}}
{{--                                    <div class="product-wrap mb-35" data-aos="fade-up" data-aos-delay="200">--}}
{{--                                    <div class="product-img img-zoom mb-25">--}}
{{--                                        <a href="{{asset('products/'.$item->Slug)}}">--}}
{{--                                            <img src="{{ asset('images/product/'.$item->Images) }}" alt="">--}}
{{--                                        </a>--}}
{{--                                        <div class="product-badge badge-top badge-right badge-pink">--}}
{{--                                                @if ($item->Discount != 0)--}}
{{--                                                <span style="padding:5px; background-color: #d0011b; color:white; border-radius: 10px;">-{{$item->Discount*100}}%</span>--}}
{{--                                                @endif--}}
{{--                                        </div>--}}
{{--                                        <div class="product-action-2-wrap">--}}
{{--                                            <a href="/products/{{$item->Slug}}" class="product-action-btn-2" title="Mua Ngay"><i--}}
{{--                                                    class="pe-7s-cart"></i> Mua Ngay--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-content">--}}
{{--                                        <h3><a href="{{asset('products/'.$item->Slug)}}">{{$item->ProductName}}</a></h3>--}}
{{--                                        <div class="product-price">--}}
{{--                                            @if ($item->Discount != 0)--}}
{{--                                            <span class="old-price">{{number_format((100*$item->Price)/((1-$item->Discount)*100))}} <sup>vnđ</sup></span>--}}
{{--                                            @endif--}}
{{--                                            <span class="new-price">{{number_format($item->Price)}} <sup>vnđ</sup></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}

{{--                            <div  class="paginate mb-40">--}}
{{--                                {{$data -> links()}}--}}
{{--                            </div>--}}
                        </div>
                        </form>
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
                            </div>
{{--                            </form>--}}
                        </div>
                    </div>
                    <div class="sidebar-widget sidebar-widget-border mb-40 pb-35" data-aos="fade-up" data-aos-delay="200">
                        <div class="sidebar-widget-title mb-30">
                            <h3>Tìm kiếm theo giá</h3>
                        </div>
                        <div class="price-filter">
                            <div class="price-slider-amount">
                                <div class="label-input">
                                    <select name="price" id="amount">
                                        <option no value>Lọc giá</option>
                                        <option value="1000000">Dưới 1,000,000</option>
                                        <option value="2000000">Dưới 2,000,000</option>
                                        <option value="5000000">Dưới 5,000,000</option>
                                        <option value="10000000">Dưới 10,000,000</option>
                                        <option value="15000000">Dưới 15,000,000</option>
                                        <option value="20000000">Dưới 20,000,000</option>
                                        <option value="100000000">Dưới 100,000,000</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget sidebar-widget-border mb-40 pb-35" data-aos="fade-up" data-aos-delay="200">
                        <div class="sidebar-widget-title mb-25">
                            <h3>Danh Mục Sản Phẩm</h3>
                        </div>
                        <div class="sidebar-list-style">
                            <div id="search_cat" style="display: block;">
                                <input class="input-hidden" type="radio" name="cate" id="novalue" no value>
                                <label class="cate" for="novalue"><p>⛔ Không</p></label>
                                @foreach($category as $cat)
                                    @if(isset($slug))
                                        @if($cat->CategorySlug == $slug)
                                            <input class="input-hidden" type="radio" name="cate" id="{{$cat->CategoryName}}" checked value="{{$cat->CategorySlug}}">
                                            <label class="cate" for="{{$cat->CategoryName}}"><p >{{$cat->CategoryName}}</p></label>
                                        @else
                                            <input class="input-hidden" type="radio" name="cate" id="{{$cat->CategoryName}}" value="{{$cat->CategorySlug}}">
                                            <label class="cate" for="{{$cat->CategoryName}}"><p >{{$cat->CategoryName}}</p></label>
                                        @endif
                                    @else
                                        <input class="input-hidden" type="radio" name="cate" id="{{$cat->CategoryName}}" value="{{$cat->CategorySlug}}">
                                        <label class="cate" for="{{$cat->CategoryName}}"><p >{{$cat->CategoryName}}</p></label>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
{{--                    <div class="sidebar-widget sidebar-widget-border mb-40 pb-35" data-aos="fade-up" data-aos-delay="200">--}}
{{--                        <div class="sidebar-widget-title mb-25">--}}
{{--                            <h3>Chọn Màu</h3>--}}
{{--                        </div>--}}
{{--                        <div class="sidebar-widget-color sidebar-list-style">--}}
{{--                            <ul>--}}
{{--                                <li><a class="black" href="#">Đen <span>4</span></a></li>--}}
{{--                                <li><a class="blue" href="#">Xanh <span>9</span></a></li>--}}
{{--                                <li><a class="brown" href="#">Xám <span>5</span></a></li>--}}
{{--                                <li><a class="red" href="#">Đỏ <span>3</span></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
@stop()

