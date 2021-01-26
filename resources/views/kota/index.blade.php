@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Kota') }}
                <a href="{{route('kota.create')}}" class="btn btn-primary float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                        <table class="table">
                        <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode kota</th>
                        <th scope="col">Kota</th>
                        <th scope="col">Provinsi</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    @php $no = 1; @endphp
                    @foreach($kota as $data)
                    <tbody>
                        <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$data->kode_kota}}</td>
                        <td>{{$data->nama_kota}}</td>
                        <td>{{$data->provinsi->nama_provinsi}}</td>
                        <td>                           
                            <form action="{{route('kota.destroy',$data->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('kota.show',$data->id)}}"class ="btn btn-warning">Lihat</a> |
                            <a href="{{route('kota.edit',$data->id)}}"class ="btn btn-primary">Ubah</a> |
                            <button type="submit" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection