@extends('dashboard')
@extends('sidebar')
@section('title', 'ประวัติสินเชื่อ')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <b class="h3">ประวัติสินเชื่อ</b>
            <hr>
            <table class="table text-center">
                <thead>
                    <tr>
                        <td>วันที่</td>
                        <td>เวลา</td>
                        <td>สถานะ</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ thaidate('j M Y ', $item->date) }}</td>
                            <td>{{ thaidate('H:i', $item->date) }}</td>
                            <td><strong>{{ $item->status_name }}</strong></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
