@extends('dashboard')
@extends('sidebar')
@section('title', 'ค้นหาสินเชื่อ')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <b class="h3 card-title">อัพโหลดไฟล์สินเชื่อ</b>
            <hr>
            <!-- Form -->
            <form action="/uploadFileCredit" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Member ID -->
                <div class="mb-3">
                    <label for="memberID" class="form-label">เลขที่สมาชิก</label>
                    <input type="text" class="form-control" id="memberID" name="memberID" required>
                </div>

                <!-- First Name -->
                <div class="mb-3">
                    <label for="firstName" class="form-label">ชื่อ</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                </div>

                <!-- Last Name -->
                <div class="mb-3">
                    <label for="lastName" class="form-label">นามสกุล</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                </div>

                <!-- Contract Number -->
                <div class="mb-3">
                    <label for="contractNumber" class="form-label">เลขที่สัญญา</label>
                    <input type="text" class="form-control" id="contractNumber" name="contractNumber" required>
                </div>

                <!-- Contract Year -->
                <div class="mb-3">
                    <label for="contractYear" class="form-label">ปีสัญญา</label>
                    <select class="form-select" id="contractYear" name="contractYear" required>
                        <option value="" disabled selected>เลือกปี</option>
                        <option value="2566">2566</option>
                        <option value="2567">2567</option>
                        <option value="2568">2568</option>
                        <option value="2569">2569</option>
                        <option value="2570">2570</option>
                    </select>
                </div>

                <!-- Branch -->
                <div class="mb-3">
                    <label for="branch" class="form-label">สาขา</label>
                    <select class="form-select" id="branch" name="branch" required>
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
                    </select>
                </div>

                <!-- Contract Type -->
                <div class="mb-3">
                    <label for="contractType" class="form-label">ประเภทสัญญา</label>
                    <select class="form-select" id="contractType" name="contractType" required>
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

                <!-- File Upload -->
                <div class="mb-3">
                    <label for="fileUpload" class="form-label">File Upload</label>
                    <input type="file" class="form-control" id="fileUpload" name="fileUpload" required>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">อัพโหลด</button>
            </form>
        </div>
    </div>
@endsection
