@extends('layout')
@section('title', 'วิสัยทัศน์ พันธกิจ วัตถุประสงค์ ')
@section('content')
    <div class="container my-3" data-mdb-toggle="animation" data-mdb-animation="zoom-in" data-mdb-animation-start="onLoad">
        <div class="text-center">
            <img class="img-fluid w-100" src="{{url('picture/วิสัยทัสเว็บ.jpg')}}" />
            <img class="img-fluid w-100" src="{{url('picture/ค่านิยมเว็บ.jpg')}}" />
            <img class="img-fluid w-100" src="{{url('picture/ยุธศาสตร์เว็บ.jpg')}}" />
        </div>
    </div>
@endsection
