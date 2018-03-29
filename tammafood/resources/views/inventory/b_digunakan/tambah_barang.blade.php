@extends('main')
@section('content')
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                        <div class="page-title">Form Barang Digunakan</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i></i>&nbsp;Inventory&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Barang Digunakan</li><li><i class="fa fa-angle-right"></i>&nbsp;Form Barang Digunakan&nbsp;&nbsp;</i>&nbsp;&nbsp;</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <div class="page-content">
                    <div id="tab-general">
                        <div class="row mbl">
                            <div class="col-lg-12">
                                
                                            <div class="col-md-12">
                                                <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                                                </div>
                                            </div>

                            <ul id="generalTab" class="nav nav-tabs">
                              <li class="active"><a href="#alert-tab" data-toggle="tab">Form Barang Digunakan</a></li>
                            <!-- <li><a href="#note-tab" data-toggle="tab">2</a></li>
                            <li><a href="#label-badge-tab-tab" data-toggle="tab">3</a></li> -->
                        </ul>
                        <div id="generalTabContent" class="tab-content responsive">
                          <div id="alert-tab" class="tab-pane fade in active">
                          <div class="row">
                           
                          <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: -10px; margin-bottom: 10px;">  
                           <div class="col-md-5 col-sm-6 col-xs-8">
                             <h4>Form Barang Digunakan</h4>
                           </div>
                           <div class="col-md-7 col-sm-6 col-xs-4 " align="right" style="margin-top:5px;margin-right: -25px;">
                             <a href="{{ url('inventory/b_digunakan/barang') }}" class="btn"><i class="fa fa-arrow-left"></i></a>
                           </div>
                          </div>
                         
                         <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 15px;">
                            <form method="post">
                              <div class="col-md-12 col-sm-12 col-xs-12 tamma-bg" style="margin-bottom: 20px; padding-bottom:5px;padding-top:15px;padding-left:-10px;padding-right: -10px; ">

                               <div class="col-md-3 col-sm-4 col-xs-12">
                                 
                                      <label class="tebal">Nama Barang</label>
                                 
                                </div>
                                <div class="col-md-3 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <input type="text" id="nama" name="nama" class="form-control input-sm">                                  
                                  </div>
                                </div>

                               <div class="col-md-3 col-sm-4 col-xs-12">
                                 
                                      <label class="tebal">Tanggal Return</label>
                                 
                                </div>
                                <div class="col-md-3 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <input type="text" id="kode_barang" name="kode_barang" class="form-control input-sm" value="{{ date('d/m/Y') }}">                                  
                                  </div>
                                </div>

                               <div class="col-md-3 col-sm-4 col-xs-12">
                                 
                                      <label class="tebal">Nota Return</label>
                                 
                                </div>
                                <div class="col-md-3 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <input type="text" id="nota_return" name="nota_return" class="form-control input-sm">                                  
                                  </div>
                                </div>
                               <div class="col-md-3 col-sm-4 col-xs-12">
                                 
                                      <label class="tebal">Kode Imei</label>
                                 
                                </div>
                                <div class="col-md-3 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <input type="text" id="kode_imei" name="kode_imei" class="form-control input-sm">                                  
                                  </div>
                                </div>
                               <div class="col-md-3 col-sm-4 col-xs-12">
                                 
                                      <label class="tebal">Nomor Nota</label>
                                 
                                </div>
                                <div class="col-md-3 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <input type="text" id="no_nota" name="no_nota" class="form-control input-sm">                                  
                                  </div>
                                </div>
                               <div class="col-md-3 col-sm-4 col-xs-12">
                                 
                                      <label class="tebal">Jumlah Barang</label>
                                 
                                </div>
                                <div class="col-md-3 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <input type="text" id="jumlah_barang" name="jumlah_barang" class="form-control input-sm">                                  
                                  </div>
                                </div>
                              </div>

                              <div align="right">
                                  <input type="submit" name="tambah_data" value="Simpan Data" class="btn btn-primary">
                              </div>
                            </form>
                        


                </div>                                       
                    </div>
                        </div>
                                
                                    </div>
                                         </div>
                            </div>
@endsection
