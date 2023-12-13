@extends('dashboard')
@extends('sidebar')
@section('title', 'รายชื่อสมาชิกที่ค้นหา')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            @if (count($data) > 0)
                <b class="card-title">รายชื่อสมาชิกที่ค้นหา</b>
                <table id="example" class="table">
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
                                <td><a href="{{ url('officer/data_member/' . $item->MEM_ID . '/' . $item->BR_NO) }}"
                                        class="btn btn-info"><i class="fas fa-file-alt"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                ไม่มีข้อมูล
            @endif

        </div>
    </div>
@endsection

@section('script')
    <script>
        new DataTable('#example', {
            searching: false,
            ordering: false,
            paging: true,
            oLanguage: {
                "sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
                "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
                "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ เร็คคอร์ด",
                "sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
                "sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ เร็คคอร์ด)",
                "sSearch": "ค้นหา :",
                "oPaginate": {
                    "sFirst": "หน้าแรก",
                    "sPrevious": "ก่อนหน้า",
                    "sNext": "ถัดไป",
                    "sLast": "หน้าสุดท้าย"
                }
            }
        });
    </script>
@endsection
