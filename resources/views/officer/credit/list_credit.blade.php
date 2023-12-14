@extends('dashboard')
@extends('sidebar')
@section('title', 'ค้นหาสินเชื่อ')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <b class="h3 card-title">รายการสินเชื่อ</b>
			@if (count($data) > 0)
			<table id="datatable" class="table">
                <thead>
                    <tr>
                        <th>เลขที่สัญญา</th>
                        <th>ชื่อ</th>
                        <th>ผู้อัพโหลด</th>
                        <th>วันที่อัพโหลด</th>
                        <th>ดาวน์โหลด/ลบ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>
                                <p class="fw-normal mb-1"> {{ $item->fullcont_id }}</p>
                                <p class="text-muted mb-1">{{ $item->name_branch }}</p>
                                <p class="text-muted mb-1">{{ $item->credit_name }}</p>
                                <p class="text-muted mb-1">{{ $item->year }}</p>
                            </td>
                            <td class="text-center">{{ $item->fname . '  ' . $item->lname }}</td>
                            <td class="text-center">{{ $item->name_upload }}</td>
                            <td class="text-center">{{ thaidate('j M Y ', $item->date_upload) }}</td>
                            <td class="text-center">
                                <a href="{{ url('download_credit/' . $item->id_credit) }}" class="btn btn-primary"><i
                                        class="fas fa-file-download"></i></a>
                                <a href="{{ url('delete_credit/' . $item->id_credit) }}" class="btn btn-danger delete"><i
                                        class="fas fa-dumpster"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
			@else
				<div class="card-title text-center">ไม่มีสินเชื่อ</div>
			@endif
            
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
@endsection
