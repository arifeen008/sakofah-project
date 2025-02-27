@extends('layout')
@section('title', 'รายงานกิจการ |สหกรณ์อิสลามษะกอฟะฮ จำกัด')
@section('content')
<div class="container my-4">
    <div class="card shadow-lg border-0 rounded-3" style="font-family: 'Sarabun', sans-serif;">
        <div class="card-header bg-success text-white text-center py-3 rounded-top">
            <h2 class="mb-0">รายงานกิจการประจำปี</h2>
        </div>
        <div class="card-body p-4">
            <div class="row g-3">
                @foreach ([
                    ["name" => "รายงานกิจการ 2557", "path" => "file/report/รายงานกิจการ_2557.pdf"],
                    ["name" => "รายงานกิจการ 2558", "path" => "file/report/รายงานกิจการ_2558.pdf"],
                    ["name" => "รายงานกิจการ 2559", "path" => "file/report/รายงานกิจการ_2559.pdf"],
                    ["name" => "รายงานกิจการ 2560", "path" => "file/report/รายงานกิจการ_2560.pdf"],
                    ["name" => "รายงานกิจการ 2561", "path" => "file/report/รายงานกิจการ_2561.pdf"],
                    ["name" => "รายงานกิจการ 2562", "path" => "file/report/รายงานกิจการ_2562.pdf"],
                    ["name" => "รายงานกิจการ 2563 (ฉบับสมบูรณ์)", "path" => "file/report/รายงานกิจการ_2563_(สมบูรณ์_online2).pdf"]
                ] as $report)
                <div class="col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <a href="{{ url($report['path']) }}" target="_blank" class="btn btn-light btn-lg w-100 d-flex justify-content-between align-items-center p-3">
                            <span class="fw-bold text-success">{{ $report['name'] }}</span>
                            <i class="fas fa-download text-success"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
