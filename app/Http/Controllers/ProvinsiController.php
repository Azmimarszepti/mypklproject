<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $provinsi = Provinsi::all();
        return view('provinsi.index', compact('provinsi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('provinsi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi cuy!!!',
            'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
        ];
        
        $this->validate($request,[
            'kode_provinsi' => 'required|min:4|max:20',
            'nama_provinsi' => 'required',
        ],$messages);

        $provinsi = new Provinsi;
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();
        return redirect()->route('provinsi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $provinsi = provinsi::findOrFail($id);
        return view('provinsi.show',compact('provinsi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provinsi = provinsi::findOrFail($id);
        return view('provinsi.edit',compact('provinsi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $messages = [
            'required' => ':attribute wajib diisi cuy!!!',
            'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
        ];
        
        $this->validate($request,[
            'kode_provinsi' => 'required|min:4|max:20',
            'nama_provinsi' => 'required',
        ],$messages);

        $provinsi = Provinsi::findOrFail($id);
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();
        return redirect()->route('provinsi.index')->with(['message'=>'Data Berhasil Di Ubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provinsi = Provinsi::findOrFail($id)->delete();
        return redirect()->route('provinsi.index')->with(['message'=>'provinsi berhasil dihapus']);
    }
}
