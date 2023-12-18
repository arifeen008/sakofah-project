@extends('dashboard')
@extends('sidebar')
@section('title', 'พิจารณาสินเชื่อ')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <b class="h3 card-title">พิจารณาสินเชื่อ</b>
            <hr>
            <form action="/postcredit_consider" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="memberID" class="form-label">เลขสมาชิก</label>
                    <input type="text" class="form-control" id="memberID" name="memberID" maxlength="5">
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="firstName" class="form-label">ชื่อ</label>
                            <input type="text" class="form-control" id="firstName" name="firstName">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="lastName" class="form-label">นามสกุล</label>
                            <input type="text" class="form-control" id="lastName" name="lastName">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="loanID" class="form-label">ประเภทสินเชื่อ</label>
                            <select class="form-select" id="loanID" name="loanID">
                                <option value="" disabled selected>Select Loan ID</option>
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
                    <div class="col">
                        <div class="mb-3">
                            <label for="loanYear" class="form-label">ปีสัญญา</label>
                            <select class="form-select" id="loanYear" name="loanYear">
                                <option value="" disabled selected>Select Loan Year</option>
                                <option value="2566">2566</option>
                                <option value="2567">2567</option>
                                <option value="2568">2568</option>
                                <option value="2569">2569</option>
                                <option value="2570">2570</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="branch" class="form-label">สาขา</label>
                    <select class="form-select" id="branch" name="branch">
                        <option value="" disabled selected>Select Branch</option>
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
                    <label for="fileInput" class="form-label">File Input</label>
                    <input type="file" class="form-control" id="fileInput" name="fileInput" accept=".pdf">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
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
