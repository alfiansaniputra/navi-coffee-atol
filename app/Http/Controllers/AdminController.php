<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
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
    public function index()
    {
        $akun = User::where('role','=','pelanggan')->count();
        $pembelian = Pembelian::all()->count();
        $kopi = Kopi::where('tampil','=','1')->count();
        $resep = Resep::where('tampil','=','1')->count();
        $bahan_baku = Bahan_baku::where('tampil','=','1')->count();
        $suplier = Suplier::where('tampil','=','1')->count();
         return view('admin.index',compact('akun','pembelian','kopi','resep','bahan_baku','suplier'));
    }
//data kopi
    public function kopi()
    {
         $kopi = Kopi::where('tampil','=','1')->get();
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
         $suplier = Suplier::where('tampil','=','1')->get();
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
        // $suplier ->delete();
        $suplier->tampil = '0';
        $suplier->save();
        return redirect('admin/suplier')->with('message','Data berhasil dihapus');
    }
//data Bahan Baku
    public function bahanbaku()
    {
         $bahanbaku = Bahan_baku::where('tampil','=','1')->get();
         $suplier = Suplier::where('tampil','=','1')->get();
         return view('bahanbaku.index',compact('bahanbaku','suplier'));
    }
    public function bahanbakucreate()
    {   
         $suplier = Suplier::where('tampil','=','1')->get();
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
      $suplier = Suplier::where('tampil','=','1')->get();
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
        // $bahanbaku ->delete();
        $bahanbaku->tampil = '0';
        $bahanbaku->save();
        return redirect('admin/bahanbaku')->with('message','Data berhasil dihapus');
    }
//data Resep
    public function resep()
    {
         $resep = Resep::where('tampil','=','1')->get();
         $kopi = Kopi::where('tampil','=','1')->get();
         $bahanbaku = Bahan_baku::where('tampil','=','1')->get();
         return view('resep.index',compact('resep','kopi','bahanbaku'));
    }
    public function resepcreate()
    {   
         $kopi = Kopi::where('tampil','=','1')->get();
         $bahanbaku = Bahan_baku::where('tampil','=','1')->get();
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
      $kopi = Kopi::where('tampil','=','1')->get();
      $bahanbaku = Bahan_baku::where('tampil','=','1')->get();
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
      $kopi = Kopi::where('tampil','=','1')->get();
      $bahanbaku = Bahan_baku::where('tampil','=','1')->get();
      return view('resep.detail',compact('resep','kopi','bahanbaku'));
    }
    public function resephapus($id)
    {
        $resep = Resep::find($id);
        // $resep ->delete();
        $resep->tampil = '0';
        $resep->save();
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
    public function pembelianedit($id)
    {
      $pembelian = Pembelian::find($id);
      $kopi = Kopi::where('tampil','=','1')->get();
      $bahanbaku = Bahan_baku::where('tampil','=','1')->get();
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
      $kopi = Kopi::where('tampil','=','1')->get();
      $bahanbaku = Bahan_baku::where('tampil','=','1')->get();
      return view('pembelian.detail',compact('pembelian','kopi','bahanbaku'));
    }
    public function pembelianhapus($id)
    {
        $pembelian = Pembelian::find($id);
        $pembelian ->delete();
        return redirect('admin/pembelian')->with('message','Data berhasil dihapus');
    }
//data akun
    public function akun()
        {
             $akun = User::all();
             return view('akun.index',['akun' => $akun]);
        }
    public function akundetail($id)
    {
      $akun = User::find($id);
      return view('akun.detail',compact('akun'));
    }
    public function akuncreate()
    {   
         return view('akun.tambah');
    }
    public function akunstore(Request $request)
    {
        $akun = new User;
        $akun->name = $request->name;
        $akun->email = $request->email;
        $akun->password = Hash::make($request->password);
        $akun->role = $request->role;
        $akun->no_hp = $request->no_hp;
        $akun->alamat = $request->alamat;
        $akun->provinsi = $request->provinsi;
        $akun->kabupaten = $request->kabupaten;
        $akun->kodepos = $request->kodepos;
        $akun->save();
        return redirect('admin/akun')->with(['message' => 'Data Akun Berhasil dibuat']);
    }
    public function akunedit($id)
    {   
      $akun = User::find($id);
      return view('akun.edit',compact('akun'));
    }

    public function akunupdate(Request $request, $id)
    {   
      $akun = User::find($id);
      $akun->name = $request->name;
      $akun->email = $request->email;
      // $akun->password = Hash::make($request->password);
      $akun->role = $request->role;
      $akun->no_hp = $request->no_hp;
      $akun->alamat = $request->alamat;
      $akun->provinsi = $request->provinsi;
      $akun->kabupaten = $request->kabupaten;
      $akun->kodepos = $request->kodepos;
      $akun->save();
      return redirect('admin/akun')->with(['message' => 'Data Akun Berhasil di edit']);
    }

    public function akunhapus(Request $request, $id)
    {   
      $pw = "navicoffee";
      $akun = User::find($id);
      $akun->password = Hash::make($pw);
      $akun->save();
      return redirect('admin/akun')->with(['message' => 'Data Password Berhasil di ubah, Password diubah menjadi "navicoffee" *tampa tanda petik']);
    }
    
    
    

}
