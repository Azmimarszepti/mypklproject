@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Provinsi') }}</div>

                <div class="card-body">
                <form action="{{route('provinsi.show', $provinsi->id)}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Kode Provinsi</label>
                    <input type="text" name="kode_provinsi" value="{{$provinsi->kode_provinsi}}" class="form-control" readonly>                
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Provinsi</label>
                    <input type="text" name="provinsi" value="{{$provinsi->nama_provinsi}}" class="form-control" readonly>
                </div>
                <a href="{{url()->previous()}}"class="btn btn-primary">Kembali</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection



