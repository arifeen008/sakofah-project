@extends('dashboard')

@section('title', 'Admin รายการข่าวสาร')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="card-title"><b>รายการข่าวสาร</b></h3>
                <a href="/add_news" class="btn btn-success"><i class="fas fa-plus mr-2"></i>เพิ่มข่าวสาร</a>
            </div>
            <hr>
            <table id="DataTable">
                <thead>
                    <tr class="text-center">
                        <th>หัวข้อ</th>
                        <th>ประเภทข่าว</th>
                        <th>เวลาอัพโหลด</th>
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td class="text-truncate" style="max-width: 500px">{{ $item->title }}</td>
                            <td class="text-center">{{ $item->news_typename }}</td>
                            <td class="text-center">{{ thaidate('j M Y ', $item->dateupload) }} </td>
                            <td class="text-center">
                                <a href="/edit_news/{{ $item->news_number }}" class="btn btn-warning me-3"><i
                                        class="fas fa-pen"></i></a>
                            </td>
                            <td class="text-center">
                                <a href="/delete_news/{{ $item->news_number }}" class="delete btn btn-danger me-3"><i
                                        class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
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
    <script>
        $('.delete').on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr('href');
            Swal.fire({
                title: 'ต้องการลบหรือไม่',
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: 'ลบ',
                denyButtonText: 'ยกเลิก',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.location.href = href;
                } else if (result.isDenied) {
                    Swal.fire('ยกเลิก', '', 'info')
                }
            })
        })
    </script>
@endsection
