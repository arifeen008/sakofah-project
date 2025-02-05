@extends('layout')
@section('title', 'ปฏิทินสหกรณ์ | สหกรณ์อิสลามษะกอฟะฮ จำกัด')
@section('content')
@section('library')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
@endsection
@php
    $months = ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'];
    $currentMonth = date('n') - 1; // ดึงเดือนปัจจุบัน (0-based index)
@endphp

<div class="container mt-5">
    <img src="{{ url('calendar/ปกโปสเตอร์.jpg') }}" class="img-fluid w-100 mb-4 rounded shadow">
    <div class="row">
        <div class="col-md-3">
            <div class="nav flex-column nav-pills text-center shadow p-3 rounded bg-light" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                @foreach ($months as $index => $month)
                    <a data-mdb-pill-init class="nav-link {{ $index === $currentMonth ? 'active' : '' }}" id="v-pills-{{ strtolower($month) }}-tab" data-mdb-toggle="pill" data-mdb-target="#v-pills-{{ strtolower($month) }}" role="tab" aria-controls="v-pills-{{ strtolower($month) }}" aria-selected="{{ $index === $currentMonth ? 'true' : 'false' }}">
                        {{ $month }}
                    </a>
                @endforeach
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content p-3 border bg-white" id="v-pills-tabContent">
                @foreach ($months as $index => $month)
                    <div class="tab-pane fade {{ $index === $currentMonth ? 'show active' : '' }}" id="v-pills-{{ strtolower($month) }}" role="tabpanel" aria-labelledby="v-pills-{{ strtolower($month) }}-tab">
                        <h4 class="text-center text-primary fw-bold">{{ $month }}</h4>
                        <div class="row mt-3">  
                            <a data-fancybox="gallery" href="{{ url('calendar/' . $month . '.jpg') }}">                   
                                <img src="{{ url('calendar/' . $month . '.jpg') }}" class="img-fluid rounded shadow-sm w-100" alt="{{ $month }} image">  
                            </a>                           
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $("[data-fancybox]").fancybox({
                // ตัวเลือก Fancybox ตามต้องการ
                // ดูตัวอย่างเพิ่มเติมได้ที่: https://fancyapps.com/docs/3.5/
            });
        });
    </script>
@endsection