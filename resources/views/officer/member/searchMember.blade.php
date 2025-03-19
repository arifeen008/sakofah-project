@extends('dashboard')
@extends('sidebar')
@section('title', 'ค้นหาข้อมูลสมาชิก')
@section('content')
    <form action="/searchMember" method="POST" class="form-horizontal">
        <div class="card m-3">
            <div class="card-body">
                <div class="card-text">
                    <h2 class="mb-4">ค้นหาข้อมูลสมาชิก</h2>
                    <hr>
                    @csrf
                    <div class="mb-3">
                        <label for="idCardNumber" class="form-label text-dark">เลขบัตรประชาชน :</label>
                        <input type="text" class="form-control" id="idCardNumber" name="idCardNumber" maxlength="13" minlength="13" pattern="\d*">
                    </div>
                    <div class="mb-3">
                        <label for="memberNumber" class="form-label text-dark">เลขสมาชิก :</label>
                        <input type="text" class="form-control" id="memberNumber" name="memberNumber">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="firstName" class="form-label text-dark">ชื่อ :</label>
                                <input type="text" class="form-control" id="firstName" name="firstName">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="lastName" class="form-label text-dark">นามสกุล :</label>
                                <input type="text" class="form-control" id="lastName" name="lastName">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="branch">สาขา :</label>
                            <select class="custom-select form-control-border" id="branch" name="branch">
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
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">ค้นหา</button>
                <button type="reset" class="btn btn-warning">ล้างข้อมูล</button>
            </div>
        </div>
    </form>
@endsection
