@extends('layouts.site')
@section('main')
    {{Breadcrumbs::render('blog')}}
    @if(count($data)>1)
        <div class="blog-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    @foreach($data as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-wrap mb-50" data-aos="fade-up" data-aos-delay="200">
                            <div class="blog-img-date-wrap mb-25">
                                <div class="blog-img">
                                    <a href="{{url('post')}}/{{$item->slug}}"><img src="{{asset('/images/blog')}}/{{$item->thumbnail}}" alt=""></a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li>Tác giả:<a href="#"> {{$item->Fullname}}</a></li>
                                    </ul>
                                </div>
                                <h3><a href="{{url('post')}}/{{$item->slug}}">{{$item->Title}}</a></h3>
                                <p>{{$item->Content}}</p>
                                <div class="blog-btn-2 btn-hover">
                                    <a class="btn hover-border-radius theme-color" href="{{url('post')}}/{{$item->slug}}">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <center>
                {!! $data->links() !!}
                </center>
            </div>
        </div>
    @else
    Ban chua co bai viet nao
    @endif
@stop()
