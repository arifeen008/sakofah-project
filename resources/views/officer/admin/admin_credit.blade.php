@extends('dashboard')
@extends('sidebar')
@section('title', 'Admin พิจารณาสินเชื่อ')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <h3 class="me-auto">Admin สินเชื่อ</h3>
            <hr>
            <table id="datatable" class="text-center">
                <thead>
                    <tr>
                        <th>รหัสสมาชิก</th>
                        <th>ชื่อ-สกุล</th>
                        <th>สินเชื่อ</th>
                        <th>ผู้ส่ง</th>
                        <th>วันที่</th>
                        <th>รายละเอียด</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td class="text-center">{{ $item->mem_id }}</td>
                            <td class="text-center">{{ $item->fname . '   ' . $item->lname }}</td>
                            <td>
                                <p class="fw-normal mb-1"> {{ $item->fullcont_id }}</p>
                                <p class="text-muted mb-1">{{ $item->name_branch }}</p>
                                <p class="text-muted mb-1">{{ $item->credit_name }}</p>
                                <p class="text-muted mb-1">{{ $item->year }}</p>
                            </td>
                            <td class="text-center">{{ $item->name_upload }}</td>
                            <td class="text-center">{{ thaidate('j M Y ', $item->date_upload) }}</td>
                            <td class="text-center">
                                <a href="{{ url($item->path . '/' . $item->file_name) }}" target="_blank"
                                    class="btn btn-primary">ไฟล์</a>
                                <a href="{{ url('admin_delete_credit/' . $item->id_credit) }}"
                                    class="btn btn-danger delete">ลบ</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
    @if (session('success'))
        <script>
            Swal.fire({
                title: "Good job!",
                text: "{{ session('success') }}",
                icon: "success"
            });
        </script>
    @endif
    <script>
        $('.delete').on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr('href');
            Swal.fire({
                title: 'ต้องการลบหรือไม่',
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: 'ลบ',
                denyButtonText: 'ยกเลิก',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.location.href = href;
                } else if (result.isDenied) {
                    Swal.fire('ยกเลิก', '', 'info')
                }
            })
        })
    </script>
@endsection
