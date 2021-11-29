@extends('layouts.admin')
@section('main')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h3 class="card-header">Danh mục bài viết</h3>
                <div>
                    <button style="float: right" type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNew">Thêm mới</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table" class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên danh mục</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Số bài viết</th>
                                <th scope="col">Tuỳ chọn</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($category as $item)
                              <tr>
                                <th scope="row">{{$item->Blog_CategoryID}}</th>
                                <td><a>{{$item->BlogName}}</a></td>
                                <td>{{$item->slug}}</td>
                                <td></td>
                                <td>
                                  <a href="{{url('admin/blog/'.$item->Blog_CategoryID.'/edit')}}" type="button" class="btn btn-primary text-white p-1">Sửa</a>
                                  <button value="{{$item->Blog_CategoryID}}" onclick="deleteRq(this)" type="button" class="btn btn-danger text-white p-1">Xoá</button>
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


    <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNew" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Thêm danh mục mới</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Đóng">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Tên danh mục:</label>
                  <input id="title" type="text" class="form-control" id="recipient-name">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
              <button type="button" onclick="addNewCategory()" id="addNewCategory" class="btn btn-primary">Thêm mới</button>
            </div>
          </div>
        </div>
      </div>
@stop()
@section('scripts')
<script type="text/javascript">
  function deleteRq(a) {
    Notiflix.Confirm.Show(
      'Bạn muốn xoá danh mục bài viết này?',
      'Sau khi xoá sẽ không thể khôi phục.',
      'Xoá',
      'Huỷ',
      function okCb(){
        $.ajax({
            url: "{{url('api/post/category/delete')}}",
            type: 'POST',
            data: {
                id: a.getAttribute('value'),
                _token: "{{csrf_token()}}"
            }
        }).done(function(res) {;
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

  function addNewCategory(){
    $.ajax({
            url: "{{url('api/post/category/add')}}",
            type: 'POST',
            data: {
                title: $('#title').val(),
                _token: "{{csrf_token()}}"
            }
        }).done(function(res) {;
            if(res.success == true){
              Notiflix.Notify.Success(res.messages);
              setTimeout(function () { location.reload(true); }, 2000);
            }else{
              Notiflix.Notify.Warning(res.messages);
            }
        });
  }
</script>
@stop()
