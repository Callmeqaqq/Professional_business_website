@extends('layouts.admin')
@section('main')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h3 class="card-header">Danh sách đơn hàng</h3>
                <div class="card-body">
                    <select style="margin-bottom: 14px; padding: 5px 8px" name="sltStatus" id="sltStatus">
                        <option value="0">Tất cả đơn hàng</option>
                        @foreach($status as $value)
                                <option value="{{$value->StatusId}}">{{$value->StatusName}}</option>
                        @endforeach
                    </select>
                    <div class="table-responsive" id="table-responsive">
                        <table id="table2" class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Họ và tên</th>
                                <th scope="col">Ngày mua</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Tồng tiền</th>
                                <th scope="col">Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $item)
                                <tr>
                                    <th scope="row">{{$item->OrderId}}</th>
                                    <td>{{$item->Fullname}}</td>
                                    <td>{{$item->CreateAt}}</td>
                                    @if ($item->StatusId == 1 || $item->StatusId == 6)
                                        <td style="color: #d0011b;">{{$item->StatusName}}</td>
                                    @elseif ($item->StatusId == 5)
                                        <td style="color: #1bc88c;">{{$item->StatusName}}</td>
                                    @else
                                        <td style="color: orange;">{{$item->StatusName}}</td>
                                    @endif
                                    <td><b>{{number_format($item->ToPay)}} VNĐ</b></td>
                                    <td>
                                        <a href="{{url('admin/order/order-detail/'.$item->OrderId)}}" type="button" class="btn btn-primary text-white p-1">Chi tiết</a>
                                    </td>
                                </tr>
                            @endforeach()
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop()
@section('scripts')
    <script type="text/javascript">
        $("#table2").DataTable({
            lengthMenu: [10, 20, 30],
            "order": [[ 0, "desc" ]],
            language: {
                processing: "Đang tải dữ liệu",
                search: "Tìm kiếm: ",
                lengthMenu: "Lượng hiển thị:  " + " _MENU_ ",
                info: "_START_ - _END_ / _TOTAL_",
                infoEmpty: "Không có dữ liệu",
                infoFiltered: "(Trên tổng _MAX_ mục)",
                infoPostFix: " đơn hàng", // Cái này khi thêm vào nó sẽ đứng sau info
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

        $('select[name="sltStatus"]').on('change', function() {

            $.ajax({
                type : 'GET',
                url  : '../admin/order/order-by-status/'+$('select[name="sltStatus"]').val(),
            }).done(function (response) {
                if (response) {
                    $('#table-responsive').empty();
                    $('#table-responsive').html(response);
                }
            });
        });
    </script>
@stop()
