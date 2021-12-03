@extends('layouts.admin')
@section('main')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h3 class="card-header">Danh sách bài viết</h3>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="blogTable" class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Thumbnail</th>
                                <th scope="col">Tiêu đề</th>
                                <th scope="col">Danh mục</th>
                                <th scope="col">Đăng bởi</th>
                                <th scope="col">Lượt xem</th>
                                <th scope="col">Lượt bình luận</th>
                                <th scope="col">Tuỳ chọn</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $item)
                              <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td><img width="100px" src="{{asset('images/blog')}}/{{$item->thumbnail}}" class="rounded" alt="{{$item->title}}"></td>
                                <td><a>{{$item->title}}</a></td>
                                <td>{{$item->category}}</td>
                                <td>{{$item->author}}</td>
                                <td>{{$item->views}}</td>
                                <td>
                                @foreach($commentData as $cmt)
                                  @if($cmt->postId == $item->id)
                                  {{$cmt->count}}
                                  @else
                                  @endif()
                                @endforeach()
                                </td>
                                <td>
                                  <a href="{{url('admin/blog/'.$item->id.'/commentList')}}" type="button" class="btn btn-primary text-white p-1">Quản lý bình luận</a>
                                  <a href="{{url('admin/blog/'.$item->id.'/edit')}}" type="button" class="btn btn-primary text-white p-1">Sửa</a>
                                  <button value="{{$item->id}}" onclick="deleteRq(this)" type="button" class="btn btn-danger text-white p-1">Xoá</button>
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
  function deleteRq(a) {
    Notiflix.Confirm.Show(
      'Bạn muốn xoá bài viết này?',
      'Bài viết và bình luận của bài viết này sẽ bị xoá và không thể khôi phục.',
      'Xoá',
      'Huỷ',
      function okCb(){
        $.ajax({
            url: "{{url('api/post/delete')}}",
            type: 'POST',
            data: {
                id: a.getAttribute('value'),
                _token: "{{csrf_token()}}"
            }
        }).done(function(res) {
            if(res.success == true){
              Notiflix.Notify.Success(res.msg);
              a.parentNode.parentNode.remove();
            }else{
              Notiflix.Notify.Warning(res.msg);
            }
        });
      }
    );
  }
</script>

<script>
      $(document).ready(function () {
        $("#blogTable").DataTable({
            lengthMenu: [10, 20, 30],
            language: {
                processing: "Đang tải dữ liệu",
                search: "Tìm kiếm: ",
                lengthMenu: "Lượng hiển thị:  " + " _MENU_ ",
                info: "_START_ - _END_ / _TOTAL_",
                infoEmpty: "Không có dữ liệu",
                infoFiltered: "(Trên tổng _MAX_ mục)",
                infoPostFix: " bài viết", // Cái này khi thêm vào nó sẽ đứng sau info
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
@stop()
