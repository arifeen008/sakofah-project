@extends('dashboard')

@section('title', 'Admin พิจารณาสินเชื่อ')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <h3 class="me-auto">Admin เจ้าหน้าที่ทั้งหมด</h3>
            <hr>
            <table id="datatable" class="text-center">
                <thead>
                    <tr>
                        <th>รหัสสมาชิก</th>
                        <th>สาขา</th>
                        <th>ชื่อ</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->USER_ID }}</td>
                            <td>{{ $item->BR_NAME }}</td>
                            <td>{{ $item->USER_NAME }}</td>
                            <td><a href="{{ url('login_history_person/' . $item->USER_ID . '/' . $item->BR_NO) }}"
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
