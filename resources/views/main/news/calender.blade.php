@extends('layout')
@section('title', 'ปฏิทินสหกรณ์ | สหกรณ์อิสลามษะกอฟะฮ จำกัด')
@section('content')
    <img src="{{ url('calendar/ปกโปสเตอร์.jpg') }}" class="img-fluid w-100" class="mb-2">
    <div class="container my-2">
        <div class="row">
            <div class="col-3">
                <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a data-mdb-pill-init class="nav-link" id="v-pills-month0-tab" href="#v-pills-month0" role="tab"
                        aria-controls="v-pills-month0" aria-selected="false">
                        มกราคม
                    </a>
                    <a data-mdb-pill-init class="nav-link active" id="v-pills-month1-tab" href="#v-pills-month1" role="tab"
                        aria-controls="v-pills-month1" aria-selected="false">
                        กุมภาพันธ์
                    </a>
                    <a data-mdb-pill-init class="nav-link" id="v-pills-month2-tab" href="#v-pills-month2" role="tab"
                        aria-controls="v-pills-month2" aria-selected="false">
                        มีนาคม
                    </a>
                    <a data-mdb-pill-init class="nav-link" id="v-pills-month3-tab" href="#v-pills-month3" role="tab"
                        aria-controls="v-pills-month3" aria-selected="false">
                        เมษายน
                    </a>
                    <a data-mdb-pill-init class="nav-link" id="v-pills-month4-tab" href="#v-pills-month4" role="tab"
                        aria-controls="v-pills-month4" aria-selected="false">
                        พฤษภาคม
                    </a>
                    <a data-mdb-pill-init class="nav-link" id="v-pills-month5-tab" href="#v-pills-month5" role="tab"
                        aria-controls="v-pills-month5" aria-selected="false">
                        มิถุนายน
                    </a>
                    <a data-mdb-pill-init class="nav-link" id="v-pills-month6-tab" href="#v-pills-month6" role="tab"
                        aria-controls="v-pills-month6" aria-selected="false">
                        กรกฎาคม
                    </a>
                    <a data-mdb-pill-init class="nav-link" id="v-pills-month7-tab" href="#v-pills-month7" role="tab"
                        aria-controls="v-pills-month7" aria-selected="false">
                        สิงหาคม
                    </a>
                    <a data-mdb-pill-init class="nav-link" id="v-pills-month8-tab" href="#v-pills-month8" role="tab"
                        aria-controls="v-pills-month8" aria-selected="false">
                        กันยายน
                    </a>
                    <a data-mdb-pill-init class="nav-link" id="v-pills-month9-tab" href="#v-pills-month9" role="tab"
                        aria-controls="v-pills-month9" aria-selected="false">
                        ตุลาคม
                    </a>
                    <a data-mdb-pill-init class="nav-link" id="v-pills-month10-tab" href="#v-pills-month10" role="tab"
                        aria-controls="v-pills-month10" aria-selected="false">
                        พฤศจิกายน
                    </a>
                    <a data-mdb-pill-init class="nav-link" id="v-pills-month11-tab" href="#v-pills-month11"
                        role="tab" aria-controls="v-pills-month11" aria-selected="false">
                        ธันวาคม
                    </a>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade" id="v-pills-month0" role="tabpanel" aria-labelledby="v-pills-month0-tab">
                        <img src="{{ url('calendar/01.jpg') }}" class="img-thumbnail" width="auto">
                    </div>
                    <div class="tab-pane fade show active" id="v-pills-month1" role="tabpanel" aria-labelledby="v-pills-month1-tab">
                        <img src="{{ url('calendar/02.jpg') }}" class="img-thumbnail" width="auto">
                    </div>
                    <div class="tab-pane fade" id="v-pills-month2" role="tabpanel" aria-labelledby="v-pills-month2-tab">
                        <img src="{{ url('calendar/03.jpg') }}" class="img-thumbnail" width="auto">
                    </div>
                    <div class="tab-pane fade" id="v-pills-month3" role="tabpanel"
                        aria-labelledby="v-pills-month3-tab">
                        <img src="{{ url('calendar/04.jpg') }}" class="img-thumbnail" width="auto">
                    </div>
                    <div class="tab-pane fade" id="v-pills-month4" role="tabpanel"
                        aria-labelledby="v-pills-month4-tab">
                        <img src="{{ url('calendar/05.jpg') }}" class="img-thumbnail" width="auto">
                    </div>
                    <div class="tab-pane fade" id="v-pills-month5" role="tabpanel"
                        aria-labelledby="v-pills-month5-tab">
                        <img src="{{ url('calendar/06.jpg') }}" class="img-thumbnail" width="auto">
                    </div>
                    <div class="tab-pane fade" id="v-pills-month6" role="tabpanel"
                        aria-labelledby="v-pills-month6-tab">
                        <img src="{{ url('calendar/07.jpg') }}" class="img-thumbnail" width="auto">
                    </div>
                    <div class="tab-pane fade" id="v-pills-month7" role="tabpanel"
                        aria-labelledby="v-pills-month7-tab">
                        <img src="{{ url('calendar/08.jpg') }}" class="img-thumbnail" width="auto">
                    </div>
                    <div class="tab-pane fade" id="v-pills-month8" role="tabpanel"
                        aria-labelledby="v-pills-month8-tab">
                        <img src="{{ url('calendar/09.jpg') }}" class="img-thumbnail" width="auto">
                    </div>
                    <div class="tab-pane fade" id="v-pills-month9" role="tabpanel"
                        aria-labelledby="v-pills-month9-tab">
                        <img src="{{ url('calendar/10.jpg') }}" class="img-thumbnail" width="auto">
                    </div>
                    <div class="tab-pane fade" id="v-pills-month10" role="tabpanel"
                        aria-labelledby="v-pills-month10-tab">
                        <img src="{{ url('calendar/11.jpg') }}" class="img-thumbnail" width="auto">
                    </div>
                    <div class="tab-pane fade" id="v-pills-month11" role="tabpanel"
                        aria-labelledby="v-pills-month11-tab">
                        <img src="{{ url('calendar/12.jpg') }}" class="img-thumbnail" width="auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
