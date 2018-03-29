@extends('main')
@section('content')

            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                        <div class="page-title">Form Master Data Pegawai</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i></i>&nbsp;Master&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Master Data Pegawai</li><li><i class="fa fa-angle-right"></i>&nbsp;Form Master Data Pegawai&nbsp;&nbsp;</i>&nbsp;&nbsp;</li>
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
                              <li class="active"><a href="#alert-tab" data-toggle="tab">Form Master Data Pegawai</a></li>
                            <!-- <li><a href="#note-tab" data-toggle="tab">2</a></li>
                            <li><a href="#label-badge-tab-tab" data-toggle="tab">3</a></li> -->
                        </ul>
                        <div id="generalTabContent" class="tab-content responsive">
                          <div id="alert-tab" class="tab-pane fade in active">
                            <div class="row">

                              <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:-10px;margin-bottom: 15px;">
                                 <div class="col-md-5 col-sm-6 col-xs-8">
                                   <h4>Form Master Data Pegawai</h4>
                                 </div>
                                 <div class="col-md-7 col-sm-6 col-xs-4" align="right" style="margin-top:5px;margin-right: -25px;">
                                   <a href="{{ url('master/datapegawai/pegawai') }}" class="btn"><i class="fa fa-arrow-left"></i></a>
                                 </div>
                              </div>
                          

                         <div class="col-md-12 col-sm-12 col-xs-12 " style="margin-top:15px;">
                            <form method="post">
                              <div class="col-md-12 col-sm-12 col-xs-12 tamma-bg" style="margin-bottom: 20px; padding-bottom:5px;padding-top:15px;padding-left:-10px;padding-right: -10px; ">
                                
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                 
                                      <label class="tebal">NIK Pegawai</label>
                                 
                                </div>
                                <div class="col-md-3 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <input type="text" id="nik" name="nik" class="form-control input-sm">                                  
                                  </div>
                                </div>
                                
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                  
                                      <label class="tebal">Password</label>
                                  
                                </div>
                                <div class="col-md-3 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <input type="text" class="form-control input-sm" disabled="" value="123456">
                                      <input type="hidden" name="pass" id="pass" value="123456">                                  
                                  </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                  
                                      <label class="tebal">Nama Pegawai</label>
                                 
                                </div>
                                <div class="col-md-3 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <input type="text" id="nama" name="nama" class="form-control input-sm">                               
                                  </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                 
                                      <label class="tebal">Jenis Kelamin</label>
                                 
                                </div>
                                <div class="col-md-3 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <select class="form-control input-sm" id="jk" name="jk">
                                        <option value="l">Laki-laki</option>
                                        <option value="p">Perempuan</option>
                                      </select>
                                  </div>
                                </div>

                                <div class="col-md-3 col-sm-4 col-xs-12">
                                 
                                    <label class="tebal">Tempat Lahir</label>
                                 
                                </div>

                                <div class="col-md-3 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <input type="text" name="tmpt_lahir" id="tmpt_lahir" class="form-control input-sm">
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-4 col-xs-12">
                                 
                                      <label class="tebal">Tanggal Lahir</label>
                                 
                                </div>

                                <div class="col-md-3 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <input type="text" id="tgl_lahir" name="tgl_lahir" data-date-format="dd-mm-yyyy" class="datepicker form-control input-sm" placeholder="dd-mm-yyyy">                                  
                                  </div>
                                </div>

                                <div class="col-md-3 col-sm-4 col-xs-12">
                                 
                                      <label class="tebal">E-mail</label>
                                  
                                </div>

                                <div class="col-md-3 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <input type="email" id="email" name="email" class="form-control input-sm">                       
                                  </div>
                                </div>

                                <div class="col-md-3 col-sm-4 col-xs-12">
                                 
                                      <label class="tebal">Nomor HP</label>
                                 
                                </div>

                                <div class="col-md-3 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <input type="text" id="no_hp" name="no_hp" class="form-control input-sm">                   
                                  </div>
                                </div>

                                <div class="col-md-3 col-sm-4 col-xs-12">
                                
                                      <label class="tebal">Alamat</label>
                                
                                </div>

                                <div class="col-md-9 col-sm-8 col-xs-12">
                                  <div class="form-group">
                                      <textarea id="alamat" name="alamat" class="form-control input-sm"></textarea>
                                  </div>
                                </div>

                                <div class="col-md-3 col-sm-4 col-xs-12">
                                
                                    <label class="tebal">Status</label>
                                 
                                </div>

                              <div class="col-md-9 col-sm-8 col-xs-12">
                                <div class="form-group">
                                  <select id="status" name="status" class="form-control input-sm">
                                    <option value="lajang">Lajang</option>
                                    <option value="nikah">Sudah Menikah</option>
                                  </select>
                                </div>

                              </div>

                              
                              
                            </form>
                        

                        </div> 
                        
                          <div align="right">
                            <input type="submit" name="tambah_data" value="Simpan Data" class="btn btn-primary">
                          </div>
                                  
              </div>
             </div>
           </div>
         </div>

                            
@endsection
@section("extra_scripts")
<script type="text/javascript">     
      $("#nik").load("/master/datapegawai/tambah_pegawai", function(){
      $("#nik").focus();
      });
      $('#tgl_lahir').datepicker({
          autoclose: true,
          format: 'dd-mm-yyyy'
        });
</script>
@endsection                            
