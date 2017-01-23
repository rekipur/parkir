<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masuk extends Model
{
    //
    protected $fillable = ['jenis','kode_parkir','keterangan','petugas_input'];

    public function jenis(){
    	return $this->belongsTo('App\Jenis_kendaraan', 'jenis');
    }
}