@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data Kelurahan') }}</div>

                <div class="card-body">
                <form action="{{route('kelurahan.update', $kelurahan->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="" class="form-label">Kode Kelurahan</label>
                    <input type="text" name="kode_kelurahan" value="{{$kelurahan->kode_kelurahan}}" class="form-control">                
                    @if ($errors->has('kode_kelurahan'))
                    <span class="text-danger">{{ $errors->first('kode_kelurahan') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kelurahan</label>
                    <input type="text" name="nama_kelurahan" value="{{$kelurahan->nama_kelurahan}}" class="form-control">
                    @if ($errors->has('nama_kelurahan'))
                    <span class="text-danger">{{ $errors->first('nama_kelurahan') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kecamatan</label>
                    <select name="id_kecamatan" class="form-control" required>
                    @foreach($kecamatan as $data)
                    <option value="{{$data->id}}">{{$data->nama_kecamatan}}</option>
                    @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection



