@extends('layout')
@section('title', 'เข้าสู่ระบบ | สหกรณ์อิสลามษะกอฟะฮ จำกัด')
@section('content')
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="{{ url('picture/resize-1588050307116.png') }}" class="img-fluid" alt="Logo">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form action="/login" method="post">
                        @csrf
                        <h1 class="text-dark text-center">เข้าสู่ระบบ</h1>
                        @error('user_id')
                            <div class="my-2">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                        @enderror
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="text" id="form1Example1" name="user_id" class="form-control" />
                            <label class="form-label" for="form1Example1">username</label>
                        </div>
                        @error('password')
                            <div class="my-2">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                        @enderror
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" id="form1Example2" name="password" class="form-control" />
                            <label class="form-label" for="form1Example2">Password</label>
                        </div>
                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <a href="/">หน้าหลัก</a>
                            <a href="/"></a>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg btn-block">login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
