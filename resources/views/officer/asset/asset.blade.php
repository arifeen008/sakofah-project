@extends('dashboard')

@section('title', 'Admin พิจารณาสินเชื่อ')
@section('content')
    <div class="card m-3">
        <div class="card-header">
            <div class="card-title">Admin สินทรัพย์</div>
            <div class="float-right"> <a href="/add_asset" class="btn btn-success me-2">เพิ่ม</a> </div>
        </div>
        <div class="card-body">
            <table id="DataTable" class="text-center">
                <thead>
                    <tr>
                        <th>ประเภท</th>
                        <th>ชื่อ</th>
                        <th>รายละเอียด</th>
                        <th>วันที่</th>
                        <th>ลบ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->asset_name }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ Str::limit($item->description1, 50) }}</td>
                            <td>{{ thaidate('j M Y ', $item->date) }}</td>
                            <td><a href="{{ url('delete_asset/' . $item->asset_number) }}" class="btn btn-danger">ลบ</a></td>
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
