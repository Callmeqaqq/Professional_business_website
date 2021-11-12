@extends('layouts.site')
@section('main')
    <div class="login-register-area pb-100 pt-95">
        <div class="container">
            <div id="{{$page}}"></div>
            <div class="row">
                <div class="col-lg-8 col-md-12 offset-lg-2">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a  data-bs-toggle="tab" href="#lg1">
                                <h4> Đăng Nhập </h4>
                            </a>
                            <a data-bs-toggle="tab" href="#lg2">
                                <h4> Đăng Ký </h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div class="results">
                                @if(Session::get('status'))
                                    <div class="alert alert-success">
                                        {{Session::get('status')}}
                                    </div>
                                @endif
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="{{route('buyer.check')}}" method="post">
                                            @csrf
                                            <input type="email" name="loginEmail" placeholder="Email"
                                                   value="{{ old('email') }}">
                                            <span class="text-danger">@error('loginEmail') {{$message}}@enderror</span>
                                            <input type="password" name="loginPassword" placeholder="Mật khẩu">

                                            <span class="text-danger">@error('loginPassword') {{$message}}@enderror</span>
                                            <div class="login-toggle-btn">
{{--                                                <label>--}}
{{--                                                    <input type="checkbox">--}}
{{--                                                </label>--}}
{{--                                                <label>Nhớ đăng nhâp</label>--}}
                                                <a href="#lg3" >Quên mật khẩu?</a>
                                            </div>
                                            <div class="button-box btn-hover">
                                                <button type="submit">Đăng nhập</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="lg2" class="tab-pane">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="{{ route('buyer.insertUser') }}" method="post">
                                            @csrf
                                            <input type="text" name="name" placeholder="Họ và Tên"
                                                   value="{{old('name')}}">
                                            <span class="text-danger">@error('name'){{$message}} @enderror</span>
                                            <input type="email" name="email" placeholder="Email"
                                                   value="{{old('email')}}">
                                            <span class="text-danger">@error('email'){{$message}} @enderror</span>
                                            <input type="password" name="password" placeholder="Mật Khẩu">
                                            <span class="text-danger">@error('password'){{$message}} @enderror</span>
                                            <input type="password" name="password_confirmation" placeholder="Xác thực mật Khẩu">
                                            <span class="text-danger">@error('password'){{$message}} @enderror</span>
                                            <div class="button-box btn-hover">
                                                <button type="submit">Đăng ký</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="lg3" class="tab-pane">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="{{route('buyer.postEmail')}}" method="post">
                                            @csrf
                                            <input type="email" name="email" placeholder="Nhâp email đã đăng ký"
                                                   value="{{old('email')}}">
                                            <span class="text-danger">@error('email'){{$message}} @enderror</span>
                                            <div class="button-box btn-hover">
                                                <button type="submit">Gửi lại mật khẩu</button>
                                            </div>
                                        </form>
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
