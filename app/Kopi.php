<?php

namespace App;

use App\Kopi;
use Illuminate\Database\Eloquent\Model;

class Kopi extends Model
{
	protected $table = 'kopi';

    // kirim var ke Resep
    public function Resep(){
      return $this->hasMany('App\Resep');
    }
    // kirim var ke Pembelian_kopi
    public function Pembelian_kopi(){
      return $this->hasMany('App\Pembelian_kopi');
    }

}
