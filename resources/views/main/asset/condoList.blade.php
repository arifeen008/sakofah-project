@extends('layout')
@section('title', 'คอนโด |สหกรณ์อิสลามษะกอฟะฮ จำกัด')
@section('content')
    <div class="container my-2">
        @if (count($asset) > 0)
            <div class="container py-5 h-100" style="height: 100vh;text-align: center;">
                <h3 class="text-dark mt-2">คอนโด</h3>
                <div class="row">
                    @foreach ($asset as $item)
                        <div class="col-md-3 mb-2">
                            <a href="/condo/{{ $item->asset_number }}" class="card hover-shadow my-2">
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
            <p style="height: 100vh;text-align: center;"></p>
        @endif
    </div>
@endsection
