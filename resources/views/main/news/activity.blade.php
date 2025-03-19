@extends('layout')
@section('title', 'ข่าวสาร/กิจกรรมความเคลื่อนไหว | สหกรณ์อิสลามษะกอฟะฮ จำกัด')
@section('content')
    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <h2 class="text-dark mt-2">ข่าวสาร/กิจกรรมความเคลื่อนไหว</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($news as $item)
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="card hover-shadow h-100">
                        <a href="/news/{{ $item->news_number }}">
                            <img src="{{ url('uploads/' . $item->picture_name) }}" class="card-img-top" alt="{{ $item->title }}" style="height: 200px; object-fit: cover;">
                        </a>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-dark text-limit">{{ $item->title }}</h5>
                            <small class="text-muted mt-auto">{{ thaidate('j F Y', $item->dateupload) }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $news->links() }}
            </div>
        </div>
    </div>
@endsection
