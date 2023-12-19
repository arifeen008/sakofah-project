@extends('dashboard')
@extends('sidebar')
@section('title', 'Admin รายการข่าวสาร')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="card-title"><b>รายการข่าวสาร</b></h3>
                <a href="/add_news" class="btn btn-success"><i class="fas fa-plus me-2"></i>เพิ่มข่าวสาร</a>
            </div>
            <hr>
            <table id="datatable">
                <thead class="text-center">
                    <tr>
                        <th class="text-center" width=500>หัวข้อ</th>
                        <th class="text-center">ประเภทข่าว</th>
                        <th class="text-center">เวลาอัพโหลด</th>
                        <th class="text-center">แก้ไข</th>
                        <th class="text-center">ลบ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ Str::limit($item->title, 70) }}</td>
                            <td class="text-center">{{ $item->news_typename }}</td>
                            <td class="text-center">{{ thaidate('j M Y ', $item->dateupload) }} </td>
                            <td class="text-center"><a href="/edit_news/{{ $item->news_number }}"
                                    class="btn btn-warning me-3"><i class="fas fa-pen"></i></a></td>
                            <td class="text-center">
                                <a href="/delete_news/{{ $item->news_number }}" class="delete btn btn-danger me-3"><i
                                        class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
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
