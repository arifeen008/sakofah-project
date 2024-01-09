@extends('dashboard')
@extends('sidebar')
@section('title', 'ค้นหาสินเชื่อ')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <b class="h3 card-title">รายการสินเชื่อ</b>
            <hr>
            @if (count($data) > 0)
                <table id="datatable" class="table align-middle">
                    <thead class="text-center">
                        <tr>
                            <th>เลขที่สัญญา</th>
                            <th>ชื่อ</th>
                            <th>ผู้อัพโหลด</th>
                            <th>วันที่อัพโหลด</th>
                            <th>ดาวน์โหลด</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr class="text-center">
                                <td>
                                    <p class="fw-normal mb-1"> {{ $item->fullcont_id }}</p>
                                    <p class="text-muted mb-1">{{ $item->name_branch }}</p>
                                    <p class="text-muted mb-1">{{ $item->credit_name }}</p>
                                    <p class="text-muted mb-1">{{ $item->year }}</p>
                                </td>
                                <td>{{ $item->fname . '  ' . $item->lname }}</td>
                                <td>{{ $item->name_upload }}</td>
                                <td>{{ thaidate('j M Y ', $item->date_upload) }}</td>
                                <td class="text-center">
                                    <a href="{{ url($item->path . '/' . $item->file_name) }}" class="btn btn-primary"
                                        target="_blank"><i class="fas fa-file-download"></i></a>
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="h-100 d-flex justify-content-center align-items-center">ไม่มีสินเชื่อที่ค้นหา</div>
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
    @if (session('error'))
        <script>
            Swal.fire({
                title: "Oops...",
                text: "{{ session('error') }}",
                icon: "error"
            });
        </script>
    @endif
@endsection
