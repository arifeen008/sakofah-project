@extends('dashboard')
@extends('sidebar')
@section('title', 'Admin พิจารณาสินเชื่อ')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <div class="h-100 d-flex justify-content-center align-items-center">
                <h3 class="me-auto">Admin พิจารณาสินเชื่อ</h3>
                <a href="/data_creditconsider" class="btn btn-success me-2"><i
                        class="fas fa-address-card me-2"></i>สินเชื่อ</a>
                <a href="/status_form_add" class="btn btn-success me-2"><i class="fas fa-plus me-2"></i>เพิ่ม Status</a>
            </div>
            <hr>
            @if (count($data) > 0)
                <table id="datatable">
                    <thead>
                        <tr>
                            <th>รหัสสมาชิก</th>
                            <th>ชื่อ - สกุล</th>
                            <th>เลขสินเชื่อ</th>
                            <th>วันที่</th>
                            <th class="text-center">สถานะ</th>
                            <th>ลบ</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->mem_id }}</td>
                                <td>{{ $item->fname . ' ' . $item->lname }}</td>
                                <td>
                                    <p class="fw-normal mb-1">{{ $item->lnumber_id }}</p>
                                    <p class="text-muted mb-1">{{ $item->name_branch }}</p>
                                    <p class="text-muted mb-1">{{ $item->credit_name }}</p>
                                    <p class="fw-normal mb-0">{{ $item->loan_year }}</p>
                                </td>
                                <td>
                                    <p>{{ thaidate('j M Y ', strtotime($item->date)) }}</p>
                                    <p>{{ thaidate('H:i', strtotime($item->date)) }}</p>
                                </td>
                                <td class="text-center"><span
                                        class="badge badge-success rounded-pill d-inline">{{ $item->status_name }}</span>
                                </td>
                                <td>
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
