@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Kasus - Kasus</div>
                <div class="card-body">
                <form action="{{route('kasuslokal.store')}}" method="POST">
                @csrf
                <div class="col">
                    <livewire:statecity />
                </div>

                <div class="form-group">
                        <label for="">Positif</label>
                        <input   value="{{@old('positif')}}" class="form-control"  name="positif">
                        @error('positif')
                      <div class="alert  alert-danger">{{$message}}</div>
                      @enderror
                      </div>

                     <div class="form-group">
                        <label for="" >Sembuh</label>
                        <input   value="{{@old('sembuh')}}" class="form-control"  name="sembuh">
                        @error('sembuh')
                      <div class="alert  alert-danger">{{$message}}</div>
                      @enderror
                     </div>

                     <div class="form-group">
                        <label for="" >Meninggal</label>
                        <input   value="{{@old('meninggal')}}" class="form-control"  name="meninggal">
                        @error('meninggal')
                      <div class="alert  alert-danger">{{$message}}</div>
                      @enderror
                    </div>

                     <div class="form-group">
                        <label for="" >Tanggal</label>
                        <input type="date"  value="{{@old('tanggal')}}" class="form-control"  name="tanggal">
                        @error('tanggal')
                      <div class="alert  alert-danger">{{$message}}</div>
                      @enderror
                     </div>
                     
                     <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection



