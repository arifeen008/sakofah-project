@extends('dashboard')
@extends('sidebar')
@section('title', 'รายชื่อสมาชิกที่ค้นหา')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            @if (count($data) > 0)
                <b class="h1 card-title">รายชื่อสมาชิกที่ค้นหา</b><hr>
                <table id="datatable" class="table">
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
                                <td><a href="{{ url('data_member/' . $item->MEM_ID . '/' . $item->BR_NO) }}"
                                        class="btn btn-info"><i class="fas fa-file-alt"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <b class="card-title">ไม่มีข้อมูล</b>
            @endif
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
@endsection