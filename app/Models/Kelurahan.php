<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    protected $fillable = ['kode_kelurahan','nama_kelurahan','id_kecamatan'];

    protected $table = "kelurahans";

    public $timestamp = true;

    public function rw(){
        return $this->hasMany(Rw::class);
    }
    public function kecamatan(){
        return $this->belongsTo(Kecamatan::class,'id_kecamatan');
    }
}
