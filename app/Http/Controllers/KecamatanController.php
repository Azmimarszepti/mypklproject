<?php

namespace App\Http\Controllers;
use App\Models\Kecamatan;
use App\Models\Kota;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $kecamatan = Kecamatan::all();
        $kota = Kota::all();
        return view('kecamatan.index', compact('kecamatan','kota'));
    }

    public function create()
    {
        $kota = Kota::all();
        return view('kecamatan.create', compact('kota'));
    }

    public function store(Request $request)
    {

        $messages = [
            'required' => ':attribute wajib diisi cuy!!!',
            'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
        ];
        
        $this->validate($request,[
            'kode_kecamatan' => 'required|min:4|max:20',
            'nama_kecamatan' => 'required',
        ],$messages);

        $kecamatan = new Kecamatan;
        $kecamatan->kode_kecamatan = $request->kode_kecamatan;
        $kecamatan->nama_kecamatan = $request->nama_kecamatan;
        $kecamatan->id_kota = $request->id_kota;
        $kecamatan->save();
        return redirect()->route('kecamatan.index')->with(['message'=>'Data Berhasil Dibuat']);
    }

    public function show($id)
    {
        $kota = Kota::all();
        $kecamatan = Kecamatan::findOrFail($id);
        return view('kecamatan.show', compact('kecamatan', 'kota'));
    }

    public function edit($id)
    {
        $kota = Kota::all();
        $kecamatan = Kecamatan::findOrFail($id);
        return view('kecamatan.edit', compact('kecamatan', 'kota'));
    }

    public function update(Request $request, $id)
    {

        $messages = [
            'required' => ':attribute wajib diisi cuy!!!',
            'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
        ];
        
        $this->validate($request,[
            'kode_kecamatan' => 'required|min:4|max:20',
            'nama_kecamatan' => 'required',
        ],$messages);
        
        $kecamatan = Kecamatan::findOrFail($id);
        $kecamatan->kode_kecamatan = $request->kode_kecamatan;
        $kecamatan->nama_kecamatan = $request->nama_kecamatan;
        $kecamatan->id_kota = $request->id_kota;
        $kecamatan->save();
        return redirect()->route('kecamatan.index')->with(['message'=>'Data Berhasil Di Ubah']);
    }

    public function destroy($id)
    {
        $kecamatan = kecamatan::findOrFail($id)->delete();
        return redirect()->route('kecamatan.index')->with(['message'=>'Data Berhasil Dihapus']);
    }
}
