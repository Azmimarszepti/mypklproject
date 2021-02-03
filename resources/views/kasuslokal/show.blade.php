@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Data</div>

                <div class="card-body">
                <form action="{{route('kasuslokal.update', $kasuslokal->id)}}" method="POST">
                @csrf
                
                <div class="mb-3">
                <label for="">RW</label>
                        <input type="text" name="id_rw" class="form-control" value="{{$kasuslokal->rw->nama_rw}}" value="{{'kasuslokal->nama_rw'}}"readonly>                
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Positif</label>
                    <input type="text" name="positif" value="{{$kasuslokal->positif}}" class="form-control" readonly>                
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Sembuh</label>
                    <input type="text" name="sembuh" value="{{$kasuslokal->sembuh}}" class="form-control" readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Meninggal</label>
                    <input type="text" name="meninggal" value="{{$kasuslokal->meninggal}}" class="form-control" readonly>
                </div>
                <a href="{{url()->previous()}}"class="btn btn-primary">Kembali</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection



