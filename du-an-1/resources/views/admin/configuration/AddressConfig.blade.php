@extends('layouts.admin')
@section('main')
    <div class="row">
        <div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 col-11">
            <div class="card">
                <div class="card-body">
                    <h4>Thiết lập địa chỉ công ty</h4>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @php
                            Session::forget('status');
                        @endphp
                    @endif
                    <form action="{{route('update.address')}}" method="post">
                        @csrf
                        <div class="card-body row">
                            <div class="form-group col-6">
                                <label for="inputText4" class="col-form-label">Kinh độ</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="date-mask"
                                    placeholder="Longitude"
                                    name="long"
                                    value="{{$address->Longtitude}}"
                                />
                            </div>
                            <div class="form-group col-6">
                                <label for="inputText4" class="col-form-label">Vĩ độ</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="date-mask"
                                    placeholder="Latitude"
                                    name="lat"
                                    value="{{$address->Lattitude}}"
                                />
                            </div>
                        </div>
                        <button class="btn btn-outline-primary">Cập nhật</button>
                        <span>
                            <a class="btn btn-outline-primary" target="_blank"
                               rel="noopener noreferrer"
                               href="https://www.maps.ie/coordinates.html">
                                Lấy kinh độ và vĩ độ theo địa chỉ
                            </a>
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop()
