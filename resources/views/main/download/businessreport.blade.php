@extends('layout')
@section('title', 'รายงานกิจการ |สหกรณ์อิสลามษะกอฟะฮ จำกัด')
@section('content')
    <div class="container my-2">
        <div class="card" style="font-family: 'Sarabun', sans-serif;">
            <div class="card-body">
                <p class="text-dark text-center h1 mt-3">รายงานกิจการประจำปี</p>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                        <a href="{{ url('file\report\รายงานกิจการ_2557.pdf') }}" target="_blank" class="btn btn-block btn-lg">
                            <div class="d-flex justify-content-between">
                                <b class="text-dark">รายงานกิจการ 2557 </b>
                                <i class="fas fa-download ms-3"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                        <a href="{{ url('file\report\รายงานกิจการ_2558.pdf') }}" target="_blank"
                            class="btn btn-block btn-lg">
                            <div class="d-flex justify-content-between">
                                <b class="text-dark">รายงานกิจการ 2558 </b>
                                <i class="fas fa-download ms-3"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                        <a href="<{{ url('file\report\รายงานกิจการ_2559.pdf') }}" target="_blank"
                            class="btn btn-block btn-lg">
                            <div class="d-flex justify-content-between">
                                <b class="text-dark">รายงานกิจการ 2559 </b>
                                <i class="fas fa-download ms-3"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                        <a href="{{ url('file\report\รายงานกิจการ_2560.pdf') }}" target="_blank"
                            class="btn btn-block btn-lg">
                            <div class="d-flex justify-content-between">
                                <b class="text-dark">รายงานกิจการ 2560 </b>
                                <i class="fas fa-download ms-3"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                        <a href="{{ url('file\report\รายงานกิจการ_2561.pdf') }}" target="_blank"
                            class="btn btn-block btn-lg">
                            <div class="d-flex justify-content-between">
                                <b class="text-dark">รายงานกิจการ 2561 </b>
                                <i class="fas fa-download ms-3"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                        <a href="{{ url('file\report\รายงานกิจการ_2562.pdf') }}" target="_blank"
                            class="btn btn-block btn-lg">
                            <div class="d-flex justify-content-between">
                                <b class="text-dark">รายงานกิจการ 2562 </b>
                                <i class="fas fa-download ms-3"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                        <a href="{{ url('file\report\รายงานกิจการ_2563_(สมบูรณ์_online2).pdf') }}" target="_blank"
                            class="btn btn-block btn-lg">
                            <div class="d-flex justify-content-between">
                                <b class="text-dark">รายงานกิจการ 2563 (ฉบับสมบูรณ์) </b>
                                <i class="fas fa-download ms-3"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
