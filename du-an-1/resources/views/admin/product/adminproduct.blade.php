@extends('layouts.admin')
@section('main')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h3 class="card-header">Tất cả sản phẩm</h3>
                @if(session()->has('del-success'))
                        <div class="alert alert-danger col3">
                            <strong>Bạn đã xóa thành công sản phẩm "{{session()->pull('del-success')}}"</strong>
                        </div>
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <table
                            id="table"
                            class="table table-striped table-bordered first">
                            <thead style="background-color: #0e0c28;">
                            <tr>
                                <th style="width: 10px;">ID</th>
                                <th style="width: 100px;">Tên Sản Phẩm</th>
                                <th style="width: 80px;">Hình Ảnh</th>
                                <th style="width: 80px;">Giá (VNĐ)</th>
                                <th style="width: 60px;">Giảm giá</th>
                                <th style="width: 70px;">Cân nặng</th>
                                <th style="width: 70px;">Lượt xem</th>
                                <th style="width: 100px;">Hoạt Động</th>
                                <th style="width: 70px;">Ngày tạo</th>
                                <th style="width: 80px;">Hành Động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($product as $pd)
                                <tr>
                                    <td>{{$pd->ProductId}}</td>
                                    <td>{{$pd->ProductName}}</td>
                                    <td><img style="width:80%" src="{{asset('./images/product/'.$pd->Images)}}" alt=""></td>
                                    <td>{{number_format($pd->Price)}}</td>
                                    <td>{{$pd->Discount * 100}}%</td>
                                    <td>{{$pd->Weight}}</td>
                                    <td>{{$pd->Views}}</td>
                                    <td>
                                        @if($pd->Active==1)
                                            Đang hoạt động
                                        @else
                                            Không hoạt động
                                        @endif
                                    </td>
                                    <td>{{date('d-m-Y', strtotime($pd->CreateAt))}}</td>
                                    <td style="text-align:right">
                                        <a href="{{asset('admin/product/edit-product/'.$pd->Slug)}}"><button class="btn btn-outline-primary"><i class="fas fa-info-circle"></i></button></a>
                                        <a href="{{asset('admin/product/delete-product/'.$pd->Slug)}}" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không?')"><button class="btn btn-outline-danger"><i class="fas fa-minus-circle"></i></button></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop()
