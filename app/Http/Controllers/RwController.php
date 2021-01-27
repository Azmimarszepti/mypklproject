<?php

namespace App\Http\Controllers;
use App\Models\Rw;
use App\Models\Kelurahan;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class RwController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $rw = Rw::all();
        $kelurahan = Kelurahan::all();
        return view('rw.index', compact('rw','kelurahan'));
    }

    public function create()
    {
        $kelurahan = Kelurahan::all();
        return view('rw.create', compact('kelurahan'));
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi cuy!!!',
            'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
        ];
        
        $this->validate($request,[
            'nama_rw' => 'required',
        ],$messages);

        $rw = new Rw;
        $rw->nama_rw = $request->nama_rw;
        $rw->id_kelurahan = $request->id_kelurahan;
        $rw->save();
        return redirect()->route('rw.index')->with(['message'=>'Data Berhasil Dibuat']);
    }

    public function show($id)
    {
        $kelurahan = Kelurahan::all();
        $rw = Rw::findOrFail($id);
        return view('rw.show', compact('rw', 'kelurahan'));
    }

    public function edit($id)
    {
        $kelurahan = Kelurahan::all();
        $rw = Rw::findOrFail($id);
        return view('rw.edit', compact('rw', 'kelurahan'));
    }

    public function update(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute wajib diisi cuy!!!',
            'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
        ];
        
        $this->validate($request,[
            'nama_rw' => 'required',
        ],$messages);

        $rw = Rw::findOrFail($id);
        $rw->nama_rw = $request->nama_rw;
        $rw->id_kelurahan = $request->id_kelurahan;
        $rw->save();
        return redirect()->route('rw.index')->with(['message'=>'Data Berhasil Di Ubah']);
    }

    public function destroy($id)
    {
        $rw = Rw::findOrFail($id)->delete();
        return redirect()->route('rw.index')->with(['message'=>'Data Berhasil Dihapus']);
    }
}
