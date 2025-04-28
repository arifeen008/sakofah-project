@extends('dashboard')

@section('title', 'รับเอกสารสินเชื่อสาขา')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <h3 class="card-title"><b>รับเอกสารสินเชื่อสาขา</b></h3>
            <hr>
            @if (count($data) > 0)
                <table id="datatable" class="align-middle">
                    <thead>
                        <tr>
                            <th class="text-center">รหัสสมาชิก</th>
                            <th class="text-center">ชื่อ - สกุล</th>
                            <th class="text-center">เลขสินเชื่อ</th>
                            <th class="text-center">วันที่</th>
                            <th class="text-center">สถานะ</th>
                            <th class="text-center">รายละเอียด</th>
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
                                    <p>{{ thaidate('j M Y ', $item->date) }}</p>
                                    <p>{{ thaidate('H:i', $item->date) }}</p>
                                </td>
                                <td class="text-center">{{ $item->status_name }}</td>
                                <td class="text-center">
                                    <a href="{{ url('creditconsider_detail/' . $item->credit_consider_id) }}"
                                        class="btn btn-outline-success" data-mdb-ripple-color="success"><i
                                            class="fas fa-eye"></i></a>
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
