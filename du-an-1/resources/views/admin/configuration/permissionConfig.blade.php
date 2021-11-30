@extends('layouts.admin')
@section('main')
    <div class="row">
        <div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 col-11">
            <div class="card">
                <div class="card-body">
                    <h4>Thiết lập quyền quản trị</h4>
                    <form action="" method="post">
                        @csrf
                        <div class="card-body row">
                            <div class="form-group col-6">
                                <label for="inputText4" class="col-form-label">Nhân viên</label>
                                <select class="form-control" name="role" aria-label="Default select example">
                                    <option value="">Chọn nhân viên</option>
                                    <option>
                                        admin
                                    </option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label for="inputText4" class="col-form-label">Chọn quyền</label>
                                <select class="form-control" name="role" aria-label="Default select example">
                                    <option value="">Chọn quyền thao tác</option>
                                    <option>
                                        create
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="card-body row">
                            <div class="form-group col-6">
                                Quyền hiện có của nhân viên:
                            </div>
                            <div class="form-group col-6">
                                <label>Chon trạng thái </label>
                                <select class="form-control" name="role" aria-label="Default select example">
                                    <option value="">Trạng thái</option>
                                    <option>
                                        kích hoạt
                                    </option>
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-outline-primary">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop()
