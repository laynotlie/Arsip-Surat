@extends('assesment.head')
@section('content')
<br>
<div class="container">
    <H4>Arsip Surat</H4>
    <p>Berikut ini adalah surat-surat yang telah terbit dan diarsipkan.
        <br> Klik "Lihat" pada kolom aksi untuk menampilkan surat.
    </p>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="{{route('surat.cari')}}" method="get">
                        @csrf
                        <div class=" mb-3 row">
                            <label for="nomor_surat" class="col-sm-2 col-form-label">Cari Surat :</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="cari" name="cari">
                            </div>
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </div>
                    </form>
                    <table class="table" id="table-produk">
                        <thead>
                            <tr>
                                <th scope="col">Nomor Surat</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Waktu Pengarsipan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($srt as $item)
                            <tr>
                                <td scope="col">{{ $item->nomor_surat }}</td>
                                <td scope="col">{{ $item->kategori_surat }}</td>
                                <td scope="col">{{ $item->judul_surat }}</td>
                                <td scope="col">{{ $item->created_at }}</td>
                                <td scope="col">
                                    <form action="{{route('surat.destroy', $item->id)}}" method="post">@csrf
                                        <button onclick="return confirm('Yakin Hapus Data?')" class="btn btn-danger">Hapus</button>
                                        <a href="{{route('surat.dw', $item->id)}}" class="btn btn-warning" role="button" aria-disabled="true">Unduh</a>
                                        <a href="{{route('surat.lihat', $item->id)}}" class="btn btn-primary" role="button" aria-disabled="true">Lihat</a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <br>

            </div>
            <div>
                <a href="{{ url('/tambah') }}" class="btn btn-primary" role="button" aria-disabled="true">Arsipkan Surat</a>
            </div>
        </div>
    </div>
</div>

@stop

@push('scripts')
<script>
    $(function() {
        $('#tabel-produk').DataTable();
    });
</script>
@endpush