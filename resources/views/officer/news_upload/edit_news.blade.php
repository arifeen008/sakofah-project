@extends('dashboard')
@extends('sidebar')
@section('title', 'Admin แก้ไขรายการข่าวสาร')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <h2 class="card-title"><b>แก้ไขรายการข่าวสาร</b></h2>
            <hr>
            <form action="/update_news" method="POST">
                @csrf
                <div class="mb-3">
					<input type="hidden" name="news_number" value="{{ $news->news_number }}" required>
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $news->title }}" required>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{ $news->dateupload }}" required>
                </div>
                <div class="mb-3">
                    <label for="news_type" class="form-label">ประเภทข่าว</label>
                    <select class="form-select" id="news_type" name="news_type" required>
                        <option value="1">ประชาสัมพันธ์</option>
                        <option value="2">สวัสดิการ</option>
                        <option value="3">สินเชื่อฮาลาล</option>
                        <option value="4">มูลนิธิษะกอฟะฮ</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">รายละเอียด :</label>
                    <textarea id="description" class="form-control" id="description" name="description" rows="4" required>{{ $news->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        CKEDITOR.replace('description');
    </script>
@endsection

