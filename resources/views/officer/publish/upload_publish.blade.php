@extends('dashboard')
@extends('sidebar')
@section('title', 'อัพโหลดประกาศภายใน')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <b class="h3 card-title">อัพโหลดประกาศภายใน</b>
            <hr>
            <form action="/add_publish" method="post" enctype="multipart/form-data" class="row g-3">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">หัวข้อ</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">เลือกวันที่</label>
                    <input type="date" class="form-control" id="date" name="date">
                </div>
                <div class="mb-3">
                    <label for="type_announcement" class="form-label">ฝ่าย</label>
                    <select class="form-select" id="type_announcement" name="type_announcement">
                        <option value="1">ฝ่ายบุคคล</option>
                        <option value="2">ฝ่ายสำนักงานใหญ่</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="uploadFile" class="form-label">อัพโหลดไฟล์</label>
                    <input type="file" class="form-control" name="uploadFile" accept=".pdf" id="uploadFile" />
                </div>
                <button type="submit" class="btn btn-success">อัพโหลด</button>
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
@endsection
