@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Kecamatan') }}
                <a href="{{route('kecamatan.create')}}" class="btn btn-primary float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                        <table class="table">
                        <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode kecamatan</th>
                        <th scope="col">Kecamatan</th>
                        <th scope="col">Kota</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    @php $no = 1; @endphp
                    @foreach($kecamatan as $data)
                    <tbody>
                        <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$data->kode_kecamatan}}</td>
                        <td>{{$data->nama_kecamatan}}</td>
                        <td>{{$data->kota->nama_kota}}</td>
                        <td>                           
                            <form action="{{route('kecamatan.destroy',$data->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('kecamatan.show',$data->id)}}"class ="btn btn-warning">Lihat</a> |
                            <a href="{{route('kecamatan.edit',$data->id)}}"class ="btn btn-primary">Ubah</a> |
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



