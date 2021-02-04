<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\DB;
use App\Models\Provinsi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function index()
    {
        $provinsi = Provinsi::latest()->get();
        $rest = [
            'success' => true,
            'data' => $provinsi,
            'message' => 'Data Provinsi Ditampilkan'
        ];

        return response()->json($rest,200);
    }

    public function create()
    {
        //
    }
   
    public function store(Request $request)
    {
        $provinsi = new Provinsi();
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();

        $rest = [
            'success' => true,
            'data' => $provinsi,
            'message' => 'Data Berhasil Ditambah'
        ];

        return response()->json($rest,200);
    }

    public function indonesia()
    {
        $provinsi = Provinsi::latest()->get();
        $var = DB::table('provinsis')
            ->join('kotas', 'kotas.id_provinsi', '=', 'provinsis.id')
            ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
            ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
            ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
            ->join('kasus2s', 'kasus2s.id_rw', 'rws.id')
            ->select('kode_provinsi','nama_provinsi',
                DB::raw('sum(kasus2s.positif) as Positif'),
                DB::raw('sum(kasus2s.sembuh) as sembuh'),
                DB::raw('sum(kasus2s.meninggal) as meninggal'),
            )
            ->groupBy('kode_provinsi','nama_provinsi')
            ->get();

        $data = [
            'status' => true,
            'message' => 'Menampilkan Provinsi',
            'data' => $var,
        ];
        
        return response()->json($data, 200);
    }

    public function show($id)
    {
        $provinsi = Provinsi::whereId($id)->first();

        if ($provinsi) {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil',
                'data'    => $provinsi
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Provinsi Tidak Ditemukan!',
                'data'    => ''
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        $provinsi->delete();

        if ($provinsi) {
            return response()->json([
                'success' => true,
                'message' => 'Provinsi Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Provinsi Gagal Dihapus!',
            ], 500);
        }
    }
}
