@extends('dashboard')
@extends('sidebar')
@section('title', 'รายชื่อสมาชิกที่ค้นหา')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            @if (count($data) > 0)
                <b class="h1 card-title text-dark">รายชื่อสมาชิกที่ค้นหา</b>
                <hr>
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
            @else
                <p class="text-center">ไม่มีข้อมูลที่ค้นหา</p>
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
