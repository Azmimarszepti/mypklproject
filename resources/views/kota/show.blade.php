@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Kota') }}</div>

                <div class="card-body">
                <form action="{{route('kota.show', $kota->id)}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Kode Kota</label>
                    <input type="text" name="kode_kota" value="{{$kota->kode_kota}}" class="form-control" readonly>                
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kota</label>
                    <input type="text" name="nama_kota" value="{{$kota->nama_kota}}" class="form-control" readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Provinsi</label>
                    <input type="text" name="id_provinsi" value="{{$kota->provinsi->provinsi}}" class="form-control" readonly>
                </div>
                <a href="{{url()->previous()}}"class="btn btn-primary">Kembali</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection



