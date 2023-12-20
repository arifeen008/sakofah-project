@extends('dashboard')
@extends('sidebar')
@section('title', 'รายงานผลการติดตามยื่นขอสินเชื่อ')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <b class="h3">รายงานผลการติดตามยื่นขอสินเชื่อ</b>
            <hr>
            <table id="datatable" class="table align-middle">
                <thead class="text-center">
                    <tr>
                        <th>รหัสสมาชิก</th>
                        <th>ชื่อ - สกุล</th>
                        <th>เลขสินเชื่อ</th>
                        <th>วันที่</th>
                        <th>สถานะ</th>
                        <th>รายละเอียด</th>
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
                                <a href="/creditconsider_process/{{ $item->credit_consider_id }} " class="btn btn-outline-success"><i
                                        class="fab fa-algolia"></i></a>
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
