@extends('dashboard')
@extends('sidebar')
@section('title', 'Admin พิจารณาสินเชื่อ')
@section('content')
    <div class="card m-3">
        <div class="card-header">
            <div class="card-title">Admin ประวัติล็อกอิน</div>
            <div class="float-right"> <a href="/all_officer" class="btn btn-success me-2">เจ้าหน้าที่ทั้งหมด</a></div>
        </div>
        <div class="card-body">
            <table id="DataTable" class="text-center">
                <thead>
                    <tr>
                        <th>รหัสสมาชิก</th>
                        <th>สาขา</th>
                        <th>ชื่อ</th>
                        <th>วันที่</th>
                        <th>เวลา</th>
                        <th>IP ADDRESS</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->user_id }}</td>
                            <td>{{ $item->name_branch }}</td>
                            <td>{{ $item->user_name }}</td>
                            <td>{{ thaidate('j M Y', $item->login_time) }}</td>
                            <td>{{ thaidate('H:i', $item->login_time) }}</td>
                            <td>{{ $item->ip_address }}</td>
                            <td><a href="{{ url('login_history_person/' . $item->user_id . '/' . $item->branch_id) }}"
                                    class="btn btn-info"><i class="fas fa-chart-pie"></i></a>
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
@endsection
