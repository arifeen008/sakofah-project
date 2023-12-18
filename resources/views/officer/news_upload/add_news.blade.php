@extends('dashboard')
@extends('sidebar')
@section('title', 'Admin รายการข่าวสาร')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <h3 class="card-title"><b>รายการข่าวสาร</b></h3>
            <hr>
            <form action="/upload_news" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date">
                </div>

                <div class="mb-3">
                    <label for="news_type" class="form-label">news_type</label>
                    <select class="form-select" id="news_type" name="news_type">
                        <option value="1">ประชาสัมพันธ์</option>
                        <option value="2">สวัสดิการ</option>
                        <option value="3">สินเชื่อฮาลาล</option>
                        <option value="4">มูลนิธิษะกอฟะฮ</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">รายละเอียด :</label>
                    <textarea id="editor"  class="form-control" id="description" name="description" rows="4"></textarea>
                </div>

                <div class="mb-3">
                    <label for="coverImage" class="form-label">ภาพหน้าปก</label>
                    <input type="file" class="form-control" id="coverImage" name="coverImage" accept="image/*">
                </div>

                <div class="mb-3">
                    <label for="uploadedFiles" class="form-label">ภาพข่าว</label>
                    <input type="file" class="form-control" id="uploadedFiles" name="uploadedFiles[]" accept="image/*" multiple>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
@endsection
@section('script')
    <script>
        CKEDITOR.replace('editor');
    </script>
@endsection
