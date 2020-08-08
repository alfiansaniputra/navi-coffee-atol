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
//START DUMMY START DUMMY START DUMMY START DUMMY START DUMMY START DUMMYSTART DUMMY START DUMMY START DUMMYSTART DUMMY START DUMMY 
    public function cart()
    {
        return view('cart');
    }
    public function konfirmasi()
    {
        return view('konfirmasi');
    }
    public function addToCart($id)
    {
        $kopi = Kopi::find($id);
        if(!$kopi) {
            abort(404);
        }
        $cart = session()->get('cart');
        // if cart is empty then this the first kopi
        if(!$cart) {
            $cart = [
                $id => [
                    "id_kopi" => $kopi->id,
                    "name" => $kopi->nama_kopi,
                    "quantity" => 1,
                    "harga" => $kopi->harga
                        // "photo" => $kopi->photo
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('message', 'kopi added to cart successfully!');
        }
        // if cart not empty then check if this kopi exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('message', 'kopi added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "id_kopi" => $kopi->id,
            "name" => $kopi->nama_kopi,
            "quantity" => 1,
            "harga" => $kopi->harga
            // "photo" => $kopi->photo
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('message', 'kopi Berhasil Dimasukan ke keranjang!');
    }
    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('message', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('message', 'Product removed successfully');
        }
    }
    public function checkout(Request $request)
    {
        //hitung total harga
        $total = 0;
        foreach (session('cart') as $id => $details) {

            $total += $details['harga'] * $details['quantity'];
        }

        $pembelian = new Pembelian;
        //total harga
        $pembelian->total_harga = $total;
        $pembelian->id_users = auth()->user()->id;
        $pembelian->no_pengiriman = '0';
        $pembelian->fix_order = '0';
        $pembelian->save();
        $getid_pembelian = $pembelian->id;
        //create record pembayaran
        $pembayaran = new Pembayaran;
        //total harga
        $pembayaran->total_harga = $total;
        $pembayaran->id_users = auth()->user()->id;
        $pembayaran->no_pengiriman = '0';
        $pembayaran->fix_order = '0';
        $pembayaran->save();
        //create record pembelian_kopi
        // dd(session('cart'));
        $dataSet = [];
        foreach (session('cart') as $id => $details) {
            $dataSet[] = [
                'id_pembelian'       => $getid_pembelian,
                'id_kopi'  => $details['id_kopi'],
        // 'nama_kopi'  => $details['name'],
                'jumlah'       => $details['quantity'],
                'harga_satuan'    => $details['harga'],
                'sub_total_harga' => $details['quantity']*$details['harga']
            ];
        }
// dd($dataSet);
// echo $dataSet;

        DB::table('pembelian_kopi')->insert($dataSet);
session()->forget('cart');

        return redirect('pembayaran')->with(['message' => 'Pembelian Berhasil Dilakukan Berhasil dibuat']);
    }
    public function storecheckout()
    {
        return view('checkout');
    }
//START DUMMY START DUMMY START DUMMY START DUMMY START DUMMY START DUMMYSTART DUMMY START DUMMY START DUMMYSTART DUMMY START DUMMY 

    public function pembayaran()
    {
        return view('pembayaran');
    }



}
