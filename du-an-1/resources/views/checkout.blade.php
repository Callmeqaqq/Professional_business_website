@extends('layouts.site')
@section('main')

    <!-- Load the `goong-geocoder` plugin. -->
    <script src="https://cdn.jsdelivr.net/npm/@goongmaps/goong-geocoder/dist/goong-geocoder.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@goongmaps/goong-geocoder/dist/goong-geocoder.css" rel="stylesheet"
          type="text/css"/>

    <!-- Promise polyfill script is  -->
    <!-- to use Goong Geocoder in IE 11. -->
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>
    <style>
        #geocoder {
            z-index: 1;
            width: 100%;
        }

        .goongjs-ctrl-geocoder {
            min-width: 100%;
        }

        .mapboxgl-ctrl-geocoder--icon-search {
            display: none;
        }

        @media screen and (min-width: 640px) {
            .mapboxgl-ctrl-geocoder {
                max-width: 100%;
                width: 100%;
            }
        }

        .mapboxgl-ctrl-geocoder {
            box-shadow: none;
        }

    </style>
    {{--                                            @if (Session::has('Cart') != null)--}}

    {{ Breadcrumbs::render('checkout') }}
    <div class="checkout-main-area pt-100">
        <div class="container">
            <div class="checkout-wrap pt-30">
                <form method="post" action="{{route('checkout.submit')}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-7 billing-block">
                            <div class="billing-info-wrap">
                                <h3>Thông Tin Thanh Toán</h3>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-20">
                                            <label>Họ & Tên <abbr class=""
                                                                  title="Thông tin bắt buộc">*</abbr></label>
                                            <input type="text" placeholder="Nhập họ và tên người nhận" name="Fullname"
                                                    >
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-20">
                                            <label>Địa chỉ <abbr class=""
                                                                 title="Thông tin bắt buộc">*</abbr></label>
                                            {{--Company address--}}
                                            <input id="latt" type="number" name="latt" value="10.854252599999999"
                                                   hidden>
                                            <input id="long" type="text" name="long" value="106.62872511153768" hidden>

                                            {{--autocomplete & place info--}}
                                            <div id="geocoder" class="billing-address"></div>

                                            <span id="kilo" class="text-warnings"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <label>SĐT <abbr class=""
                                                             title="Thông tin bắt buộc">*</abbr></label>
                                            <input type="text" placeholder="Nhập số điện thoại người nhận" name="Phone"
                                                   >
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <label>Email <abbr class=""
                                                               title="Thông tin bắt buộc">*</abbr></label>
                                            <input type="email" placeholder="Email người nhận" name="Email" >
                                            @error('Email')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-account-toggle open-toggle2 mb-30">
                                    <label>Xác nhận tạo đơn <abbr class=""
                                                                  title="Thông tin bắt buộc">*</abbr></label>
                                    <input placeholder="Password" type="password" autocomplete="off" name="Password"
                                           >
                                </div>
                                <div class="additional-info-wrap">
                                    <label>Ghi chú</label>
                                    <textarea class="note" placeholder="Yêu cầu đặc biệt, lưu ý cho Cửa Hàng/Shipper"
                                              name="Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="your-order-area">
                                <h3>Đơn hàng của bạn</h3>
                                <div class="your-order-wrap gray-bg-4">
                                    <div class="your-order-info-wrap">
                                        <div class="your-order-info">
                                            <ul>
                                                <li>Sản phẩm <span>Tổng</span></li>
                                            </ul>
                                        </div>
                                        <div class="your-order-middle">
                                            <ul>
                                                @foreach(Session::get('Cart')->products as $value)
                                                    <li>{{$value['productInfo']->ProductName}} X {{$value['quantity']}}
                                                        <span>{{number_format($value['price'])}}</span></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="your-order-info order-subtotal">
                                            <ul>
                                                <li>Tổng tiền hóa đơn
                                                    <span>{{number_format(Session::get('Cart')->totalPrice)}}</span>
                                                </li>
                                                <input type="number" id="total-before-shipfee" hidden
                                                       value="{{Session::get('Cart')->totalPrice}}">
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="pay-top sin-payment">
                                            <input id="payment-method-3" class="input-radio" type="radio" value="after"
                                                   name="payment_method" >
                                            <label for="payment-method-3">Thanh toán khi nhận hàng</label>
                                            <div class="payment-box" id="after">
                                                <p>Quãng đường vận chuyển: <span id="shipping-km">0</span></p>
                                                {{--                                            $data from shipping option--}}
                                                <p>Phí vận chuyển: <span id="shipfee-km">{{$data}}</span> vnd/km</p>
                                                {{--                                            <p>Phí vận chuyển: <span id="shipfee-km">{{(Session::get('Cart')->products)}}</span> vnd/km</p>--}}
                                                <p>Tổng tiền ship: <span id="totalship-fee">0</span> vnd</p>
                                                <input type="number" id="totalship" hidden value="">
                                                <hr>
                                                <p>Hàng sẽ được giao trong vòng 48h(3-5 ngày đối với giao hàng ở tỉnh),
                                                    quý
                                                    khách vui lòng giữ điện thoại trong thời gian này.</p>
                                            </div>
                                        </div>
                                        <div class="pay-top sin-payment sin-payment-3">
                                            <input id="payment-method-4" class="input-radio" type="radio" value="before"
                                                   name="payment_method" >
                                            <label for="payment-method-4">Thanh toán trả trước <img alt=""
                                                                                                    src=""></label>
                                            <div class="payment-box" id="before">
                                                <p>Miễn phí tiền ship khi thanh toán bằng hình thức trả trước.</p>
                                            </div>
                                        </div>
                                        <div class="your-order-info order-total">
                                            <ul>
                                                <li>Tổng số tiền phải thanh toán <span
                                                        id="total-order">{{number_format(Session::get('Cart')->totalPrice)}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p align="justify" style="font-size: 10.5px; margin-top: 8px">Nhấn "Đặt hàng" đồng nghĩa
                                    với
                                    việc bạn đồng ý với <a href="#" class="rules">Điều khoản
                                        MetaH</a></p>
                                <div class="Place-order btn-hover">
                                    <button type="submit">Đặt hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@stop
