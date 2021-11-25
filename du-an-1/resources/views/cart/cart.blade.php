@extends('layouts.site')
@section('main')
    {{ Breadcrumbs::render('cart') }}
    <div id="list-cart-main">
    @if (Session::has('Cart') != null)
    <div class="cart-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
{{--                    <form action="#">--}}
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
                                        <th class="width-save"></th>
                                        <th class="width-remove"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(Session::get('Cart')->products as $value)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="/products/{{$value['productInfo']->Slug}}"><img src="{{'images/product/'.$value['productInfo']->Color}}" alt=""></a>
                                        </td>
                                        <td class="product-name">
                                            <h5><a slug="{{$value['productInfo']->Slug}}" href="/products/{{$value['productInfo']->Slug}}">{{$value['productInfo']->VariantName}}</a></h5>
                                        </td>
                                        <td class="product-cart-price"><span class="amount">{{number_format($value['productInfo']->ProductPrice + ($value['productInfo']->ProductPrice * $value['productInfo']->VariantPrice))}}</span></td>
                                        <td class="cart-quality">
                                            <div class="product-quality"><div class="dec qtybutton">-</div>
                                                <input class="cart-plus-minus-box input-text qty text" name="qtybutton" data-slug="{{$value['productInfo']->Slug}}" data-variant="{{$value['productInfo']->VariantId}}" id="quantity-item-{{$value['productInfo']->Slug}}" value="{{$value['quantity']}}">
                                                <div class="inc qtybutton">+</div></div>
                                        </td>
                                        <td class="product-total"><span>{{number_format($value['quantity'] * ($value['productInfo']->ProductPrice + ($value['productInfo']->ProductPrice * $value['productInfo']->VariantPrice)))}}</span></td>
                                        <td class="product-save"><a style="cursor: pointer;"><i class="ti-save" data-slug="{{$value['productInfo']->Slug}}" onclick="SaveItemListCart('{{$value['productInfo']->Slug}}', {{$value['productInfo']->VariantId}})" slug="{{$value['productInfo']->Slug}}"></i></a></td>
                                        <td class="product-remove"><a style="cursor: pointer;"><i class="btn-delete-item-list-cart ti-trash" onclick="DeleteItemListCart('{{$value['productInfo']->Slug}}', {{$value['productInfo']->VariantId}})" slug="{{$value['productInfo']->Slug}}"></i></a></td>
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
                                            <a href="/shop">Tiếp tục mua hàng</a>
                                        </div>
                                        <div class="cart-clear-wrap">
                                            <div class="cart-clear btn-hover">
                                                <button class="btn-update-all-cart">Cập nhật giỏ hàng</button>
                                            </div>
                                            <div class="cart-clear btn-hover">
                                                <button class="btn-delete-all-cart">Xóa tất cả</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--                    </form>--}}
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
                                <span>Tổng số lượng: <b>{{number_format(Session::get('Cart')->totalQuantity)}}</b> sản phẩm</span>
{{--                                <span>Vận chuyển</span>--}}
{{--                                <ul>--}}
{{--                                    <li><input type="radio" name="shipping" value="info" checked="checked"><label>Free shipping</label></li>--}}
{{--                                    <li><input type="radio" name="shipping" value="info" checked="checked"><label>Flat rate: <span>$100.00</span></label></li>--}}
{{--                                    <li><input type="radio" name="shipping" value="info" checked="checked"><label>Local pickup: <span>$120.00</span></label></li>--}}
{{--                                </ul>--}}
                            </div>
                            <div class="shipping-country">
                                <p>Mua hàng tại MetaH</p>
                            </div>
                            <div class="grand-total">
                                <h4>Tổng tiền <span>{{number_format(Session::get('Cart')->totalPrice)}} Vnđ</span></h4>
                            </div>
                        </div>
                        <div class="grand-total-btn btn-hover">
                            <a class="btn theme-color" href="/checkout">Tiến hành thanh toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
        <p style="text-align: center">Giỏ hàng hiện đang trống</p>
    @endif
    </div>
    <script type="text/javascript">
        function DeleteItemListCart(slug, variantId) {
            $.ajax({
                type : 'GET',
                url  : 'cart/delete-item-list-cart/'+slug+'/'+variantId,
            }).done(function (response) {
                RenderListCart(response)
            });
        }

        function SaveItemListCart(slug, variantId) {
            $.ajax({
                type : 'GET',
                url  : 'cart/save-item-list-cart/'+slug+'/'+variantId+'/'+$('#quantity-item-'+slug).val(),
            }).done(function (response) {
                RenderListCart(response);
                alertify.success('Cập nhật thành công!');
            })
        }

        $(".btn-update-all-cart").on("click", function (){
            var lists = [];
            $("table tbody tr td").each(function() {
                $(this).find("input").each(function() {
                    var element = {slug: $(this).data('slug'), variant: $(this).data('variant'), quantity: $(this).val()};
                    lists.push(element);
                })
            });
            $.ajax({
                type : 'GET',
                url  : 'cart/save-all-list-cart',
                data : {
                    "_token" : "{{csrf_token()}}",
                    "data" : lists
                },
            }).done(function (response) {
                RenderListCart(response);
                alertify.success('Cập nhật thành công!');
            })
        });

        $(".btn-delete-all-cart").on("click", function (){
            $.ajax({
                type : 'GET',
                url  : 'cart/delete-all-list-cart',
            }).done(function (response) {
                RenderListCart(response);
                alertify.success('Xóa thành công!');
            })
        });

        function RenderListCart(response) {
            $("#list-cart-main").empty();
            $("#list-cart-main").html(response);

            var CartPlusMinus = $('.product-quality');
            CartPlusMinus.prepend('<div class="dec qtybutton">-</div>');
            CartPlusMinus.append('<div class="inc qtybutton">+</div>');
            $(".qtybutton").on("click", function() {
                var $button = $(this);
                var oldValue = $button.parent().find("input").val();
                if ($button.text() === "+") {
                    var newVal = parseFloat(oldValue) + 1;
                } else {
                    // Don't allow decrementing below zero
                    if (oldValue > 1) {
                        var newVal = parseFloat(oldValue) - 1;
                    } else {
                        newVal = 1;
                    }
                }
                $button.parent().find("input").val(newVal);
            });
        }
    </script>
@stop()
