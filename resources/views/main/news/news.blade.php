@extends('layout')
@section('title')
    {{ $news->title }} |สหกรณ์อิสลามษะกอฟะฮ จำกัด
@endsection
@section('content')
    <div class="container my-3">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <p class="text-dark text-center my-2 h4">{{ $news->title }}</p>
                        <div class="row">
                            @foreach ($image_news as $item)
                                <div class="col-lg-4">
                                    <img src="{{ url('uploads/' . $item->picture_name) }}" height="250px"
                                        class="w-100 shadow-1-strong rounded mb-2" />
                                </div>
                            @endforeach
                        </div>
                        <h5 class="text-dark my-2">{!! $news->description !!}</h5>
                        <small class="text-mute">{{ thaidate('วันที่ j F Y', $news->dateupload) }}</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                @foreach ($side_news as $item)
                    <div class="col-md-12">
                        <a href="/news/{{ $item->news_number }}" class="card hover-shadow">
                            <img src="{{ url('uploads/' . $item->picture_name) }}" width="auto" height="150px"
                                class="card-img-top" />
                            <div class="card-body">
                                <p class="text-dark">{{ Str::limit($item->title, 50) }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
