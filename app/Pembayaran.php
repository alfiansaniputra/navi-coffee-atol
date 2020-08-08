<?php

namespace App;


use App\Pembayaran;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
	protected $table = 'pembayaran';
	   
     //terima dari Pembelian
     public function Pembelian()
    {
      return $this->belongsTo('App\Pembelian', 'pembelian_id', 'id');
    }
}
