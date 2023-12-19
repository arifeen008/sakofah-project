@extends('layout')
@section('title', 'ที่ดิน|สหกรณ์อิสลามษะกอฟะฮ จำกัด')
@section('content')
    <div class="container m-3">
        <div class="row align-items-center">
            <div class="col-xl-7 mb-5 mb-xl-0">
                <div class="row">
                    @foreach ($image as $item)
                        <div class="col-md-6 mb-4">
                            <img class="shadow-4 rounded-5 w-100" src="/uploads/{{ $item->picture_name }}"height="300" />
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-xl-4 offset-xl-1 text-center text-dark">
                <h2 class="fw-bold mb-5 pb-2">{{ $detail->title }}</h2>
                <p class="lead fw-normal text-dark mb-5">
                    {{ $detail->description1 }}
                </p>
                <p class="lead fw-normal text-dark mb-5">
                    {{ $detail->description2 }}
                </p>
                <p class="lead fw-normal text-dark mb-0 mb-xl-5">
                    {{ $detail->contact }}
                </p>
            </div>
        </div>
    </div>
@endsection
