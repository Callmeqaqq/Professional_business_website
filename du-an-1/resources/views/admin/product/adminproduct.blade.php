@extends('layouts.admin')
@section('main')
    <div class="row">
        <!-- ============================================================== -->
        <!-- basic table  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h3 class="card-header">Tất cả sản phẩm</h3>
                <div class="card-body">
                    <div class="table-responsive">
                        <table
                            id="table"
                            class="table table-striped table-bordered first">
                            <thead style="background-color: #0e0c28;">
                            <tr>
                                <th style="width: 10px;">ID</th>
                                <th>Tên Sản Phẩm</th>
                                <th style="width: 80px;">Hình Ảnh</th>
                                <th>Giá (VNĐ)</th>
                                <th style="width: 50px;" >Slug</th>
                                <th>Giảm giá</th>
                                <th style="width: 30px;">Cân nặng(Kg)</th>
                                <th style="width: 10px;">Lượt xem</th>
                                <th>Hoạt Động</th>
                                <th>Ngày tạo</th>
                                <th>Hành Động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($product as $pd)
                                <tr>
                                    <td>{{$pd->ProductId}}</td>
                                    <td>{{$pd->ProductName}}</td>
                                    <td><img style="width:80%" src="{{asset('./images/product/'.$pd->Images)}}" alt=""></td>
                                    <td>{{number_format($pd->Price)}}</td>
                                    <td>{{$pd->Slug}}</td>
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
                                    <td>
                                        <a href="{{asset('admin/product/edit-product/'.$pd->Slug)}}"><button class="btn btn-outline-primary">Sửa</button></a>
                                        <button class="btn btn-outline-danger">Xóa</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end basic table  -->
        <!-- ============================================================== -->
    </div>
@stop()
