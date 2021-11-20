@extends('layouts.admin')
@section('main')
    <style>
        /* Style the tab */
        .tab {
            overflow: hidden;
        }

        /* Style the buttons that are used to open the tab content */
        .tab button {
            background-color: #e8e8e8;
            float: left;
            border:none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            color: black;
            margin-right: 5px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #dedede;
            color: black;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            box-shadow:  1px 1px 8px black;
            background-color: white;
            color:black;
            z-index: 10;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }

        .tabcontent {
            animation: fadeEffect 1s; /* Fading effect takes 1 second */
        }

        /* Go from zero to full opacity */
        @keyframes fadeEffect {
            from {opacity: 0;}
            to {opacity: 1;}
        }
        #displayImg img{
            width:100%;
        }
    </style>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="section-block" id="inputmask">
                <h3 class="section-title">Thêm sản phẩm mới</h3>
                <p>
                    Thêm đầy đủ các thông tin sản phẩm vào các ô bên dưới để thêm sản phẩm mới
                </p>
            </div>

            <div class="tab">
                <button class="tablinks" id="defaultOpen" onclick="openCity(event,'Addproduct')">Thêm sản phẩm</button>
                <button class="tablinks" onclick="openCity(event,'Addvariant')">Thêm biến thể</button>
            </div>
            <div id="Addproduct" class="tabcontent card">
                @if(session()->has('add-success'))
                <div style="display: flex" class="card-body col-12">
                    <div class="alert alert-success col3">
                        <strong>Bạn đã thêm thành công " {{session()->pull('add-success')}} " vào danh sách sản phẩm. </strong>
                    </div>
                </div>
                @endif
                @if(session()->has('add-success-v'))
                    <div style="display: flex" class="card-body col-12">
                        <div class="alert alert-success col3">
                            <strong>Bạn đã thêm thành công biến thể " {{session()->pull('add-success-v')}} " vào danh sách biến thể. </strong>
                        </div>
                    </div>
                @endif
                @if(session()->has('add-success-fail'))
                    <div style="display: flex" class="card-body col-12">
                        <div class="alert alert-danger col3">
                            <strong>Thêm thất bại. {{session()->pull('add-success-fail')}} </strong>
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
                    <div class="form-group col-4">
                        <label for="inputText4" class="col-form-label">Màu:</label>
                        <input name="Color" type="text" class="form-control" placeholder="Màu sản phẩm" required/>
                    </div>
                    <div class="form-group col-4">
                        <label for="inputText4" class="col-form-label">Số lượng <small>(Cái)</small></label>
                        <input required name="Quantity" id="inputText4" type="number" step="1" min="0" class="form-control" placeholder="Nhập số lượng"/>
                    </div>
                </div>
                <div style="display: flex" class="card-body col-12">
                    <div class="form-group col-8">
                        <label for="formFile" class="form-label">Chọn Ảnh mặc định (1 Ảnh)</label>
                        <input name="Images" class="form-control" type="file" id="upload" onchange="ImagesFileAsURL()">
                    </div>
                </div>
                <div style="display: flex" class="card-body col-12">
                    <div class="form-group col-4">
                        <div id="displayImg"></div>
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

            <div id="Addvariant" class="tabcontent card">
                <form action="{{route('add-variant')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="display: flex" class="card-body col-12">
                        <div class="form-group col-6">
                            <label for="inputText4" class="col-form-label">Tên Sản Phẩm:</label>
                            <select class="form-control" name="ProductId" id="" required>
                                <option no value>Chọn</option>
                                @foreach($product as $prod)
                                    <option value="{{$prod->ProductId}}">{{$prod->ProductId}} - {{$prod->ProductName}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div style="display: flex" class="card-body col-12">
                        <div class="form-group col-4">
                            <label for="inputText4" class="col-form-label">Giá (tăng bao nhiêu % so với giá cũ)</label>
                            <input required name="Price_variant" id="inputText4" type="number" step="1" max="500" min="1" class="form-control" placeholder="Nhập giá biến thể"/>
                        </div>
                    </div>
                    <div style="display: flex" class="card-body col-12">
                        <div class="form-group col-4">
                            <label for="inputText4" class="col-form-label">Màu:</label>
                            <input name="Color" type="text" class="form-control" placeholder="Màu sản phẩm" required/>
                        </div>
                        <div class="form-group col-4">
                            <label for="inputText4" class="col-form-label">Số lượng <small>(Cái)</small></label>
                            <input required name="Quantity" id="inputText4" type="number" step="1" min="0" class="form-control" placeholder="Nhập số lượng"/>
                        </div>
                    </div>
                    <div style="display: flex" class="card-body col-12">
                        <div class="form-group col-8">
                            <label for="formFile" class="form-label">Chọn Ảnh biến thể (1 ảnh)</label>
                            <input name="Images" class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                    <div style="display: flex" class="card-body col-12">
                        <div class="form-group col-12">
                            <label for="exampleFormControlTextarea1">Mô Tả Biến thể</label>
                            <textarea required name="Description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
                            <button type="submit" class="btn btn-primary">Thêm mới biến thể </button>
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
        document.getElementById("defaultOpen").click();
        function openCity(evt, cityName) {
            //Tạo biến
            var i, tabcontent, tablinks;

            // Lấy tất cả thành phần của tabcontent
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        function ImagesFileAsURL() {
            var fileSelected = document.getElementById('upload').files;
            if(fileSelected.length > 0) {
                var fileToLoad = fileSelected[0];
                var fileReader = new FileReader();
                fileReader.onload = function(fileLoaderEvent) {
                    var scrData = fileLoaderEvent.target.result;
                    var newImage = document.createElement("img");
                    newImage.src = scrData;
                    document.getElementById('displayImg').innerHTML = newImage.outerHTML;
                }
                fileReader.readAsDataURL(fileToLoad);
            }
        }
    </script>
@stop()
