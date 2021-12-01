@extends('layouts.admin')
@section('main')
    <div class="row">
        <div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 col-11">
            <div class="card">
                <div class="card-body">
                    <h4>Thiết lập phí vận chuyển</h4>
                    <form action="" method="post">
                        @csrf
                        <div class="card-body row">
                            <div class="form-group col-6">
                                <label for="inputText4" class="col-form-label">Nội thành(VNĐ/KM)</label>
                                <input
                                    type="text"
                                    class="form-control date-inputmask"
                                    id="date-mask"
                                    placeholder="Nhập số tiền trên mỗi Ki-lô-mét"
                                    name="Fullname"
                                    value="{{old('Fullname')}}"
                                />
                            </div>
                            <div class="form-group col-6">
                                <label for="inputText4" class="col-form-label">Ngoại Thành(VNĐ/KM)</label>
                                <input
                                    type="text"
                                    class="form-control date-inputmask"
                                    id="date-mask"
                                    placeholder="Nhập số tiền trên mỗi Ki-lô-mét"
                                    name="Fullname"
                                    value="{{old('Fullname')}}"
                                />
                            </div>
                        </div>
                        <button class="btn btn-outline-primary">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop()
