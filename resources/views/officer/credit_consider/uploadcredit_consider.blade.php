@extends('dashboard')

@section('title', 'พิจารณาสินเชื่อ')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <b class="h3 card-title">พิจารณาสินเชื่อ</b>
            <hr>
            <form action="/postcredit_consider" method="post" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li> <span class="text-danger">{{ $error }}</span></li>
                        @endforeach
                    </ul>
                @endif

                <div class="mb-3">
                    <label for="mem_id" class="form-label">เลขสมาชิก</label>
                    <input type="text" class="form-control" id="mem_id" name="mem_id" maxlength="5">
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="firstname" class="form-label">ชื่อ</label>
                            <input type="text" class="form-control" id="firstname" name="firstname">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="lastname" class="form-label">นามสกุล</label>
                            <input type="text" class="form-control" id="lastname" name="lastname">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="loan_type" class="form-label">ประเภทสินเชื่อ</label>
                            <select class="form-select" id="loan_type" name="loan_type">
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
                            <select class="form-select" id="loanYear" name="loan_year">
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
                        <option value="สำนักงานใหญ่">สำนักงานใหญ่</option>
                        <option value="กระบี่">กระบี่</option>
                        <option value="คลองยาง">คลองยาง</option>
                        <option value="อ่าวลึก">อ่าวลึก</option>
                        <option value="กาญจนดิษฐ์">กาญจนดิษฐ์</option>
                        <option value="คลองท่อม">คลองท่อม</option>
                        <option value="อ่าวนาง">อ่าวนาง</option>
                        <option value="ห้วยลึก">ห้วยลึก</option>
                        <option value="เกาะลันตา">เกาะลันตา</option>
                        <option value="สาขาเหนือคลอง">สาขาเหนือคลอง</option>
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
