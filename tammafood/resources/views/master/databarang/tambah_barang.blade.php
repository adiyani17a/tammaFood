@extends('main')
@section('content')

            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                        <div class="page-title">Form Master Data Barang</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i></i>&nbsp;Master&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Master Data Barang</li><li><i class="fa fa-angle-right"></i>&nbsp;Form Master Data Barang&nbsp;&nbsp;</i>&nbsp;&nbsp;</li>
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
                              <li class="active"><a href="#alert-tab" data-toggle="tab">Form Master Data Barang</a></li>
                            <!-- <li><a href="#note-tab" data-toggle="tab">2</a></li>
                            <li><a href="#label-badge-tab-tab" data-toggle="tab">3</a></li> -->
                        </ul>
                        <div id="generalTabContent" class="tab-content responsive">
                          <div id="alert-tab" class="tab-pane fade in active">
                            <div class="row">

                              <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:-10px;margin-bottom: 15px;">
                                 <div class="col-md-5 col-sm-6 col-xs-8">
                                   <h4>Form Master Data Barang</h4>
                                 </div>
                                 <div class="col-md-7 col-sm-6 col-xs-4" align="right" style="margin-top:5px;margin-right: -25px;">
                                   <a href="{{ url('master/databarang/barang') }}" class="btn"><i class="fa fa-arrow-left"></i></a>
                                 </div>
                              </div>
                          

                         <div class="col-md-12 col-sm-12 col-xs-12 " style="margin-top:15px;">
                            <form method="post">
                              <div class="col-md-12 col-sm-12 col-xs-12 tamma-bg" style="margin-bottom: 20px; padding-bottom:5px;padding-top:15px;padding-left:-10px;padding-right: -10px; ">
                                
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                 
                                      <label class="tebal">Kode Barang</label>
                                 
                                </div>
                                <div class="col-md-3 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <input type="text" id="kode_barang" name="kode_barang" class="form-control input-sm">                                  
                                  </div>
                                </div>

                                

                                <div class="col-md-3 col-sm-4 col-xs-12">
                                  
                                      <label class="tebal">Nama</label>
                                 
                                </div>
                                <div class="col-md-3 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <input type="text" id="nama" name="nama" class="form-control input-sm">                               
                                  </div>
                                </div>

                               

                                <div class="col-md-3 col-sm-4 col-xs-12">
                                 
                                    <label class="tebal">Kelompok</label>
                                 
                                </div>

                                <div class="col-md-3 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <select class="input-sm form-control">
                                        <option value=""></option>
                                        <option value=""></option>
                                      </select>
                                  </div>
                                </div>

                                <div class="col-md-3 col-sm-4 col-xs-12">
                                 
                                    <label class="tebal">Jenis</label>
                                 
                                </div>

                                <div class="col-md-3 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <select class="input-sm form-control">
                                        <option value=""></option>
                                        <option value=""></option>
                                      </select>
                                  </div>
                                </div>

                                <div class="col-md-3 col-sm-4 col-xs-12">
                                 
                                    <label class="tebal">Satuan</label>
                                 
                                </div>

                                <div class="col-md-3 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <select class="input-sm form-control">
                                        <option value=""></option>
                                        <option value=""></option>
                                      </select>
                                  </div>
                                </div>
                              
                               <div class="col-md-3 col-sm-4 col-xs-12">
                                  
                                      <label class="tebal">Harga</label>
                                 
                                </div>
                                <div class="col-md-3 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <input type="text" id="harga" name="harga" class="form-control input-sm">                               
                                  </div>
                                </div>

                                <div class="col-md-3 col-sm-4 col-xs-12">
                                  
                                      <label class="tebal">Berat</label>
                                 
                                </div>
                                <div class="col-md-3 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <input type="text" id="berat" name="berat" class="form-control input-sm">                               
                                  </div>
                                </div>

                                <div class="col-md-3 col-sm-4 col-xs-12">
                                  
                                      <label class="tebal">Min Stock</label>
                                 
                                </div>
                                <div class="col-md-3 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <input type="text" id="min_stock" name="min_stock" class="form-control input-sm">                               
                                  </div>
                                </div>
                        
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                  
                                      <label class="tebal">Detail</label>
                                 
                                </div>
                                <div class="col-md-9 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <textarea class="form-control input-sm"></textarea>                               
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

                            
@endsection
@section("extra_scripts")
<script type="text/javascript">     
      $("#nama").load("/master/databarang/tambah_barang", function(){
      $("#nama").focus();
      });
      $('#tgl_lahir').datepicker({
          autoclose: true,
          format: 'dd-mm-yyyy'
        });
</script>
@endsection                            
