@extends('layout')
@section('title', 'ที่ดิน |สหกรณ์อิสลามษะกอฟะฮ จำกัด')
@section('library')
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
@endsection
@section('content')
    <div class="container m-3">
        <div class="row align-items-center">
            <div class="col-xl-7 mb-5 mb-xl-0">
                <div class="row">
                    @foreach ($image as $item)
                        <div class="col-md-6 mb-4">
                            <a data-fancybox="gallery" href="{{ url('asset/' . $item->picture_name) }}">
                                <img class="shadow-4 rounded-5 w-100"
                                    src="/asset/{{ $item->picture_name }}"height="300" />
                            </a>
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
@section('script')
    <script>
        $(document).ready(function() {
            $("[data-fancybox]").fancybox({});
        });
    </script>
@endsection
