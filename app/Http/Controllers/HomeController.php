<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembelian_kopi;
use App\Kopi;
use App\Pembelian;
use App\Pembayaran;
use App\Suplier;
use App\Resep;
use App\Bahan_baku;
use App\Users;
use App\User;
use DB;
use Illuminate\Support\Str;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kopi = Kopi::all();
        // return view('home');
        return view('utama',compact('kopi'));
    }


    public function tentang()
    {
        return view('tentang');
    }
    public function galeri()
    {
        return view('galeri');
    }
    public function testimoni()
    {
        return view('testimoni');
    }
    public function artikel()
    {
        return view('artikel');
    }
    public function detailartikel()
    {
        return view('detailartikel');
    }
    public function kontak()
    {
        return view('kontak');
    }


}