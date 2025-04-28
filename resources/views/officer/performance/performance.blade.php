@extends('dashboard')

@section('title', 'ผลการดำเนินงานประจำปี')
@section('content')
    <div class="card m-3">
        <div class="card-header">
            <h3 class="card-title">ผลการดำเนินงานประจำปี</h3>
        </div>
        <div class="card-body">
            <table id="DataTable">
                <thead>
                    <tr>
                        <th class="text-center">ชื่อเอกสาร</th>
                        <th class="text-center">วันที่</th>
                        <th class="text-center">ดาวน์โหลด</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td> {{ $item->document_name }}</td>
                            <td class="text-center"> {{ thaidate('j M Y ', strtotime($item->date)) }}</td>
                            <td class="text-center"><a href="{{ url('file/performance/' . $item->file_name) }}"
                                    target="_blank" class="btn btn-outline-success" data-mdb-ripple-color="success"><i
                                        class="fas fa-download"></i></td>
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
