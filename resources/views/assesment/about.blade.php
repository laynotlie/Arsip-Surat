@extends('assesment.head')
@section('content')
<div class="container">
    <H4>About</H4>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="mb-3 row">
                        <img src="{{ asset('/storage/pastf.jpeg') }}" class="col-sm-2 col-form-label" alt="" srcset="">
                        <div class="col-sm-6">
                            Aplikasi ini dibuat oleh: <br>
                            Nama : Nur Laylatul <br> 
                            NIM : 2031730043 <br>
                            Tanggal : 09 November 2022
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection