@extends('dashboard')
@extends('sidebar')
@section('title', 'ผลการดำเนินงานประจำปี')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <b class="h3 card-title">ผลการดำเนินงานประจำปี</b>
            <hr>
            <table id="datatable">
                <thead>
                    <tr>
                        <th class="text-center">ชื่อเอกสาร</th>
                        <th class="text-center">วันที่</th>
                        <th class="text-center">ดาวน์โหลด</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td> {{ $item->document_name }}</td>
                            <td class="text-center"> {{ thaidate('j M Y ', strtotime($item->date)) }}</td>
                            <td class="text-center"><a href="{{ url('file/performance/' . $item->file_name) }}"
                                    target="_blank" class="btn btn-outline-success" data-mdb-ripple-color="success"><i
                                        class="fas fa-download"></i></td>
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
@endsection
