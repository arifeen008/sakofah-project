@extends('dashboard')
@extends('sidebar')
@section('title', 'Dashboard')
@section('content')
    <div class="m-3">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">ค้นหาข้อมูลสมาชิก</h2>
                <div class="card-text">
                    <form action="#" method="POST" class="row g-3">
						@csrf
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="text" id="form1" class="form-control" maxlength="13" minlength="13"/>
                            <label class="form-label" for="form1">เลขบัตรประชาชน :</label>
                        </div>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="text" id="form2" class="form-control" />
                            <label class="form-label" for="form2">เลขสมาชิก :</label>
                        </div>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="text" id="form3" class="form-control" />
                            <label class="form-label" for="form3">ชื่อ :</label>
                        </div>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="text" id="form4" class="form-control" />
                            <label class="form-label" for="form4">นามสกุล :</label>
                        </div>
                        <select class="form-select" id="form5" aria-label="Default select example">
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
							<label class="form-label" for="form5">สาขา :</label>
                        </select>
						<button type="submit" class="btn btn-success"><i class="fas fa-search me-2"></i>ค้นหา</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
