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

class AdminController extends Controller
{

    public function pembeli()
    {
         $pembeli = User::all();
         return view('pembeli.index',['pembeli' => $pembeli]);
    }
    //
    public function index()
    {
         return view('admin.index');
    }

    public function create()
    {
        return view('pembeli.tambah');
    }

    public function store(Request $request)
    {
        $pembeli = new User;
        $pembeli->name = $request->name;
        $pembeli->email = $request->email;
        $pembeli->password = $request->password;
        $pembeli->save();
        return redirect('pembeli')->with(['message' => 'Data Pelanggan Berhasil dibuat']);
    }
//data kopi
    public function kopi()
    {
         $kopi = Kopi::all();
        // $kategori=Kategori::all();
        // $storage=Storage::all();
        // $warna=Warna::all();
         // return view('kopi.index',['kopi' => $kopi]);
         return view('kopi.index',compact('kopi'));
    }
    public function kopicreate()
    {   
         return view('kopi.tambah');
    }
    public function kopistore(Request $request)
    {
        $kopi = new Kopi;
        $kopi->nama_kopi = $request->nama_kopi;
        $kopi->jenis_kopi = $request->jenis_kopi;
        $kopi->harga = $request->harga;
        $kopi->save();
        return redirect('admin/kopi')->with(['message' => 'Data kopi Berhasil dibuat']);
    }
    // edit
    public function kopiedit($id)
    {
      $kopi = Kopi::find($id);
      return view('kopi.edit',compact('kopi'));
    }
    // update
    public function kopiupdate(Request $request, $id)
    {
      $kopi = Kopi::find($id);
      $kopi->nama_kopi = $request->nama_kopi;
      $kopi->jenis_kopi = $request->jenis_kopi;
      $kopi->harga = $request->harga;
      $kopi->save();
      return redirect('admin/kopi')->with(['message' => 'Data kopi Berhasil di edit']);
    }
    public function kopidetail($id)
    {
      $kopi = Kopi::find($id);
      return view('kopi.detail',compact('kopi'));
    }
    public function kopihapus($id)
    {
        $kopi = Kopi::find($id);
        $kopi ->delete();
        return redirect('admin/kopi')->with('message','Data berhasil dihapus');
    }
//data suplier
    public function suplier()
    {
         $suplier = Suplier::all();
         return view('suplier.index',compact('suplier'));
    }
    public function supliercreate()
    {   
         return view('suplier.tambah');
    }
    public function suplierstore(Request $request)
    {
        $suplier = new suplier;
        $suplier->nama_perusahaan = $request->nama_perusahaan;
        $suplier->alamat = $request->alamat;
        $suplier->provinsi = $request->provinsi;
        $suplier->kota = $request->kota;
        $suplier->no_hp = $request->no_hp;
        $suplier->save();
        return redirect('admin/suplier')->with(['message' => 'Data suplier Berhasil dibuat']);
    }
    public function suplieredit($id)
    {
      $suplier = Suplier::find($id);
      return view('suplier.edit',compact('suplier'));
    }
    public function suplierupdate(Request $request, $id)
    {
      $suplier = Suplier::find($id);
        $suplier->nama_perusahaan = $request->nama_perusahaan;
        $suplier->alamat = $request->alamat;
        $suplier->provinsi = $request->provinsi;
        $suplier->kota = $request->kota;
        $suplier->no_hp = $request->no_hp;
      $suplier->save();
      return redirect('admin/suplier')->with(['message' => 'Data suplier Berhasil di edit']);
    }
    public function suplierdetail($id)
    {
      $suplier = Suplier::find($id);
      return view('suplier.detail',compact('suplier'));
    }
    public function suplierhapus($id)
    {
        $suplier = Suplier::find($id);
        $suplier ->delete();
        return redirect('admin/suplier')->with('message','Data berhasil dihapus');
    }
//data Bahan Baku
    public function bahanbaku()
    {
         $bahanbaku = Bahan_baku::all();
         $suplier = Suplier::all();
         return view('bahanbaku.index',compact('bahanbaku','suplier'));
    }
    public function bahanbakucreate()
    {   
         $suplier = Suplier::all();
         return view('bahanbaku.tambah',compact('suplier'));
    }
    public function bahanbakustore(Request $request)
    {
        $bahanbaku = new Bahan_baku;
        $bahanbaku->nama_bahan_baku = $request->nama_bahan_baku;
        $bahanbaku->jenis_bahan_baku = $request->jenis_bahan_baku;
        $bahanbaku->stok = $request->stok;
        $bahanbaku->id_suplier = $request->id_suplier;
        $bahanbaku->save();
        return redirect('admin/bahanbaku')->with(['message' => 'Data bahan baku Berhasil dibuat']);
    }
    public function bahanbakuedit($id)
    {
      $bahanbaku = Bahan_baku::find($id);
      $suplier = Suplier::all();
      return view('bahanbaku.edit',compact('bahanbaku','suplier'));
    }
    public function bahanbakuupdate(Request $request, $id)
    {
      $bahanbaku = Bahan_baku::find($id);
        $bahanbaku->nama_bahan_baku = $request->nama_bahan_baku;
        $bahanbaku->jenis_bahan_baku = $request->jenis_bahan_baku;
        $bahanbaku->stok = $request->stok;
        $bahanbaku->id_suplier = $request->id_suplier;
      $bahanbaku->save();
      return redirect('admin/bahanbaku')->with(['message' => 'Data bahan baku Berhasil di edit']);
    }
    public function bahanbakudetail($id)
    {
      $bahanbaku = Bahan_baku::find($id);
      return view('bahanbaku.detail',compact('bahanbaku'));
    }
    public function bahanbakuhapus($id)
    {
        $bahanbaku = Bahan_baku::find($id);
        $bahanbaku ->delete();
        return redirect('admin/bahanbaku')->with('message','Data berhasil dihapus');
    }
//data Resep
    public function resep()
    {
         $resep = Resep::all();
         $kopi = Kopi::all();
         $bahanbaku = Bahan_baku::all();
         return view('resep.index',compact('resep','kopi','bahanbaku'));
    }
    public function resepcreate()
    {   
         $kopi = Kopi::all();
         $bahanbaku = Bahan_baku::all();
         return view('resep.tambah',compact('kopi','bahanbaku'));
    }
    public function resepstore(Request $request)
    {
        $resep = new Resep;
        $resep->id_kopi = $request->id_kopi;
        $resep->id_bahan_baku = $request->id_bahan_baku;
        $resep->qty = $request->qty;
        $resep->save();
        return redirect('admin/resep')->with(['message' => 'Data Resep Berhasil dibuat']);
    }
    public function resepedit($id)
    {
      $resep = Resep::find($id);
      $kopi = Kopi::all();
      $bahanbaku = Bahan_baku::all();
      return view('resep.edit',compact('resep','kopi','bahanbaku'));
    }
    public function resepupdate(Request $request, $id)
    {
      $resep = Resep::find($id);
        $resep->id_kopi = $request->id_kopi;
        $resep->id_bahan_baku = $request->id_bahan_baku;
        $resep->qty = $request->qty;
      $resep->save();
      return redirect('admin/resep')->with(['message' => 'Data Resep Berhasil di edit']);
    }
    public function resepdetail($id)
    {
      $resep = Resep::find($id);
      $kopi = Kopi::all();
      $bahanbaku = Bahan_baku::all();
      return view('resep.detail',compact('resep','kopi','bahanbaku'));
    }
    public function resephapus($id)
    {
        $resep = Resep::find($id);
        $resep ->delete();
        return redirect('admin/resep')->with('message','Data berhasil dihapus');
    }
//data pembelian
    public function pembelian()
    {
         $pembelian = Pembelian::all();
         $users = User::all();
         $pembelian_kopi = Pembelian_kopi::all();
         $pembayaran = Pembayaran::all();
         return view('pembelian.index',compact('pembelian','users','pembelian_kopi','pembayaran'));
    }
    // public function pembeliancreate()
    // {   
    //      $kopi = Kopi::all();
    //      $bahanbaku = Bahan_baku::all();
    //      return view('pembelian.tambah',compact('kopi','bahanbaku'));
    // }
    // public function pembelianstore(Request $request)
    // {
    //     $pembelian = new pembelian;
    //     $pembelian->id_kopi = $request->id_kopi;
    //     $pembelian->id_bahan_baku = $request->id_bahan_baku;
    //     $pembelian->qty = $request->qty;
    //     $pembelian->save();
    //     return redirect('admin/pembelian')->with(['message' => 'Data pembelian Berhasil dibuat']);
    // }
    public function pembelianedit($id)
    {
      $pembelian = Pembelian::find($id);
      $kopi = Kopi::all();
      $bahanbaku = Bahan_baku::all();
      return view('pembelian.edit',compact('pembelian','kopi','bahanbaku'));
    }
    public function pembelianupdate(Request $request, $id)
    {
      $pembelian = Pembelian::find($id);
        $pembelian->id_kopi = $request->id_kopi;
        $pembelian->id_bahan_baku = $request->id_bahan_baku;
        $pembelian->qty = $request->qty;
      $pembelian->save();
      return redirect('admin/pembelian')->with(['message' => 'Data pembelian Berhasil di edit']);
    }
    public function pembeliandetail($id)
    {
      $pembelian = Pembelian::find($id);
      $kopi = Kopi::all();
      $bahanbaku = Bahan_baku::all();
      return view('pembelian.detail',compact('pembelian','kopi','bahanbaku'));
    }
    public function pembelianhapus($id)
    {
        $pembelian = Pembelian::find($id);
        $pembelian ->delete();
        return redirect('admin/pembelian')->with('message','Data berhasil dihapus');
    }




    public function kategori()
    {
         $kategori = Kategori::all();
         return view('kategori.index',['kategori' => $kategori]);
    }
    public function storage()
    {
         $storage = Storage::all();
         return view('storage.index',['storage' => $storage]);
    }
    public function warna()
    {
         $warna = Warna::all();
         return view('warna.index',['warna' => $warna]);
    }
    

}
