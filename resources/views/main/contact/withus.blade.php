@extends('layout')
@section('title', 'ร่วมงานกับเรา ')
@section('content')
    <section>
        <div class="bg-image" style="background-image: url('{{ url('picture/445.jpg') }}'); height: 100vh;">
            <div class="mask d-flex justify-content-center align-items-center h-100"
                style="background-color: rgba(63, 81, 181, 0.5);">
                <div class="text-white text-center">
                    <h1 class="mb-5" style="font-family: 'Kanit'; color: #212121;">ร่วมงานกับเรา</h1>
                    <a class="btn btn-outline-dark btn-lg px-5" href="{{ url('file/form/ใบสมัครงาน.pdf') }}" target="_blank">
                        ดาวน์โหลดใบสมัครงาน
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
