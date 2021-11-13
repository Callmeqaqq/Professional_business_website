@extends('layouts.site')
@section('main')

<div class="my-account-wrapper pb-100 pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- My Account Page Start -->
                <div class="myaccount-page-wrapper">
                    <!-- My Account Tab Menu Start -->
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a href="#account-info"  class="active" data-bs-toggle="tab">Thông tin tài khoản</a>
{{--                                <a href="#dashboad" data-bs-toggle="tab">Dashboard</a>--}}
                                <a href="#download" data-bs-toggle="tab">Đổi mật khẩu</a>
                                <a href="#orders" data-bs-toggle="tab">Orders</a>

                                <a href="#payment-method" data-bs-toggle="tab">Payment Method</a>
                                <a href="#address-edit" data-bs-toggle="tab">Address</a>

                                <a href="{{route('buyer.logout')}}">Đăng xuất</a>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->
                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-md-8">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
{{--                                <div class="tab-pane fade show active" id="dashboad" role="tabpanel">--}}
{{--                                    <div class="myaccount-content">--}}
{{--                                        <h3>Dashboard</h3>--}}
{{--                                        <div class="welcome">--}}
{{--                                            <p>Hello, <strong>Alex Tuntuni</strong> (If Not <strong>Tuntuni !</strong><a href="login-register.html" class="logout"> Logout</a>)</p>--}}
{{--                                        </div>--}}

{{--                                        <p class="mb-0">From your account dashboard. you can easily check & view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <!-- Single Tab Content End -->
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Orders</h3>
                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>Order</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Aug 22, 2018</td>
                                                    <td>Pending</td>
                                                    <td>$3000</td>
                                                    <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>July 22, 2018</td>
                                                    <td>Approved</td>
                                                    <td>$200</td>
                                                    <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>June 12, 2017</td>
                                                    <td>On Hold</td>
                                                    <td>$990</td>
                                                    <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="download" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Đổi Mật khẩu</h3>
                                        <div class="account-details-form">
                                            <form action="{{route('buyer.change')}}" method="post">
                                                @csrf
                                                <div class="single-input-item">
                                                    <label for="display-name" class="required">Mật khẩu hiện tại
                                                        <input type="password" id="password_current" name="password_current" value="{{old('password_current')}}" placeholder="Nhập Mật khẩu hiện tại của bạn"/>
                                                    </label>
                                                </div>

                                                <div class="single-input-item">
                                                    <label for="email" class="required">Mật khẩu mới
                                                        <input type="password" id="password_new" name="password_new" value="{{old('password_new')}}"placeholder="nhập mật khẩu mới"/></label>
                                                </div>
                                                <div class="single-input-item">
                                                    <label for="display-name" class="required">Xác nhậ mật khẩu
                                                        <input type="text" id="password_confirm" name="password_confirm" placeholder="Nhập lại mật khẩu mới" /></label>
                                                </div>
                                                <div class="single-input-item btn-hover">
                                                    <button class="check-btn sqr-btn">Đổi mật khẩu</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Payment Method</h3>
                                        <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Billing Address</h3>
                                        <address>
                                            <p><strong>Alex Tuntuni</strong></p>
                                            <p>1355 Market St, Suite 900 <br>
                                                San Francisco, CA 94103</p>
                                            <p>Mobile: (123) 456-7890</p>
                                        </address>
                                        <a href="#" class="check-btn sqr-btn "><i class="fa fa-edit"></i> Edit Address</a>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="account-info" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Thông Tin Tài Khoản</h3>
                                        @if(Session::get('status'))
                                            <div class="alert alert-success">
                                                {{Session::get('status')}}
                                            </div>
                                        @endif
                                        <div class="account-details-form">
                                            <form action="{{route('buyer.update')}}" method="post">

                                                @csrf
                                                <div class="single-input-item">
                                                    <label for="display-name" class="required">Họ va Tên
                                                        <input type="text" id="ho_ten" name="name" value="{{$user->Fullname ??old('name')}}" placeholder="Nhập họ và tên của bạn"/>
                                                        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                                    </label>
                                                </div>

                                                <div class="single-input-item">
                                                    <label for="email" class="required">Địa Chỉ Email
                                                    <input type="email" id="email" name="email" value="{{$user->Email ?? old('email')}}"  placeholder="Nhập email của bạn"/></label>
                                                    <span class="text-danger" >@error('email') {{$message}}@enderror</span>
                                                </div>
                                                <div class="single-input-item">
                                                    <label for="display-name" class="required">Số Diện Thoại
                                                    <input type="text" id="phone " name="phone" value="{{$user->Phone ?? old('phone')}}"  placeholder="Nhập số điện thoại của bạn" /></label>
                                                    <span class="text-danger" >@error('phone') {{$message}}@enderror</span>
                                                </div>
                                                <div class="single-input-item">
                                                    <label for="display-name" class="required">Địa Chỉ
                                                    <input type="text" id="address" name="address" value="{{$user->Address??old('address')}}"  placeholder="Nhập địa chỉ hiện tại của bạn để thận tiện cho việc giao hàng"/></label>
                                                    <span class="text-danger" >@error('address') {{$message}}@enderror</span>
                                                </div>
                                                <div class="single-input-item">
                                                    <label for="display-name" class="required">Mật khẩu
                                                        <input type="password" id="password" name="password" placeholder="Nhập mật khẩu của bạn"/></label>
                                                    <span class="text-danger" >@error('password') {{$message}}@enderror</span>
                                                </div>
                                                <div class="single-input-item btn-hover">
                                                    <button class="check-btn sqr-btn">Lưu thay đổi</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div> <!-- Single Tab Content End -->
                            </div>
                        </div> <!-- My Account Tab Content End -->
                    </div>
                </div> <!-- My Account Page End -->
            </div>
        </div>
    </div>
@stop()
