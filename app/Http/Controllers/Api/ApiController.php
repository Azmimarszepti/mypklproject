<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kasus2;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;

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
       $var = DB::table('provinsis')
            ->join('kotas', 'kotas.id_provinsi', '=', 'provinsis.id')
            ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
            ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
            ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
            ->join('kasus2s', 'kasus2s.id_rw', 'rws.id')
            ->select('nama_provinsi',
                DB::raw('sum(kasus2s.positif) as Positif'),
                DB::raw('sum(kasus2s.sembuh) as sembuh'),
                DB::raw('sum(kasus2s.meninggal) as meninggal'),
            )
            ->groupBy('nama_provinsi')
            ->get();

        $data = [
            'status' => true,
            'message' => 'Menampilkan Provinsi',
            'data' => $var,
        ];
        
        return response()->json($data, 200);
    }

    public function dkota()
    {
        $kota = Kota::latest()->get();
        $var = DB::table('kotas')
            ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
            ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
            ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
            ->join('kasus2s', 'kasus2s.id_rw', 'rws.id')
            ->select('nama_kota',
                DB::raw('sum(kasus2s.positif) as Positif'),
                DB::raw('sum(kasus2s.sembuh) as sembuh'),
                DB::raw('sum(kasus2s.meninggal) as meninggal'),
            )
            ->groupBy('nama_kota')
            ->get();

        $data = [
            'status' => true,
            'message' => 'Menampilkan Kota',
            'data' => $var,
        ];
        
        return response()->json($data, 200);
    }

    public function dkecamatan()
    {
        $kec = Kecamatan::latest()->get();
        $dt = DB::table('kecamatans')
            ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
            ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
            ->join('kasus2s', 'kasus2s.id_rw', 'rws.id')
            ->select('nama_kecamatan',
                DB::raw('sum(kasus2s.positif) as Positif'),
                DB::raw('sum(kasus2s.sembuh) as sembuh'),
                DB::raw('sum(kasus2s.meninggal) as meninggal'),
            )
            ->groupBy('nama_kecamatan')
            ->get();

        $data = [
            'status' => true,
            'message' => 'Menampilkan Kecamatan',
            'data' => $dt,
        ];
        
        return response()->json($data, 200);
    }

    public function dkelurahan()
    {
        $kec = Kelurahan::latest()->get();
        $dt = DB::table('kelurahans')
            ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
            ->join('kasus2s', 'kasus2s.id_rw', 'rws.id')
            ->select('nama_kelurahan',
                DB::raw('sum(kasus2s.positif) as Positif'),
                DB::raw('sum(kasus2s.sembuh) as sembuh'),
                DB::raw('sum(kasus2s.meninggal) as meninggal'),
            )
            ->groupBy('nama_kelurahan')
            ->get();

        $data = [
            'status' => true,
            'message' => 'Menampilkan Kelurahan',
            'data' => $dt,
        ];
        
        return response()->json($data, 200);
    }

    public function global(){
        $url = Http::get('https://api.kawalcorona.com/')->json();
        $res = [
            'success' => true,
            'data' => $url,
            'message' => 'Menampilkan Global'
        ];
        return response()->json($res, 200);
    }
}
