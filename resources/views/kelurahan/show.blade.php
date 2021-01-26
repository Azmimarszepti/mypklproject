@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data kelurahan') }}</div>

                <div class="card-body">
                <form action="{{route('kelurahan.show', $kelurahan->id)}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Kode kelurahan</label>
                    <input type="text" name="kode_kelurahan" value="{{$kelurahan->kode_kelurahan}}" class="form-control" readonly>                
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kelurahan</label>
                    <input type="text" name="nama_kelurahan" value="{{$kelurahan->nama_kelurahan}}" class="form-control" readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kecamatan</label>
                    <input type="text" name="id_kecamatan" value="{{$kelurahan->nama_kecamatan->nama_kecamatan}}" class="form-control" readonly>
                </div>
                <a href="{{url()->previous()}}"class="btn btn-primary">Kembali</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection



