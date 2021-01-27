@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data rw') }}
                <a href="{{route('rw.create')}}" class="btn btn-primary float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                        <table class="table">
                        <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">RW</th>
                        <th scope="col">Kelurahan</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    @php $no = 1; @endphp
                    @foreach($rw as $data)
                    <tbody>
                        <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$data->nama_rw}}</td>
                        <td>{{$data->kelurahan->nama_kelurahan}}</td>
                        <td>                           
                            <form action="{{route('rw.destroy',$data->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('rw.show',$data->id)}}"class ="btn btn-warning">Lihat</a> |
                            <a href="{{route('rw.edit',$data->id)}}"class ="btn btn-primary">Ubah</a> |
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



