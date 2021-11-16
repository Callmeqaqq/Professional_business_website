@extends('layouts.site')
@section('main')
    @if (Session::has('Cart') != null)
    <div class="cart-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <div class="cart-table-content">
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                    <tr>
                                        <th class="width-thumbnail"></th>
                                        <th class="width-name">Tên sản phẩm</th>
                                        <th class="width-price">Giá</th>
                                        <th class="width-quantity">Số lượng</th>
                                        <th class="width-subtotal">Thành tiền</th>
                                        <th class="width-remove"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(Session::get('Cart')->products as $value)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="/products/{{$value['productInfo']->Slug}}"><img src="{{'images/product/'.$value['productInfo']->Images}}" alt=""></a>
                                        </td>
                                        <td class="product-name">
                                            <h5><a slug="{{$value['productInfo']->Slug}}" href="/products/{{$value['productInfo']->Slug}}">{{$value['productInfo']->ProductName}}</a></h5>
                                        </td>
                                        <td class="product-cart-price"><span class="amount">{{number_format($value['price'])}}</span></td>
                                        <td class="cart-quality">
                                            <div class="product-quality"><div class="dec qtybutton">-</div>
                                                <input class="cart-plus-minus-box input-text qty text" name="qtybutton" value="{{$value['quantity']}}">
                                                <div class="inc qtybutton">+</div></div>
                                        </td>0
                                        <td class="product-total"><span>{{number_format($value['quantity']*$value['price'])}}</span></td>
                                        <td class="product-remove"><a href=""><i class="ti-trash"></i></a></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-shiping-update-wrapper">
                                        <div class="cart-shiping-update btn-hover">
                                            <a href="">Tiếp tục mua hàng</a>
                                        </div>
                                        <div class="cart-clear-wrap">
                                            <div class="cart-clear btn-hover">
                                                <button>Cập nhật giỏ hàng</button>
                                            </div>
                                            <div class="cart-clear btn-hover">
                                                <a href="" class="btn-delete-cart">Xóa tất cả</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="cart-calculate-discount-wrap mb-40">
{{--                        <h4>Calculate shipping </h4>--}}
{{--                        <div class="calculate-discount-content">--}}
{{--                            <div class="select-style mb-15">--}}
{{--                                <select class="select-two-active select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">--}}
{{--                                    <option data-select2-id="3">Bangladesh</option>--}}
{{--                                    <option data-select2-id="7">Bahrain</option>--}}
{{--                                    <option data-select2-id="8">Azerbaijan</option>--}}
{{--                                    <option data-select2-id="9">Barbados</option>--}}
{{--                                    <option data-select2-id="10">Barbados</option>--}}
{{--                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="17" style="width: 290px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ec2s-container"><span class="select2-selection__rendered" id="select2-ec2s-container" role="textbox" aria-readonly="true" title="Bangladesh">Bangladesh</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
{{--                            </div>--}}
{{--                            <div class="select-style mb-15">--}}
{{--                                <select class="select-two-active select2-hidden-accessible" data-select2-id="4" tabindex="-1" aria-hidden="true">--}}
{{--                                    <option data-select2-id="6">State / County</option>--}}
{{--                                    <option data-select2-id="12">Bahrain</option>--}}
{{--                                    <option data-select2-id="13">Azerbaijan</option>--}}
{{--                                    <option data-select2-id="14">Barbados</option>--}}
{{--                                    <option data-select2-id="15">Barbados</option>--}}
{{--                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="18" style="width: 290px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-1i0e-container"><span class="select2-selection__rendered" id="select2-1i0e-container" role="textbox" aria-readonly="true" title="State / County">State / County</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
{{--                            </div>--}}
{{--                            <div class="input-style">--}}
{{--                                <input type="text" placeholder="Town / City">--}}
{{--                            </div>--}}
{{--                            <div class="input-style">--}}
{{--                                <input type="text" placeholder="Postcode / ZIP">--}}
{{--                            </div>--}}
{{--                            <div class="calculate-discount-btn btn-hover">--}}
{{--                                <a class="btn theme-color" href="#">Update</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="cart-calculate-discount-wrap mb-40">
                        <h4>Mã giảm giá</h4>
                        <div class="calculate-discount-content">
                            <p>Nhập mã giảm giá (nếu bạn có).</p>
                            <div class="input-style">
                                <input type="text" placeholder="Mã giảm giá">
                            </div>
                            <div class="calculate-discount-btn btn-hover">
                                <a class="btn theme-color" href="#">Áp dụng</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="grand-total-wrap">
                        <div class="grand-total-content">
                            <h3>Tiền sản phẩm<span>{{number_format(Session::get('Cart')->totalPrice)}} đ</span></h3>
                            <div class="grand-shipping">
                                <span>Vận chuyển</span>
                                <ul>
                                    <li><input type="radio" name="shipping" value="info" checked="checked"><label>Free shipping</label></li>
                                    <li><input type="radio" name="shipping" value="info" checked="checked"><label>Flat rate: <span>$100.00</span></label></li>
                                    <li><input type="radio" name="shipping" value="info" checked="checked"><label>Local pickup: <span>$120.00</span></label></li>
                                </ul>
                            </div>
                            <div class="shipping-country">
                                <p>Shipping to Bangladesh</p>
                            </div>
                            <div class="grand-total">
                                <h4>Tổng tiền <span>$185.00</span></h4>
                            </div>
                        </div>
                        <div class="grand-total-btn btn-hover">
                            <a class="btn theme-color" href="checkout.html">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
        <p style="text-align: center">Giỏ hàng hiện đang trống</p>
    @endif
@stop()
