<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasus2 extends Model
{
    use HasFactory;

    protected $fillable = ['id_rw','positif','sembuh','meningal','tanggal'];

    protected $table = "kasus2s";

    public $timestamp = true;

    public function rw(){
        return $this->belongsTo(Rw::class,'id_rw');
    }
}
