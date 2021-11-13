@extends('layouts.head');
@section('main')
    <div class="checkout-main-area pt-100">
        <div class="container">
            <div class="checkout-wrap pt-30">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="billing-info-wrap">
                            <h3>Thông Tin Thanh Toán</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20">
                                        <label>Họ & Tên <abbr class="required"
                                                              title="Thông tin bắt buộc">*</abbr></label>
                                        <input type="text" placeholder="Nhập họ và tên người nhận" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20">
                                        <label>Địa chỉ <abbr class="required"
                                                             title="Thông tin bắt buộc">*</abbr></label>
                                        <input class="billing-address" placeholder="Địa chỉ nhận hàng" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="billing-info mb-20">
                                        <label>SĐT <abbr class="required" title="Thông tin bắt buộc">*</abbr></label>
                                        <input type="text" placeholder="Nhập số điện thoại người nhận">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="billing-info mb-20">
                                        <label>Email <abbr class="required" title="Thông tin bắt buộc">*</abbr></label>
                                        <input type="text" placeholder="Email người nhận">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-account-toggle open-toggle2 mb-30">
                                <label>Xác nhận tạo đơn <abbr class="required"
                                                              title="Thông tin bắt buộc">*</abbr></label>
                                <input placeholder="Password" type="password">
                            </div>
                            <div class="additional-info-wrap">
                                <label>Ghi chú</label>
                                <textarea class="note" placeholder="Yêu cầu đặc biệt, lưu ý cho Cửa Hàng/Shipper"
                                          name="message"></textarea>
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
                                            <li>Product X 1 <span>123 </span></li>
                                            <li>Product X 2 <span>222 </span></li>
                                        </ul>
                                    </div>
                                    <div class="your-order-info order-subtotal">
                                        <ul>
                                            <li>Tổng tiền hóa đơn <span>123 </span></li>
                                        </ul>
                                    </div>
                                    <!-- <div class="your-order-info order-shipping">
                                            <ul>
                                                <li>Shipping <p>Enter your full address </p>
                                                </li>
                                            </ul>
                                        </div> -->

                                </div>
                                <div class="payment-method">
                                    <div class="pay-top sin-payment">
                                        <input id="payment-method-3" class="input-radio" type="radio" value="after"
                                               name="payment_method">
                                        <label for="payment-method-3">Thanh toán khi nhận hàng</label>
                                        <div class="payment-box" id="after">
                                            <p>Tổng quãng đường: 300km</p>
                                            <p>Phí vận chuyển: 1.000.000vnđ</p>
                                            <hr>
                                            <p>Hàng sẽ được giao trong vòng 48h(3-5 ngày đối với giao hàng ở tỉnh), quý
                                                khách vui lòng giữ điện thoại trong thời gian này.</p>
                                        </div>
                                    </div>
                                    <div class="pay-top sin-payment sin-payment-3">
                                        <input id="payment-method-4" class="input-radio" type="radio" value="before"
                                               name="payment_method">
                                        <label for="payment-method-4">Ví Momo <img alt=""
                                                                                   src="assets/images/icon-img/payment.png"></label>
                                        <div class="payment-box" id="before">
                                            <p>Thanh toán trả trước sẽ được giảm giá 5% cho mọi loại sản phẩm.</p>
                                        </div>
                                    </div>
                                    <div class="your-order-info order-total">
                                        <ul>
                                            <li>Tổng số tiền phải thanh toán <span>1.111.000</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <p align="justify">Nhấn "Đặt hàng" đồng nghĩa với việc bạn đồng ý với <a href="#">Điều khoản
                                    MetaH</a></p>
                            <div class="Place-order btn-hover">
                                <a href="#">Đặt hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop
