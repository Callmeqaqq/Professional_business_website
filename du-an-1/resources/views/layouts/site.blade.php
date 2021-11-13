<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>MetaH - Mơ ước của mọi nhà</title>
    <meta name="robots" content="noindex, follow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Jquery -->
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
<!-- Add site Favicon -->
    <link
        rel="icon"
        href="{{asset('images/favicon/cropped-favicon-32x32.png')}}"
        sizes="32x32"
    />

    <!-- All CSS is here -->
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/vendor/pe-icon-7-stroke.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/vendor/themify-icons.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/vendor/font-awesome.min.css')}}"/>

    <link rel="stylesheet" href="{{ asset('css/index.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/plugins/swiper.min.css')}} "/>
</head>

<body>
<div class="main-wrapper main-wrapper-2">
    <header class="header-area header-responsive-padding header-height-1">
        <div class="header-top d-none d-lg-block bg-gray ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-6">
                        <div class="welcome-text">
                            <p>Chào Mừng đến MetaH</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6">
                        <div class="language-currency-wrap">
                            <div class="language-wrap">
                                <a class="language-active" href="#">Tiếng Việt</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom sticky-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="logo">
                            <a href="{{url('/')}}"><img src="{{asset('/images/logo/logo.png')}}" alt="logo"/></a>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block d-flex justify-content-center">
                        <div class="main-menu text-center">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="{{url(' ')}}">TRANG CHỦ</a>
                                    </li>
                                    <li>
                                        <a href="{{url('shop')}}">CỬA HÀNG</a>
                                        <ul class="mega-menu-style mega-menu-mrg-1">
                                            <li>
                                                <ul>
                                                    <li>
                                                        <a class="dropdown-title" href="#">Danh mục sản phẩm</a>
                                                        <ul>
                                                            @foreach($category as $cat)
                                                                <li><a href="category/{{$cat->CategorySlug}}">{{$cat->CategoryName}}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html"><img src="assets/images/banner/menu.png" alt=""/></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('blog')}}">TIN TỨC</a></li>
                                    <li><a href="{{url('about-us')}}">GIỚI THIỆU</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="header-action-wrap">
                            <div class="header-action-style header-search-1">
                                <a class="search-toggle" href="#">
                                    <i class="pe-7s-search s-open"></i>
                                    <i class="pe-7s-close s-close"></i>
                                </a>
                                <div class="search-wrap-1">
                                    <form action="#">
                                        <input placeholder="Tìm kiếm sản phẩm…" type="text"/>
                                        <button class="button-search">
                                            <i class="pe-7s-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="header-action-style">
                                <a title="Đăng nhập/ Đăng kí" href="
                                @if (Session()->has('LoggedUser'))
                                {{route('buyer.profile')}}
                                @else
                                {{route('buyer.login')}}
                                @endif
                                    "><i class="pe-7s-user"></i></a>
                            </div>
                            <div class="header-action-style header-action-cart">
                                <a class="cart-active" href="#"><i class="pe-7s-shopbag"></i>
                                    <span class="product-count bg-black">01</span>
                                </a>
                            </div>
                            <div class="header-action-style d-block d-lg-none">
                                <a class="mobile-menu-active-button" href="#"><i class="pe-7s-menu"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="sidebar-cart-active">
        <div class="sidebar-cart-all">
            <a class="cart-close" href="#"><i class="pe-7s-close"></i></a>
            <div class="cart-content">
                <h3>Giỏ Hàng</h3>
                <ul>
                    @if (Session::has('Cart') != null)
                        @foreach(Session::get('Cart')->products as $value)
                        <li>
                            <div class="cart-img">
                                <a href="/products/{{$value['productInfo']->Slug}}"><img src="{{'images/product/'.$value['productInfo']->Images}}" alt=""/></a>
                            </div>
                            <div class="cart-title">
                                <h4><a href="/products/{{$value['productInfo']->Slug}}">{{$value['productInfo']->ProductName}}</a></h4>
                                <span> {{$value['quantity']}} × {{number_format($value['price'])}} </span>
                            </div>
                            <div class="cart-delete">
                                <a href="#">×</a>
                            </div>
                        </li>
                        @endforeach
                </ul>
                    <div class="cart-total">
                        <h4>Thành tiền: <span>$170.00</span></h4>
                    </div>
                    <div class="cart-btn btn-hover">
                        <a class="theme-color" href="{{route('cart')}}">Xem giỏ hàng</a>
                    </div>
                    <div class="checkout-btn btn-hover">
                        <a class="theme-color" href="checkout.html">Thanh toán</a>
                    </div>
                    @else
                        <p style="text-align: center">Giỏ hàng hiện đang trống!</p>
                    @endif
            </div>
        </div>
    </div>
    @yield('main')
    <footer class="footer-area">
        <div class="bg-gray-2">
            <div class="container">
                <div class="footer-top pt-80 pb-35">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget footer-about mb-40">
                                <div class="footer-logo">
                                    <a href="{{url('')}}"
                                    ><img src="{{asset('/images/logo/logo.png')}}" alt="logo"
                                        /></a>
                                </div>
                                <p>
                                    Mơ ước của mọi nhà
                                </p>
                                <div class="payment-img">
                                    <a href="#"><img src="{{asset('/images/icon-img/payment.png')}}" alt="logo"/></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget footer-widget-margin-1 footer-list mb-40">
                                <h3 class="footer-title">Thông tin</h3>
                                <ul>
                                    <li><a href="{{url('about-us')}}">Về chúng tôi</a></li>
                                    <li><a href="#">Thông tin giao hàng</a></li>
                                    <li><a href="#">Chính sách bảo mật</a></li>
                                    <li><a href="#">Điều khoản & Điều kiện</a></li>
                                    <li><a href="#">Dịch vụ khách hàng</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget footer-list mb-40">
                                <h3 class="footer-title">Tài Khoản</h3>
                                <ul>
                                    <li><a href="#">Tài khoản của tôi</a></li>
                                    <li><a href="#">Lịch sử đặt hàng</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div
                                class="footer-widget footer-widget-margin-2 footer-address mb-40">
                                <h3 class="footer-title">Get in touch</h3>
                                <ul>
                                    <li><span>Địa chỉ: </span>Your address goes here</li>
                                    <li><span>Điện thoại:</span> (012) 345 6789</li>
                                    <li><span>Email: </span>demo@example.com</li>
                                </ul>
                                <div class="open-time">
                                    <p>
                                        Mở cửa: <span>8:00 AM</span> - Đóng cửa:
                                        <span>18:00 PM</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-3">
            <div class="container">
                <div class="footer-bottom copyright text-center bg-gray-3">
                    <p>
                        Copyright ©2021 | Tạo bởi <i class="fa fa-heart"></i>
                        <a href="#"> MetaH</a>.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Mobile Menu start -->
    <div class="off-canvas-active">
        <a class="off-canvas-close"><i class="ti-close"></i></a>
        <div class="off-canvas-wrap">
            <div class="welcome-text off-canvas-margin-padding">
                <p>Chào mừng đén với MetaH</p>
            </div>
            <div class="mobile-menu-wrap off-canvas-margin-padding-2">
                <div id="mobile-menu" class="slinky-mobile-menu text-left">
                    <ul>
                        <li>
                            <a href="index.html">Trang Chủ</a>
                        </li>
                        <li>
                            <a href="#">Cửa Hàng</a>
                            <ul>
                                @foreach($category as $cat)
                                    <li><a href="category/{{$cat->CategorySlug}}">{{$cat->CategoryName}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="#">Tin tức</a>
                        </li>
                        <li>
                            <a href="about-us.html">Giới Thiệu</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Javascript có thể dựa vào đây custom lại-->
<script src="{{asset('js/vendor/modernizr-3.11.2.min.js')}} "></script>
<script src="{{asset('js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
<script src="{{asset('js/vendor/popper.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>

<script src="{{asset('js/plugins/jquery.syotimer.min.js')}}"></script>
<script src="{{asset('js/plugins/swiper.min.js')}}"></script>
<script src="{{asset('js/plugins/scrollup.js')}}"></script>
<script src="{{asset('js/plugins/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('js/plugins/counterup.min.js')}}"></script>
<script src="{{asset('js/plugins/select2.min.js')}}"></script>
<script src="{{asset('js/plugins/easyzoom.js')}}"></script>
{{--JS AddToCart--}}
<script src="{{asset('js/add-to-cart.js')}}"></script>
<!-- JS chính -->
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
