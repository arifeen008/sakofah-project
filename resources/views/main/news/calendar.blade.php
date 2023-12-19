@extends('layout')
@section('title', 'ปฏิทินสหกรณ์ | สหกรณ์อิสลามษะกอฟะฮ จำกัด')
@section('content')
    <style>
        .nav-pills .nav-link.active {
            background-color: #25d321;
        }
    </style>
    <img src="{{ url('picture/cover.jpg') }}" class="mb-2" style="width: 100%;">
    {{-- <div class="container my-2">
        <div class="row">
            <div class="col-md-3">
                <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link" data-mdb-toggle="pill" href="#v-pills-1" role="tab" aria-controls="1">
                        มกราคม</a>
                    <a class="nav-link" data-mdb-toggle="pill" href="#v-pills-2" role="tab" aria-controls="2">
                        กุมภาพันธ์</a>
                    <a class="nav-link" data-mdb-toggle="pill" href="#v-pills-3" role="tab" aria-controls="3">
                        มีนาคม </a>
                    <a class="nav-link" data-mdb-toggle="pill" href="#v-pills-4" role="tab" aria-controls="4">
                        เมษายน</a>
                    <a class="nav-link" data-mdb-toggle="pill" href="#v-pills-5" role="tab" aria-controls="5">
                        พฤษภาคม</a>
                    <a class="nav-link" data-mdb-toggle="pill" href="#v-pills-6" role="tab" aria-controls="6">
                        มิถุนายน</a>
                    <a class="nav-link" data-mdb-toggle="pill" href="#v-pills-7" role="tab" aria-controls="7">
                        กรกฎาคม</a>
                    <a class="nav-link" data-mdb-toggle="pill" href="#v-pills-8" role="tab" aria-controls="8">
                        สิงหาคม</a>
                    <a class="nav-link" data-mdb-toggle="pill" href="#v-pills-9" role="tab" aria-controls="9">
                        กันยายน</a>
                    <a class="nav-link" data-mdb-toggle="pill" href="#v-pills-10" role="tab" aria-controls="10">
                        ตุลาคม</a>
                    <a class="nav-link" data-mdb-toggle="pill" href="#v-pills-11" role="tab" aria-controls="11">
                        พฤศจิกายน</a>
                    <a class="nav-link" data-mdb-toggle="pill" href="#v-pills-12" role="tab" aria-controls="12">
                        ธันวาคม</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade" id="v-pills-1" role="tabpanel" aria-labelledby="1">
                        <img src="{{ url('picture/cal_m01.jpg')}}" class="mb-2" style="width: 100%;">
                    </div>
                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="2">
                        <img src="{{ url('picture/cal_m02.jpg') }}" class="mb-2" style="width: 100%;">
                    </div>
                    <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="3">
                        <img src="{{ url('picture/cal_m03.jpg') }}" class="mb-2" style="width: 100%;">
                    </div>
                    <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="4">
                        <img src="{{ url('picture/cal_m04.jpg') }}" class="mb-2" style="width: 100%;">
                    </div>
                    <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="5">
                        <img src="{{ url('picture/cal_m05.jpg') }}" class="mb-2" style="width: 100%;">
                    </div>
                    <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="6">
                        <img src="{{ url('picture/cal_m06.jpg') }}" class="mb-2" style="width: 100%;">
                    </div>
                    <div class="tab-pane fade" id="v-pills-7" role="tabpanel" aria-labelledby="7">
                        <img src="{{ url('picture/cal_m07.jpg') }}" class="mb-2" style="width: 100%;">
                    </div>
                    <div class="tab-pane fade" id="v-pills-8" role="tabpanel" aria-labelledby="8">
                        <img src="{{ url('picture/cal_m08.jpg') }}" class="mb-2" style="width: 100%;">
                    </div>
                    <div class="tab-pane fade" id="v-pills-9" role="tabpanel" aria-labelledby="9">
                        <img src="{{ url('picture/cal_m09.jpg') }}" class="mb-2" style="width: 100%;">
                    </div>
                    <div class="tab-pane fade" id="v-pills-10" role="tabpanel" aria-labelledby="10">
                        <img src="{{ url('picture/cal_m10.jpg') }}" class="mb-2" style="width: 100%;">
                    </div>
                    <div class="tab-pane fade" id="v-pills-11" role="tabpanel" aria-labelledby="11">
                        <img src="{{ url('picture/cal_m11.jpg') }}" class="mb-2" style="width: 100%;">
                    </div>
                    <div class="tab-pane fade" id="v-pills-12" role="tabpanel" aria-labelledby="12">
                        <img src="{{ url('picture/cal_m12.jpg') }}" class="mb-2" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="container my-2">
        <div class="row">
            <div class="col-md-3">
                <ul class="nav nav-pills flex-column text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    @for ($i = 1; $i <= 12; $i++)
                        @php
                            $month = str_pad($i, 2, '0', STR_PAD_LEFT); // Ensure two-digit month format
                            $isActive = date('m') == $month ? 'active' : '';
                        @endphp
                        <li class="nav-item" role="presentation">
                            <a class="nav-link {{ $isActive }}" id="v-pills-{{ $i }}-tab"
                                data-mdb-toggle="pill" href="#v-pills-{{ $i }}" role="tab"
                                aria-controls="{{ $i }}" aria-selected="{{ $isActive ? 'true' : 'false' }}">
                                {{ DateTime::createFromFormat('!m', $i)->format('F') }}
                            </a>
                        </li>
                    @endfor
                </ul>
            </div>
            <div class="col-md-9">
                <div class="tab-content" id="v-pills-tabContent">
                    @for ($i = 1; $i <= 12; $i++)
                        @php
                            $month = str_pad($i, 2, '0', STR_PAD_LEFT);
                            $isActive = date('m') == $month ? 'show active' : '';
                            $imagePath = asset("picture/cal_m{$month}.jpg");
                        @endphp
                        <div class="tab-pane fade {{ $isActive }}" id="v-pills-{{ $i }}" role="tabpanel"
                            aria-labelledby="v-pills-{{ $i }}-tab">
                            <img src="{{ $imagePath }}" class="mb-2" style="width: 100%;">
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>




@endsection
