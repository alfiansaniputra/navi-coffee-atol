<?php

namespace App;

use App\Users;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
	protected $table = 'users';

    // kirim var ke Pembelian
    public function Pembelian(){
      return $this->hasMany('App\Pembelian');
    }

}
