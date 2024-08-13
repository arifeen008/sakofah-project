@extends('dashboard')
@extends('sidebar')
@section('title', 'Admin พิจารณาสินเชื่อ')
@section('content')
    <div class="card m-3">
        <div class="card-header">
            <div class="card-title">Admin ประวัติล็อกอิน</div>
            <div class="float-right"> #! </div>
        </div>
        <div class="card-body">
            <table id="DataTable" class="text-center">
                <thead>
                    <tr>
                        <th>วันที่</th>
                        <th>เวลา</th>
                        <th>IP ADDRESS</th>
                        <th>browser</th>
                        <th>version</th>
                        <th>platform</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ thaidate('j M Y', $item->login_time) }}</td>
                            <td>{{ thaidate('H:i', $item->login_time) }}</td>
                            <td>{{ $item->ip_address }}</td>
                            <td>{{ $item->browser }}</td>
                            <td>{{ $item->version }}</td>
                            <td>{{ $item->platform }}</td>
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
@endsection
