@extends('layout')
@section('title', 'เอกสารสำหรับสมาชิก | สหกรณ์อิสลามษะกอฟะฮ จำกัด')
@section('content')
    <div class="container my-2">
        <div class="card" style="font-family: 'Sarabun', sans-serif;">
            <p class="text-dark text-center h2 mt-3">เอกสารสำหรับสมาชิก</p>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <div class="card">
                            <a href="{{ url('file\form\ใบคำขอสมัครสมาชิก(เพิ่มเติม).docx') }}" target="_blank"
                                class="btn  btn-block btn-lg">
                                <div class="d-flex justify-content-between">
                                    <b class="text-dark">ใบคำขอสมัครสมาชิก</b>
                                    <i class="fas fa-download text-dark ms-1"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 mb-2">
                        <div class="card">
                            <a href="{{ url('file\form\คำขอรับสวัสดิการสมาชิก.pdf') }}" target="_blank"
                                class="btn  btn-block btn-lg">
                                <div class="d-flex justify-content-between">
                                    <b class="text-dark">แบบฟอร์มคำขอรับสวัสดิการ</b>
                                    <i class="fas fa-download text-dark ms-1"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 mb-2">
                        <div class="card">
                            <a href="{{ url('file\form\แบบฟอร์มคำร้องทั่วไป.pdf') }}" target="_blank"
                                class="btn  btn-block btn-lg">
                                <div class="d-flex justify-content-between">
                                    <b class="text-dark">แบบฟอร์มคำร้องทั่วไป</b>
                                    <i class="fas fa-download text-dark ms-1"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 mb-2">
                        <div class="card">
                            <a href="{{ url('file\form\แบบฟอร์มคำขอรับสวัสดิการ_เสียชีวิต.pdf') }}" target="_blank"
                                class="btn  btn-block btn-lg">
                                <div class="d-flex justify-content-between">
                                    <b class="text-dark">แบบฟอร์มคำขอรับสวัสดิการเสียชีวิต</b>
                                    <i class="fas fa-download text-dark ms-1"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 mb-2">
                        <div class="card">
                            <a href="{{ url('file\form\แบบฟอร์มคำขอลาออกสมาชิกเสียชีวิต.pdf') }}" target="_blank"
                                class="btn  btn-block btn-lg">
                                <div class="d-flex justify-content-between">
                                    <b class="text-dark">แบบฟอร์มคำขอลาออกสมาชิกเสียชีวิต</b>
                                    <i class="fas fa-download text-dark ms-1"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 mb-2">
                        <div class="card">
                            <a href="{{ url('file\form\ยินยอมหักผ่านบัญชี.pdf') }}" target="_blank"
                                class="btn  btn-block btn-lg">
                                <div class="d-flex justify-content-between">
                                    <b class="text-dark">แบบฟอร์มยินยอมหักผ่านบัญชี</b>
                                    <i class="fas fa-download text-dark ms-1"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 mb-2">
                        <div class="card">
                            <a href="{{ url('file\form\คำขอลาออกสมาชิก.pdf') }}" target="_blank"
                                class="btn  btn-block btn-lg">
                                <div class="d-flex justify-content-between">
                                    <b class="text-dark">แบบฟอร์มคำขอลาออกสมาชิก
                                    </b>
                                    <i class="fas fa-download text-dark ms-1"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 mb-2">
                        <div class="card">
                            <a href="{{ url('file\form\ใบสมัครเข้าร่วมโครงการ.pdf') }}" target="_blank"
                                class="btn  btn-block btn-lg">
                                <div class="d-flex justify-content-between">
                                    <b class="text-dark">ใบสมัครเข้าร่วมโครงการ</b>
                                    <i class="fas fa-download text-dark ms-1"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 mb-2">
                        <div class="card">
                            <a href="{{ url('file\form\CHECK LIST.pdf') }}" target="_blank" class="btn  btn-block btn-lg"
                            >
                                <div class="d-flex justify-content-between">
                                    <b class="text-dark">Check list
                                        สินเชื่อฮาลาล</b>
                                    <i class="fas fa-download text-dark ms-1"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
