@extends('layout')
@section('title', 'ปฏิทินสหกรณ์ | สหกรณ์อิสลามษะกอฟะฮ จำกัด')
@section('content')
    <img src="{{ url('calendar/ปกโปสเตอร์.jpg') }}" class="img-fluid w-100" class="mb-2">
    <div class="row">
         <div class="col-sm-3">
            <a data-fancybox="gallery" href="{{ url('calendar/01.jpg') }}">
                <img src="{{ url('calendar/01.jpg') }}" class="img-fluid rounded w-100">
            </a>
        </div>
         <div class="col-sm-3"><img src="{{ url('calendar/02.jpg') }}" class="img-fluid rounded w-100"></div>
         <div class="col-sm-3"><img src="{{ url('calendar/03.jpg') }}" class="img-fluid rounded w-100"></div>
         <div class="col-sm-3"><img src="{{ url('calendar/04.jpg') }}" class="img-fluid rounded w-100"></div>
         <div class="col-sm-3"><img src="{{ url('calendar/05.jpg') }}" class="img-fluid rounded w-100"></div>
         <div class="col-sm-3"><img src="{{ url('calendar/06.jpg') }}" class="img-fluid rounded w-100"></div>
         <div class="col-sm-3"><img src="{{ url('calendar/07.jpg') }}" class="img-fluid rounded w-100"></div>
         <div class="col-sm-3"><img src="{{ url('calendar/08.jpg') }}" class="img-fluid rounded w-100"></div>
         <div class="col-sm-3"><img src="{{ url('calendar/09.jpg') }}" class="img-fluid rounded w-100"></div>
         <div class="col-sm-3"><img src="{{ url('calendar/10.jpg') }}" class="img-fluid rounded w-100"></div>
         <div class="col-sm-3"><img src="{{ url('calendar/11.jpg') }}" class="img-fluid rounded w-100"></div>
         <div class="col-sm-3"><img src="{{ url('calendar/12.jpg') }}" class="img-fluid rounded w-100"></div>
    </div>
@endsection

