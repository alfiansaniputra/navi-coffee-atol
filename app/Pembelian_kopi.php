<?php

namespace App;

use App\Pembelian_kopi;
use Illuminate\Database\Eloquent\Model;

class Pembelian_kopi extends Model
{
	protected $table = 'pembelian_kopi';

	//terima dari Pembelian
	public function Pembelian()
    {
      return $this->belongsTo('App\Pembelian', 'id_pembelian', 'id');
    }
	//terima dari Kopi
	public function Kopi()
    {
      return $this->belongsTo('App\Kopi', 'id_kopi', 'id');
    }

    // kirim var ke rekening
    // public function Rekening(){
    //   return $this->hasMany('App\Rekening');
    // }

}
