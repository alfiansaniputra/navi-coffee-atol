<?php

namespace App;

use App\Pembelian;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
	protected $table = 'pembelian';

	//terima dari Users
	   public function Users()
    {
      return $this->belongsTo('App\Users', 'id_users', 'id');
    }
    //kirim var ke Pembelian_kopi
    public function Pembelian_kopi(){
      return $this->hasMany('App\Pembelian_kopi');
    }
    //kirim var ke Pembayaran
    public function Pembayaran(){
      return $this->hasMany('App\Pembayaran');
    }
}
