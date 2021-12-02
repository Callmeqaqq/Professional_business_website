@extends('layouts.admin')
@section('main')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h3 class="card-header">Chi tiết đơn hàng <a href="{{Route('admin.order')}}">#{{$orderDetail[0]->OrderId}}</a></h3>
                <div class="card-body">
                    <h3>Thông tin khách hàng!</h3>
                    <p style="margin: 6px;">Họ tên: {{$orderDetail[0]->Fullname}}</p>
                    <p style="margin: 6px;">Email: {{$orderDetail[0]->Email}}</p>
                    <p style="margin: 6px;">Số điện thoại: {{$orderDetail[0]->Phone}}</p>
                    <p style="margin: 6px;">Địa chỉ: {{$orderDetail[0]->Address}}</p>
                    <p style="margin: 6px;">Ngày đặt hàng: {{$orderDetail[0]->CreateAt}}</p>
                    <form action="">
                        <div class="form-group" style="padding: 15px 0px;">
                            <select style="padding: 5px 12px;" name="sltStatus" id="sltStatus">
                                @foreach($status as $value)
                                    @if ($value->StatusId == $orderDetail[0]->StatusId)
                                        <option value="{{$value->StatusId}}" selected>{{$value->StatusName}}</option>
                                    @else
                                        <option value="{{$value->StatusId}}">{{$value->StatusName}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <button name="btnUpdateStatus" data-id="{{$orderDetail[0]->OrderId}}" class="btn btn-primary text-white p-1">Cập nhật</button>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table id="table3" class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Thumbnail</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Đơn giá</th>
                                <th scope="col">Thành tiền</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; ?>
                            @foreach($orderDetail as $item)
                                <tr>
                                    <th scope="row">{{$i++}}</th>
                                    <td><img width="100px" src="{{asset('images/product')}}/{{$item->Color}}" class="rounded" alt="{{$item->VariantName}}"></td>
                                    <td>{{$item->VariantName}}</td>
                                    <td>{{$item->Quantity}}</td>
                                    <td><b>{{number_format($item->ProductPrice + ($item->ProductPrice * $item->VariantPrice))}} VNĐ</b></td>
                                    <td><b>{{number_format($item->Quantity * ($item->ProductPrice + ($item->ProductPrice * $item->VariantPrice)))}} VNĐ</b></td>
                                </tr>
                            @endforeach()
                            </tbody>
                        </table>
                        <p style="text-align: left; font-size: 16px; margin-top: 15px;">Phí vận chuyển: <b>{{number_format($orderDetail[0]->ShipFee)}} VNĐ</b></p>
                        <p style="text-align: left; font-size: 18px; margin-top: 15px;">Tổng tiền: <b>{{number_format($orderDetail[0]->ToPay)}} VNĐ</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop()
@section('scripts')
    <script type="text/javascript">
        $("#table3").DataTable({
            lengthMenu: [10, 20, 30],
            language: {
                processing: "Đang tải dữ liệu",
                search: "Tìm kiếm: ",
                lengthMenu: "Lượng hiển thị:  " + " _MENU_ ",
                info: "_START_ - _END_ / _TOTAL_",
                infoEmpty: "Không có dữ liệu",
                infoFiltered: "(Trên tổng _MAX_ mục)",
                infoPostFix: " chi tiết đơn hàng", // Cái này khi thêm vào nó sẽ đứng sau info
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

        $('button[name="btnUpdateStatus"]').on('click', function(e) {
            e.preventDefault();

            $.ajax({
                type : 'GET',
                url  : '../../../admin/order/update-status/'+$(this).data('id')+'/'+$('select[name="sltStatus"]').val(),
            }).done(function (response) {
                if (response) {
                    Notiflix.Notify.Success("Cập nhật trạng thái đơn hàng thành công!");
                }
            });
        });
    </script>
@stop()
