@unless ($breadcrumbs->isEmpty())
    <div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 data-aos="fade-up" data-aos-delay="200">{{$breadcrumbs[count($breadcrumbs) - 1]->title}}</h2>
                <ul data-aos="fade-up" data-aos-delay="400">
                    @foreach ($breadcrumbs as $breadcrumb)
                        @if (!is_null($breadcrumb->url) && !$loop->last)
                            <li><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
                            <li><i class="ti-angle-right"></i></li>
                        @else
                            <li>{{ $breadcrumb->title }}</li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endunless
