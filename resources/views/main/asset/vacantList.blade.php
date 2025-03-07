@extends('layout')
@section('title', 'ที่ดินเปล่า |สหกรณ์อิสลามษะกอฟะฮ จำกัด')
@section('content')
    @if (count($asset) > 0)
    <div class="container py-5 h-100">
            <h3 class="text-dark mt-2">ที่ดินเปล่า</h3>
            <div class="row">
                @foreach ($asset as $item)
                    <div class="col-md-3 mb-2">
                        <a href="/vacant/{{ $item->asset_number }}" class="card hover-shadow my-2">
                            <img src="asset/{{ $item->picture_name }}" width="auto" height="200px"class="card-img-top" />
                            <div class="card-body">
                                <h5 class="card-title text-dark transaction">{{ $item->title }}
                                </h5>
                                <p class="card-text">
                                    <small class="text-muted">{{ thaidate('วันที่ j F Y', $item->date) }}</small>
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            {{ $asset->links() }}
        </div>
    @else
        <p class="text-center">No data</p>
    @endif

@endsection
