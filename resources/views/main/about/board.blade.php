@extends('layout')
@section('title', 'คณะกรรมการและผู้บริหาร |สหกรณ์อิสลามษะกอฟะฮ จำกัด')
@section('content')
    <style>
        .nav-pills .nav-link.active {
            background-color: #25d321;
        }
    </style>
    <div class="container my-3">
        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a data-mdb-pill-init class="nav-link active" id="ex1-tab-1" href="#pills-1" role="tab"
                    aria-controls="pills-1" aria-selected="true">บอร์ดก่อตั้ง</a>
            </li>
            <li class="nav-item" role="presentation">
                <a data-mdb-pill-init class="nav-link" id="tab-2" href="#pills-2" role="tab" aria-controls="pills-2"
                    aria-selected="false">คณะกรรมการผู้บริหาร</a>
            </li>
            <li class="nav-item" role="presentation">
                <a data-mdb-pill-init class="nav-link" id="tab-3" href="#pills-3" role="tab" aria-controls="pills-3"
                    aria-selected="false">ผู้บริหาร</a>
            </li>
            <li class="nav-item" role="presentation">
                <a data-mdb-pill-init class="nav-link" id="tab-4" href="#pills-4" role="tab" aria-controls="pills-4"
                    aria-selected="false">ที่ปรึกษา</a>
            </li>
            <li class="nav-item" role="presentation">
                <a data-mdb-pill-init class="nav-link" id="tab-5" href="#pills-5" role="tab" aria-controls="pills-5"
                    aria-selected="false">ทำเนียบสหกรณ์</a>
            </li>
        </ul>
        <div class="tab-content" id="content">
            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="tab-1">
                <img src="{{ url('picture\บอร์ดก่อตั้ง.jpg') }}" style="width: 100%;">
            </div>
            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="tab-2">
                <img src="{{ url('picture\กรรมการชุดที่ 25.jpg') }}" style="width: 100%;">
            </div>
            <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="tab-3">
                <img src="{{ url('picture\344-A4.jpg') }}" style="width: 100%;">
            </div>
            <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="tab-4">
                <img src="{{ url('picture\บอร์ดที่ปรึกษา1.jpg') }}" style="width: 100%;">
            </div>
            <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="tab-5">
                <img src="{{ url('picture\ทำเนียบสหกรณ์.jpg') }}" style="width: 100%;">
            </div>
        </div>
    </div>
@endsection
