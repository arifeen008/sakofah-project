@extends('dashboard')
@extends('sidebar')
@section('title', 'Admin พิจารณาสินเชื่อ')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <div class="h-100 d-flex justify-content-center align-items-center">
                <h3 class="me-auto">Admin สินทรัพย์</h3>
                <a href="/add_asset" class="btn btn-success me-2">เพิ่ม</a>
            </div>
            <hr>
            <table id="datatable" class="text-center">
                <thead>
                    <tr>
                        <th>ประเภท</th>
                        <th>ชื่อ</th>
                        <th>รายละเอียด</th>
                        <th>วันที่</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->asset_name }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ Str::limit($item->description1, 50) }}</td>
                            <td>{{ thaidate('j M Y ', $item->date) }}</td>
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
    @if (session('success'))
        <script>
            Swal.fire({
                title: "Good job!",
                text: "{{ session('success') }}",
                icon: "success"
            });
        </script>
    @endif
@endsection
