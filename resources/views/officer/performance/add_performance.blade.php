@extends('dashboard')
@extends('sidebar')
@section('title', 'เพิ่มผลการดำเนินงานประจำปี')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <b class="h3 card-title">อัพโหลดเอกสาร</b>
            <hr>
            <form action="/postPerformance" method="post" enctype="multipart/form-data">
                @csrf
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" id="document_name" class="form-control" name="document_name" />
                    <label class="form-label" for="document_name">ชื่อเอกสาร</label>
                </div>
                <label class="form-label" for="documentFile">อัพโหลดไฟล์</label>
                <input type="file" class="form-control" id="documentFile" name="documentFile"
                    accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" />
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
