@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Kelurahan') }}</div>

                <div class="card-body">
                <form action="{{route('kelurahan.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Kode Kelurahan</label>
                    <input type="text" name="kode_kelurahan" class="form-control" id="" aria-describedby="emailHelp">                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kelurahan</label>
                    <input type="text" name="nama_kelurahan" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kecamatan</label>
                    <select name="id_kecamatan" class="form-control" required>
                    @foreach($kecamatan as $data)
                    <option value="{{$data->id}}">{{$data->nama_kecamatan}}</option>
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



