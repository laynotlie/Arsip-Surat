@extends('assesment.head')
@section('content')
<div class="container">
    <H4>Arsip Surat >> Unduh</H4>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <iframe src="{{ asset('/storage/') }}/{{ $srt->file_surat}}" width="100%" height="700px"></iframe>
            </div>
            <a href="{{ url('/') }}" class="btn btn-primary mb-3" role="button" aria-disabled="true">Back</a>
        </div>
    </div>
</div>
@endsection