@extends('main')
@section('content')

            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                        <div class="page-title">Form Master Data Bahan Baku</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i></i>&nbsp;Master&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Master Data Bahan Baku</li><li><i class="fa fa-angle-right"></i>&nbsp;Form Master Data Bahan Baku&nbsp;&nbsp;</i>&nbsp;&nbsp;</li>
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
                              <li class="active"><a href="#alert-tab" data-toggle="tab">Form Master Data Bahan Baku</a></li>
                            <!-- <li><a href="#note-tab" data-toggle="tab">2</a></li>
                            <li><a href="#label-badge-tab-tab" data-toggle="tab">3</a></li> -->
                        </ul>
                        <div id="generalTabContent" class="tab-content responsive">
                          <div id="alert-tab" class="tab-pane fade in active">
                            <div class="row">

                              <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:-10px;margin-bottom: 15px;">
                                 <div class="col-md-5 col-sm-6 col-xs-8">
                                   <h4>Form Master Data Bahan Baku</h4>
                                 </div>
                                 <div class="col-md-7 col-sm-6 col-xs-4" align="right" style="margin-top:5px;margin-right: -25px;">
                                   <a href="{{ url('master/databaku/baku') }}" class="btn"><i class="fa fa-arrow-left"></i></a>
                                 </div>
                              </div>
                          

                         <div class="col-md-12 col-sm-12 col-xs-12 " style="margin-top:15px;">
                            <form method="post">
                              <div class="col-md-12 col-sm-12 col-xs-12 tamma-bg" style="margin-bottom: 20px; padding-bottom:5px;padding-top:15px;padding-left:-10px;padding-right: -10px; ">
                                
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                 
                                      <label class="tebal">ID Bahan Baku</label>
                                 
                                </div>
                                <div class="col-md-4 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <input type="text" id="id_bb" name="id_bb" class="form-control input-sm">                                  
                                  </div>
                                </div>

                                <div class="col-md-5 col-sm-0 col-xs-0" style="height: 45px;">
                                    <!-- empty -->
                                  </div>

                                <div class="col-md-3 col-sm-4 col-xs-12">
                                  
                                      <label class="tebal">Nama Bahan</label>
                                 
                                </div>
                                <div class="col-md-4 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <input type="text" id="nama" name="nama" class="form-control input-sm">                               
                                  </div>
                                </div>

                                <div class="col-md-5 col-sm-0 col-xs-0" style="height: 45px;">
                                    <!-- empty -->
                                  </div>

                                <div class="col-md-3 col-sm-4 col-xs-12">
                                 
                                    <label class="tebal">Jumlah</label>
                                 
                                </div>

                                <div class="col-md-4 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <input type="text" name="jumlah" id="jumlah" class="form-control input-sm">
                                  </div>
                                </div>

                                <div class="col-md-5 col-sm-0 col-xs-0" style="height: 45px;">
                                    <!-- empty -->
                                  </div>

                                <div class="col-md-3 col-sm-4 col-xs-12">
                                 
                                    <label class="tebal">Satuan</label>
                                 
                                </div>

                                <div class="col-md-4 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <input type="text" name="satuan" id="satuan" class="form-control input-sm">
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
      $("#nama").load("/master/databaku/tambah_baku", function(){
      $("#nama").focus();
      });
      $('#tgl_lahir').datepicker({
          autoclose: true,
          format: 'dd-mm-yyyy'
        });
</script>
@endsection                            
