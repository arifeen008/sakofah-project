@extends('dashboard')

@section('title', 'เพิ่มผลการดำเนินงานประจำปี')
@section('content')
    <div class="card m-3">
        <div class="card-header">
            <div class="card-title">อัพโหลดเอกสาร</div>
        </div>
        <div class="card-body">
            <form action="/postPerformance" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="document_name">ชื่อเอกสาร :</label>
                    <input type="text" class="form-control form-control-border" id="document_name" name="document_name"
                        placeholder="ชื่อเอกสาร" required>
                </div>
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fileUpload" name="documentFile"  accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                        <label class="custom-file-label" for="fileUpload">อัพโหลดไฟล์</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-2">อัพโหลด</button>
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
