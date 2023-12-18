@extends('dashboard')
@extends('sidebar')
@section('title', 'Admin เพิ่มสถานะสินเชื่อ')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <h3 class="card-title"><b>เพิ่มสถานะสินเชื่อ</b></h3>
            <hr>
            <form action="/add_status" method="post">
                @csrf
                <div class="mb-3">
                    <label for="status_name" class="form-label">ชื่อสถานะ</label>
                    <input type="text" class="form-control" id="status_name" name="status_name">
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-4">เพิ่ม</button>
            </form>
        </div>
    </div>
@endsection
