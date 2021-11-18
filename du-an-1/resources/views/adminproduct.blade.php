<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DataTables</title>
    <!-- Bootstrap CSS -->
{{--    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <style>
        body {
            padding-top: 40px;
        }
    </style>
</head>
<body>
<div class="container">
    <table class="table table-striped table-bordered first" id="products">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Sản Phẩm</th>
                <th style="width: 100px;">Hình Ảnh</th>
                <th>Giá (VNĐ)</th>
                <th>Slug</th>
                <th>Giảm giá</th>
                <th>Cân nặng</th>
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
                <td>{{$pd->CreateAt}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script type="text/javascript" charset="utf-8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    {{--$(function () {--}}
    {{--    $('#products').DataTable({--}}
    {{--        processing: true,--}}
    {{--        serverSide: true,--}}
    {{--        ajax: '{{asset('admin/get-product')}}',--}}
    {{--        columns:[--}}
    {{--            {data: 'ProductId', name: 'ProductId'},--}}
    {{--            {data: 'ProductName', name: 'ProductName'},--}}
    {{--            {data: 'Price', name: 'Price'},--}}
    {{--            {data: 'Slug', name: 'Slug'},--}}
    {{--            {data: 'Discount', name: 'Discount'}--}}
    {{--        ]--}}
    {{--    });--}}
    {{--});--}}
    $(document).ready( function () {
        $('#products').DataTable({
            "lengthMenu": [5, 10, 20, 30],
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
                    last: "Trang cuối"
                },
                aria: {
                    sortAscending: ": Đang sắp xếp theo column",
                    sortDescending: ": Đang sắp xếp theo column",
                }
            },
        });
    });
</script>
</body>
</html>
