@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Kasus</div>
                <div class="card">
                <div class="card-body" >
                <form  action="{{route('kasuslokal.update',$kasuslokal->id)}}" method="post">
                <input type="hidden" name="_method" value="PUT">
                    @csrf
                        <div class="row">
                              <div class="col">
                              @livewireStyles
                                  @livewireScripts
                                  @method('PUT')
                                  <div>
                                  @livewire('statecity',['selectedRw'=> $kasuslokal->id_rw,
                                  'selectedState4'=> $kasuslokal->rw->kelurahan->id_kelurahan,
                                  'selectedState3'=> $kasuslokal->rw->kelurahan->kecamatan->id_kecamatan,
                                  'selectedState2'=> $kasuslokal->rw->kelurahan->kecamatan->kota->id_kota,
                                  'selectedState'=> $kasuslokal->rw->kelurahan->kecamatan->kota->provinsi->id_provinsi])
                                  </div>
                                  </div>
                        <div class="col">
                      <div class="form-group">
                        <label for="" class="form-label">Positif</label>
                        <input  class="form-control"  name="positif" value="{{$kasuslokal->positif}}"required>
                    </div>
                     <div class="form-group">
                        <label for="" class="form-label">Sembuh</label>
                        <input  class="form-control"  name="sembuh" value="{{$kasuslokal->sembuh}}"required>
                    </div>
                     <div class="form-group">
                        <label for="" class="form-label">Meninggal</label>
                        <input  class="form-control"  name="meninggal" value="{{$kasuslokal->meninggal}}"required>
                    </div>
                     <div class="form-group">
                        <label for="" class="form-label">Tanggal</label>
                        <input type="date" class="form-control"  name="tanggal" value="{{$kasuslokal->tanggal}}"required>
                    </div>          
                        </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection