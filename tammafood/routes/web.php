
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return redirect('login');
});*/

    Route::get('/', function () {
        return view('auth.login');
    })->name('index');


    Route::get('login', 'loginController@authenticate');
    Route::post('login', 'loginController@authenticate');

    Route::get('logout', 'mMemberController@logout');


Route::get('/home', 'HomeController@home');

/*Master*/
Route::get('/master/datasuplier/suplier', 'MasterController@suplier');
/* ari */
Route::get('/master/datacust/cust', 'MasterController@cust');
Route::get('/getdata', 'MasterController@getdata');
Route::get('/master/datacust/simpan_cust', 'MasterController@simpan_cust');

Route::get('/master/datacust/cust_edit/{id_cus_ut}', 'MasterController@cust_edit');
Route::get('/master/datacust/cust_edit/cust_edit_proses/{id_cus_ut}', 'MasterController@cust_edit_proses');
Route::get('/master/datacust/cust_delete/{id_cus_ut}', 'MasterController@cust_delete');
/*---------*/
Route::get('/master/databaku/baku', 'MasterController@baku');
Route::get('/master/databaku/tambah_baku', 'MasterController@tambah_baku');
Route::get('/master/datajenis/jenis', 'MasterController@jenis');
Route::get('/master/datajenis/tambah_jenis', 'MasterController@tambah_jenis');
Route::get('/master/datapegawai/pegawai', 'MasterController@pegawai');
Route::get('/master/datakeuangan/keuangan', 'MasterController@keuangan');
Route::get('/master/datatransaksi/transaksi', 'MasterController@transaksi');
Route::get('/master/datasuplier/tambah_suplier', 'MasterController@tambah_suplier');
Route::get('/master/datacust/tambah_cust', 'MasterController@tambah_cust');
Route::get('/master/datatransaksi/tambah_transaksi', 'MasterController@tambah_transaksi');
Route::get('/master/datapegawai/tambah_pegawai', 'MasterController@tambah_pegawai');

Route::get('/master/databarang/barang', 'MasterController@barang');
Route::get('/master/databarang/tambah_barang', 'MasterController@tambah_barang');

/*Purchasing*/
Route::get('/purchasing/orderpembelian/order', 'PurchasingController@order');
Route::get('/purchasing/orderpembelian/tambah_order', 'PurchasingController@tambah_order');
Route::get('/purchasing/rencanapembelian/rencana', 'PurchasingController@rencana');
Route::get('/purchasing/rencanapembelian/create', 'PurchasingController@create');
Route::get('/purchasing/returnpembelian/pembelian', 'PurchasingController@pembelian');
Route::get('/purchasing/belanjasuplier/suplier', 'PurchasingController@suplier');
Route::get('/purchasing/belanjalangsung/langsung', 'PurchasingController@langsung');
Route::get('/purchasing/belanjaproduk/produk', 'PurchasingController@produk');
Route::get('/purchasing/belanjaharian/belanja', 'PurchasingController@belanja');
Route::get('/purchasing/belanjaharian/tambah_belanja', 'PurchasingController@tambah_belanja');
Route::get('/purchasing/returnpembelian/tambah_pembelian', 'PurchasingController@tambah_pembelian');
Route::get('/purchasing/orderpembelian/tambah_order', 'PurchasingController@tambah_order');
Route::get('/purchasing/rencanabahanbaku/bahan', 'PurchasingController@bahan');
/* ricky */
Route::get('/purchasing/belanjapasar/pasar', 'PurchasingController@pasar');
/*----*/
/*Inventory*/
Route::get('/inventory/p_suplier/suplier', 'InventoryController@suplier');
Route::get('/inventory/p_hasilproduksi/produksi', 'InventoryController@produksi');
Route::get('/inventory/p_returncustomer/cust', 'InventoryController@cust');
Route::get('/inventory/b_digunakan/barang', 'InventoryController@barang');
Route::get('/inventory/stockopname/opname', 'InventoryController@opname');
Route::get('/inventory/p_suplier/cari_nota', 'InventoryController@cari_nota_sup');
Route::get('/inventory/p_hasilproduksi/cari_nota', 'InventoryController@cari_nota_produksi'); 
Route::get('/inventory/p_returncustomer/cari_nota', 'InventoryController@cari_nota_cust');
Route::get('/inventory/b_digunakan/tambah_barang', 'InventoryController@tambah_barang');
Route::get('/inventory/stockopname/tambah_opname', 'InventoryController@tambah_opname');

/*Produksi*/
Route::get('/produksi/rencanaproduksi/produksi', 'ProduksiController@produksi');
Route::get('/produksi/spk/spk', 'ProduksiController@spk');
Route::get('/produksi/bahanbaku/baku', 'ProduksiController@baku');
Route::get('/produksi/sdm/sdm', 'ProduksiController@sdm');
Route::get('/produksi/produksi/produksi2', 'ProduksiController@produksi2');
Route::get('/produksi/o_produksi/produksi3', 'ProduksiController@produksi3');
Route::get('/produksi/waste/waste', 'ProduksiController@waste');
Route::get('/produksi/monitoringprogress/monitoring', 'ProduksiController@monitoring');
Route::get('/produksi/o_produksi/tambah_produksi', 'ProduksiController@tambah_produksi');

/*Penjualan*/
Route::get('/penjualan/manajemenharga/harga', 'PenjualanController@harga');
Route::get('/penjualan/manajemenpromosi/promosi', 'PenjualanController@promosi');
Route::get('/penjualan/broadcastpromosi/promosi2', 'PenjualanController@promosi2');
Route::get('/penjualan/rencanapenjualan/rencana', 'PenjualanController@rencana');
// Route::get('/penjualan/POSretail/retail', 'PenjualanController@retail');
// Route::get('/penjualan/POSgrosir/grosir', 'PenjualanController@grosir');
Route::get('/penjualan/manajemenreturn/r_penjualan', 'PenjualanController@r_penjualan');
Route::get('/penjualan/monitorprogress/progress', 'PenjualanController@progress');
Route::get('/penjualan/rencanapenjualan/tambah_rencana', 'PenjualanController@tambah_rencana');
Route::get('/penjualan/monitoringorder/monitoring', 'PenjualanController@monitoringorder');
Route::get('/penjualan/mutasistok/mutasi', 'PenjualanController@mutasi');
Route::get('/penjualan/broadcastpromosi/tambah_promosi2', 'PenjualanController@tambah_promosi2');

//POSRetail
Route::get('/penjualan/POSretail/retail', 'Penjualan\POSRetailController@retail');
Route::get('/penjualan/POSretail/retail/store', 'Penjualan\POSRetailController@store');
Route::get('/penjualan/POSretail/retail/autocomplete', 'Penjualan\POSRetailController@autocomplete');
Route::get('/penjualan/POSretail/retail/setnama/{id}', 'Penjualan\POSRetailController@setnama');
Route::get('/penjualan/POSretail/retail/sal_save_final', 'Penjualan\POSRetailController@sal_save_final');
Route::get('/penjualan/POSretail/retail/sal_save_draft', 'Penjualan\POSRetailController@sal_save_draft');
Route::get('/penjualan/POSretail/retail/sal_save_onprogres', 'Penjualan\POSRetailController@sal_save_onProgres');
Route::get('/penjualan/POSretail/retail/create', 'Penjualan\POSRetailController@create');
Route::get('/penjualan/POSretail/retail/create_sal', 'Penjualan\POSRetailController@create_sal');
Route::get('/penjualan/POSretail/retail/edit_sales/{id}', 'Penjualan\POSRetailController@edit_sales');
Route::get('/penjualan/POSretail/retail/distroy/{id}', 'Penjualan\POSRetailController@distroy');
Route::put('/penjualan/POSretail/retail/update/{id}', 'Penjualan\POSRetailController@update');
Route::get('/penjualan/POSretail/retail/autocompleteitem', 'Penjualan\POSRetailController@autocompleteitem');
Route::get('/penjualan/POSretail/retail/transfer-item', 'Penjualan\stockController@transferItem');
Route::get('/penjualan/POSretail/retail/item_save', 'Penjualan\POSRetailController@item_save');
Route::get('/penjualan/POSretail/getdata', 'Penjualan\POSRetailController@detail');
Route::get('/penjualan/POSretail/getdataReq', 'Penjualan\POSRetailController@detailReq');
Route::get('/penjualan/POSretail/retail/simpan-transfer', 'Penjualan\transferItemController@simpanTransfer');
Route::get('/penjualan/POSretail/get-tanggal/{tgl1}/{tgl2}', 'Penjualan\POSRetailController@getTanggal');
Route::get('/penjualan/POSretail/get-tanggaljual/{tgl1}/{tgl2}', 'Penjualan\POSRetailController@getTanggalJual');
//thoriq stock penjualan retail
Route::get('/penjualan/POSretail/stock/table-stock', 'Penjualan\stockController@tableStock');


//POSGrosir
Route::get('/penjualan/POSgrosir/grosir', 'Penjualan\POSGrosirController@grosir');
Route::get('/penjualan/POSgrosir/grosir/store', 'Penjualan\POSGrosirController@store');
Route::get('/penjualan/POSgrosir/grosir/autocomplete', 'Penjualan\POSGrosirController@autocomplete');
Route::get('/penjualan/POSgrosir/grosir/setnama/{id}', 'Penjualan\POSGrosirController@setnama');
Route::get('/penjualan/POSgrosir/grosir/sal_save_final', 'Penjualan\POSGrosirController@sal_save_final');
Route::get('/penjualan/POSgrosir/grosir/sal_save_draft', 'Penjualan\POSGrosirController@sal_save_draft');
Route::get('/penjualan/POSgrosir/grosir/sal_save_onprogres', 'Penjualan\POSGrosirController@sal_save_onProgres');
Route::get('/penjualan/POSgrosir/grosir/create', 'Penjualan\POSGrosirController@create');
Route::get('/penjualan/POSgrosir/grosir/create_sal', 'Penjualan\POSGrosirController@create_sal');
Route::get('/penjualan/POSgrosir/grosir/edit_sales/{id}', 'Penjualan\POSGrosirController@edit_sales');
Route::get('/penjualan/POSgrosir/grosir/distroy/{id}', 'Penjualan\POSGrosirController@distroy');
Route::put('/penjualan/POSgrosir/grosir/update/{id}', 'Penjualan\POSGrosirController@update');
Route::get('/penjualan/POSgrosir/grosir/autocompleteitem', 'Penjualan\POSGrosirController@autocompleteitem');
Route::get('/penjualan/POSgrosir/grosir/autocompletereq', 'Penjualan\POSGrosirController@autocompletereq');
Route::get('/penjualan/POSgrosir/grosir/item_save', 'Penjualan\POSGrosirController@item_save');
Route::get('/penjualan/POSgrosir/getdata', 'Penjualan\POSGrosirController@detail');
Route::get('/penjualan/POSgrosir/getdataGReq', 'Penjualan\POSGrosirController@detailReq');
Route::get('/penjualan/POSgrosir/grosir/req_retail', 'Penjualan\POSGrosirController@req_retail');
Route::get('/penjualan/POSgrosir/grosir/tambahItemReq', 'Penjualan\POSGrosirController@tambahItemReq');
Route::get('/penjualan/POSgrosir/get-tanggal/{tgl1}/{tgl2}', 'Penjualan\POSGrosirController@getTanggal');
Route::get('/penjualan/POSgrosir/get-tanggaljual/{tgl1}/{tgl2}', 'Penjualan\POSGrosirController@getTanggalJual');

/*HRD*/
Route::get('/hrd/manajemenkpipegawai/kpi', 'HrdController@kpi');
Route::get('/hrd/payroll/payroll', 'HrdController@payroll');
Route::get('/hrd/recruitment/rekrut', 'HrdController@rekrut');
Route::get('/hrd/datakaryawan/karyawan', 'HrdController@karyawan');
Route::get('/hrd/dataadministrasi/admin', 'HrdController@admin');
Route::get('/hrd/datalembur/lembur', 'HrdController@lembur');
Route::get('/hrd/scoreboard/score', 'HrdController@score');
Route::get('/hrd/training/training', 'HrdController@training');

/*Keuangan*/
Route::get('/keuangan/p_inputtransaksi/transaksi', 'KeuanganController@transaksi');
Route::get('/keuangan/l_hutangpiutang/hutang', 'KeuanganController@hutang');
Route::get('/keuangan/l_jurnal/jurnal', 'KeuanganController@jurnal');
Route::get('/keuangan/analisaprogress/analisa', 'KeuanganController@analisa');
Route::get('/keuangan/analisaocf/analisa2', 'KeuanganController@analisa2');
Route::get('/keuangan/analisaaset/analisa3', 'KeuanganController@analisa3');
Route::get('/keuangan/analisacashflow/analisa4', 'KeuanganController@analisa4');
Route::get('/keuangan/analisaindex/analisa5', 'KeuanganController@analisa5');
Route::get('/keuangan/analisarasio/analisa6', 'KeuanganController@analisa6');
Route::get('/keuangan/analisabottom/analisa7', 'KeuanganController@analisa7');
Route::get('/keuangan/analisaroe/analisa8', 'KeuanganController@analisa8');
Route::get('/keuangan/spk/spk', 'KeuanganController@spk');

/*System*/
Route::get('/system/hakuser/user', 'SystemController@user');
Route::get('/system/hakakses/akses', 'SystemController@akses');
Route::get('/system/profilperusahaan/profil', 'SystemController@profil');
Route::get('/system/thnfinansial/finansial', 'SystemController@finansial');
Route::get('/system/hakuser/tambah_user', 'SystemController@tambah_user');
Route::get('/system/hakakses/tambah_akses', 'SystemController@tambah_akses');


