@extends('layout')
@section('title', 'ปฏิทินสหกรณ์ | สหกรณ์อิสลามษะกอฟะฮ จำกัด')
{{-- @section('content')
@php
    $currentMonth = date('n') - 1; // ดึงเดือนปัจจุบัน (0-based index)
@endphp
    <img src="{{ url('calendar/ปกโปสเตอร์.jpg') }}" class="img-fluid w-100" class="mb-2">
    <div class="row">
        <div class="col-md-2">
            <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                @foreach (['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'] as $index => $month)
                    <a data-mdb-pill-init class="nav-link @if ($index === $currentMonth) active @endif" id="v-pills-{{ strtolower($month) }}-tab" data-mdb-toggle="pill" data-mdb-target="#v-pills-{{ strtolower($month) }}" role="tab" aria-controls="v-pills-{{ strtolower($month) }}" aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                        {{ $month }}
                    </a>
                @endforeach
            </div>
        </div>
        <div class="col-md-10">
            <div class="tab-content" id="v-pills-tabContent">
                @foreach (['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'] as $index => $month)
                    <div class="tab-pane fade @if ($index === $currentMonth) show active @endif" id="v-pills-{{ strtolower($month) }}" role="tabpanel" aria-labelledby="v-pills-{{ strtolower($month) }}-tab">
                        <img src="{{ url('calendar/' . $month . '.jpg') }}" class="img-fluid rounded w-100">            
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection --}}

@section('content')
@php
    $currentMonth = date('n') - 1; // ดึงเดือนปัจจุบัน (0-based index)
@endphp

<div class="container mt-5">
    <img src="{{ url('calendar/ปกโปสเตอร์.jpg') }}" class="img-fluid w-100 mb-4 rounded shadow">
    <div class="row">
        <div class="col-md-3">
            <div class="nav flex-column nav-pills text-center shadow p-3 rounded bg-light" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                @foreach ([
                    'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 
                    'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
                ] as $index => $month)
                    <a data-mdb-pill-init class="nav-link @if ($index === $currentMonth) active @endif" id="v-pills-{{ strtolower($month) }}-tab" data-mdb-toggle="pill" data-mdb-target="#v-pills-{{ strtolower($month) }}" role="tab" aria-controls="v-pills-{{ strtolower($month) }}" aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                        {{ $month }}
                    </a>
                @endforeach
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content p-3 border bg-white" id="v-pills-tabContent">
                @foreach ([
                    'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 
                    'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
                ] as $index => $month)
                    <div class="tab-pane fade @if($index === $currentMonth) show active @endif" id="v-pills-{{ strtolower($month) }}" role="tabpanel" aria-labelledby="v-pills-{{ strtolower($month) }}-tab">
                        <h4 class="text-center text-primary fw-bold">{{ $month }}</h4>
                        <div class="row mt-3">                     
                            <img src="{{ url('calendar/' . $month . '.jpg') }}" class="img-fluid rounded shadow-sm w-100" alt="{{ $month }} image">                             
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection