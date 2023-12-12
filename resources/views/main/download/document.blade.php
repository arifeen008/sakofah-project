@extends('layout')
@section('title', 'เอกสารสำหรับสมาชิก |สหกรณ์อิสลามษะกอฟะฮ จำกัด')
@section('content')
    <div data-mdb-toggle="animation" data-mdb-animation="fade-in" data-mdb-animation-start="onLoad" class="container my-2">
        <p style="font-family: 'Kanit';" class="text-dark text-center h2 mt-3">เอกสารสำหรับสมาชิก</p>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 mb-2">
                    <div class="card">
                        <a href="{{ url('file\form\แบบฟอร์มคำขอสมัครสมาชิกและเงินฝาก.pdf') }}" target="_blank"
                            class="btn  btn-block btn-lg" data-mdb-ripple-color="info">
                            <div class="d-flex justify-content-between">
                                <b style="font-family: 'Kanit';" class="text-dark">แบบฟอร์มคำขอรับสมาชิกและเงินฝาก </b>
                                <i class="fas fa-download text-dark ms-1"></i>
                            </div>

                        </a>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="card">
                        <a href="{{ url('file\form\แบบฟอร์มคำขอ_รับสวัสดิการ.pdf') }}" target="_blank"
                            class="btn  btn-block btn-lg" data-mdb-ripple-color="info">
                            <div class="d-flex justify-content-between">
                                <b style="font-family: 'Kanit';" class="text-dark">แบบฟอร์มคำขอรับสวัสดิการ</b>
                                <i class="fas fa-download text-dark ms-1"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="card">
                        <a href="{{ url('file\form\แบบฟอร์มคำร้องทั่วไป.pdf') }}" target="_blank"
                            class="btn  btn-block btn-lg" data-mdb-ripple-color="info">
                            <div class="d-flex justify-content-between">
                                <b style="font-family: 'Kanit';" class="text-dark">แบบฟอร์มคำร้องทั่วไป</b>
                                <i class="fas fa-download text-dark ms-1"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="card">
                        <a href="{{ url('file\form\แบบฟอร์มคำขอรับสวัสดิการ_เสียชีวิต.pdf') }}" target="_blank"
                            class="btn  btn-block btn-lg" data-mdb-ripple-color="info">
                            <div class="d-flex justify-content-between">
                                <b style="font-family: 'Kanit';" class="text-dark">แบบฟอร์มคำขอรับสวัสดิการเสียชีวิต</b>
                                <i class="fas fa-download text-dark ms-1"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="card">
                        <a href="{{ url('file\form\แบบฟอร์มคำขอลาออกสมาชิกเสียชีวิต.pdf') }}" target="_blank"
                            class="btn  btn-block btn-lg" data-mdb-ripple-color="info">
                            <div class="d-flex justify-content-between">
                                <b style="font-family: 'Kanit';" class="text-dark">แบบฟอร์มคำขอลาออกสมาชิกเสียชีวิต</b>
                                <i class="fas fa-download text-dark ms-1"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="card">
                        <a href="{{ url('file\form\แบบฟอร์มคำขอชำระผ่านการหัก.pdf') }}" target="_blank"
                            class="btn  btn-block btn-lg" data-mdb-ripple-color="info">
                            <div class="d-flex justify-content-between">
                                <b style="font-family: 'Kanit';" class="text-dark">แบบฟอร์มคำขอชำระผ่านการหัก</b>
                                <i class="fas fa-download text-dark ms-1"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="card">
                        <a href="{{ url('file\form\แบบฟอร์มคำขอลาออกสมาชิก.pdf') }}" target="_blank"
                            class="btn  btn-block btn-lg" data-mdb-ripple-color="info">
                            <div class="d-flex justify-content-between">
                                <b style="font-family: 'Kanit';" class="text-dark">แบบฟอร์มคำขอลาออกสมาชิก </b>
                                <i class="fas fa-download text-dark ms-1"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="card">
                        <a href="{{ url('file\form\ใบสมัครเข้าร่วมโครงการ.pdf') }}" target="_blank"
                            class="btn  btn-block btn-lg" data-mdb-ripple-color="info">
                            <div class="d-flex justify-content-between">
                                <b style="font-family: 'Kanit';" class="text-dark">ใบสมัครเข้าร่วมโครงการ</b>
                                <i class="fas fa-download text-dark ms-1"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="card">
                        <a href="{{ url('file\form\CHECK LIST.pdf') }}" target="_blank" class="btn  btn-block btn-lg"
                            data-mdb-ripple-color="info">
                            <div class="d-flex justify-content-between">
                                <b style="font-family: 'Kanit';" class="text-dark">Check list สินเชื่อฮาลาล</b>
                                <i class="fas fa-download text-dark ms-1"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
