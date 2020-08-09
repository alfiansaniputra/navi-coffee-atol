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
class PelangganController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

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
			return redirect()->back()->with('message', 'kopi Berhasil Dimasukan ke keranjang!');
		}
        // if cart not empty then check if this kopi exist then increment quantity
		if(isset($cart[$id])) {
			$cart[$id]['quantity']++;
			session()->put('cart', $cart);
			return redirect()->back()->with('message', 'kopi Berhasil Dimasukan ke keranjang!');
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

			session()->flash('message', 'Keranjang Berhasil di Update!');
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

			session()->flash('message', 'kopi Berhasil dihapus!');
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
		$pembayaran->metode_pembayaran = $request->metode_pembayaran;
		$pembayaran->kode_bayar = Str::random(10);
		$pembayaran->id_pembelian = $getid_pembelian;
		$pembayaran->status = '0';
		$pembayaran->total_harga = $total;
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

		DB::table('pembelian_kopi')->insert($dataSet);
		session()->forget('cart');

		return redirect('pembayaran/'.$pembayaran->id)->with(['message' => 'Pembelian Berhasil Dilakukan!']);
	}
	public function storecheckout()
	{
		return view('checkout');
	}
	public function pembayaran($id)
	{
		$findpembayaran = Pembayaran::find($id);
		return view('pembayaran',compact('findpembayaran'));

	}
	public function pembayaranupdate(Request $request, $id)
	{
		$pembayaran = Pembayaran::find($id);
		$pembayaran->status = '1';
		$pembayaran->tgl_bayar = date('Y-m-d');
		$pembayaran->save();
		return redirect('profil')->with(['message' => 'Pembayaran Berhasil Dilakukan']); // harusnya ke halaman tracking
	}
	public function profil()
	{
		return view('profil');
	}
	public function transaksi()
	{

        $pembelian = Pembelian::where('id_users','=',auth()->user()->id)->get();
        $pembelian_kopi = Pembelian_kopi::all();
        // $pembelian = Pembelian::where(function($q){
        //     $q->where('id_users', '=', auth()->user()->id);
        // })->first();
        // dd($pembelian);
         return view('transaksi',compact('pembelian','pembelian_kopi'));
	}
	public function riwayattransaksi()
	{

		return view('riwayattransaksi');
	}



}
