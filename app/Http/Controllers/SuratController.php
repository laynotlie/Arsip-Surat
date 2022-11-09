<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuratController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Arsip Surat',
            'nav'   => 'arsip',
            'srt' => Surat::all(),
        ];
        return view('assesment.surat', $data);
    }

    public function cari(Request $r)
    {
        $cari = $r->cari;
        $data = [
            'title' => 'Arsip Surat',
            'nav'   => 'arsip',
            'srt' => DB::table('surat')
            ->where('judul_surat','like',"%".$cari."%")
            ->paginate()
        ];
        return view('assesment.surat', $data);
    }

    public function tambah()
    {
        return view('assesment.tambah');
    }

    public function store(Request $r)
    {
        $ft = $r->file('file_pdf')->store('pdf');
        $file_nama = $r->file('file_pdf')->getClientOriginalName();

        $data = new Surat;
        $data->nomor_surat = $r->nomor_surat;
        $data->kategori_surat = $r->kategori;
        $data->judul_surat = $r->judul;
        $data->file_surat = $ft;
        $data->save();
        return redirect('/');
    }

    public function lihat($id)
    {
        $data = [
            'title' => 'Pegawai',
            'nav'   => 'pegawai',
            'srt' => Surat::find($id),
        ];
        return view('assesment.lihat',$data);
    }

    public function destroy($id)
    {
        $data = Surat::find($id);
        $data->delete();
        return redirect('/');
    }

    public function download($id){
        $data = [
            'title' => 'Pegawai',
            'nav'   => 'pegawai',
            'srt' => Surat::find($id),
        ];
        return view('assesment.unduh', $data);
    }
}
