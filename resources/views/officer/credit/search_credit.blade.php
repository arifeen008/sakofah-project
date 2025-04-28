@extends('dashboard')

@section('title', 'ค้นหาสินเชื่อ')
@section('content')
    <div class="card card-success m-3">
        <form action="/searchcredit" method="post">
            <div class="card-header">
                <div class="card-title">
                    ค้นหาสินเชื่อ
                </div>
            </div>
            <div class="card-body">
                @csrf
                <div class="form-group">
                    <label for="year">ปี :</label>
                    <select class="custom-select form-control-border" id="year" name="year" required>
                        <option value="" disabled selected>เลือกปี</option>
                        <option value="2566">2566</option>
                        <option value="2567">2567</option>
                        <option value="2568">2568</option>
                        <option value="2569">2569</option>
                        <option value="2570">2570</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="branch_id">สาขา :</label>
                    <select class="custom-select form-control-border" id="branch_id" name="branch_id" required>
                        <option value="" disabled selected>สาขา</option>
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
                <div class="form-group">
                    <label for="credit_id">ประเภทสัญญา :</label>
                    <select class="custom-select form-control-border" id="credit_id" name="credit_id" required>
                        <option value="" disabled selected>เลือกประเภทสัญญา</option>
                        <option value="1">ฉุกเฉิน</option>
                        <option value="2">สามัญฉุกเฉิน</option>
                        <option value="3">สามัญ</option>
                        <option value="4">พิเศษ</option>
                        <option value="5">พิเศษโครงการ</option>
                        <option value="6">โครงการสินทรัพย์</option>
                        <option value="7">สวัสดิการเจ้าหน้าที่</option>
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">ค้นหาสินเชื่อ</button>
            </div>
        </form>
    </div>
@endsection
