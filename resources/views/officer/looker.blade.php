@extends('dashboard')
@extends('sidebar')
@section('title', 'looker')
@section('content')
    <div class="card m-3">
        <div class="card-header">
            <iframe src="https://lookerstudio.google.com/embed/reporting/gGL24biaXS4" width="100%" height="600"
                frameborder="0" style="border:0;" allowfullscreen>
            </iframe>
        </div>
    </div>
@endsection
