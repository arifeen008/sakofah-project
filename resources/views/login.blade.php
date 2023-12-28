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
                            <input type="text" id="user_id" name="user_id" class="form-control" />
                            <label class="form-label" for="user_id">ชื่อผู้ใช้</label>
                        </div>
                        @error('password')
                            <div class="my-2">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                        @enderror
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" id="password" name="password" class="form-control" />
                            <label class="form-label" for="password">รหัสผ่าน</label>
                        </div>
                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input success" type="checkbox" value="password" id="Remember"
                                    checked />
                                <label class="form-check-label" for="Remember">จดจำฉัน</label>
                            </div>
                            <a href="/">ลืมรหัสผ่าน</a>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg btn-block">เข้าสู่ระบบ</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    @if (session('error'))
        <script>
            Swal.fire({
                title: "ผิดพลาด !",
                text: "{{ session('error') }}",
                icon: "error"
            });
        </script>
    @endif
@endsection
