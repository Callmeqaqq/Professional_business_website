<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
</head>
<body>
<div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- navbar -->
    <!-- ============================================================== -->
    <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <a class="navbar-brand" style="color: aqua" href="{{asset('/admin')}}">Metah</a>
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
                                <h5 class="mb-0 text-white nav-user-name">John Abraham</h5>
                                <span class="status"></span
                                ><span class="ml-2">Available</span>
                            </div>
                            <a class="dropdown-item" href="#"
                            ><i class="fas fa-user mr-2"></i>Account</a
                            >
                            <a class="dropdown-item" href="#"
                            ><i class="fas fa-cog mr-2"></i>Setting</a
                            >
                            <a class="dropdown-item" href="#"
                            ><i class="fas fa-power-off mr-2"></i>Logout</a
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
    <div class="nav-left-sidebar sidebar-dark">
        <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">Menu</li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" aria-expanded="false"
                            ><i class="fa fa-fw fa-user-circle"></i>Dashboard
                                <span class="badge badge-success">6</span></a
                            >
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link" href="#" data-toggle="collapse"
                                aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10">
                                <i class="fas fa-f fa-folder"></i>Sản Phẩm
                            </a>
                            <div id="submenu-10" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{asset('/admin/category')}}">Danh mục sản phẩm</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{asset('/admin/product')}}">Tất cả sản phẩm</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{asset('/admin/product/add-category')}}">Thêm danh mục</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{asset('/admin/product/add-product')}}">Thêm sản phẩm</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link" href="#" data-toggle="collapse"
                                aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9">
                                <i class="fas fa-f fa-folder"></i>Menu Level
                            </a>
                            <div id="submenu-9" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Level 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="collapse"
                                           aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">
                                            Level 2
                                        </a>
                                        <div id="submenu-11" class="collapse submenu" style="">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Level 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Level 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Level 3</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<script src="{{asset('vendor/jquery/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
<!-- <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script> -->
{{--<script src="../assets/libs/js/main-js.js"></script>--}}

<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        @yield('main')
    </div>
</div>
{{--Js datatables--}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css"/>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function () {
        $("#table").DataTable({
            lengthMenu: [5, 10, 20, 30],
            language: {
                processing: "Đang tải dữ liệu",
                search: "Tìm kiếm: ",
                lengthMenu: "Lượng hiển thị " + " _MENU_ ",
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
