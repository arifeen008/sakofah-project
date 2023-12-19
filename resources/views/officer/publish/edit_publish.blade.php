@extends('dashboard')
@extends('sidebar')
@section('title', 'ประกาศภายใน')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <b class="h3 card-title">Admin ประกาศ</b>
            <hr>
            <table id="datatable" class="table">
                <thead>
                    <tr>
                        <th class="text-center">ประเภท</th>
                        <th class="text-center">title</th>
                        <th class="text-center">วันที่</th>
                        <th class="text-center">file name</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>

                            <td class="text-center">{{ $item->type_announcement }}</td>
                            <td>{{ $item->title }}</td>
                            <td class="text-center">{{ thaidate('j M Y ', $item->date) }}</td>
                            <td class="text-center">{{ $item->uploadfile }}</td>
                            <td class="text-center">
                                <a href="/delete_publish/{{ $item->internal_id }}" class="btn btn-danger delete">ลบ</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('script')
    @if (session('success'))
        <script>
            Swal.fire({
                title: "Good job!",
                text: "{{ session('success') }}",
                icon: "success"
            });
        </script>
    @endif
    @if (session('error'))
        <script>
            Swal.fire({
                title: 'Error!',
                text: "{{ session('error') }}",
                icon: "error"
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
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
@endsection
