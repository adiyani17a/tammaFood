@extends('main')
@section('content')
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                        <div class="page-title">Form Return Pembelian</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i></i>&nbsp;Purchasing&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Return Pembelian</li><li><i class="fa fa-angle-right"></i>&nbsp;Form Return Pembelian&nbsp;&nbsp;</i>&nbsp;&nbsp;</li>
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
                              <li class="active"><a href="#alert-tab" data-toggle="tab">Form Return Pembelian</a></li>
                            <!-- <li><a href="#note-tab" data-toggle="tab">2</a></li>
                            <li><a href="#label-badge-tab-tab" data-toggle="tab">3</a></li> -->
                        </ul>
                        <div id="generalTabContent" class="tab-content responsive" >
                          <div id="alert-tab" class="tab-pane fade in active">
                          <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: -10px;margin-bottom: 15px;">                            
                           <div class="col-md-5 col-sm-6 col-xs-8">
                          
                             <h4>Form Return Pembelian</h4>
                          </div>
                           <div class="col-md-7 col-sm-6 col-xs-4 " align="right" style="margin-top:5px;margin-right: -25px;">
                             <a href="{{ url('purchasing/returnpembelian/pembelian') }}" class="btn"><i class="fa fa-arrow-left"></i></a>
                           </div>
                          </div>
                         
                        
                        
                        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:15px;">
                            <form method="post">
                              <div class="col-md-12 col-sm-12 col-xs-12 tamma-bg" style="margin-bottom: 20px; padding-top:30px;padding-bottom:20px;">
                                <div class="col-md-2 col-sm-3 col-xs-12">
                                  
                                      <label class="tebal">Nama Suplier</label>
                                  
                                </div>

                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    
                                        <input type="text" readonly="" id="nama_sup" name="nama_supa" class="form-control input-sm" >
                                    
                                  </div>
                                </div>

                                <div class="col-md-2 col-sm-3 col-xs-12">
                                  
                                      <label class="tebal">Tanggal Return</label>
                                  
                                </div>

                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    
                                        <input type="text" readonly="" value="{{ date('d/m/Y') }}" class="form-control input-sm">
                                        <input type="hidden" name="tgl_return" value="{{ date('d/m/Y') }}">
                                    
                                  </div>
                                </div>
                               
                                <div class="col-md-2 col-sm-3 col-xs-12">
                                  
                                      <label class="tebal">Nota Return</label>
                                  
                                </div>

                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    
                                        <input type="text" readonly=""  class="form-control input-sm">
                                        <input type="hidden" name="no_nota" >
                                    
                                  </div>
                                </div>

                                <div class="col-md-2 col-sm-3 col-xs-12">
                                  
                                    <label class="tebal">Kode IMEI</label>
                                  
                                </div>

                                <div class="col-md-4 col-sm-9 col-xs-12">

                                  <div class="form-group">
                                    <div class="input-group">

                                      <input type="text"  class="form-control input-sm">
                                      <span class="input-group-btn">
                                        <button class="btn btn-info btn-sm"><i class="fa fa-search"></i></button>
                                      </span>
                                    </div>
                                  </div>
                                </div>

                                 <div class="col-md-2 col-sm-3 col-xs-12">
                                  
                                      <label class="tebal">No Nota</label>
                                  
                                </div>

                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    <div class="input-group">

                                      <input type="text"  class="form-control input-sm">
                                      <span class="input-group-btn">
                                        <button class="btn btn-info btn-sm"><i class="fa fa-search"></i></button>
                                      </span>
                                    </div>
                                  </div>
                                </div>

                                
                              </div>

                              <div class="table-responsive">
                                <table class="table tabelan table-bordered">
                                  <thead>
                                    <tr>
                                      <th>Nama Barang</th>
                                      <th>IMEI</th>
                                      <th>Jumlah</th>
                                      <th>Keterangan</th>
                                      <th>Aksi</th>
                                    </tr>
                                  </thead>
                                </table>
                              </div>

                              <div align="right">
                                <div class="form-group" align="right">
                                  <input type="submit" name="tambah_data" value="Simpan Data" class="btn btn-primary">
                                </div>
                              </div>
                              
                            
                              

                            </form>
                        

</div>
                </div>                                       
                    </div>
                        </div>
                                
                                    </div>
                                         </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  

@endsection
@section("extra_scripts")
<script type="text/javascript">     


      $("#nama").load("/purchasing/returnpembelian/tambah_pembelian", function(){
      $("#nama").focus();
      });
</script>
@endsection                            
