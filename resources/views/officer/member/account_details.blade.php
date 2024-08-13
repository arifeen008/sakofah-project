@extends('dashboard')
@extends('sidebar')
@section('title', 'รายละเอียดบัญชี')
@section('content')
    <div class="card my-2">
        <div class="card-header">
            <h2 class="card-title">ยอดเงินในบัญชี</h2>
        </div>
        <div class="card-body">        
            <table id="DataTable" class="table table-bordered">
                <thead class="text-center">
                    <tr>
                        <th>วันที่</th>
                        <th>เงินฝาก</th>
                        <th>เงินถอน</th>
                        <th>ยอดเงินคงเหลือ</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($account as $item)
                        <tr>
                            <td>
                                {{ thaidate('j M Y ', strtotime($item->F_TIME)) }}
                            </td>
                            <td>
                                {{ number_format($item->F_DEP, 2) }} </td>
                            <td>
                                {{ number_format($item->F_WDL, 2) }} </td>
                            <td>
                                {{ number_format($item->F_BALANCE, 2) }} </td>
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
