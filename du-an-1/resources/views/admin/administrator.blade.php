@extends('layouts.admin')
@section('main')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="d-flex justify-content-between " style="border-bottom: 1px solid #e6e6f2">
                <h3 class="card-header ">Quản trị viên </h3>
                <a href="{{route('admin.addAdministrator')}}" class="btn btn-primary btn-sm " style="margin-right:20px">Thêm Người quảng trị</a>
            </div>

                <div class="card-body">
                <div class="table-responsive">
                    <table
                        id="table"
                        class="table table-striped table-bordered first"
                    >
                        <thead style="background-color: rgb(0, 248, 248)">
                        <tr>
                            <th>Email</th>
                            <th>Họ tên</th>
                            <th>Chức vụ</th>
                            <th>Trạng thái</th>
                            <th>Tùy chỉnh</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($admins as $admin)
                        <tr>
                            <td>{{$admin->Email}}</td>
                            <td>{{$admin->Fullname}}</td>
                            <td>{{$admin->RoleName}}</td>
                            <td><button class="btn {{$admin->active=== 0 ? 'btn-secondary':'btn-primary' }} ">{{$admin->active=== 0 ? 'Ngừng hoạt động':'Đang hoạt động' }}</button></td>
                            <td><buttom class="btn btn-primary"><i class="fab fa-edit"></i> Cập nhật</buttom> <button class="btn btn-danger"><i class="fab fa-trash-alt"></i> Xóa</button></td>
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
