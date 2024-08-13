@extends('dashboard')
@extends('sidebar')
@section('title', 'ค้นหาสินเชื่อ')
@section('content')
    <div class="card m-3">
        <div class="card-header">
            <h3 class="card-title">รายการสินเชื่อ</h3>
        </div>
        <div class="card-body">
            @if (count($data) > 0)
                <table id="datatable" class="table align-middle">
                    <thead class="text-center">
                        <tr>
                            <th>เลขที่สัญญา</th>
                            <th>ชื่อ</th>
                            <th>ผู้อัพโหลด</th>
                            <th>วันที่อัพโหลด</th>
                            <th>ดาวน์โหลด</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr class="text-center">
                                <td>
                                    <p class="fw-normal mb-1"> {{ $item->fullcont_id }}</p>
                                    <p class="text-muted mb-1">{{ $item->name_branch }}</p>
                                    <p class="text-muted mb-1">{{ $item->credit_name }}</p>
                                    <p class="text-muted mb-1">{{ $item->year }}</p>
                                </td>
                                <td>{{ $item->fname . '  ' . $item->lname }}</td>
                                <td>{{ $item->name_upload }}</td>
                                <td>{{ thaidate('j M Y ', $item->date_upload) }}</td>
                                <td class="text-center">
                                    <a href="{{ url($item->path . '/' . $item->file_name) }}" class="btn btn-primary"
                                        target="_blank"><i class="fas fa-file-download"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="h-100 d-flex justify-content-center align-items-center">ไม่มีสินเชื่อที่ค้นหา</div>
            @endif
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
    @if (session('error'))
        <script>
            Swal.fire({
                title: "Oops...",
                text: "{{ session('error') }}",
                icon: "error"
            });
        </script>
    @endif
@endsection
