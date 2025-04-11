@extends('dashboard')
@extends('sidebar')
@section('title', 'รายชื่อสมาชิกที่ค้นหา')
@section('content')
    <div class="card m-3">
        <div class="card-header">
            <h1 class="card-title text-dark">รายชื่อสมาชิกที่ค้นหา</h1>
        </div>
        <div class="card-body">
            <table id="DataTable" class="table">
                <thead class="text-center">
                    <tr>
                        <th>เลขที่สมาชิก</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>สาขา</th>
                        <th>ดูข้อมูล</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->MEM_ID }}</td>
                            <td>{{ $item->FNAME }}</td>
                            <td>{{ $item->LNAME }}</td>
                            <td>{{ $item->BR_NAME }}</td>
                            <td>
                                <form action="/data_member" method="POST">
                                    @csrf
                                    <input type="hidden" name="mem_id" value="{{ $item->MEM_ID }}">
                                    <input type="hidden" name="br_no" value="{{ $item->BR_NO }}">
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-file-alt"></i></button>
                                </form>
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

@if (session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'เกิดข้อผิดพลาด',
            text: '{{ session('error') }}',
            confirmButtonText: 'ตกลง'
        });
    </script>
@endif
