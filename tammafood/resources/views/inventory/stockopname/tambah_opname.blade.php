@extends('main')
@section('content')
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                        <div class="page-title">Tambah Stock Opname</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i></i>&nbsp;Inventory&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Stock Opname</li><li><i class="fa fa-angle-right"></i>&nbsp;Tambah Stock Opname&nbsp;&nbsp;</i>&nbsp;&nbsp;</li>
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
                                 <div class="page-content">
                    <div id="tab-general">
                        <div class="row mbl">
                            <div class="col-lg-12">
                                
                                            <div class="col-md-12">
                                                <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                                                </div>
                                            </div>
                            <ul id="generalTab" class="nav nav-tabs responsive">
                        </ul>
                        <div id="generalTabContent" class="tab-content responsive" style="min-height:710px;">
                          <div id="alert-tab" class="tab-pane fade in active">
                          <div class="panel-body">
                         <div class="col-md-12">
                            <form method="post">
                              <div class="col-md-5" style="margin-bottom: 20px; padding-bottom:5px; ">
                              <div class="form-group">
                                
                                  <label>Nama Barang</label>
                                  <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Barang ..">
                              </div>
                              <div class="form-group">
                                
                                  <label>Tanggal Return</label>
                                  <input type="text" class="form-control" value="{{ date('d-m-Y') }}" disabled="true">
                                  <input type="hidden" id="tanggal_return" name="tanggal_return">
                              </div>
                              <div class="form-group">
                                
                                  <label>Nota Return</label>
                                  <input type="text" id="nota_return" name="nota_return" class="form-control" placeholder="Nota Return ..">
                              </div>
                              <div class="form-group">
                                
                                  <label>Kode Imei</label>
                                  <input type="text" id="kode" name="kode" class="form-control" placeholder="Kode Imei ..">
                              </div>
                              <div class="form-group">
                                
                                  <label>No Nota</label>
                                  <input type="text" id="nota" name="no_nota" class="form-control" placeholder="No Nota ..">
                              </div>
                              <div class="form-group">
                                
                                  <label>Jumlah Barang</label>
                                  <input type="number" max="999" min="1" id="nota" name="jumlah_barang" class="form-control" placeholder="Jumlah Barang..">
                              </div>
                              <div class="form-group">
                                <input type="submit" name="tambah_data" value="Tambah Data" class="btn btn-primary">
                                
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ url('inventory/stockopname/opname') }}" class="btn btn-danger">Kembali</a>
                              </div>
                              </div>
                            </form>
                        


                </div>                                       
                    </div>
                        </div>
                                
                                    </div>
                                         </div>
                            </div>
@endsection
