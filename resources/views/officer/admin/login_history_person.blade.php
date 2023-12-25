@extends('dashboard')
@extends('sidebar')
@section('title', 'Admin พิจารณาสินเชื่อ')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <h3 class="me-auto">Admin ประวัติล็อกอิน  {{$officer->user_name === NULL ? '' : $officer->user_name}}</h3>
            <hr>
            <table id="datatable" class="text-center">
                <thead>
                    <tr>
                        <th>วันที่</th>
                        <th>เวลา</th>
                        <th>IP ADDRESS</th>
                        <th>browser</th>
                        <th>version</th>
                        <th>platform</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ thaidate('j M Y', $item->login_time)}}</td>
                            <td>{{ thaidate('H:i', $item->login_time)}}</td>
                            <td>{{ $item->ip_address}}</td>
                            <td>{{ $item->browser}}</td>
                            <td>{{ $item->version}}</td>
                            <td>{{ $item->platform}}</td>
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