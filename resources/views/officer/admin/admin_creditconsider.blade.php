@extends('dashboard')
@extends('sidebar')
@section('title', 'Admin พิจารณาสินเชื่อ')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <div class="h-100 d-flex justify-content-center align-items-center">
                <h3 class="me-auto">Admin พิจารณาสินเชื่อ</h3>
                <a href="/data_creditconsider" class="btn btn-success me-2"><i class="fas fa-address-card me-2"></i>สินเชื่อ</a>
                <a href="/status_form_add" class="btn btn-success me-2"><i class="fas fa-plus me-2"></i>เพิ่ม Status</a>
            </div>
            <hr>
            <table id="datatable" class="text-center">
                <thead>
                    <tr>
                        <th>รหัส</th>
                        <th>ชื่อสถานะ</th>
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->status_id }}</td>
                            <td>{{ $item->status_name }}</td>
                            <td><a href="/status_form_edit/{{ $item->status_id }}" class="btn btn-warning">แก้ไข</a></td>
                            <td><a href="/status_form_delete/{{ $item->status_id }}" class="btn btn-danger delete">ลบ</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
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
