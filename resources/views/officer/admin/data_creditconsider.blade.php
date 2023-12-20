@extends('dashboard')
@extends('sidebar')
@section('title', 'Admin พิจารณาสินเชื่อ')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <div class="card-title h1">ข้อมูลสินเชื่อ</div>
            <hr>
            @if (count($data) > 0)
                <table id="datatable" class="align-middle">
                    <thead class="text-center">
                        <tr>
                            <th>รหัสสมาชิก</th>
                            <th>ชื่อ - สกุล</th>
                            <th>เลขสินเชื่อ</th>
                            <th>วันที่</th>
                            <th>สถานะ</th>
                            <th>ลบ</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td class="text-center">{{ $item->mem_id }}</td>
                                <td class="text-center">{{ $item->firstname . ' ' . $item->lastname }}</td>
                                <td>
                                    <p class="fw-normal mb-1">{{ $item->lnumber_id }}</p>
                                    <p class="text-muted mb-1">{{ $item->branch_name }}</p>
                                    <p class="text-muted mb-1">{{ $item->loan_type }}</p>
                                    <p class="fw-normal mb-0">{{ $item->loan_year }}</p>
                                </td>
                                <td>
                                    <p>{{ thaidate('j M Y ', strtotime($item->date)) }}</p>
                                    <p>{{ thaidate('H:i', strtotime($item->date)) }}</p>
                                </td>
                                <td class="text-center">
                                    <span class="badge badge-success rounded-pill d-inline">{{ $item->status_name }}</span>
                                </td>
                                <td class="text-center">
                                    <a href="/delete_creditconsider/{{ $item->credit_consider_id }}"
                                        class="btn btn-danger">ลบ</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="d-flex justify-content-between align-items-center text-center">
                    <h3>ไม่มีข้อมูลสินเชื่อ</h3>
                </div>
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
    @if (session('success'))
        <script>
            Swal.fire({
                title: "Good job!",
                text: "{{ session('success') }}",
                icon: "success"
            });
        </script>
    @endif
    @if (session('error'))
        <script>
            Swal.fire({
                title: "error!",
                text: "{{ session('error') }}",
                icon: "error"
            });
        </script>
    @endif
@endsection
