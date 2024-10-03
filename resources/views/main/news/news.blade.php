@extends('layout')
@section('title')
    {{ $news->title }} |สหกรณ์อิสลามษะกอฟะฮ จำกัด
@endsection
@section('library')
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
@endsection
@section('content')
    <div class="container my-3">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <p class="text-dark my-2 h4">{{ $news->title }}</p>
                        <div class="row">
                            @foreach ($image_news as $item)
                                <div class="col-lg-4">
                                    <a data-fancybox="gallery" href="{{ url('uploads/' . $item->picture_name) }}">
                                        <img src="{{ url('uploads/' . $item->picture_name) }}" height="250px"
                                            class="w-100 shadow-1-strong rounded mb-2" />
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <p style="color: black">{!! $news->description !!}</p>
                        <small class="text-mute">{{ thaidate('วันที่ j F Y', $news->dateupload) }}</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                @foreach ($side_news as $item)
                    <a href="/news/{{ $item->news_number }}">
                        <div class="card mb-2">
                            <img src="{{ url('uploads/' . $item->picture_name) }}" class="card-img-top"
                                alt="{{ $item->title }}" />
                            <div class="card-body">
                                <p class="card-text text-limit" style="color: black">{{ $item->title }}</p>
                                <small class="text-mute">{{ thaidate('j F Y', $item->dateupload) }}</small>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $("[data-fancybox]").fancybox({
                // ตัวเลือก Fancybox ตามต้องการ
                // ดูตัวอย่างเพิ่มเติมได้ที่: https://fancyapps.com/docs/3.5/
            });
        });
    </script>
@endsection
