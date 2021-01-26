@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Rw') }}</div>

                <div class="card-body">
                <form action="{{route('rw.show', $rw->id)}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Nama</label>
                    <input type="text" name="nama_rw" value="{{$rw->nama_rw}}" class="form-control" readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kelurahan</label>
                    <input type="text" name="id_kelurahan" value="{{$rw->nama_kelurahan->nama_kelurahan}}" class="form-control" readonly>
                </div>
                <a href="{{url()->previous()}}"class="btn btn-primary">Kembali</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection



