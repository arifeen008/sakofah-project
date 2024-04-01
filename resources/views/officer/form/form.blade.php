@extends('dashboard')
@extends('sidebar')
@section('title', 'แบบฟอร์มฝ่ายบุคคล')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <b class="h3 card-title">แบบฟอร์มฝ่ายบุคคล</b>
            <hr>
            <table id="datatable" class="table">
                <thead class="text-center">
                    <tr>
                        <th>ประกาศ</th>
                        <th>วันที่</th>
                        <th>ดาวน์โหลด</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->title }} </td>
                            <td class="text-center">{{ thaidate('j M Y ', $item->date) }} </td>
                            <td class="text-center">
                                <a href="file/inside_publish/{{ $item->uploadfile }}" target="_blank"
                                    class="btn btn-outline-success">
                                    <i class="fas fa-download"></i>
                                </a>
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
            $('#datatable').DataTable({
                "ordering": false
            });
        });
    </script>
@endsection
