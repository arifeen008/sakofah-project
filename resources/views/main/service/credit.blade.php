@extends('layout')
@section('title', 'บริการสินเชื่อ ')
@section('content')
    <style>
        .nav-pills .nav-link.active {
            background-color: #25d321;
        }
    </style>
    <div class="container my-2">
        <p class="h1 text-center text-dark mt-3">บริการสินเชื่อสหกรณ์</p>
        <div class="row">
            <div class="col-3">
                <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a data-mdb-pill-init class="nav-link active" href="#v-pills-a" role="tab"
                        aria-selected="true">สินเชื่อ </a>
                    <a data-mdb-pill-init class="nav-link position-relative" href="#v-pills-b" role="tab"
                        aria-selected="false">สินเชื่อเพื่อมัสยิด <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill badge-success">
                            ใหม่
                        </span></a>
                    <a data-mdb-pill-init class="nav-link position-relative" href="#v-pills-c" role="tab"
                        aria-selected="false">สินเชื่อเพื่อโรงเรียน <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill badge-success">
                            ใหม่
                        </span></a>
                    <a data-mdb-pill-init class="nav-link" href="#v-pills-d" role="tab"
                        aria-selected="false">เงินกู้ยืมสามัญ</a>
                    <a data-mdb-pill-init class="nav-link" href="#v-pills-e" role="tab"
                        aria-selected="false">เงินกู้ยืมสามัญฉุกเฉิน</a>
                    <a data-mdb-pill-init class="nav-link" href="#v-pills-f" role="tab"
                        aria-selected="false">เงินกู้ยืมฉุกเฉิน</a>
                    <a data-mdb-pill-init class="nav-link" href="#v-pills-g" role="tab"
                        aria-selected="false">เงินกู้ยืมโครงการ</a>
                    <a data-mdb-pill-init class="nav-link" href="#v-pills-h" role="tab"
                        aria-selected="false">เงินกู้ยืมโครงการสินทรัพย์</a>
                    <a data-mdb-pill-init class="nav-link" href="#v-pills-i" role="tab"
                        aria-selected="false">เงินกู้ยืมพิเศษ</a>
                </div>
            </div>

            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-a" role="tabpanel" aria-labelledby="v-pills-a">
                        <img src="{{ url('picture/มูรอบะหมายถึง.jpg') }}" style="width: 100%;">
                        <div class="ratio ratio-16x9 my-3">
                            <iframe src="https://www.youtube.com/embed/zzvuyxuuHPs" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-b" role="tabpanel" aria-labelledby="v-pills-b">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/BD935nbm55U" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-c" role="tabpanel" aria-labelledby="v-pills-c">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/y6ew2-7rBfA" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-d" role="tabpanel" aria-labelledby="v-pills-d">
                        <img src="{{ url('picture/347-เงินกู้ยืมสามัญ.jpg') }}" style="width: 100%;">
                    </div>
                    <div class="tab-pane fade" id="v-pills-e" role="tabpanel" aria-labelledby="v-pills-e">
                        <img src="{{ url('picture/351-เงินกู้ยืมสามัญฉุกเฉิน.jpg') }}" style="width: 100%;">
                    </div>
                    <div class="tab-pane fade" id="v-pills-f" role="tabpanel" aria-labelledby="v-pills-f">
                        <img src="{{ url('picture/352-เงินกู้ยืมฉุกเฉิน.jpg') }}" style="width: 100%;">
                    </div>
                    <div class="tab-pane fade" id="v-pills-g" role="tabpanel" aria-labelledby="v-pills-g">
                        <img src="{{ url('picture/349-เงินกู้ยืมโครงการ.jpg') }}" style="width: 100%;">
                    </div>
                    <div class="tab-pane fade" id="v-pills-h" role="tabpanel" aria-labelledby="v-pills-h">
                        <img src="{{ url('picture/350-เงินกู้ยืมโครงการสินทรัพย์.jpg') }}" style="width: 100%;">
                    </div>
                    <div class="tab-pane fade" id="v-pills-i" role="tabpanel" aria-labelledby="v-pills-i">
                        <img src="{{ url('picture/348-เงินกู้ยืมพิเศษ.jpg') }}" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
