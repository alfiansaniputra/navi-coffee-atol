<?php

namespace App;

use App\Resep;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
	protected $table = 'resep';


    // kirim var ke pembayaran
    // public function Pembayaran(){
    //   return $this->hasMany('App\Pembayaran');
    // }

    // //terima dari Bahan_baku
	   public function Bahan_baku()
    {
      return $this->belongsTo('App\Bahan_baku', 'id_bahan_baku', 'id');
    }
    // terima dari Kopi
       public function Kopi()
    {
      return $this->belongsTo('App\Kopi', 'id_kopi', 'id');
    }

}
