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
                <table id="datatable">
                    <thead>
                        <tr>
                            <th>รหัสสมาชิก</th>
                            <th>ชื่อ - สกุล</th>
                            <th>เลขสินเชื่อ</th>
                            <th>วันที่</th>
                            <th class="text-center">สถานะ</th>
                            <th class="text-center">ติดตามสถานะ</th>
                            <th class="text-center text-danger">หมายเหตุ*</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->mem_id }}</td>
                                <td>{{ $item->firstname . ' ' . $item->lastname }}</td>
                                <td>
                                    <p class="fw-normal mb-1">{{ $item->lnumber_id }}</p>
                                    {{-- <p class="text-muted mb-1">{{ $item->name_branch }}</p> --}}
                                    {{-- <p class="text-muted mb-1">{{ $item->credit_name }}</p> --}}
                                    <p class="fw-normal mb-0">{{ $item->loan_year }}</p>
                                </td>
                                <td>
                                    <p>{{ thaidate('j M Y ', strtotime($item->date)) }}</p>
                                    <p>{{ thaidate('H:i', strtotime($item->date)) }}</p>
                                </td>
                                <td class="text-center"><span
                                        class="badge badge-success rounded-pill d-inline">{{ $item->status_id }}</span>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-outline-success"
                                        href="{{ url('creditconsider_process/' . $item->credit_consider_id) }}"><i
                                            class="fab fa-algolia"></i></a>

                                </td>
                                <td class="text-center">
                                    @if (!empty($item->note))
                                        <button type="button" class="btn btn-lg btn-outline-danger"
                                            data-mdb-toggle="popover" title="หมายเหตุ*"
                                            data-mdb-content="{{ $item->note }}">
                                            <i class="fas fa-align-justify"></i>
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
