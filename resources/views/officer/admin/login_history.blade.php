@extends('dashboard')
@extends('sidebar')
@section('title', 'Admin พิจารณาสินเชื่อ')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <div class="h-100 d-flex justify-content-center align-items-center">
                <h3 class="me-auto">Admin ประวัติล็อกอิน</h3>
                <a href="/all_officer" class="btn btn-success me-2">เจ้าหน้าที่ทั้งหมด</a>
            </div>
            <hr>
            <table id="datatable" class="text-center">
                <thead>
                    <tr>
                        <th>รหัสสมาชิก</th>
                        <th>สาขา</th>
                        <th>ชื่อ</th>
                        <th>วันที่</th>
                        <th>เวลา</th>
                        <th>IP ADDRESS</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->user_id }}</td>
                            <td>{{ $item->name_branch }}</td>
                            <td>{{ $item->user_name }}</td>
                            <td>{{ thaidate('j M Y', $item->login_time) }}</td>
                            <td>{{ thaidate('H:i', $item->login_time) }}</td>
                            <td>{{ $item->ip_address }}</td>
                            <td><a href="{{ url('login_history_person/' . $item->user_id . '/' . $item->branch_id) }}"
                                    class="btn btn-info"><i class="fas fa-chart-pie"></i></a>
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
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
@endsection
