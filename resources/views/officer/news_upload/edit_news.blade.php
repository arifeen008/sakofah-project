@extends('dashboard')
@extends('sidebar')
@section('title', 'Admin แก้ไขรายการข่าวสาร')
@section('content')
    
    <div class="card m-3">
        <div class="card-body">
            <h2 class="me-auto"><b>แก้ไขรายการข่าวสาร</b></h2>
            <hr>
            <form action="/update_news" method="POST">
                @csrf
                <input type="hidden" name="news_number" value="{{ $news->news_number }}" required>
                <div class="form-group">
                    <label for="title">Title :</label>
                    <input type="text" class="form-control form-control-border" id="title" name="title"
                        placeholder="Title" value="{{ $news->title }}" required>
                </div>
                <div class="form-group">
                    <label for="date">หัวข้อ :</label>
                    <input type="date" class="form-control form-control-border" id="date" name="date"
                        placeholder="หัวข้อ" value="{{ $news->dateupload }}" required>
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
                    <textarea class="form-control" rows="4" id="summernote" name="description" required>{{ $news->description }}</textarea>
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
@endsection
