<?php

namespace App\Http\Livewire;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Rw;

use Livewire\Component;

class Statecity extends Component
{
    public $provinsi;
    public $kota;
    public $kecamatan;
    public $kelurahan;
    public $rw;

    public $selectedState = NULL;
    public $selectedKota = NULL;
    public $selectedKecamatan = NULL;
    public $selectedKelurahan = NULL;
    public $selectedRw = NULL;

    public $rw_id;

    public function mount($rw_id = Null)
    {
        $this->provinsi = Provinsi::all();
        $this->kota = collect();
        $this->kecamatan = collect();
        $this->kelurahan = collect();
        $this->rw = collect();

        if(!is_null($rw_id)){
            $rw = Rw::with('kelurahan.kecamatan.kota.provinsi')->find($rw_id);

            if($rw_id){
                $this->rw = Rw::where('id_kelurahan', $rw->id_kelurahan)->get();
                $this->kelurahan = Kelurahan::where('id_kecamatan', $rw->kelurahan->id_kecamatan)->get();
                $this->kecamatan = Kecamatan::where('id_kota', $rw->kecamatan->id_kota)->get();
                $this->kota = Kota::where('id_provinsi', $rw->kota->id_provinsi)->get();

                $this->selectedProvinsi = $rw->kelurahan->kecamatan->kota->id_provinsi;
                $this->selectedKota = $rw->kelurahan->kecamatan->id_kota;
                $this->selectedKecamatan = $rw->kelurahan->id_kecamatan;
                $this->selectedKelurahan = $rw->id_kelurahan;
                
            }
        }
    }

    public function render()
    {
        return view('livewire.statecity');
    }

    public function updatedSelectedState($provinsi)
    {
        if (!is_null($provinsi)) {
            $this->kota = Kota::where('id_provinsi', $provinsi)->get();
        }
    }

   
    public function updatedSelectedKota($kota)
    {
        $this->kecamatan = Kecamatan::where('id_kota', $kota)->get();
        $this->selectedKecamatan = NULL;
        $this->selectedKelurahan = NULL;
        $this->selectedRw = NULL;
    }
    public function updatedSelectedKecamatan($kecamatan)
    {
        $this->kelurahan = Kelurahan::where('id_kecamatan', $kecamatan)->get();
        $this->selectedKelurahan = NULL;
        $this->selectedRw = NULL;
    }
    public function updatedSelectedKelurahan($kelurahan)
    {
        $this->rw = Rw::where('id_kelurahan', $kelurahan)->get();
        $this->selectedRw = NULL;
    }

    
}
