<?php

namespace App;

use App\Bahan_baku;
use Illuminate\Database\Eloquent\Model;

class Bahan_baku extends Model
{
	protected $table = 'bahan_baku';


    //kirim var ke resep
    public function Resep(){
      return $this->hasMany('App\Resep');
    }
    // //terima dari suplier
	   public function Suplier()
    {
      return $this->belongsTo('App\Suplier', 'id_suplier', 'id');
    }

}
