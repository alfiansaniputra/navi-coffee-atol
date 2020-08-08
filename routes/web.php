<?php


// Route::get('/', function () {
//     return view('welcome');
// });
//GUEST
Route::get('/', 'HomeController@index')->name('home');

Route::get('tentang', 'HomeController@tentang')->name('tentang');
Route::get('galeri', 'HomeController@galeri')->name('galeri');
Route::get('testimoni', 'HomeController@testimoni')->name('testimoni');
Route::get('artikel', 'HomeController@artikel')->name('artikel');
Route::get('detailartikel', 'HomeController@detailartikel')->name('detailartikel');
Route::get('kontak', 'HomeController@kontak')->name('kontak');
//eksperimen
Route::get('add-to-cart/{id}', 'HomeController@addToCart');
Route::patch('update-cart', 'HomeController@update');
Route::delete('remove-from-cart', 'HomeController@remove');
Route::get('cart', 'HomeController@cart');
Route::get('konfirmasi', 'HomeController@konfirmasi');
Route::post('checkout', 'HomeController@checkout');
Route::get('pembayaran', 'HomeController@pembayaran');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function() {
	Route::get('dashboard', 'AdminController@index')->name('index');
	//data kopi
	Route::get('kopi', 'AdminController@kopi')->name('kopi');
	Route::get('kopi/tambah', 'AdminController@kopicreate')->name('kopi-tambah');
	Route::post('kopi/tambah', 'AdminController@kopistore');
	Route::get('kopi/{id}/edit', 'AdminController@kopiedit')->name('kopi-edit');
	Route::put('kopi/{id}','AdminController@kopiupdate');
	Route::get('kopi/{id}', 'AdminController@kopidetail')->name('kopi-detail');
  	Route::get('kopi/{id}/delete','AdminController@kopihapus');
	//data suplier
	Route::get('suplier', 'AdminController@suplier');
	Route::get('suplier/tambah', 'AdminController@supliercreate')->name('suplier-tambah');
	Route::post('suplier/tambah', 'AdminController@suplierstore');
	Route::get('suplier/{id}/edit', 'AdminController@suplieredit')->name('suplier-edit');
	Route::put('suplier/{id}','AdminController@suplierupdate');
	Route::get('suplier/{id}', 'AdminController@suplierdetail')->name('suplier-detail');
  	Route::get('suplier/{id}/delete','AdminController@suplierhapus');
	//data bahan baku
	Route::get('bahanbaku', 'AdminController@bahanbaku');
	Route::get('bahanbaku/tambah', 'AdminController@bahanbakucreate')->name('bahanbaku-tambah');
	Route::post('bahanbaku/tambah', 'AdminController@bahanbakustore');
	Route::get('bahanbaku/{id}/edit', 'AdminController@bahanbakuedit')->name('bahanbaku-edit');
	Route::put('bahanbaku/{id}','AdminController@bahanbakuupdate');
	Route::get('bahanbaku/{id}', 'AdminController@bahanbakudetail')->name('bahanbaku-detail');
  	Route::get('bahanbaku/{id}/delete','AdminController@bahanbakuhapus');
	//data resep
	Route::get('resep', 'AdminController@resep');
	Route::get('resep/tambah', 'AdminController@resepcreate')->name('resep-tambah');
	Route::post('resep/tambah', 'AdminController@resepstore');
	Route::get('resep/{id}/edit', 'AdminController@resepedit')->name('resep-edit');
	Route::put('resep/{id}','AdminController@resepupdate');
	Route::get('resep/{id}', 'AdminController@resepdetail')->name('resep-detail');
  	Route::get('resep/{id}/delete','AdminController@resephapus');
	//data akun DIKESAMPINGKAN
	// Route::get('akun', 'AdminController@akun');
	// Route::get('akun/tambah', 'AdminController@akuncreate')->name('akun-tambah');
	// Route::post('akun/tambah', 'AdminController@akunstore');
	// Route::get('akun/{id}/edit', 'AdminController@akunedit')->name('akun-edit');
	// Route::put('akun/{id}','AdminController@akunupdate');
	// Route::get('akun/{id}', 'AdminController@akundetail')->name('akun-detail');
	//data pembelian
	Route::get('pembelian', 'AdminController@pembelian');
	Route::get('pembelian/tambah', 'AdminController@pembeliancreate')->name('pembelian-tambah');
	Route::post('pembelian/tambah', 'AdminController@pembelianstore');
	Route::get('pembelian/{id}/edit', 'AdminController@pembelianedit')->name('pembelian-edit');
	Route::put('pembelian/{id}','AdminController@pembelianupdate');
	Route::get('pembelian/{id}', 'AdminController@pembeliandetail')->name('pembelian-detail');
  	Route::get('pembelian/{id}/delete','AdminController@pembelianhapus');
	Route::get('pembayaran', 'AdminController@kopi')->name('pembayaran');
	// Route::get('akun', 'AdminController@kopi')->name('akun');
	// Route::get('pembelian', 'AdminController@kopi')->name('pembelian');
});


Route::get('/kategori', 'AdminController@kategori')->name('kategori');
Route::get('/storage', 'AdminController@storage')->name('storage');
Route::get('/warna', 'AdminController@warna')->name('warna');


// Route::get('dashboard', 'AdminController@index');
//untuk pelanggan 
Route::get('pembeli', 'AdminController@pembeli');
Route::get('pembeli/tambah', 'AdminController@create');
Route::post('pembeli/tambah', 'AdminController@store');



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//api provinsi
Route::group(['prefix' => 'api', 'middleware' => ['web', 'auth']], function(){
    Route::get('/provinces', 'ProvinceController@province')->name('province');
    Route::get('/provinces/{provinceId}/districts', 'ProvinceController@district')->name('district');

    Route::get('/klasifikasi', 'AnggotaController@klasifikasiList')->name('klasifikasi-list');
    Route::get('/klasifikasi/{klasifikasiId}/sub-klasifikasi', 'AnggotaController@subKlasifikasiList')->name('sub-klasifikasi-list');
});

// kopi
// bahan-baku
// suplier
// resep
// pembayaran
// kopi
// akun
// pembelian