@extends('dashboard')

@section('title', 'Admin เพิ่มสถานะสินเชื่อ')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <h3 class="card-title"><b>แก้ไขสถานะสินเชื่อ</b></h3>
            <hr>
            <form action="/update_status" method="post">
                @csrf
                <div class="mb-3">
                    <label for="status_name" class="form-label">ชื่อสถานะ</label>
                    <input type="text" class="form-control" id="status_name" name="status_name" value="{{$data->status_name}}">
                    <input type="hidden" class="form-control" id="status_id" name="status_id" value="{{$data->status_id}}">
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-4">แก้ไข</button>
            </form>
        </div>
    </div>
@endsection