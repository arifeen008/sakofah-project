@extends('dashboard')

@section('title', 'Admin พิจารณาสินเชื่อ')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <h3 class="me-auto">Admin อัพโหลดสินทรัพย์</h3>
            <hr>
            <form action="/uploadAsset" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">หัวข้อ :</label>
                    <input type="text" class="form-control form-control-border" id="title" name="title"
                        placeholder="หัวข้อ" required>
                </div>
                <div class="form-group">
                    <label for="description1">รายละเอียด 1 :</label>
                    <input type="text" class="form-control form-control-border" id="description1" name="description1"
                        placeholder="รายละเอียด..." required>
                </div>
                <div class="form-group">
                    <label for="description2">รายละเอียด 2 :</label>
                    <input type="text" class="form-control form-control-border" id="description2" name="description2"
                        placeholder="รายละเอียด..." required>
                </div>
                <div class="form-group">
                    <label for="contact">ติดต่อ :</label>
                    <input type="text" class="form-control form-control-border" id="contact" name="contact"
                        placeholder="รายละเอียด..." required>
                </div>
                <div class="form-group">
                    <label for="asset_type">ประเภท :</label>
                    <select class="custom-select form-control-border" id="asset_type" name="asset_type" required>
                        <option value="" disabled selected>ประเภท</option>
                        <option value="1">บ้านพร้อมที่ดิน</option>
                        <option value="2">ที่ดินเปล่า</option>
                        <option value="3">คอนโด</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="coverImage">ภาพหน้าปก</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="coverImage" name="coverImage">
                            <label class="custom-file-label" for="coverImage">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Images[]">รูปภาพนำเข้า</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="Images[]" name="Images[]" multiple>
                            <label class="custom-file-label" for="Images[]">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">อัพโหลด</button>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
            </form>
        </div>
    </div>
@endsection

