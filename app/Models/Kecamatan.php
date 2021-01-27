<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $fillable = ['kode_kecamatan','nama_kecamatan','id_kota'];

    protected $table = "kecamatans";

    public $timestamp = true;

    public function kelurahan(){
        return $this->hasMany(Kelurahan::class);
    }
    public function kota(){
        return $this->BelongsTo(Kota::class,'id_kota');
    }
}
