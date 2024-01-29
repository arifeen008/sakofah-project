@extends('dashboard')
@extends('sidebar')
@section('title', 'Report')
@section('content')
    <div class="card sticky-top m-3">
        <div class="card-body">
            <form action="/summaryReport" method="post">
                @csrf
                <div class="row">
                    <div class="col-5">
                        <select class="form-select" aria-label="montdSelect" name="month">
                            <option selected>เลือกเดือน</option>
                            <option value="01">มกราคม</option>
                            <option value="02">กุมภาพันธ์</option>
                            <option value="03">มีนาคม</option>
                            <option value="04">เมษายน</option>
                            <option value="05">พฤษภาคม</option>
                            <option value="06">มิถุนายน</option>
                            <option value="07">กรกฎาคม</option>
                            <option value="08">สิงหาคม</option>
                            <option value="09">กันยายน</option>
                            <option value="10">ตุลาคม</option>
                            <option value="11">พฤศจิกายน</option>
                            <option value="12">ธันวาคม</option>
                        </select>
                    </div>
                    <div class="col-5">
                        <select class="form-select" aria-label="yearSelect" name="year">
                            <option selected>ประจำปีบัญชี</option>
                            <option value="2024">2568</option>
                            <option value="2023">2567</option>
                            <option value="2022">2566</option>
                            <option value="2021">2565</option>
                            <option value="2020">2564</option>
                        </select>
                    </div>
                    <div class="d-grid col-2 mx-auto">
                        <button type="submit" class="btn btn-success active" data-mdb-ripple-init>ดึงข้อมูล</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @if ($data != null)
        <div class="card mt-3">
            <div class="card-body">
                <p class="text-dark text-center">ผลการดำเนินงานสมากชิกเข้าใหม่ - ลาออก</p>
                <table class="table table-bordered border-dark text-center">
                    <tr>
                        <td>ประเภท</td>
                        <td>ยกมา</td>
                        <td>เข้าใหม่</td>
                        <td>ลาออก</td>
                        <td>โอนย้ายออก</td>
                        <td>โอนย้ายเข้า</td>
                        <td>ยกไป</td>
                        <td>ผลต่าง</td>
                    </tr>
                    <tr>
                        <td>สามัญ</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                    </tr>
                    <tr>
                        <td>สมทบ</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <p class="text-dark text-center">รายงานหุ้นและเงินฝากทุกสาขา</p>
                <table class="table table-bordered border-dark text-center align-middle">
                    <tr>
                        <td rowspan="2">รายการประจำวัน</td>
                        <td colspan="5">ยอดรวมเงินสดทุกสาขา</td>
                    </tr>
                    <tr>
                        <td>ยกมา</td>
                        <td>เดบิต จ่าย</td>
                        <td>เครดิต รับ</td>
                        <td>ยกไป</td>
                        <td>ผลต่าง รับ-จ่าย</td>
                    </tr>
                    <tr>
                        <td>บัญชีทุนเรือนหุ้น</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                    </tr>
                    <tr>
                        <td>บัญชีมูฏอรอบะฮ</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                    </tr>
                    <tr>
                        <td>บัญชีวาดีอะฮ</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                    </tr>
                    <tr>
                        <td>บัญชีกองทุนฮัจย์</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                    </tr>
                    <tr>
                        <td>บัญชีเพื่อการศึกษา</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                    </tr>
                    <tr>
                        <td>บัญชีอิสติกอมะฮ 3</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                    </tr>
                    <tr>
                        <td>บัญชีอิสติกอมะฮ 6</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                    </tr>
                    <tr>
                        <td>บัญชีอิสติกอมะฮ 12</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                    </tr>
                    <tr>
                        <td>บัญชีอิสติกอมะฮ 24</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                    </tr>
                    <tr>
                        <td>บัญชียุวษะกอฟะฮ</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                    </tr>
                    <tr>
                        <td>บัญชีกรุบาน</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                    </tr>
                    <tr>
                        <td>บัญชีวาดีอะห์ ATM</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                    </tr>
                    <tr>
                        <td>รวมสุทธิ</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                        <td>{{ $data }}</td>
                    </tr>
                </table>
            </div>
        </div>
    @else
    @endif
@endsection
