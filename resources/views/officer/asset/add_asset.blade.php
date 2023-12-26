@extends('dashboard')
@extends('sidebar')
@section('title', 'Admin พิจารณาสินเชื่อ')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <h3 class="me-auto">Admin อัพโหลดสินทรัพย์</h3>
            <hr>
            <form action="/uploadAsset" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-outline mb-4" data-mdb-input-init>
                    <input type="text" id="title" class="form-control" name="title" required />
                    <label class="form-label" for="title">หัวข้อ</label>
                </div>
                <div class="form-outline mb-4" data-mdb-input-init>
                    <input type="text" id="description1" class="form-control" name="description1" required />
                    <label class="form-label" for="description1">รายละเอียด 1</label>
                </div>
                <div class="form-outline mb-4" data-mdb-input-init>
                    <input type="text" id="description2" class="form-control" name="description2" required />
                    <label class="form-label" for="description2">รายละเอียด 2</label>
                </div>
                <div class="form-outline mb-4" data-mdb-input-init>
                    <input type="text" id="contact" class="form-control" name="contact" required />
                    <label class="form-label" for="contact">ติดต่อ</label>
                </div>
                <select class="form-select mb-4" aria-label="ประเภท" name="asset_type">
                    <option selected>ประเภท</option>
                    <option value="1">บ้านพร้อมที่ดิน</option>
                    <option value="2">ที่ดินเปล่า</option>
                    <option value="3">คอนโด</option>
                </select>

                <label class="form-label" for="coverImage">ภาพหน้าปก</label>
                <input type="file" class="form-control mb-4" id="coverImage" name="coverImage" />

                <label class="form-label" for="Images">รูปภาพนำเข้า</label>
                <input type="file" class="form-control mb-4" id="Images" name="Images[]" multiple />
                <button type="submit" class="btn btn-success">อัพโหลด</button>
                <button type="reset" class="ms-2 btn btn-danger">ยกเลิก</button>
            </form>
        </div>
    </div>
@endsection
