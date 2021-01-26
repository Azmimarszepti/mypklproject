@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data kelurahan') }}
                <a href="{{route('kelurahan.create')}}" class="btn btn-primary float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                        <table class="table">
                        <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Kelurahan</th>
                        <th scope="col">Kelurahan</th>
                        <th scope="col">Kecamatan</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    @php $no = 1; @endphp
                    @foreach($kelurahan as $data)
                    <tbody>
                        <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$data->kode_kelurahan}}</td>
                        <td>{{$data->nama_kelurahan}}</td>
                        <td>{{$data->nama_kecamatan}}</td>
                        <td>                           
                            <form action="{{route('kelurahan.destroy',$data->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('kelurahan.show',$data->id)}}"class ="btn btn-warning">Lihat</a> |
                            <a href="{{route('kelurahan.edit',$data->id)}}"class ="btn btn-primary">Ubah</a> |
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



