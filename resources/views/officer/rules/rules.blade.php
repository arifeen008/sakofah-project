@extends('dashboard')
@extends('sidebar')
@section('title', 'ประกาศภายใน')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <b class="h3 card-title text-dark">ข้อบังคับสหกรณ์</b>
            <hr>
            <a class="btn btn-block btn-lg" data-mdb-ripple-init href="{{ url('file/cooperative_rules/ข้อบังคับสหกรณ์อิสลามษะกอฟะฮ 2566.pdf') }}" role="button"  target="_blank">
                <div class="d-flex justify-content-between">
                    <b class="text-dark">ข้อบังคับสหกรณ์อิสลามษะกอฟะฮ 2566 <img src="{{url('new.gif')}}" style="width: 20px"></b>
                    <i class="fas fa-download"></i>
                </div>
            </a>
            <a class="btn btn-block btn-lg" data-mdb-ripple-init href="{{ url('file/cooperative_rules/ข้อบังคับสหกรณ์(รวมทุกฉบับ).pdf') }}" role="button"  target="_blank">
                <div class="d-flex justify-content-between">
                    <b class="text-dark">ข้อบังคับสหกรณ์(รวมทุกฉบับ)</b>
                    <i class="fas fa-download"></i>
                </div>
            </a>
            <p><b class="h3 card-title text-dark mt-3 "> ระเบียบสหกรณ์</b></p><hr>
            <iframe style="width: auto;height: 500px;" src="https://anyflip.com/haqcj/sfqo/"
                seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen></iframe>

        </div>
    </div>
@endsection
