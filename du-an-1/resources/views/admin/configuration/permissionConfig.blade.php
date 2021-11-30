@extends('layouts.admin')
@section('main')
    <div class="row">
        <div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 col-11">
            <div class="card">
                <div class="card-body">
                    <h4>Thêm quyền nhân viên</h4>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{asset('/admin/update-config-permission')}}" method="post">
                        @csrf
                        <div class="card-body row">
                            <div class="form-group col-6">
                                <label for="inputText4" class="col-form-label">Nhân viên</label>
                                <select class="form-control" name="PermissionUser" aria-label="Default select example">
                                    <option value="">Chọn nhân viên</option>
                                    @foreach($admins as $admin)
                                        <option value="{{$admin->UserId}}">
                                            {{$admin->UserId}} | {{$admin->RoleName}} | {{$admin->Email}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label for="inputText4" class="col-form-label">Chọn quyền</label>
                                <select class="form-control" name="PermissionAction"
                                        aria-label="Default select example">
                                    <option value="">Chọn quyền thao tác</option>
                                    @foreach($list_permissions as $permissions)
                                        <option value="{{$permissions->id_per}}">
                                            {{$permissions->name_per}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-outline-primary">Thêm quyền</button>
                    </form>

                    <hr>

                    <h4>Thiết lập giấy phép</h4>
                    @if (session('licenced'))
                        <div class="alert alert-success">
                            {{ session('licenced') }}
                        </div>
                    @endif
                    <form action="{{asset('/admin/update-config-licenced')}}" method="post">
                        @csrf
                        <div class="card-body row">
                            <div class="form-group col-6">
                                <label for="inputText4" class="col-form-label">Nhân viên</label>
                                <select id="LicencedUser" class="form-control" name="LicencedUser"
                                        aria-label="Default select example">
                                    <option value="" disabled selected>Chọn nhân viên</option>
                                    @foreach($admins as $admin)
                                        <option value="{{$admin->UserId}}">
                                            {{$admin->UserId}} | {{$admin->RoleName}} | {{$admin->Email}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label for="inputText4" class="col-form-label">Quyền thao tác</label>
                                <select id="LicencedUserPermission" class="form-control" name="LicencedUserPermission"
                                        aria-label="Default select example">
                                    <option value="">Chọn nhân viên trước</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label for="inputText4" class="col-form-label">Trạng thái</label>
                                <select id="LicencedStatus" class="form-control" name="LicencedStatus" aria-label="Default select example">
                                    <option value="" disabled selected>Chọn quyền thao tác</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Cập nhật</button>
                        <div class="test"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            //select user for check user's permission
            $('#LicencedUser').on('change', function () {
                let permission = $("#LicencedUserPermission");
                let userID = $(this).val();

                permission.empty();
                // $('.test').html($(this).val());
                $.ajax({
                    type: 'GET',
                    url: '/admin/get-user-permissions/' + userID,
                })
                    .done(function (data) {
                        permission.append($('<option>').text('Chọn quyền nv').attr('disabled','').attr('selected',''));
                        for (let i = 0; i < data.length; i++) {
                            let id_per = data[i]['id_per'];
                            let name_per = data[i]['name_per'];
                            permission.append($('<option>').val(id_per).text(name_per));
                        }

                    })
                    .error(function () {
                        alert("Lỗi");
                    });

            });

            //select permission for change licenced
            $('#LicencedUserPermission').change(function () {
                let selected = $(this).children('option:selected').val();
                let userID = $('#LicencedUser').children('option:selected').val();
                $.ajax({
                    type: 'GET',
                    url: '/admin/get-permission-licenced/' + selected + '/' + userID,
                })
                .done(function (data) {
                    let status = $('#LicencedStatus');
                    status.empty();
                    for(let i = 0; i < 2;i++) {
                        if(i === 0){
                            status.append($('<option>').val(i).text('Tạm dừng'));
                        }else{
                            status.append($('<option>').val(i).text('Kích hoạt'));
                        }
                    }
                    status.val(data).attr('selected','selected');
                })
                .error(function () {
                    alert("Lỗi");
                });
            })
        });
    </script>
@stop()
