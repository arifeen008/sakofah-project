@extends('dashboard')
@extends('sidebar')
@section('title', 'Admin พิจารณาสินเชื่อ')
@section('content')
    <div class="card m-3">
        <div class="card-header">
            <div class="card-title">Admin พิจารณาสินเชื่อ</div>
            <div class="ml-auto float-right">
                <a href="/data_creditconsider" class="btn btn-success"><i
                        class="fas fa-address-card px-2"></i>สินเชื่อ</a>
                <a href="/status_form_add" class="btn btn-success"><i class="fas fa-plus px-2"></i>เพิ่ม Status</a>
            </div>

        </div>
        <div class="card-body">
            <table id="DataTable" class="text-center">
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
        $(function() {
            $('#DataTable').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": false,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "language": {
                    "lengthMenu": "แสดง _MENU_ รายการต่อหน้า",
                    "zeroRecords": "ไม่พบข้อมูล",
                    "info": "หน้า _PAGE_ จาก _PAGES_",
                    "infoEmpty": "ไม่มีข้อมูลที่แสดง",
                    "infoFiltered": "(กรองจาก _MAX_ รายการทั้งหมด)",
                    "search": "ค้นหา:",
                    paginate: {
                        first: "หน้าแรก",
                        last: "หน้าสุดท้าย",
                        next: "ถัดไป",
                        previous: "ก่อนหน้า"
                    }
                }
            });
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
