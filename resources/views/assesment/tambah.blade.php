@extends('assesment.head')
@section('content')
<br>
<div class="container">
    <H4>Arsip Surat >> Tambah Arsip</H4>
    <p>Unggah surat yang telah terbit pada form ini untuk diarsipkan.
        <br>
        Catatan:
        <li>Gunakan file berformat PDF</li>
    </p>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="{{route('surat.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class=" mb-3 row">
                            <label for="nomor_surat" class="col-sm-2 col-form-label">Nomor Surat</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="nomor_surat" name="nomor_surat">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-6">
                                <select name="kategori" class="form-control">
                                    <option value="">----- Pilih -----</option>
                                    <option value="Undangan">Undangan</option>
                                    <option value="Pengumuman">Pengumuman</option>
                                    <option value="Surat Tugas">Surat Tugas</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="judul" name="judul">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="file_pdf" class="col-sm-2 col-form-label">File Surat (PDF)</label>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" id="file_pdf" name="file_pdf">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="file" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success mb-3">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
                <a href="{{ url('/') }}" class="btn btn-primary mb-3" role="button" aria-disabled="true">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection