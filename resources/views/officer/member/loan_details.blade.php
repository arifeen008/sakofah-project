@extends('dashboard')
@extends('sidebar')
@section('title', 'รายละเอียดสินเชื่อ')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <b class="card-title h2">รายละเอียดสินเชื่อ {{ $loan_select->LCONT_ID }}</b>
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td>เลขที่สัญญา</td>
                        <td>{{ $loan_select->LCONT_ID }}</td>
                    </tr>
                    <tr>
                        <td>ชื่อสัญญา</td>
                        <td>{{ $loan_select->LSUB_NAME }}</td>
                    </tr>
                    <tr>
                        <td>วันที่ทำสัญญา</td>
                        <td>{{ thaidate('j M Y ', $loan_select->LCONT_DATE) }}</td>
                    </tr>
                    <tr>
                        <td>วันที่หมดสัญญา</td>
                        <td>{{thaidate('j M Y ', $loan_select->END_PAYDEPT)}}</td>
                    </tr>
                    <tr>
                        <td>ยอดอนุมัติสินเชื่อ</td>
                        <td> {{number_format($loan_select->LCONT_APPROVE_SAL, 2)}}</td>
                    </tr>
                    <tr>
                        <td>จำนวนงวดคงเหลือ</td>
                        <td> {{$loan_select->LCONT_AMOUNT_INST}}</td>
                    </tr>
                    <tr>
                        <td>จำนวนเงินคงเหลือ</td>
                        <td>{{number_format($loan_select->LCONT_AMOUNT_SAL, 2) . ' บาท'}}</td>
                    </tr>
                </tbody>
            </table>

            <table id="datatable" class="table text-center">
                <thead>
                    <tr>
                        <th>วันที่</th>
                        <th>งวดที่</th>
                        <th>ยอดชำระ</th>
                        <th>ยอดคงเหลือ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($loan_detail as $item)
                        <tr>
                            <td>{{ thaidate('j M Y ', $item->LPD_DATE) }} </td>
                            <td>{{ $item->LPD_NUM_INST }}</td>
                            <td>{{ number_format($item->SUM_SAL, 2) }}</td>
                            <td>{{ number_format($item->LCONT_BAL_AMOUNT, 2) }}</td>
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
