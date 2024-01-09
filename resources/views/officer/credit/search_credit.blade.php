@extends('dashboard')
@extends('sidebar')
@section('title', 'ค้นหาสินเชื่อ')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <b class="h3">ค้นหาสินเชื่อ</b>
            <hr>
            <form action="/searchcredit" method="post">
                @csrf
                <div class="mb-3">
                    <label for="year" class="form-label">ปี</label>
                    <select class="form-select" id="year" name="year" required>
                        <option value="" disabled selected>เลือกปี</option>
                        <option value="2566">2566</option>
                        <option value="2567">2567</option>
                        <option value="2568">2568</option>
                        <option value="2569">2569</option>
                        <option value="2570">2570</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">สาขา</label>
                    <select class="form-select" name="branch_id" required>
                        <option value="" disabled selected>เลือกสาขา</option>
                        <option value="000">สำนักงานใหญ่</option>
                        <option value="001">กระบี่</option>
                        <option value="002">คลองยาง</option>
                        <option value="003">อ่าวลึก</option>
                        <option value="004">กาญจนดิษฐ์</option>
                        <option value="005">คลองท่อม</option>
                        <option value="006">อ่าวนาง</option>
                        <option value="007">ห้วยลึก</option>
                        <option value="008">เกาะลันตา</option>
                        <option value="009">สาขาเหนือคลอง</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">ประเภทสัญญา</label>
                    <select class="form-select" name="credit_id" required>
                        <option value="" disabled selected>เลือกประเภทสัญญา</option>
                        <option value="1">ฉุกเฉิน</option>
                        <option value="2">สามัญฉุกเฉิน</option>
                        <option value="3">สามัญ</option>
                        <option value="4">พิเศษ</option>
                        <option value="5">พิเศษโครงการ</option>
                        <option value="6">โครงการสินทรัพย์</option>
                        <option value="7">สวัสดิการเจ้าหน้าที่</option>
                    </select>
                <button type="submit" class="btn btn-primary mt-3">ค้นหา</button>
            </form>
        </div>
    </div>
@endsection
