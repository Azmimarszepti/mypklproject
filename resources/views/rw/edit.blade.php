@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data Rw') }}</div>

                <div class="card-body">
                <form action="{{route('rw.update', $rw->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="" class="form-label">Nama</label>
                    <input type="text" name="nama_rw" value="{{$rw->nama_rw}}" class="form-control">
                    @if ($errors->has('nama_rw'))
                    <span class="text-danger">{{ $errors->first('nama_rw') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kelurahan</label>
                    <select name="id_kelurahan" class="form-control" required>
                    @foreach($kelurahan as $data)
                    <option value="{{$data->id}}">{{$data->nama_kelurahan}}</option>
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



