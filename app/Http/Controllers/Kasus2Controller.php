<?php

namespace App\Http\Controllers;

use App\Models\Kasus2;
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
        return view('kasuslokal.index', compact('kasuslokal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kasuslokal = Kasus2::all();
        return view('kasuslokal.create', compact('kasuslokal'));
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
    public function show(Kasus2 $kasus2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kasus2  $kasus2
     * @return \Illuminate\Http\Response
     */
    public function edit(Kasus2 $kasus2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kasus2  $kasus2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kasus2 $kasus2)
    {
        //
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
