<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kasus2;

class ApiController extends Controller
{
    public function index()
    {

        $positif = DB::table('rws')
                ->select('kasus2s.positif','kasus2s.sembuh','kasus2s.meninggal')
                ->join('kasus2s','rws.id','=','kasus2s.id_rw')
                ->sum('kasus2s.positif');
        $sembuh = DB::table('rws')
                ->select('kasus2s.positif','kasus2s.sembuh','kasus2s.meninggal')
                ->join('kasus2s','rws.id','=','kasus2s.id_rw')
                ->sum('kasus2s.sembuh');
        $meninggal = DB::table('rws')
                ->select('kasus2s.positif','kasus2s.sembuh','kasus2s.meninggal')
                ->join('kasus2s','rws.id','=','kasus2s.id_rw')
                ->sum('kasus2s.meninggal');

        $rest = [
            'success' => true,
            'data' =>'Data Kasus Indonesia',
            'Jumlah Positif' => $positif,
            'Jumlah Sembuh' => $sembuh,
            'Jumlah Meninggal' => $meninggal,
            'message' => 'Data Kasus Ditampilkan'
        ];
        return response()->json($rest,200);
        
    }

    public function provinsi($id)
    {
        $positif = DB::table('provinsis')
                    ->join('kotas','kotas.id_provinsi','=','provinsis.id')
                    ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
                    ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                    ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                    ->join('kasus2s','kasus2s.id_rw','=','rws.id')
                    ->select('kasus2s.positif')
                    ->where('provinsis.id',$id)
                    ->sum('kasus2s.positif');

        $sembuh = DB::table('provinsis')
                    ->join('kotas','kotas.id_provinsi','=','provinsis.id')
                    ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
                    ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                    ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                    ->join('kasus2s','kasus2s.id_rw','=','rws.id')
                    ->select('kasus2s.positif')
                    ->where('provinsis.id',$id)
                    ->sum('kasus2s.sembuh');

        $meninggal = DB::table('provinsis')
                    ->join('kotas','kotas.id_provinsi','=','provinsis.id')
                    ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
                    ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                    ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                    ->join('kasus2s','kasus2s.id_rw','=','rws.id')
                    ->select('kasus2s.positif')
                    ->where('provinsis.id',$id)
                    ->sum('kasus2s.meninggal');

                    $data = [
                        'Data' => 'Data Kasus Berdasarkan Provinsi',
                        'Provinsi' => '',
                        'Jumlah Positif' => $positif,
                        'Jumlah Sembuh' => $sembuh,
                        'Jumlah Meninggal' => $meninggal,
                        'message' => 'Data Kasus Ditampilkan'
                    ];

                    return response()->json($data,200);
    }

    public function nampilkeun($id)
    {
        $tampil = DB::table('provinsis')
                    ->join('kotas','kotas.id_provinsi','=','provinsis.id')
                    ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
                    ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                    ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                    ->join('kasus2s','kasus2s.id_rw','=','rws.id')
                    ->where('provinsis.id',$id)
                    ->select('provinsi',
                                DB::raw('sum(kasus2s.positif) as positif'),
                                DB::raw('sum(kasus2s.sembuh) as sembuh'),
                                DB::raw('sum(kasus2s.meninggal) as meninggal'))
                    ->groupBy('provinsi')
                    ->get();

                    $data = [
                        'Data' => 'Data Kasus Berdasarkan Provinsi',
                        'Provinsi' => $tampil,
                        'Jumlah Positif' => '',
                        'Jumlah Sembuh' => '',
                        'Jumlah Meninggal' => '',
                        'message' => 'Data Kasus Ditampilkan'
                    ];

                    return response()->json($data,200);
    }
    
}
