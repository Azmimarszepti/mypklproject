<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;

    protected $fillable = ['kode_kota','nama_kota','id_provinsi'];

    protected $table = "kotas";

    public $timestamp = true;

    public function kecamatan(){
        return $this->hasMany(Kecamatan::class);
    }
    public function provinsi(){
        return $this->BelongsTo(Provinsi::class,'id_provinsi');
    }
}
