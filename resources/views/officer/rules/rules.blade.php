@extends('dashboard')

@section('title', 'ประกาศภายใน')
@section('content')
    <div class="card card-primary m-3">
        <div class="card-header">
            <h3 class="card-title">ข้อบังคับสหกรณ์</h3>
        </div>
        <div class="card-body">
            <a class="btn btn-block btn-lg" href="{{ url('file/cooperative_rules/ข้อบังคับสหกรณ์อิสลามษะกอฟะฮ 2566.pdf') }}"
                role="button" target="_blank">
                <div class="d-flex justify-content-between">
                    <b class="text-dark">ข้อบังคับสหกรณ์อิสลามษะกอฟะฮ 2566 <img src="{{ url('new.gif') }}"
                            style="width: 20px"></b>
                    <i class="fas fa-download"></i>
                </div>
            </a>
            <a class="btn btn-block btn-lg" href="{{ url('file/cooperative_rules/ข้อบังคับสหกรณ์(รวมทุกฉบับ).pdf') }}"
                role="button" target="_blank">
                <div class="d-flex justify-content-between">
                    <b class="text-dark">ข้อบังคับสหกรณ์(รวมทุกฉบับ)</b>
                    <i class="fas fa-download"></i>
                </div>
            </a>
            <div class="text-center">
                <iframe style="width:auto;height:350px" src="https://online.anyflip.com/haqcj/sfqo/index.html"
                    seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true"
                    allowfullscreen="true"></iframe>
            </div>
        </div>
    </div>
@endsection
