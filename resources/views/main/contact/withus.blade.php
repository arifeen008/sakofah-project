@extends('layout')
@section('title', 'ร่วมงานกับเรา ')
@section('content')
    <section>
        <div class="bg-image bg-fixed text-center"
            style="background-image:url('{{ url('picture/445.jpg') }}'); height: 100vh;">
            <div class="mask" style="background-color: rgba(63,81,181,.3);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div data-mdb-toggle="animation" data-mdb-animation="fade-in" data-mdb-animation-start="onLoad"
                        class="text-white">
                        <p class="text-dark fs-1 mb-5" style="font-family: 'Kanit';">ร่วมงานกับเรา</p>
                        <a class="btn btn-outline-dark fs-2" role="button" href="{{ url('file/form/ใบสมัครงาน.pdf') }}"
                            target="_blank">ดาวน์โหลดใบสมัครงาน</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
