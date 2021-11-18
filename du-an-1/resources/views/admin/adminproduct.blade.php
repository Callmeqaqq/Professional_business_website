@extends('layouts.admin')
@section('main')
    <div class="row">
        <!-- ============================================================== -->
        <!-- basic table  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h3 class="card-header">Danh mục sản phẩm</h3>
                <div class="card-body">
                    <div class="table-responsive">
                        <table
                            id="table"
                            class="table table-striped table-bordered first">
                            <thead style="background-color: #0e0c28;">
                            <tr>
                                <th>ID</th>
                                <th>Tên Sản Phẩm</th>
                                <th style="width: 100px;">Hình Ảnh</th>
                                <th>Giá (VNĐ)</th>
                                <th>Slug</th>
                                <th>Giảm giá</th>
                                <th>Cân nặng(Kg)</th>
                                <th>Lượt xem</th>
                                <th>Ngày tạo</th>
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
                                    <td>{{date('d-m-Y', strtotime($pd->CreateAt))}}</td>
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
