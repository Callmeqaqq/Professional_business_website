@extends('layouts.admin')
@section('main')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="section-block" id="inputmask">
                <h3 class="section-title">Thêm sản phẩm mới</h3>
                <p>
                    Thêm đầy đủ các thông tin sản phẩm vào các ô bên dưới để thêm sản phẩm mới
                </p>
            </div>
            <div class="card">
                @if(session()->has('add-success'))
                <div style="display: flex" class="card-body col-12">
                    <div class="alert alert-success col3">
                        <strong>Bạn đã thêm thành công " {{session()->pull('add-success')}} " vào danh sách sản phẩm. </strong>
                    </div>
                </div>
                @endif
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                <div style="display: flex" class="card-body col-12">
                    <div class="form-group col-4">
                        <label>Tên Sản Phẩm:</label>
                        <input name="ProductName" type="text" class="form-control date-inputmask" id="date-mask" placeholder="" required/>
                        <input hidden type="text" id="slug_here" name="Slug" value="">
                    </div>
                    <div class="form-group col-4" >
                        <label>Danh Mục sản phẩm </label>
                        <select class="form-control" name="CategoryId" id="" required>
                            <option no value>Chọn</option>
                            @foreach($categoryAll as $cat)
                            <option value="{{$cat->CategoryId}}">{{$cat->CategoryName}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-4">
                        <label>Nhà Phân Phối </label>
                        <select class="form-control" name="SupplierId" id="" required>
                            <option no value>Chọn</option>
                            @foreach($supplier as $sup)
                                <option value="{{$sup->SupplierId}}">{{$sup->SupplierName}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div style="display: flex" class="card-body col-12">
{{--                    <div class="form-group">--}}
{{--                        <label>Date Mask <small class="text-muted">dd/mm/yyyy</small></label>--}}
{{--                        <input type="text" class="form-control date-inputmask" id="date-mask" placeholder=""/>--}}
{{--                    </div>--}}
                    <div class="form-group col-4">
                        <label for="inputText4" class="col-form-label">Giá (VNĐ)</label>
                        <input required name="Price" id="price" type="text" class="form-control" placeholder="Nhập giá sản phẩm"/>
                        <input hidden type="number" id="price_new" name="price_new">
                    </div>
                    <div class="form-group col-4">
                        <label for="inputText4" class="col-form-label">Giảm giá <small>(Từ 0-1)</small></label>
                        <input required name="Discount" id="inputText4" type="number" step="0.01" max="1" min="0" class="form-control" placeholder="Nhập giảm giá"/>
                    </div>
                    <div class="form-group col-4">
                        <label for="inputText4" class="col-form-label">Khối lượng <small>(Kilogram)</small></label>
                        <input required name="Weight" id="inputText4" type="number" step="0.01" min="0" class="form-control" placeholder="Nhập Khối lượng"/>
                    </div>
                </div>
                <div style="display: flex" class="card-body col-12">
                    <div class="form-group col-8">
                        <label for="formFile" class="form-label">Chọn Ảnh mặc định (1 Ảnh)</label>
                        <input name="Images" class="form-control" type="file" id="formFile">
                    </div>
                </div>
                <div style="display: flex" class="card-body col-12">
                    <div class="form-group col-8">
                        <label for="formFileMultiple" class="form-label">Chọn tất cả Ảnh của Sản phẩm ( > 5 ảnh)</label>
                        <input name="images_multiple[]" class="form-control" type="file" id="formFileMultiple" multiple>
                    </div>
                </div>
                <div style="display: flex" class="card-body col-12">
                    <div class="form-group col-12">
                        <label for="exampleFormControlTextarea1">Mô Tả sản phẩm</label>
                        <textarea required name="Descreption" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div style="display: flex"class="card-body col-12">
                    <label class='col-2' for="">Hoạt Động</label>
                    <div class="form-check col-1">
                        <input class="form-check-input" type="radio" name="Active" id="flexRadioDefault1" value="0">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Ẩn
                        </label>
                    </div>
                    <div class="form-check col-1">
                        <input class="form-check-input" type="radio" name="Active" id="flexRadioDefault1" value="1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Hiện
                        </label>
                    </div>
                </div>
                <div style="display: flex" class="card-body col-12">
                    <div class="form-group col-3">
                        <button type="submit" class="btn btn-primary">Thêm mới sản phẩm </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $('#date-mask').on('keyup', function(){
            // alert('được');
            let title = $(this).val();
            //Đổi chữ hoa thành chữ thường
            let slug = title.toLowerCase();
            // Tạo Slug bắt đầu:
            //Đổi ký tự có dấu thành không dấu
            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
            slug = slug.replace(/đ/gi, 'd');
            //Xóa các ký tự đặt biệt
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
            //Đổi khoảng trắng thành ký tự gạch ngang
            slug = slug.replace(/ /gi, "-");
            //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
            //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            //Xóa các ký tự gạch ngang ở đầu và cuối
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            //In slug ra textbox có id “slug”
            $('#slug_here').val(slug);
        });
{{--Định dạng 10000000 thành 10,000,000 mất vài tiếng để nghiên cứu ra được 10 dòng code (Khóc)--}}
        $("#price").on('keyup', function(){
            var n = parseInt($(this).val().replace(/\D/g,''),10);
            if(n>=0){
                $('#price').val(n.toLocaleString("de-DE"));
                $('#price_new').val(n);
            }
            if(isNaN(n)){
                $('#price').val('');
            }
        });
    </script>
@stop()
