@extends('main')
@section('content')
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                        <div class="page-title">Form Master Data Suplier</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i></i>&nbsp;Master&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Master Data Suplier</li><li><i class="fa fa-angle-right"></i>&nbsp;Form Master Data Suplier&nbsp;&nbsp;</i>&nbsp;&nbsp;</li>
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
                              <li class="active"><a href="#alert-tab" data-toggle="tab">Form Master Data Suplier</a></li>
                            <!-- <li><a href="#note-tab" data-toggle="tab">2</a></li>
                            <li><a href="#label-badge-tab-tab" data-toggle="tab">3</a></li> -->
                        </ul>
                        <div id="generalTabContent" class="tab-content responsive">
                          <div id="alert-tab" class="tab-pane fade in active">
                          <div class="row">
                          
                         <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: -10px;margin-bottom: 15px;">  
                           <div class="col-md-5 col-sm-6 col-xs-8" >
                             <h4>Form Master Data Suplier</h4>
                           </div>
                           <div class="col-md-7 col-sm-6 col-xs-4" align="right" style="margin-top:5px;margin-right: -25px;">
                             <a href="{{ url('master/datasuplier/suplier') }}" class="btn"><i class="fa fa-arrow-left"></i></a>
                           </div>
                         </div>
                         
                        
                         <div class="col-md-12 col-sm-12 col-xs-12">
                            <form method="post">
                              <div class="col-md-12 col-sm-12 col-xs-12 tamma-bg" style="margin-bottom: 20px; padding-top:30px;padding-bottom:20px;">
                                <div class="col-md-2 col-sm-3 col-xs-12">
                                  
                                      <label class="tebal">Nama Perusahaan</label>
                                  
                                </div>

                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    
                                        <input type="text" id="perusahaan" name="perusahaan" class="form-control input-sm" >
                                    
                                  </div>
                                </div>

                                <div class="col-md-2 col-sm-3 col-xs-12">
                                  
                                      <label class="tebal">Nama Suplier</label>
                                  
                                </div>

                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    <div class="input-icon right">
                                      <i class="fa fa-user"></i>
                                      <input type="text" id="nama" name="nama" class="form-control input-sm">                
                                    </div>
                                  </div>
                                </div>
                               
                                <div class="col-md-2 col-sm-3 col-xs-12">
                                  
                                      <label class="tebal">Nomor Hp</label>
                                  
                                </div>

                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    <div class="input-icon right">
                                        <i class="glyphicon glyphicon-earphone"></i>
                                        <input type="text" id="no_hp" name="no_hp" class="form-control input-sm">
                                    </div>
                                  </div>
                                </div>

                                <div class="col-md-2 col-sm-3 col-xs-12">
                                  
                                    <label class="tebal">Fax</label>
                                  
                                </div>

                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                      <input type="text" id="fax" name="fax" class="form-control input-sm">
                                  </div>
                                </div>

                                 <div class="col-md-2 col-sm-3 col-xs-12">
                                  
                                      <label class="tebal">NPWP</label>
                                  
                                </div>

                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    
                                        <input type="text" id="npwp" name="npwp" class="form-control input-sm" >
                                    
                                  </div>
                                </div>

                                <div class="col-md-2 col-sm-3 col-xs-12">
                                  
                                      <label class="tebal">E-mail</label>
                                  
                                </div>

                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    <div class="input-icon right">
                                      <i class="glyphicon glyphicon-envelope"></i>
                                      <input type="text" id="email" name="email" class="form-control input-sm">                
                                    </div>
                                  </div>
                                </div>

                                <div class="col-md-2 col-sm-3 col-xs-12">
                                   
                                    <label class="tebal">Alamat</label>
                                  
                                </div>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    <div class="input-icon right">
                                      <i class="fa fa-home"></i>
                                      <textarea id="alamat" name="alamat" class="form-control input-sm"></textarea>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-md-2 col-sm-3 col-xs-12">
                                  
                                    <label class="tebal">Limit</label>
                                 
                                </div>

                                <div class="col-md-10 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    <input type="text" id="limit" name="limit" class="form-control input-sm" ">
                                  </div>
                                </div>

                                <div class="col-md-2 col-sm-3 col-xs-12">
                                  
                                      <label class="tebal">Keterangan</label>
                                  
                                </div>

                                <div class="col-md-10 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                      <textarea id="keterangan" name="keterangan" class="form-control input-sm" ></textarea>
                                  </div>
                                </div>

                                

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
                            
@endsection
@section("extra_scripts")
<script type="text/javascript">     
      $("#perusahaan").load("/master/datasuplier/tambah_suplier", function(){
      $("#perusahaan").focus();
      });
</script>
@endsection                            
