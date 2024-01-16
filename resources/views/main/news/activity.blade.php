@extends('layout')
@section('title', 'ข่าวสาร/กิจกรรมความเคลื่อนไหว | สหกรณ์อิสลามษะกอฟะฮ จำกัด')
@section('content')
    <div class="container my-2" style="font-family: 'Sarabun', sans-serif;">
        <div class="row">
            <p class="text-dark mt-2 h2">ข่าวสาร/กิจกรรมความเคลื่อนไหว</p>
            @foreach ($news as $item)
                <div class="col-md-3 mb-2">
                    <a href="/news/{{ $item->news_number }}" class="card hover-shadow my-2">
                        <img src="{{ url('uploads/' . $item->picture_name) }}" width="auto" height="200px"
                            class="card-img-top" />
                        <div class="card-body">
                            <div class="card-title">
                                <div class="text-dark">
                                    <p class="text-truncate text-dark">{{ $item->title }}</p>
                                </div>
                            </div>
                            <small>{{ thaidate('j F Y', $item->dateupload) }}</small>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        {{ $news->links() }}
    </div>
@endsection
