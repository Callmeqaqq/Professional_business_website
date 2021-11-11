@extends('layouts.head')
@section('main')
    <div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 data-aos="fade-up" data-aos-delay="200">Tin tức</h2>
                <ul data-aos="fade-up" data-aos-delay="400">
                    <li><a href="{{url('/')}}">Trang chủ</a></li>
                    <li><i class="ti-angle-right"></i></li>
                    <li>Tin tức</li>
                </ul>
            </div>
        </div>
    </div>

    @if(count($data)>1)
        <div class="blog-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    @foreach($data as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-wrap mb-50" data-aos="fade-up" data-aos-delay="200">
                            <div class="blog-img-date-wrap mb-25">
                                <div class="blog-img">
                                    <a href="{{url('post')}}/{{$item->slug}}"><img src="assets/images/blog/blog-1.png" alt=""></a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li>Tác giả:<a href="#"> Admin</a></li>
                                    </ul>
                                </div>
                                <h3><a href="{{url('post')}}/{{$item->slug}}">{{$item->Title}}</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididunt ut labo et dolore magna aliqua.</p>
                                <div class="blog-btn-2 btn-hover">
                                    <a class="btn hover-border-radius theme-color" href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="pagination-style-1" data-aos="fade-up" data-aos-delay="200">
                    <ul>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a class="next" href="#"><i class=" ti-angle-double-right "></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    @else
    Ban chua co bai viet nao
    @endif
@stop()
