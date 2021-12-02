<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/vendor/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}"/>
    <script src="{{asset('js/notiflix/notiflix-aio.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset("vendor/vector-map/jqvmap.css")}}"/>
    <link rel="stylesheet" href="{{asset("vendor/charts/chartist-bundle/chartist.css")}}"/>
    <link rel="stylesheet" href="{{asset("vendor/charts/c3charts/c3.css")}}"/>
</head>
<body>
<?php
if (session('status')) {
    $arr = explode('/', session('status'));
    $statu = $arr[0];
    $message = $arr[1];
    session()->forget('status');
}


?>
@if (isset($statu))
    <section id="alert" class="{{$statu}} ">
        <div class="content-alert ">
            @if($statu === 'success')
                <i class="fab fa-check-circle"></i>
            @else
                <i class="fab fa-exclamation-triangle"></i>
            @endif
            <div class="text">
                <h4 class="title">{{$statu}}</h4>
                <span class="details">{{$message}}</span>
            </div>
            <a class="close" id="btn-ok">&times;</a>
            <div id="ease"></div>
        </div>
    </section>
@endif
<div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- navbar -->
    <!-- ============================================================== -->
    <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            {{--            <a class="navbar-brand" style="color: aqua" href="{{asset('/admin')}}"><img src="{{asset('images/logo/logo1.png')}}" alt=""></a>--}}
            <a class="navbar-brand" style="color: var(--danger)" href="{{route('dashboard.index')}}">
                <span><img style="width:40px" src="{{asset('/images/icon-img/merry3.png')}}" alt=""></span>
                Metah
                <span><img style="width:40px" src="{{asset('/images/icon-img/merry3.png')}}" alt=""></span>
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right-top">
                    <li class="nav-item dropdown nav-user">
                        <a
                            class="nav-link nav-user-img"
                            href="#"
                            id="navbarDropdownMenuLink2"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        ><img
                                title="Tên người dùng"
                                src="{{asset('/images/users/default.jpg')}}"
                                alt=""
                                class="user-avatar-md rounded-circle"
                            /></a>
                        <div
                            class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                            aria-labelledby="navbarDropdownMenuLink2"
                        >
                            <div class="nav-user-info">
                                <h5 class="mb-0 text-white nav-user-name">{{session()->get('LoggedUserName')}}</h5>
                                <span class="status"></span
                                ><span class="ml-2">Active</span>
                            </div>
                            <a class="dropdown-item" href="{{asset('/profile')}}"
                            ><i class="fas fa-user mr-2"></i>Tài khoản của bạn</a
                            >
                            <a class="dropdown-item" href="{{asset('/buyer/logout')}}"
                            ><i class="fas fa-power-off mr-2"></i>Đăng Xuất</a
                            >
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- ============================================================== -->
    <!-- end navbar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- left sidebar -->
    <!-- ============================================================== -->

    <?php
    $array = explode('/', request()->path());
    $url_active = $array[1] ?? '';
    ?>


    <div class="nav-left-sidebar sidebar-dark">
        <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">Menu</li>
                        <li class="nav-item">
                            <a class="nav-link  {{ '' ===   $url_active  ? 'active':''}}" href="#" aria-expanded="false"
                            ><i class="fab fa-briefcase"></i>Dashboard
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a class="nav-link {{'administrator' ===   $url_active ||'updateAdministrator' ===   $url_active||'addAdministrator' ===   $url_active  ? 'active':''}}"
                               href="{{route('admin.administrator')}}" aria-expanded="false"
                            ><i class="fab fa-unlock-alt "></i>Quản trị viên
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a class="nav-link {{ 'listComment' ===   $url_active ||'comment' ===   $url_active  ? 'active':''}}"
                               href="{{route('comment.list')}}" aria-expanded="false"
                            ><i class="fab fa-comment "></i>Quản lí bính luận
                            </a>
                        </li>

                        {{--warehouse role check end--}}
                        @if((session('UserRole') != 'HRM') && (session('UserRole') != 'Writer'))
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse"
                                   aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10">
                                    <i class="fas fa-f fa-folder"></i>Sản Phẩm
                                </a>
                                <div id="submenu-10" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{asset('/admin/category')}}">Danh mục sản
                                                phẩm</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{asset('/admin/product')}}">Tất cả sản phẩm</a>
                                        </li>
                                        @if(Session::has('Create') || Session::has('Full'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{asset('/admin/product/add-category')}}">Thêm
                                                    danh
                                                    mục</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{asset('/admin/product/add-product')}}">Thêm
                                                    sản
                                                    phẩm</a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </li>
                        @endif
                        {{--warehouse role check end--}}

                        {{--configuration--}}
                        @if(session('UserRole') == 'SuperAdmin')
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse"
                                   aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8">
                                    <i class="fas fa-f fa-folder"></i>Cấu hình
                                </a>
                                <div id="submenu-8" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{asset('/admin/config-permission')}}">Phân quyền
                                                quản
                                                trị</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{asset('/admin/config-payment')}}">Thiết lập
                                                thanh
                                                toán</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{asset('/admin/config-shipfee')}}">Thiết
                                                lập vận chuyển</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{asset('/admin')}}">Content
                                                Slider</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endif
                        {{--configuration--}}

                        {{--content--}}
                        @if(session('UserRole') == 'Writer' || session('UserRole') == 'SuperAdmin' || session('UserRole') == 'Manager')
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse"
                                   aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9">
                                    <i class="fas fa-f fa-folder"></i>Quản lý bài viết
                                </a>
                                <div id="submenu-9" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        @if(Session::has('Create') || Session::has('Full'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{url('admin/blog/new')}}">Tạo bài viết</a>
                                            </li>
                                        @endif
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('admin/blog')}}">Bài viết đã đăng</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('admin/blog/category')}}">Quản lý danh
                                                mục</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('admin/blog/comments')}}">Bình luận chờ
                                                duyệt</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endif
                        {{--content--}}
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse"
                               aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9">
                                <i class="fas fa-f fa-folder"></i>Quản lý người dùng
                            </a>
                            <div id="submenu-9" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('admin/users')}}">Danh sách người dùng</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Xếp hạng chi tiêu thành viên</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        {{--order--}}
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse"
                               aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-9">
                                <i class="fas fa-f fa-folder"></i>Quản lý đơn hàng
                            </a>
                            <div id="submenu-11" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('admin.order')}}">Xem tất cả đơn hàng</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        {{--order--}}
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<script src="{{asset("vendor/jquery/jquery-3.3.1.min.js")}}"></script>
<script src="{{asset("vendor/bootstrap/js/bootstrap.bundle.js")}}"></script>
{{--<!-- <script src="../assets/{{asset("/vendor/slimscroll/jquery.slimscroll.js")}}"></script> -->--}}
{{--<script src="../assets/libs/js/main-js.js"></script>--}}

<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        @yield('main')
    </div>
</div>
{{--Js datatables--}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css"/>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<!-- chart chartist js -->
<script src="{{asset("vendor/charts/chartist-bundle/chartist.min.js")}}"></script>
<script src="{{asset("vendor/charts/chartist-bundle/Chartistjs.js")}}"></script>
<script src="{{asset("vendor/charts/chartist-bundle/chartist-plugin-threshold.js")}}"></script>
<!-- chart C3 js -->
<script src="{{asset("vendor/charts/c3charts/c3.min.js")}}"></script>
<script src="{{asset("vendor/charts/c3charts/d3-5.4.0.min.js")}}"></script>
<!-- chartjs js -->
<script src="{{asset("vendor/charts/charts-bundle/Chart.bundle.js")}}"></script>
<script src="{{asset("vendor/charts/charts-bundle/chartjs.js")}}"></script>
<!-- sparkline js -->
<script src="{{asset("vendor/charts/sparkline/jquery.sparkline.js")}}"></script>
<!-- dashboard finance js -->

<script src="{{asset("vendor/charts/morris-bundle/raphael.min.js")}}"></script>
<script src="{{asset("vendor/charts/morris-bundle/morris.js")}}"></script>
<script src="{{asset("vendor/charts/morris-bundle/morrisjs.html")}}"></script>
<script src="{{asset('js/admin.js')}}"></script>
<script>
    $(document).ready(function () {
        $("#btn-ok").click(function () {
            $("#alert").fadeOut();
        });
        $("#table").DataTable({
            lengthMenu: [10, 20, 30],
            language: {
                processing: "Đang tải dữ liệu",
                search: "Tìm kiếm: ",
                lengthMenu: "Lượng hiển thị:  " + " _MENU_ ",
                info: "_START_ - _END_ / _TOTAL_",
                infoEmpty: "Không có dữ liệu",
                infoFiltered: "(Trên tổng _MAX_ mục)",
                infoPostFix: " sản phẩm", // Cái này khi thêm vào nó sẽ đứng sau info
                loadingRecords: "",
                zeroRecords: "Không tồn tại dữ liệu cần tìm",
                emptyTable: "Không có dữ liệu",
                paginate: {
                    first: "Trang đầu",
                    previous: "<",
                    next: ">",
                    last: "Trang cuối",
                },
                aria: {
                    sortAscending: ": Đang sắp xếp theo column",
                    sortDescending: ": Đang sắp xếp theo column",
                },
            },
        });
    });
</script>
@yield('scripts')
</body>
</html>
