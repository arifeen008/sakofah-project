@extends('dashboard')
@extends('sidebar')
@section('title', 'Admin รายการข่าวสาร')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <h3 class="me-auto"><b>รายการข่าวสาร</b></h3>
            <hr>
            <form action="/upload_news" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title :</label>
                    <input type="text" class="form-control form-control-border" id="title" name="title"
                        placeholder="Title" required>
                </div>
                <div class="form-group">
                    <label for="date">หัวข้อ :</label>
                    <input type="date" class="form-control form-control-border" id="date" name="date"
                        placeholder="หัวข้อ" required>
                </div>
                <div class="form-group">
                    <label for="news_type">ประเภทข่าว :</label>
                    <select class="custom-select form-control-border" id="news_type" name="news_type" required>
                        <option value="" disabled selected>ประเภท</option>
                        <option value="1">ประชาสัมพันธ์</option>
                        <option value="2">สวัสดิการ</option>
                        <option value="3">สินเชื่อฮาลาล</option>
                        <option value="4">มูลนิธิษะกอฟะฮ</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>รายละเอียด :</label>
                    <textarea class="form-control" rows="4" id="summernote" name="description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="coverImage">ภาพหน้าปก</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="coverImage" name="coverImage"
                                accept="image/*">
                            <label class="custom-file-label" for="coverImage">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">ภาพหน้าปก</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="uploadedFiles">รูปภาพนำเข้า</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="uploadedFiles" name="uploadedFiles[]"
                                accept="image/*" multiple>
                            <label class="custom-file-label" for="uploadedFiles">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">รูปภาพนำเข้า</span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
@section('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js"></script>
@endsection
@section('script')
    <script>
        $('#summernote').summernote({
            placeholder: 'Write here...',
            tabsize: 2,
            height: 500
        });
    </script>

    <script>
        document.getElementById('date').valueAsDate = new Date();
    </script>
    <script>
        document.getElementById('coverImage').addEventListener('change', function(e) {
            const fileName = this.files[0]?.name;
            if (fileName) {
                this.nextElementSibling.innerText = fileName;
            }
        });
        document.getElementById('uploadedFiles').addEventListener('change', function(e) {
            const count = this.files.length;
            if (count === 1) {
                this.nextElementSibling.innerText = this.files[0].name;
            } else if (count > 1) {
                this.nextElementSibling.innerText = `${count} ไฟล์ที่เลือกแล้ว`;
            }
        });
    </script>
@endsection
