<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use App\Models\Kecamatan;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $kelurahan = Kelurahan::all();
        $kecamatan = Kecamatan::all();
        return view('kelurahan.index', compact('kelurahan','kecamatan'));
    }

    public function create()
    {
        $kecamatan = Kecamatan::all();
        return view('kelurahan.create', compact('kecamatan'));
    }

    public function store(Request $request)
    {

        $messages = [
            'required' => ':attribute wajib diisi cuy!!!',
            'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
        ];
        
        $this->validate($request,[
            'kode_kelurahan' => 'required|min:4|max:20',
            'nama_kelurahan' => 'required',
        ],$messages);

        $kelurahan = new Kelurahan;
        $kelurahan->kode_kelurahan = $request->kode_kelurahan;
        $kelurahan->nama_kelurahan = $request->nama_kelurahan;
        $kelurahan->id_kecamatan = $request->id_kecamatan;
        $kelurahan->save();
        return redirect()->route('kelurahan.index')->with(['message'=>'Data Berhasil Dibuat']);
    }

    public function show($id)
    {
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::findOrFail($id);
        return view('kelurahan.show', compact('kelurahan', 'kecamatan'));
    }

    public function edit($id)
    {
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::findOrFail($id);
        return view('kelurahan.edit', compact('kelurahan', 'kecamatan'));
    }

    public function update(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute wajib diisi cuy!!!',
            'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
        ];
        
        $this->validate($request,[
            'kode_kelurahan' => 'required|min:4|max:20',
            'nama_kelurahan' => 'required',
        ],$messages);
        
        $kelurahan = Kelurahan::findOrFail($id);
        $kelurahan->kode_kelurahan = $request->kode_kelurahan;
        $kelurahan->nama_kelurahan = $request->nama_kelurahan;
        $kelurahan->id_kecamatan = $request->id_kecamatan;
        $kelurahan->save();
        return redirect()->route('kelurahan.index')->with(['message'=>'Data Berhasil Di Ubah']);
    }

    public function destroy($id)
    {
        $kelurahan = Kelurahan::findOrFail($id)->delete();
        return redirect()->route('kelurahan.index')->with(['message'=>'Data Berhasil Dihapus']);
    }
}
