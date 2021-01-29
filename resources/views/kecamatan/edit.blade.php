@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data Kecamatan') }}</div>

                <div class="card-body">
                <form action="{{route('kecamatan.update', $kecamatan->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="" class="form-label">Kode Kecamatan</label>
                    <input type="text" name="kode_kecamatan" value="{{$kecamatan->kode_kecamatan}}" class="form-control">                
                    @if ($errors->has('kode_kecamatan'))
                    <span class="text-danger">{{ $errors->first('kode_kecamatan') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kecamatan</label>
                    <input type="text" name="nama_kecamatan" value="{{$kecamatan->nama_kecamatan}}" class="form-control">
                    @if ($errors->has('nama_kecamatan'))
                    <span class="text-danger">{{ $errors->first('nama_kecamatan') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kota</label>
                    <select name="id_kota" class="form-control" required>
                    @foreach($kota as $data)
                    <option value="{{$data->id}}">{{$data->nama_kota}}</option>
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



