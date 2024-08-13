@extends('dashboard')
@extends('sidebar')
@section('title', 'อัพโหลดไฟล์สินเชื่อ')
@section('content')
    <div class="card m-3">
        <form action="/postcredit" method="post" enctype="multipart/form-data">
            <div class="card-header">
                <h1 class="card-title">อัพโหลดไฟล์สินเชื่อ</h1>
            </div>
            <div class="card-body">
                @csrf
                <div class="form-group">
                    <label for="memberID">เลขที่สมาชิก :</label>
                    <input type="text" class="form-control form-control-border" id="memberID" name="memberID"
                        placeholder="เลขที่สมาชิก" required>
                </div>
                <div class="form-group">
                    <label for="firstName">ชื่อ :</label>
                    <input type="text" class="form-control form-control-border" id="firstName" name="firstName"
                        placeholder="ชื่อ" required>
                </div>
                <div class="form-group">
                    <label for="lastName">นามสกุล :</label>
                    <input type="text" class="form-control form-control-border" id="lastName" name="lastName"
                        placeholder="นามสกุล" required>
                </div>
                <div class="form-group">
                    <label for="contractNumber">เลขที่สัญญา :</label>
                    <input type="text" class="form-control form-control-border" id="contractNumber"
                        name="contractNumber" placeholder="ตัวอย่าง ฉ.0000001/2566" required>
                </div>
                <div class="form-group">
                    <label for="contractYear">ปีสัญญา :</label>
                    <select class="custom-select form-control-border border-width-2" id="contractYear" name="contractYear">
                        <option value="" disabled selected>เลือกปี</option>
                        <option value="2566">2566</option>
                        <option value="2567">2567</option>
                        <option value="2568">2568</option>
                        <option value="2569">2569</option>
                        <option value="2570">2570</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="branch">สาขา :</label>
                    <select class="custom-select form-control-border border-width-2" id="branch" name="branch">
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
                <div class="form-group">
                    <label for="contractType">ประเภทสัญญา :</label>
                    <select class="custom-select form-control-border border-width-2" id="contractType" name="contractType">
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
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fileUpload" name="file">
                        <label class="custom-file-label" for="fileUpload">เลือกไฟล์</label>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">อัพโหลด</button>
            </div>
        </form>
    </div>
@endsection
@section('script')
    @if (session('success'))
        <script>
            Swal.fire({
                title: "Good job!",
                text: "{{ session('success') }}",
                icon: "success"
            });
        </script>
    @endif
    @if (session('error'))
        <script>
            Swal.fire({
                title: "Oops...",
                text: "{{ session('error') }}",
                icon: "error"
            });
        </script>
    @endif
@endsection
