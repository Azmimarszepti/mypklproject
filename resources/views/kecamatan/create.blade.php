@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Kecamatan') }}</div>

                <div class="card-body">
                <form action="{{route('kecamatan.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Kode Kecamatan</label>
                    <input type="text" name="kode_kecamatan" class="form-control" id="" aria-describedby="emailHelp">                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kecamatan</label>
                    <input type="text" name="nama_kecamatan" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kota</label>
                    <select name="id_kota" class="form-control" required>
                    @foreach($kota as $data)
                    <option value="{{$data->id}}">{{$data->nama_kota}}</option>
                    @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection



