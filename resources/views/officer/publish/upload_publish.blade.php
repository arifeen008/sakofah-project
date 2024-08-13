@extends('dashboard')
@extends('sidebar')
@section('title', 'อัพโหลดประกาศภายใน')
@section('content')
    <div class="card m-3">
        <div class="card-header">
            <b class="h3 card-title">อัพโหลดประกาศภายใน</b>
        </div>
        <div class="card-body">
            <form action="/add_publish" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">หัวข้อ :</label>
                    <input type="text" class="form-control form-control-border" id="title" name="title"
                        placeholder="หัวข้อ" required>
                </div>
                <div class="form-group">
                    <label for="title">เลือกวันที่ :</label>
                    <input type="date" class="form-control form-control-border" id="date" name="date" required>
                </div>
                <div class="form-group">
                    <label for="type_announcement">ฝ่าย :</label>
                    <select class="custom-select form-control-border" id="type_announcement" name="type_announcement"
                        required>
                        <option value="" disabled selected>ประกาศโดยฝ่าย...</option>
                        <option value="1">ฝ่ายบุคคล</option>
                        <option value="2">ฝ่ายสำนักงานใหญ่</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="uploadFile">อัพโหลดไฟล์ :</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="uploadFile" name="uploadFile" accept=".pdf">
                            <label class="custom-file-label" for="uploadFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">อัพโหลด</button>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        document.getElementById('date').valueAsDate = new Date();
    </script>
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
