@extends('main')
@section('content')
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                        <div class="page-title">Form Master Data Customer</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i></i>&nbsp;Master&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Master Data Customer</li><li><i class="fa fa-angle-right"></i>&nbsp;Form Master Data Customer&nbsp;&nbsp;</i>&nbsp;&nbsp;</li>
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
                              <li class="active"><a href="#alert-tab" data-toggle="tab">Form Master Data Customer</a></li>
                            <!-- <li><a href="#note-tab" data-toggle="tab">2</a></li>
                            <li><a href="#label-badge-tab-tab" data-toggle="tab">3</a></li> -->
                        </ul>
                        <div id="generalTabContent" class="tab-content responsive">
                          <div id="alert-tab" class="tab-pane fade in active">
                          <div class="row">
                            <div class="col-md-12" style="margin-top: -10px;margin-bottom: 20px;">
                           <div class="col-md-5 col-sm-6 col-xs-8">
                             <h4>Form Master Data Customer</h4>
                           </div>
                           <div class="col-md-7 col-sm-6 col-xs-4" align="right" style="margin-top:5px;margin-right: -25px;">
                             <a href="{{ url('master/datacust/cust') }}" class="btn"><i class="fa fa-arrow-left"></i></a>
                           </div>
                         </div>
                        <hr>
                         <div class="col-md-12 col-sm-12 col-xs-12">

                            <form method="get" id="form_cust" action="simpan_cust">
                              <div class="col-md-12 col-sm-12 col-xs-12 tamma-bg" style="margin-bottom: 20px; padding-bottom:5px;padding-top:20px; ">
                                <div class="col-md-2 col-sm-3 col-xs-12"> 
                                  
                                      <label class="tebal">ID Customer</label>
                                  
                                </div>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                      <input type="text" class="form-control input-sm" readonly="true" name="id_cus_ut" value="{{$id_cust}}">
                                      <input type="hidden" name="id_cus_ut" value="{{$id_cust}}">
                                  </div>
                                </div>
                                <div class="col-md-2 col-sm-3 col-xs-12">
                                  
                                    
                                      <label class="tebal">Nama Customer</label>
                                  
                                </div>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    <div class="input-icon right">
                                      <i class="glyphicon glyphicon-user"></i>
                                      <input type="text" id="nama_cus" name="nama_cus" class="form-control input-sm" value="{{ old('nama_cus') }}"> 
                                      @if ($errors->has('nama_cus'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nama_cus') }}</strong>
                                        </span>
                                      @endif      
                                    </div>                           
                                  </div>
                                </div>
                                <div class="col-md-2 col-sm-3 col-xs-12">
                                  
                                      <label class="tebal">Tanggal Lahir</label>
                                  
                                </div>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    <div class="input-icon right">
                                      <i class="glyphicon glyphicon-calendar"></i>
                                      <input maxlength="10" type="text" id="tgl_lahir" name="tgl_lahir" class="form-control input-sm datepicker2" value="01/01/1990"> 
                                      @if ($errors->has('tgl_lahir'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('tgl_lahir') }}</strong>
                                        </span>
                                      @endif     
                                    </div>                            
                                  </div>
                                </div>



                                <div class="col-md-2 col-sm-3 col-xs-12">
                                  
                                      <label class="tebal">E-mail</label>
                                  
                                </div>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    <div class="input-icon right">
                                      <i class="glyphicon glyphicon-envelope"></i>
                                      <input type="email" id="email" name="email" class="form-control input-sm"  value="{{ old('email') }}">
                                      @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                      @endif  
                                    </div>                                
                                  </div>
                                </div>

                                <div class="col-md-2 col-sm-3 col-xs-12">
                                  
                                      <label class="tebal">Tipe Customer</label>
                                  
                                </div>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    
                                      <select name="tipe_cust" id="tipe_cust" class="form-control input-sm">
                                        <option value="retail">Retail</option>
                                        <option value="online">Online</option>
                                      </select>
                                      @if ($errors->has('tipe_cust'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('tipe_cust') }}</strong>
                                        </span>
                                      @endif  
                                                                  
                                  </div>
                                </div>
                                <div class="col-md-6 col-sm-0 col-xs-0" style="height: 45px;">
                                  <!-- empty -->
                                </div>

                                <div class="col-md-2 col-sm-3 col-xs-12">
                                  
                                    
                                      <label class="tebal">Nomor HP</label>
                                  
                                </div>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    <div class="input-icon right">
                                      <i class="glyphicon glyphicon-earphone"></i>
                                      <input type="text" id="no_hp" name="no_hp" class="form-control input-sm"  value="{{ old('no_hp') }}">
                                      @if ($errors->has('no_hp'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('no_hp') }}</strong>
                                        </span>
                                      @endif   
                                    </div>                               
                                  </div>
                                </div>
                                <div class="col-md-2 col-sm-3 col-xs-12">
                                  
                                    
                                      <label class="tebal">Alamat</label>
                                  
                                </div>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    <div class="input-icon right">
                                      <i class="glyphicon glyphicon-home"></i>
                                      <textarea id="alamat" name="alamat" class="form-control input-sm"  value="{{ old('alamat') }}"></textarea>
                                      @if ($errors->has('alamat'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('alamat') }}</strong>
                                        </span>
                                    @endif                              
                                    </div>    
                                  </div>
                                </div>
                              </div>

                              <div align="right">
                                <div class="form-group">
                                  <button type="button" name="tambah_data" class="btn btn-primary" onclick="simpan()">Simpan Data</button>
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

    function simpan (){
      var a = $('#form_cust').serialize();

       var nama = $("#nama_cus").val();
      var tgl_lahir = $("#tgl_lahir").val();
      var email = $("#email").val();
      var no_hp = $("#no_hp").val();
      var alamat = $("#alamat").val();

      if(nama == '' || nama == null ){

      Command: toastr["error"]('Kolom "Nama Customer" tidak boleh kosong ', "Peringatan !")

      toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        return false;
      }

      if(tgl_lahir == '' || tgl_lahir == null ){

      Command: toastr["error"]('Kolom "Tanggal Lahir" tidak boleh kosong ', "Peringatan !")

      toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        return false;
      }

      if(email == '' || email == null ){

      Command: toastr["error"]('Kolom "E-mail" tidak boleh kosong ', "Peringatan !")

      toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        return false;
      }

      if(no_hp == '' || no_hp == null ){

      Command: toastr["error"]('Kolom "Nomor HP" tidak boleh kosong ', "Peringatan !")

      toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        return false;
      }

      if(alamat == '' || alamat == null ){

      Command: toastr["error"]('Kolom "Alamat" tidak boleh kosong ', "Peringatan !")

      toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        return false;
      }
      
      $.ajax({
        url : baseUrl + "/master/datacust/simpan_cust",
        type:'get',
        data: a,
        success:function(response){
          window.location = (baseUrl+'/master/datacust/cust')
        }
      })

    }

    
    $(document).on("click","input[name='tambah_data']",function(e){
     

      });

      $("#nama_cus").load("/master/datacust/tambah_cust", function(){
      $("#nama_cus").focus();
      });
      $('.datepicker').datepicker({
        format: "mm",
        viewMode: "months",
        minViewMode: "months"
      });
      $('.datepicker2').datepicker({
        format: "dd/mm/yyyy",
        
      });


</script>
@endsection                            
