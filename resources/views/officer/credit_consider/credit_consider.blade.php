@extends('dashboard')
@extends('sidebar')
@section('title', 'ฝ่ายสินเชื่อสาขา')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="card-title"><b>ฝ่ายสินเชื่อสาขา</b></h3>
                <a href="/uploadcredit_consider" class="btn btn-success"><i class="fas fa-plus me-2"></i>ส่งสินเชื่อ</a>
            </div>
            <hr>
            @if (count($data) > 0)
                <table id="datatable" class="align-middle">
                    <thead>
                        <tr class="text-center">
                            <th>รหัสสมาชิก</th>
                            <th>ชื่อ - สกุล</th>
                            <th>เลขสินเชื่อ</th>
                            <th>วันที่</th>
                            <th>สถานะ</th>
                            <th>ติดตามสถานะ</th>
                            <th class="text-danger">หมายเหตุ*</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td class="text-center">{{ $item->mem_id }}</td>
                                <td class="text-center">{{ $item->firstname . ' ' . $item->lastname }}</td>
                                <td>
                                    <p class="fw-normal mb-1">{{ $item->lnumber_id }}</p>
                                    <p class="fw-normal mb-1">{{ $item->branch_name }}</p>
                                    <p class="fw-normal mb-1">{{ $item->loan_type }}</p>
                                    <p class="fw-normal mb-0">{{ $item->loan_year }}</p>
                                </td>
                                <td>
                                    <p>{{ thaidate('j M Y ', strtotime($item->date)) }}</p>
                                    <p>{{ thaidate('H:i', strtotime($item->date)) }}</p>
                                </td>
                                <td class="text-center"><span
                                        class="badge badge-success rounded-pill d-inline">{{ $item->status_name }}</span>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-outline-success"
                                        href="{{ url('creditconsider_process/' . $item->credit_consider_id) }}"><i
                                            class="fab fa-algolia"></i></a>

                                </td>
                                <td class="text-center">
                                    @if (!empty($item->note))
                                        <button type="button" class="btn btn-lg btn-danger" data-mdb-popover-init
                                            data-mdb-ripple-init title="หมายเหตุ" data-mdb-content="{{ $item->note }}">
                                            <i class="far fa-eye"></i>
                                        </button>
                                    @else
                                        <h1>-</h1>
                                    @endif
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
@endsection
