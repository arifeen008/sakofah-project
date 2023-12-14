@extends('dashboard')
@extends('sidebar')
@section('title','รายละเอียดบัญชี')
@section('content')
    <div class="card m-3">
        <div class="card-body text-dark">
            <b class="card-title h2">ยอดเงินในบัญชี</b><hr>
            <table id="datatable" class="table text-center">
                <thead>
                    <tr>
                        <th>วันที่</th>
                        <th>เงินฝาก</th>
                        <th>เงินถอน</th>
                        <th>ยอดเงินคงเหลือ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($account as $item)
                        <tr>
                            <td>
                                {{ thaidate('j M Y ', strtotime($item->F_TIME)) }}
                            </td>
                            <td>
                                {{ number_format($item->F_DEP, 2) }} </td>
                            <td>
                                {{ number_format($item->F_WDL, 2) }} </td>
                            <td>
                                {{ number_format($item->F_BALANCE, 2) }} </td>
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
