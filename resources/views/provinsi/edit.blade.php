@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Provinsi') }}</div>

                <div class="card-body">
                <form action="{{route('provinsi.update', $provinsi->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="" class="form-label">Kode Provinsi</label>
                    <input type="text" name="kode_provinsi" value="{{$provinsi->kode_provinsi}}" class="form-control">                
                    @if ($errors->has('kode_provinsi'))
                    <span class="text-danger">{{ $errors->first('kode_provinsi') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Provinsi</label>
                    <input type="text" name="nama_provinsi" value="{{$provinsi->nama_provinsi}}" class="form-control">
                    @if ($errors->has('nama_provinsi'))
                    <span class="text-danger">{{ $errors->first('nama_provinsi') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection



