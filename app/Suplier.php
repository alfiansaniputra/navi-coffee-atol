<?php

namespace App;

use App\Suplier;
use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
	protected $table = 'suplier';


    // kirim var ke Bahan_baku
    public function Bahan_baku(){
      return $this->hasMany('App\Bahan_baku');
    }

}
