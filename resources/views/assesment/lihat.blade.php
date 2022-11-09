@extends('assesment.head')
@section('content')
<div class="container">
    <H4>Arsip Surat >> Lihat</H4>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="mb-3 row">
                        <label for="nomor_surat" class="col-sm-2 col-form-label">Nomor Surat</label>
                        <div class="col-sm-6">
                            : {{ $srt->nomor_surat }}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-6">
                            : {{ $srt->kategori_surat }}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-6">
                            : {{ $srt->judul_surat }}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="file" class="col-sm-2 col-form-label">Waktu Unggah</label>
                        <div class="col-sm-6">
                            : {{ $srt->created_at }}
                        </div>
                    </div>
                </div>
                <iframe src="{{ asset('/storage/') }}/{{ $srt->file_surat}}" width="100%" height="400px"></iframe>
            </div>
            <a href="{{ url('/') }}" class="btn btn-primary mb-3" role="button" aria-disabled="true">Back</a>
        </div>
    </div>
</div>
@endsection