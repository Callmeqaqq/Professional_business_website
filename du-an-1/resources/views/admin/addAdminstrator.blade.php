@extends('layouts.admin')
@section('main')
    <div class="row">
        <div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 col-11">
            <div class="card">
                <div class="card-body">
                <h4>Nhập thông tin người quảng trị</h4>
                <form action="" method="POST">
                    <div class="card-body row">
                        <div class="form-group col-6">
                            <label
                            >Họ và Tên</label
                            >
                            <input
                                type="text"
                                class="form-control date-inputmask"
                                id="date-mask"
                                placeholder="Nhập họ và tên"
                                name="Fullname"
                            />
                        </div>
                        <div class="form-group col-6">
                            <label>Email</label>
                            <input
                                id="inputText4"
                                type="email"
                                name="email"
                                class="form-control"
                                placeholder="Nhập email"
                            />
                        </div>
                    </div>
                    <div class="card-body row">
                    <div class="form-group col-6">
                        <label for="inputText4" class="col-form-label">Chọn chức vụ cho user</label>
                        <select class="form-control" aria-label="Default select example">
                            <option selected value="0">Chọn 1 chức vụ của user</option>

                            @foreach($listRole as $role)
                                <option value="{{$role->id_role}}">{{$role->RoleName}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label>Chon trạng thái </label>
                        <label class="custom-control">
                            <input
                                checked
                                type="radio"
                                class="custom-control-input"
                                name="status"
                            /><span class="custom-control-label">Chưa kích hoạt</span>
                        </label>
                        <label class="custom-control ">
                            <input
                                type="radio"
                                class="custom-control-input"
                                name="status"
                            /><span class="custom-control-label">Đã kích hoạt</span>
                        </label>
                    </div>

                </div>
                    <button class="btn btn-outline-primary">Thêm nhân viên</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop()
