@extends('layout')
@section('title')
    {{ $news->title }} |สหกรณ์อิสลามษะกอฟะฮ จำกัด
@endsection
@section('library')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
@endsection
@section('content')
    <div class="container my-5">
        <section class="mb-10">
            <div class="d-flex justify-content-between align-items-center align-items-xl-end border-bottom pb-4 mb-5"
                style="border-bottom: 2px solid #f5f5f5 !important;">
                <h2 class="fw-bold mb-0">{{ $news->title }}</h2>
            </div>
            <div class="row gx-lg-5">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <div class="row">
                            @foreach ($image_news as $item)
                                <div class="col-lg-3">
                                    <div class="bg-image hover-overlay hover-zoom rounded-3 mb-4" data-mdb-ripple-init
                                        data-mdb-ripple-color="light">
                                        <a data-fancybox="gallery" href="{{ url('uploads/' . $item->picture_name) }}">
                                            <img src="{{ url('uploads/' . $item->picture_name) }}" class="w-100"
                                                style="height: 200px; object-fit: cover" />
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <h6 class="text-muted text-uppercase small pb-1"><a href="#!"
                                class="text-reset">{{ thaidate('วันที่ j F Y', $news->dateupload) }}</a></h6>
                        <h4 class="fw-bold mb-3"><a href="#!" class="text-reset">{{ $news->title }}</a></h4>
                        <p class="text-truncate">{!! $news->description !!}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-5">
                        @foreach ($side_news as $item)
                            <div class="bg-image hover-overlay hover-zoom rounded-5 mb-4" data-mdb-ripple-init
                                data-mdb-ripple-color="light">
                                <img class="w-100" src="{{ url('uploads/' . $item->picture_name) }}"
                                    style="height: 227px; object-fit: cover;" alt="Image placeholder">
                                <a href="/news/{{ $item->news_number }}">
                                    <div class="mask" style="background-color: rgba(255,255,255,0.1);"></div>
                                </a>
                            </div>
                            <h6 class="text-muted text-uppercase small pb-1"><a href="/news/{{ $item->news_number }}"
                                    class="text-reset">{{ thaidate('j F Y', $item->dateupload) }}</a></h6>
                            <h5 class="fw-bold mb-3">
                                <a href="/news/{{ $item->news_number }}" class="text-reset">{{ $item->title }}
                                </a>
                            </h5>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
    <script>$(document).ready(function() {$("[data-fancybox]").fancybox({});});</script>
@endsection
