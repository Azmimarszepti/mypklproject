@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Kota') }}</div>

                <div class="card-body">
                <form action="{{route('kota.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Kode Kota</label>
                    <input type="text" name="kode_kota" class="form-control" id="" aria-describedby="emailHelp">                </div>
                    @if ($errors->has('kode_kota'))
                    <span class="text-danger">{{ $errors->first('kode_kota') }}</span>
                    @endif
                <div class="mb-3">
                    <label for="" class="form-label">Kota</label>
                    <input type="text" name="nama_kota" class="form-control" id="">
                    @if ($errors->has('nama_kota'))
                    <span class="text-danger">{{ $errors->first('nama_kota') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Provinsi</label>
                    <select name="id_provinsi" class="form-control" required>
                    @foreach($provinsi as $data)
                    <option value="{{$data->id}}">{{$data->nama_provinsi}}</option>
                    @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection



