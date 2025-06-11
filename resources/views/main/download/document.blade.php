@extends('layout')
@section('title', 'เอกสารสำหรับสมาชิก ')
@section('content')
    <div class="container my-4">
        <div class="card shadow-lg border-0 rounded-3" style="font-family: 'Sarabun', sans-serif;">
            <div class="card-header bg-success text-white text-center py-3 rounded-top">
                <h2 class="mb-0">เอกสารสำหรับสมาชิก</h2>
            </div>
            <div class="card-body p-4">
                <div class="row g-3">
                    @foreach ([['name' => 'ใบคำขอสมัครสมาชิก', 'path' => 'file/form/ใบคำขอสมัครสมาชิก INFORM 68-001.pdf'], ['name' => 'แบบฟอร์มคำขอรับสวัสดิการ', 'path' => 'file/form/คำขอรับสวัสดิการสมาชิก.pdf'], ['name' => 'แบบฟอร์มคำร้องทั่วไป', 'path' => 'file/form/แบบฟอร์มคำร้องทั่วไป.pdf'], ['name' => 'แบบฟอร์มคำขอรับสวัสดิการเสียชีวิต', 'path' => 'file/form/คำรับสวัสดิการกรณีเสียชีวิต.pdf'], ['name' => 'แบบฟอร์มคำขอลาออกสมาชิกเสียชีวิต', 'path' => 'file/form/แบบฟอร์มคำขอลาออกสมาชิกเสียชีวิต.pdf'], ['name' => 'แบบฟอร์มยินยอมหักผ่านบัญชี', 'path' => 'file/form/แบบฟอร์มคำขอชำระผ่านการหัก.pdf'], ['name' => 'แบบฟอร์มคำขอลาออกสมาชิก', 'path' => 'file/form/คำขอลาออกสมาชิก.pdf'], ['name' => 'ใบสมัครเข้าร่วมโครงการ', 'path' => 'file/form/ใบสมัครเข้าร่วมโครงการ.pdf'], ['name' => 'Check list สินเชื่อฮาลาล', 'path' => 'file/form/CHECK LIST.pdf']] as $file)
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100">
                                <a href="{{ url($file['path']) }}" target="_blank"
                                    class="btn btn-light btn-lg w-100 d-flex justify-content-between align-items-center p-3">
                                    <span class="fw-bold text-success">{{ $file['name'] }}</span>
                                    <i class="fas fa-download text-success"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
