@extends('dashboard')

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
                <button type="button" class="btn btn-success me-2" data-mdb-ripple-init data-mdb-modal-init
                    data-mdb-target="#accept">
                    <i class="fas fa-check me-2"></i> อนุมัติ
                </button>
                <button type="button" class="btn btn-danger ms-2" data-mdb-ripple-init data-mdb-modal-init
                    data-mdb-target="#reject">
                    <i class="fas fa-xmark me-2"></i>ปฏิเสธ
                </button>
            </div>
        </div>
    </div>
    <div class="modal fade" id="accept" data-mdb-backdrop="static" data-mdb-keyboard="false" tabindex="-1"
        aria-labelledby="acceptLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="/accept_creditconsider" method="post">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="acceptLabel">
                            อนุมัติสินเชื่อ {{ $data->firstname . '   ' . $data->lastname }}
                        </h5>
                        <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="credit_consider_id" value="{{ $data->credit_consider_id }}" required>
                        <input type="hidden" name="result" value="{{ $accept }}" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" data-mdb-ripple-init>ตกลง</button>
                        <button type="button" class="btn btn-warning" data-mdb-ripple-init
                            data-mdb-dismiss="modal">ยกเลิก</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="reject" data-mdb-backdrop="static" data-mdb-keyboard="false" tabindex="-1"
        aria-labelledby="rejectLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="/reject_creditconsider" method="post">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="rejectLabel">
                            ปฏิเสธสินเชื่อ {{ $data->firstname . '   ' . $data->lastname }}
                        </h5>
                        <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="credit_consider_id" value="{{ $data->credit_consider_id }}" required>
                        <input type="hidden" name="result" value="{{ $reject }}" required>
                        <div class="form-outline" data-mdb-input-init>
                            <input type="text" id="note" name="note" class="form-control" />
                            <label class="form-label" for="note">หมายเหตุ :</label>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger" data-mdb-ripple-init>ปฏิเสธ</button>
                        <button type="button" class="btn btn-warning" data-mdb-ripple-init
                            data-mdb-dismiss="modal">ยกเลิก</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
