@extends('dashboard')
@extends('sidebar')
@section('title', 'ประกาศภายใน')
@section('content')
    <div class="card m-3">
        <div class="card-header">
            <b class="h3 card-title">ประกาศสำนักงานใหญ่</b>
        </div>
        <div class="card-body">
            
            <table id="DataTable" class="table">
                <thead>
                    <tr>
                        <th class="text-center">ประกาศ</th>
                        <th class="text-center">วันที่</th>
                        <th class="text-center">ดาวน์โหลด</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td> {{ $item->title }} </td>
                            <td class="text-center">{{ thaidate('j M Y ', $item->date) }}</td>
                            <td class="text-center"><a href="{{ url('file/inside_publish/' . $item->uploadfile) }}" target="_blank" class="btn btn-outline-success" data-mdb-ripple-color="success"><i class="fas fa-download"></i></td>
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
