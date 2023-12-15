@extends('dashboard')
@extends('sidebar')
@section('title', 'ประกาศภายใน')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <b class="h3 card-title">ข้อบังคับสหกรณ์</b>
            <hr>
            <div class="card mx-2 my-2">
                <a href="{{ url('file/cooperative_rules/ข้อบังคับสหกรณ์(รวมทุกฉบับ).pdf') }}" target="_blank"
                    class="btn btn-block btn-lg">
                    <div class="d-flex justify-content-between">
                        <b class="text-dark">ข้อบังคับสหกรณ์(รวมทุกฉบับ)</b>
                        <i class="fas fa-download"></i>
                    </div>
                </a>
            </div>
            <div class="card mx-2 my-2">
                <p class="card-title text-dark border-bottom border-info mx-2 my-2"
                    style="font-family: 'Sarabun';font-size: 20px;"><b>ระเบียบสหกรณ์</b></p>
                <iframe class="mb-3 mx-2" style="width: auto;height: 500px;" src="https://anyflip.com/haqcj/sfqo/"
                    seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection
