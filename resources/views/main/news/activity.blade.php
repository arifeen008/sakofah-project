@extends('layout')
@section('title', 'ข่าวสาร/กิจกรรมความเคลื่อนไหว |สหกรณ์อิสลามษะกอฟะฮ จำกัด')
@section('content')
    <div class="container my-2">
        <div class="row">
            <p style="font-family: 'Kanit';" class="text-dark mt-2 h2">ข่าวสาร/กิจกรรมความเคลื่อนไหว</p>
            @foreach ($news as $item)
                <div class="col-md-3 mb-2">
                    <a href="/news/{{ $item->news_number }}" class="card hover-shadow my-2">
                        <img src="{{ url('uploads/' . $item->picture_name) }}" width="auto" height="200px"
                            class="card-img-top" />
                        <div class="card-body">
                            <p style="font-family: 'Kanit';" class="card-title text-dark transaction">
                                {{ Str::limit($item->title, 50) }} </p>
                            <figcaption class="blockquote-footer mt-1">{{ thaidate('วันที่ j F Y', $item->dateupload) }}
                            </figcaption>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        {{ $news->links() }}
    </div>
@endsection
