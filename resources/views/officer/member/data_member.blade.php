@extends('dashboard')
@extends('sidebar')
@section('title')
    {{ $data_member->FNAME . ' ' . $data_member->LNAME }}
@endsection
@section('content')
    <div class="card m-1">
        <div class="card-body">
            <div class="card-title"><b class="h2"> {{ $data_member->FNAME . ' ' . $data_member->LNAME }}</b></div>
            <hr>
            <div class="row">
                <div class="col-md-6 my-2">
                    ชื่อ : {{ $data_member->FNAME }}
                </div>
                <div class="col-md-6 my-2">
                    นามสกุล : {{ $data_member->LNAME }}
                </div>
                <div class="col-md-6 my-2">
                    เลขบัตรประจำตัวประชาชน : {{ $data_member->ID_CARD }}
                </div>
                <div class="col-md-6 my-2">
                    วันเกิด : {{ thaidate('j F Y', $data_member->DMY_BIRTH) }}
                </div>
                <div class="col-md-6 my-2">
                    เพศ : {{ $data_member->SEX == '1' ? 'ชาย' : 'หญิง' }}
                </div>
                <div class="col-md-6 my-2">
                    ชื่อบิดา : {{ $data_member->FATHER }}
                </div>
                <div class="col-md-6 my-2">
                    ชื่อมารดา : {{ $data_member->MOTHER }}
                </div>
                <div class="col-md-6 my-2">
                    สถานะ : {{ $data_member->MARRIAGE_STATUS }}
                </div>
                <div class="col-md-6 my-2">
                    กรุ๊ปเลือด : {{ $data_member->BLO_GROUP != null ? $data_member->BLO_GROUP : '-' }}
                </div>
                <div class="col-md-6 my-2">
                    เลขที่บ้าน : {{ $data_member->ADDRESS }}
                </div>
                <div class="col-md-6 my-2">
                    หมู่ที่ : {{ $data_member->MOO_ADDR }}
                </div>
                <div class="col-md-6 my-2">
                    ตำบล : {{ $data_member->TUMBOL }}
                </div>
                <div class="col-md-6 my-2">
                    LINE ID : {{ $data_member->LINE_ID != null ? $data_member->LINE_ID : ' -' }}
                </div>
                <div class="col-md-6 my-2">
                    EMAIL :{{ $data_member->EMAIL != null ? $data_member->EMAIL : ' -' }}
                </div>
                <div class="col-md-6 my-2">
                    โทรศัพท์ : {{ $data_member->MOBILE_TEL }}
                </div>
            </div>
        </div>
    </div>
    @if (count($deposit_member) > 0)
        <div class="card m-1">
            <div class="card-body">
                <div class="card-title">
                    <b class="h2">เงินฝากในบัญชี</b>
                    <hr>
                    <table id="datatable" class="table text-center">
                        <thead>
                            <tr>
                                <th>เลขบัญชี</th>
                                <th>ชื่อบัญชี</th>
                                <th>ยอดคงเหลือ</th>
                                <th>รายละเอียด</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($deposit_member as $item)
                                <tr>
                                    <td>{{ $item->ACCOUNT_NO }}</td>
                                    <td>{{ $item->ACCOUNT_NAME }} </td>
                                    <td>{{ number_format($item->BALANCE, 2) }} </td>
                                    <td>
                                        <a href=" {{ url('account_details/' . $item->ACCOUNT_NO) }}" class="btn btn-info">
                                            <i class="fas fa-file-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
    @if (count($opened_credit_member) > 0)
        <div class="card m-1">
            <div class="card-body">
                <div class="card-title">
                    <b class="h2">สินเชื่อ</b>
                    <hr>
                    <table id="datatable1" class="table text-center">
                        <thead>
                            <tr>
                                <th>เลขที่สัญญา</th>
                                <th>ชื่อสัญญา</th>
                                <th>วันที่ทำสัญญา</td>
                                <th>วันที่หมดสัญญา</th>
                                <th>ยอดอนุมัติสินเชื่อ</th>
                                <th>จำนวนงวดคงเหลือ</th>
                                <th>ยอดคงเหลือ</th>
                                <th>รายละเอียด</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($opened_credit_member as $item)
                                <tr>
                                    <td>{{ $item->LCONT_ID }} </td>
                                    <td>{{ $item->LSUB_NAME }} </td>
                                    <td>{{ thaidate('j M Y ', strtotime($item->LCONT_DATE)) }} </td>
                                    <td>{{ thaidate('j M Y ', strtotime($item->END_PAYDEPT)) }} </td>
                                    <td>{{ number_format($item->LCONT_APPROVE_SAL, 2) }} </td>
                                    <td>{{ $item->LCONT_AMOUNT_INST }}</td>
                                    <td>{{ number_format($item->LCONT_AMOUNT_SAL, 2) }}</td>
                                    <td><a href="{{ url('loan_details/' . $item->CODE . '/' . $item->BR_NO) }}"
                                            class="btn btn-success"><i class="far fa-file-alt"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
    @if (count($closed_credit_member) > 0)
        <div class="card m-1">
            <div class="card-body">
                <div class="card-title">
                    <b class="h2">สินเชื่อที่ปิดแล้ว</b>
                    <hr>
                    <table id="datatable2" class="table text-center">
                        <thead>
                            <tr>
                                <th>เลขที่สัญญา</th>
                                <th>ชื่อสัญญา</th>
                                <th>วันที่ทำสัญญา</td>
                                <th>วันที่หมดสัญญา</th>
                                <th>ยอดอนุมัติสินเชื่อ</th>
                                <th>จำนวนงวดคงเหลือ</th>
                                <th>ยอดคงเหลือ</th>
                                <th>รายละเอียด</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($closed_credit_member as $item)
                                <tr>
                                    <td>{{ $item->LCONT_ID }} </td>
                                    <td>{{ $item->LSUB_NAME }} </td>
                                    <td>{{ thaidate('j M Y ', strtotime($item->LCONT_DATE)) }} </td>
                                    <td>{{ thaidate('j M Y ', strtotime($item->END_PAYDEPT)) }} </td>
                                    <td>{{ number_format($item->LCONT_APPROVE_SAL, 2) }} </td>
                                    <td>{{ $item->LCONT_AMOUNT_INST }}</td>
                                    <td>{{ number_format($item->LCONT_AMOUNT_SAL, 2) }}</td>
                                    <td><a href="{{ url('loan_details/' . $item->CODE . '/' . $item->BR_NO) }}"
                                            class="btn btn-success"><i class="far fa-file-alt"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
    @if ($stock_select != null)
        <div class="card m-1">
            <div class="card-body">
                <div class="card-title">
                    <b class="h2">หุ้น</b>
                    <hr>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <td>เลขที่สมาชิก</td>
                                <td>สาขาที่สังกัด</td>
                                <td>เงินคงเหลือ</td>
                                <td>อายุการเป็นสมาชิก</td>
                                <td>คะแนนสะสมคงเหลือ</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $stock_select->MEM_ID }}</td>
                                <td>{{ $stock_select->BR_NAME }}</td>
                                <td>{{ number_format($stock_select->SHR_SUM_BTH, 2) }}</td>
                                <td>{{ $stock_select->MEM_AGE_OLD + $stock_age->total . ' เดือน' }}</td>
                                <td>{{ number_format($stock_select->POINT_SHR, 2) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <table id="datatable3" class="table text-center">
                    <thead>
                        <tr>
                            <th>เลขที่ใบเสร็จ</th>
                            <th>ประเภทหุ้น</th>
                            <th>จำนวนหุ้น</th>
                            <th>จำนวนเงิน</th>
                            <th>วันที่ทำรายการ</th>
                            <th>จำนวนเงินคงเหลือ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($stock_details as $item)
                            <tr>
                                <td>{{ $item->SLIP_NO }}</td>
                                <td>{{ $item->SHR_NA }}</td>
                                <td>{{ $item->TMP_SHARE_QTY }}</td>
                                <td>{{ number_format($item->TMP_SHARE_BHT, 2) }}</td>
                                <td>{{ $item->TMP_DATE_TODAY == null ? 'แสดงไม่ได้' : thaidate('j M Y ', $item->TMP_DATE_TODAY) }}
                                </td>
                                <td>{{ number_format($item->SHR_SUM_BTH, 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    <div class="card m-1">
        <div class="card-body">
            <div class="card-title">เงินปันผล</div>
            @if (!empty($dividend))
                <table class="table table-bordered">
                    <tr class="text-center">
                        <td>ปี</td>
                        <td>วันที่รับเงิน</td>
                        <td>จำนวนเงิน</td>
                        <td>สาขาที่รับ</td>
                    </tr>
                    <tr class="text-center">
                        <td>{{ $dividend->SHR_YEAR + 543 }} </td>
                        <td>{{ thaidate('j M Y ', $dividend->SHR_OUT_DATE) }} </td>
                        <td>{{ number_format($dividend->SHR_SUMUP_DIV, 2) }} </td>
                        <td>{{ $dividend->BR_NAME }} </td>
                    </tr>
                </table>
            @else
                <div class="h-100 d-flex justify-content-center align-items-center">
                    <b class="text-dark">ยังไม่ได้รับเงินปันผล</ิ>
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
        $(document).ready(function() {
            $('#datatable1').DataTable();
        });
        $(document).ready(function() {
            $('#datatable2').DataTable();
        });
        $(document).ready(function() {
            $('#datatable3').DataTable();
        });
    </script>
@endsection
