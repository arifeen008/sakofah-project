@extends('dashboard')
@extends('sidebar')
@section('title', 'ค้นหาข้อมูลสมาชิก')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <div class="card-text">
                <h2 class="mb-4">ค้นหาข้อมูลสมาชิก</h2>
                <hr>
                <form action="/searchMember" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="idCardNumber" class="form-label">เลขบัตรประชาชน</label>
                        <input type="text" class="form-control" id="idCardNumber" name="idCardNumber" maxlength="13" minlength="13">
                    </div>
                    <div class="mb-3">
                        <label for="memberNumber" class="form-label">เลขสมาชิก</label>
                        <input type="text" class="form-control" id="memberNumber" name="memberNumber">
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
                    <div class="mb-3">
                        <label for="branch" class="form-label">สาขา</label>
                        <select class="form-select" id="branch" name="branch" required>
                            <option value="" disabled selected>Select Branch</option>
                            <option value="000">สาขาสำนักงานใหญ่</option>
                            <option value="001">สาขากระบี่</option>
                            <option value="002">สาขาคลองยาง</option>
                            <option value="003">สาขาอ่าวลึก</option>
                            <option value="004">สาขากาญจนดิษฐ์</option>
                            <option value="005">สาขาคลองท่อม</option>
                            <option value="006">สาขาอ่าวนาง</option>
                            <option value="007">สาขาห้วยลึก</option>
                            <option value="008">สาขาเกาะลันตา</option>
                            <option value="009">สาขาเหนือคลอง</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary">ค้นหา</button>
                        </div>
                        <div class="col">
                            <button type="reset" class="btn btn-warning">ล้างข้อมูล</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
