@extends('main')
@section('content')
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                        <div class="page-title">Form Data Transaksi Keuangan</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i></i>&nbsp;Master&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Master Data Transaksi Keuangan</li><li><i class="fa fa-angle-right"></i>&nbsp;Form Data Transaksi Keuangan&nbsp;&nbsp;</i>&nbsp;&nbsp;</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <div class="page-content fadeInRight">
                    <div id="tab-general">
                        <div class="row mbl">
                            <div class="col-lg-12">
                                
                                            <div class="col-md-12">
                                                <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                                                </div>
                                            </div>
                                 
                            <ul id="generalTab" class="nav nav-tabs">
                              <li class="active"><a href="#alert-tab" data-toggle="tab">Form Data Transaksi Keuangan</a></li>
                            <!-- <li><a href="#note-tab" data-toggle="tab">2</a></li>
                            <li><a href="#label-badge-tab-tab" data-toggle="tab">3</a></li> -->
                        </ul>
                        <div id="generalTabContent" class="tab-content responsive">
                          <div id="alert-tab" class="tab-pane fade in active">
                          <div class="row">
                           
                          <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:-10px;margin-bottom: 15px;"> 
                           <div class="col-md-5 col-sm-6 col-xs-8">
                             <h4>Form Data Transaksi Keuangan</h4>
                           </div>
                           <div class="col-md-7 col-sm-6 col-xs-4" align="right" style="margin-top:5px;margin-right: -25px;">
                             <a href="{{ url('master/datatransaksi/transaksi') }}" class="btn"><i class="fa fa-arrow-left"></i></a>
                           </div>
                          </div>
                         
                        <hr>
                         <div class="col-md-12 col-sm-12 col-xs-12">
                            <form method="post">
                              <div class="col-md-12 col-sm-12 col-xs-12 tamma-bg" style="margin-top:15px;margin-bottom: 20px; padding-bottom:5px;padding-top: 15px; ">     
                                <div class="col-md-2 col-sm-3 col-xs-12">
                                  
                                      <label class="tebal">Kategori</label>
                                  
                                </div>

                                <div class="col-md-10 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    <select class="form-control input-sm"  id="kode" name="Kategori" >
                                      <option value="10" >PENJUALAN</option>
                                      <option value="11" >DISKON PENJUALAN</option>
                                      <option value="12" >RETUR PENJUALAN</option>
                                      <option value="20" >HARGA POKOK PENJUALAN</option>
                                      <option value="21" >SELISIH HPP</option>
                                      <option value="30" >BIAYA OPERASIONAL</option>
                                      <option value="41" >PENYUSUTAN</option>
                                      <option value="42" >AMORTISASI</option>
                                      <option value="51" >PENDAPATAN LAIN-LAIN</option>
                                      <option value="52" >BIAYA LAIN-LAIN</option>
                                      <option value="61" >BUNGA</option>
                                      <option value="62" >PAJAK</option>
                                      <option value="71" >MUTASI ANTAR KAS</option>
                                      <option value="72" >TRANSAKSI ASET</option>
                                      <option value="73" >TRANSAKSI PIUTANG</option>
                                      <option value="74" >TRANSAKSI KEWAJIBAN</option>
                                      <option value="75" >TRANSAKSI MODAL</option>
                                    </select>                                  
                                  </div>
                                </div>

                              <div class="col-md-2 col-sm-3 col-xs-12">
                                
                                    <label class="tebal">Nama Transaksi</label>
                                
                              </div>

                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    <input type="text" id="nama" name="nama" class="form-control input-sm">                                  
                                  </div>
                                </div>

                              <div class="col-md-2 col-sm-3 col-xs-12">
                                
                                    <label class="tebal">Sub Nama</label>
                       
                              </div>

                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    <input type="text" id="text" name="text" class="form-control input-sm">                                  
                                  </div>
                                 </div>
                                
                              <div class="col-md-2 col-sm-3 col-xs-12">
                                
                                    <label class="tebal">Kode Transaksi</label>
                               
                              </div>

                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    <input type="text" disabled="" class="form-control input-sm">
                                  </div>
                                </div>

                              <div class="col-md-2 col-sm-3 col-xs-12">
                                
                                    <label class="tebal">Cash Type</label>
                                
                              </div>

                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    <select class="form-control input-sm"  id="cashtype" name="Cash Type">                        
                                      <option value="-">-</option>                                    
                                      <option value="O" >Operating Cash Flow</option>                                    
                                      <option value="F">Financing Cash Flow</option>                                    
                                      <option value="I">Investing Cash Flow</option>
                                    </select>                                  
                                  </div>
                                </div>

                                <div class="col-md-2 col-sm-3 col-xs-12">
                                  
                                      <label class="tebal">Akun 1</label>
                                  
                                </div>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    <select class="form-control input-sm"  id="Account01" name="Account01" >
                                      <option value="101010101" >Kas Pusat</option>
                                      <option value="101010201" >Kas BCA</option>
                                      <option value="101010202" >Kas BCA P</option>
                                      <option value="101010203" >Kas Permata</option>
                                      <option value="101010204" >Kas Permata P</option>
                                      <option value="101030100" >Piutang Usaha Penjualan</option>
                                      <option value="101030200" >Piutang Usaha Refund Supplier</option>
                                      <option value="101040100" >Piutang Owner</option>
                                      <option value="101040200" >Piutang Lainnya</option>
                                      <option value="101050001" >Persediaan2</option>
                                      <option value="101050200" >Persediaan Konsinyasi</option>
                                      <option value="102030000" >Harta Tetap Berwujud</option>
                                      <option value="201010000" >Hutang Suplier</option>
                                      <option value="201020000" >Hutang Konsinyasi</option>
                                      <option value="201030000" >Hutang Beban</option>
                                      <option value="201090101" >Hutang Ke Pihak III</option>
                                      <option value="201090601" >Hutang Pajak</option>
                                      <option value="201090602" >Hutang Lainnya</option>
                                      <option value="201090701" >Hutang Sedekah</option>
                                      <option value="301010000" >Modal Bapak Muhammad</option>
                                      <option value="301020000" >Modal Bapak A</option>
                                      <option value="301030000" >modal 2</option>
                                      <option value="302010000" >Akumulasi Laba</option>
                                      <option value="302020000" >Laba 2</option>
                                      <option value="302050000" >Laba Berjalan</option>
                                      <option value="305010000" >Akumulasi Sedekah</option>
                                    </select> 
                                  </div>                                 
                                </div>

                              <div class="col-md-2 col-sm-3 col-xs-12">
                                
                                  <label class="tebal">Debit/Kredit 1</label>
                                
                              </div>

                              <div class="col-md-4 col-sm-9 col-xs-12">
                                <div class="form-group">
                                  <select class="form-control input-sm"  id="tr_acc01dk" name="tr_acc01dk" onchange="dk()">
                                          <option  >Kredit</option>                                   
                                          <option  >Debet</option>                                   
                                  </select>
                                </div>
                              </div>

                              <div class="col-md-2 col-sm-3 col-xs-12">
                                
                                    <label class="tebal">Akun 2</label>
                                
                              </div>

                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    <select class="form-control input-sm"  id="Account02" name="Account02" >
                                      <option value="101010101" >Kas Pusat</option>
                                      <option value="101010201" >Kas BCA</option>
                                      <option value="101010202" >Kas BCA P</option>
                                      <option value="101010203" >Kas Permata</option>
                                      <option value="101010204" >Kas Permata P</option>
                                      <option value="101030100" >Piutang Usaha Penjualan</option>
                                      <option value="101030200" >Piutang Usaha Refund Supplier</option>
                                      <option value="101040100" >Piutang Owner</option>
                                      <option value="101040200" >Piutang Lainnya</option>
                                      <option value="101050001" >Persediaan2</option>
                                      <option value="101050200" >Persediaan Konsinyasi</option>
                                      <option value="102030000" >Harta Tetap Berwujud</option>
                                      <option value="201010000" >Hutang Suplier</option>
                                      <option value="201020000" >Hutang Konsinyasi</option>
                                      <option value="201030000" >Hutang Beban</option>
                                      <option value="201090101" >Hutang Ke Pihak III</option>
                                      <option value="201090601" >Hutang Pajak</option>
                                      <option value="201090602" >Hutang Lainnya</option>
                                      <option value="201090701" >Hutang Sedekah</option>
                                      <option value="301010000" >Modal Bapak Muhammad</option>
                                      <option value="301020000" >Modal Bapak A</option>
                                      <option value="301030000" >modal 2</option>
                                      <option value="302010000" >Akumulasi Laba</option>
                                      <option value="302020000" >Laba 2</option>
                                      <option value="302050000" >Laba Berjalan</option>
                                      <option value="305010000" >Akumulasi Sedekah</option>
                                    </select>                                  
                                  </div>
                                </div>

                              <div class="col-md-2 col-sm-3 col-xs-12">
                                
                                  <label class="tebal">Debit/Kredit 2</label>
                                
                              </div>

                              <div class="col-md-4 col-sm-9 col-xs-12">
                                <div class="form-group">
                                  <select class="form-control input-sm"  id="tr_acc01dk" name="tr_acc01dk" onchange="dk()">
                                    <option  >Kredit</option>                                   
                                    <option  >Debet</option>                                   
                                  </select>
                                </div>
                              </div>

                        </div>

                            
                              <div class="form-group" align="right">
                                <input type="submit" name="tambah_data" value="Simpan Data" class="btn btn-danger">
                              </div>
                             
                          </form>                                  
                    </div>
                        </div>
                                
                                    </div>
                                         </div>
                            </div>
                            
@endsection
@section("extra_scripts")
<script type="text/javascript">     
      $("#kode").load("/master/datatransaksi/tambah_transaksi", function(){
      $("#kode").focus();
      });
</script>
@endsection                            
