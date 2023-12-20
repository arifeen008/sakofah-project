@extends('dashboard')
@extends('sidebar')
@section('title', 'พิจารณาข้อมูลสินเชื่อข้อมูลสินเชื่อ')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <b class="h3">พิจารณาข้อมูลสินเชื่อข้อมูลสินเชื่อ {{ $data->firstname . ' ' . $data->lastname }}</b>
            <hr>
            <div class="row">
                <div class="col-6 my-2">
                    ชื่อ : {{ $data->firstname . '   ' . $data->lastname }}
                </div>
                <div class="col-6 my-2">
                    ผู้ส่งสินเชื่อ : {{ $data->username }}
                </div>
                <div class="col-6 my-2">
                    เลขสินเชื่อ : {{ $data->lnumber_id }}
                </div>
                <div class="col-6 my-2">
                    ปี : {{ $data->loan_year }}
                </div>
                <div class="col-6 my-2">
                    สาขา : {{ $data->branch_name }}
                </div>
                <div class="col-6 my-2">
                    ประเภทสินเชื่อ : {{ $data->loan_type }}
                </div>
            </div>
            <div class="h-100 d-flex justify-content-center align-items-center">
                <h3 class="align-self-center me-auto"> <a href="{{ url('file/credit_consider/' . $data->file_name) }}"
                        target="_blank" class="btn btn-primary"><i class="fas fa-file-download me-3"></i>ดูเอกสาร</a></h3>
                <form action="/result_creditconsider" method="post">
                    @csrf
                    <input type="hidden" name="credit_consider_id" value="{{ $data->credit_consider_id }}" required>
                    <input type="hidden" name="result" value="{{ $accept }}" required>
                    <button type="submit" class="btn btn-success me-2">อนุมัติ</button>
                </form>
                <form action="/result_creditconsider" method="post">
                    @csrf
                    <input type="hidden" name="credit_consider_id" value="{{ $data->credit_consider_id }}" required>
                    <input type="hidden" name="result" value="{{ $reject }}" required>
                    <button type="submit" class="btn btn-danger ms-2">ปฏิเสธ</button>
                </form>
            </div>
        </div>
    </div>
@endsection
