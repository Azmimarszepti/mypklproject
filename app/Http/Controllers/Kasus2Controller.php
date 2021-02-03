<?php

namespace App\Http\Controllers;

use App\Models\Kasus2;
use App\Models\Rw;
use Illuminate\Http\Request;

class Kasus2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kasuslokal = Kasus2::all();
        $rw = Rw::all();
        return view('kasuslokal.index', compact('kasuslokal','rw'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rw = Rw::all();
        return view('kasuslokal.create', compact('rw'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kasuslokal = new Kasus2;
        $kasuslokal->positif = $request->positif;
        $kasuslokal->sembuh = $request->sembuh;
        $kasuslokal->meninggal = $request->meninggal;
        $kasuslokal->tanggal = $request->tanggal;
        $kasuslokal->id_rw = $request->id_rw;
        $kasuslokal->save();
        return redirect()->route('kasuslokal.index')->with(['message'=>'Data Berhasil Dibuat']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kasus2  $kasus2
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rw = Rw::all();
        $kasuslokal = Kasus2::findOrFail($id);
        return view('kasuslokal.show', compact('kasuslokal', 'rw'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kasus2  $kasus2
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rw = Rw::all();
        $kasuslokal = Kasus2::findOrFail($id);
        return view('kasuslokal.edit', compact('kasuslokal', 'rw'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kasus2  $kasus2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $kasuslokal = Kasus2::findOrFail($id);
        $kasuslokal->positif = $request->positif;
        $kasuslokal->sembuh = $request->sembuh;
        $kasuslokal->meninggal = $request->meninggal;
        $kasuslokal->tanggal = $request->tanggal;
        $kasuslokal->id_rw = $request->id_rw;
        $kasuslokal->save();
        return redirect()->route('kasuslokal.index')->with(['message'=>'Data Berhasil Di Ubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kasus2  $kasus2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kasus2 $kasus2)
    {
        //
    }
}
