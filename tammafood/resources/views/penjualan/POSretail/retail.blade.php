@extends('main')
@section('content')
<style type="text/css">
  .ui-autocomplete { z-index:2147483647; }

  
</style>

            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                        <div class="page-title">Form Entri Penjualan Retail</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i></i>&nbsp;Penjualan&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Form Entri Penjualan Retail</li>
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
                            <li class="active"><a href="#alert-tab" data-toggle="tab">Form Penjualan</a></li>
                            <li><a href="#note-tab" data-toggle="tab">Nota Penjualan</a></li>
                            <li><a href="#label-badge-tab" data-toggle="tab">Item Penjualan</a></li>
                            <li><a href="#nav-stock" data-toggle="tab" onclick="stock()">Stock Retail</a></li>
                            <li><a href="#nav-history" data-toggle="tab">History Request</a></li>
                          </ul>
                    <div id="generalTabContent" class="tab-content responsive">

<!-- Trigger the modal with a button -->
                            

                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                              <div class="modal-dialog">
                              
                              <form id="save_customer">
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header" style="background-color: #e77c38;">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title" style="color: white;">Form Master Data Customer</h4>
                                  </div>
                                  <div class="modal-body">
                                    
                              <div class="col-md-12 col-sm-12 col-xs-12 tamma-bg" style="margin-bottom: 20px; padding-bottom:5px;padding-top:20px; ">

                                <div class="col-md-4 col-sm-3 col-xs-12"> 
                              
                                  <label class="tebal">ID Customer</label>
                                  
                                </div>
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                        <input type="text" class="form-control input-sm" readonly="true" name="id_cus_ut" value="{{$id_cust}}">
                                        <input type="hidden" name="id_cus_ut" value="{{$id_cust}}">
                                  </div>
                                </div>
                                <div class="col-md-4 col-sm-3 col-xs-12">
                                  
                                    
                                      <label class="tebal" name="nama_cus">Nama</label>
                                  
                                </div>
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    <div class="input-icon right">
                                      <i class="glyphicon glyphicon-user"></i>
                                      <input type="hidden" id="namahidden">
                                      <input type="text" id="nama_cus" name="nama_cus" class="form-control input-sm"> 
                                      @if ($errors->has('nama_cus'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nama_cus') }}</strong>
                                        </span>
                                      @endif      
                                    </div>                           
                                  </div>
                                </div>
                                <div class="col-md-4 col-sm-3 col-xs-12">
                                  
                                      <label class="tebal">Tanggal Lahir</label>
                                  
                                </div>
                                <div class="col-md-8 col-sm-9 col-xs-12">
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



                                <div class="col-md-4 col-sm-3 col-xs-12">
                                  
                                      <label class="tebal">E-mail</label>
                                  
                                </div>
                                <div class="col-md-8 col-sm-9 col-xs-12">
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

                                <div class="col-md-4 col-sm-3 col-xs-12">
                                  
                                      <label class="tebal">Tipe Customer</label>
                                  
                                </div>
                                <div class="col-md-8 col-sm-9 col-xs-12">
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
                                

                                <div class="col-md-4 col-sm-3 col-xs-12">
                                  
                                    
                                      <label class="tebal">Nomor HP</label>
                                  
                                </div>
                                <div class="col-md-8 col-sm-9 col-xs-12">
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
                                <div class="col-md-4 col-sm-3 col-xs-12">
                                  
                                    
                                      <label class="tebal">Alamat</label>
                                  
                                </div>
                                <div class="col-md-8 col-sm-9 col-xs-12">
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
                              </div>
                              
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                    <button class="btn btn-danger ladda-button" data-style="zoom-in" type="button" onclick="simpan()">
                                      <span class="ladda-label">Simpan Data</span>
                                    </button>

                                  </div>
                                </div>
                        </form>   
                      </div>
                    </div>

                      <!-- div alert-tab -->
                      <div id="alert-tab" class="tab-pane fade in active">
                        
                        <div class="row">
                          <div class="col-md-12">
                            <div class="col-md-12 col-sm-12 col-xs-12 tamma-bg" style="padding-bottom: 25px;padding-top: 5px;">
                              <form id="save_sform">
                                            <div class="col-md-9 col-sm-6 col-xs-12" style="margin-top: 15px;">
                                              
                                                <label class="control-label tebal" for="nama" >Nama Customer</label>
                                               
                                                  <div class="input-group input-group-sm" style="width: 100%;">
                                                    <input type="text" id="nama" name="s_member" class="form-control" onkeyup="setnama()">

                                                    <input type="hidden" id="id_cus" name="id_cus" class="form-control">                                   
                                                    <span class="input-group-btn"><button  type="button" class="btn btn-info btn-sm btn_simpan" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i></button></span>
                                                   
                                                  </div>
                                              
                                            </div>


                                            <div class="col-md-3 col-sm-6 col-xs-12" style="margin-top: 15px;">
                                              
                                                <label for="tgl_faktur" class="control-label tebal">Tanggal Faktur</label>
                                                
                                                  <div class="input-group input-group-sm" style="width: 100%;">
                                                    <input id="tgl_faktur" type="text" name="s_date" class="form-control" readonly="readonly" value="{{ date('d-m-Y') }}">
                                                  </div>
                                             
                                            </div>

                                            <div class="col-md-9 col-sm-6 col-xs-12" style="margin-top: 15px;">
                                              
                                               <label class="control-label tebal" for="alamat">Alamat Customer</label>
                                                
                                                  <div class="input-group input-group-sm" style="width: 100%;">
                                                    <input type="text" id="alamat2" name="sm_alamat" class="form-control">  
                                                  </div>
                                            </div>

                                          
                                            <div class="col-md-3 col-sm-6 col-xs-12" style="margin-top: 15px;">
                                                
                                               <label class="control-label tebal" for="no_faktur" >Nomor Faktur</label>
                                               
                                                <div class="input-group input-group-sm" style="width: 100%;">
                                                  <input type="text" id="no_faktur" name="s_nota" class="form-control" readonly="true" value="{{$fatkur}}">
                                                </div>
                                              
                                            </div>

                                            <div class="col-md-3 col-md-offset-9 col-sm-12 col-xs-12" style="margin-top: 15px;">
                                              
                                                <label class="control-label tebal" for="total_amount">Total Amount</label>
                                               
                                                  <div class="input-group input-group-sm" style="width: 100%;">
                                                    <input type="text" class="form-control" readonly="true" name="s_net"  id="amount">
                                                    <input type="hidden" name="s_staff" value="{{ Auth::user()->id }}" >
                                                  </div>
                                            </div>     
                              </form>
                            </div>
                          </div>
                        
                         <div class="col-md-12 col-sm-12 col-xs-12">      
                                <div style="padding-top: 10px;padding-bottom: 10px;">     
                                  
                                  @include('penjualan.POSretail.item')

                                </div>
                          </div>  
                        
                        <form id="save_item">              
                            <div class="col-md-12 col-sm-12 col-xs-12">
                               <div class="col-md-3 col-md-offset-9 col-sm-6 col-sm-offset-6 col-xs-12 tamma-bg" style="margin-bottom: 20px; padding-bottom:5px;padding-top: 10px;">
                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                    
                                    <div class="form-group">
                                        <label class="control-label tebal" for="penjualan">Total Penjualan</label>
                                      <div class="input-group input-group-sm " style="width: 100%;">
                                          <input type="text" name="s_gross" readonly="true" id="total" class="form-control total" style="text-align: right;" value="0">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label tebal" for="discount">Total Discount</label>
                                      <div class="input-group input-group-sm" style="width: 100%;">
                                        <input type="text" name="s_disc_value" readonly="true" class="form-control" style="text-align: right;">
                                      </div>
                                    </div>
                                    <div class="form-group" type="hidden">
                                        <label class="control-label tebal" for="penjualan">PPN</label>
                                      <div class="input-group input-group-sm" style="width: 100%;">
                                        <input type="text" type="hidden" name="s_pajak" readonly="true" class="form-control" style="text-align: right;">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label tebal" for="jumlah">Jumlah yang Di Bayarkan</label>
                                      <div class="input-group input-group-sm bayar" style="width: 100%;">
                                        <input type="text" name="s_dibayarkan" id="bayar" value="" class="i_price form-control total" style="text-align: right;"
                                        onkeyup="rege(event,'i_price');" onblur="setRupiah(event,'i_price')" onclick="setAwal('event','i_price')" >
                                      </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label tebal" for="jumlah">Kembalian</label>
                                      <div class="input-group input-group-sm" style="width: 100%;">
                                        <input type="text" name="s_kembalian" value="0" id="kembalian" readonly="true" class="form-control kemblaian" style="text-align: right;">
                                      </div>
                                    </div>                                  
                                </div>
                                </div>
                              </div>
                               <!-- Start Modal Proses -->
                                <div class="modal fade" id="proses" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                          <div class="modal-content">
                                            <div class="modal-header" style="background-color: #e77c38;">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title" style="color: white;">Proses Form Penjualan Retail</h4>
                                            </div>

                                            <div class="modal-body">
                                              
                                              <div class="col-md-12 col-sm-12 col-xs-12 tamma-bg" style="margin-bottom: 20px; padding-bottom:15px;padding-top:15px; ">

                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <label class="control-label tebal" for="cara" >Cara Pembayaran</label>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                      <div class="input-group input-group-sm" style="width: 100%;">
                                                        <select class="form-control" name="s_pembayaran" id="cara">
                                                          <option value="Tunai">Tunai</option>
                                                          <option value="Deposit">Deposit</option>
                                                          <option value="Tempo">Tempo</option>
                                                        </select>
                                                      </div>
                                                </div>      
                                              </div>
                                            </div>
                                        
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                              <button class="btn btn-primary ladda-button" data-style="zoom-in" type="button" onclick="sal_save_final()">
                                                <span class="ladda-label">Proses</span></button>
                                            </div>
                                          </div>
                                      </div>
                                  </div>
                                <!-- End Modal Proses -->
                                  <div class="col-md-12 col-sm-12 col-xs-12" align="right" >
                                    <button class="btn btn-warning ladda-button" data-style="zoom-in" type="button" onclick="sal_save_draft()"><span class="ladda-label">Draft</span>
                                    </button>
                                    <button class="btn btn-info ladda-button" data-style="zoom-in" type="button" onclick="sal_save_onProgres()"><span class="ladda-label">On Progress</span></button>

                                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#proses">Proses</button>
                                  </div>
                            </form>   
                            </div>                                       
                          </div>
                          <!-- div note-tab -->
                          <div id="note-tab" class="tab-pane fade">
                            <div class="row">
                              <div class="panel-body">

                                
                                  <div class="col-md-2 col-sm-3 col-xs-12">
                                    <label class="tebal">Tanggal Belanja</label>
                                  </div>

                                  <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                      <div class="input-daterange input-group">
                                        <input id="tanggal1" class="form-control input-sm datepicker2 " name="tanggal" type="text" value="{{ date('d-m-Y') }}">
                                        <span class="input-group-addon">-</span>
                                        <input id="tanggal2" class="input-sm form-control datepicker2" name="tanggal" type="text" value="{{ date('d-m-Y') }}">
                                      </div>
                                    </div>
                                  </div>
                                

                                  <div class="col-md-3 col-sm-3 col-xs-12" align="center">
                                    <button class="btn btn-primary btn-sm btn-flat autoCari" type="button"  onclick="cariTanggal()">
                                      <strong>
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                      </strong>
                                    </button>
                                    <button class="btn btn-info btn-sm btn-flat" type="button">
                                      <strong>
                                        <i class="fa fa-undo" aria-hidden="true"></i>
                                      </strong>
                                    </button>
                                  </div>

                                <div class="table-responsive" style="padding-top: 15px;">
                                  <div id="dt_nota_jual"> 

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End DIv note-tab -->
                                       
                                        <div class="modal fade" id="myItem" role="dialog">
                                          <div class="modal-dialog" >
                                          
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                              <div class="modal-header" style="background-color: #e77c38;">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title"  style="color: white;">Nama Item</h4>
                                                
                                              </div>
                                              <div class="modal-body">
                                                <div id="xx">
                                                  
                                                </div>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                              </div>
                                            </div>
                                            
                                          </div>
                                        </div>
        
                         <!-- div label-badge-tab -->
                          <div id="label-badge-tab" class="tab-pane fade">
                            <div class="row">
                              <div class="panel-body">

                                  <div class="col-md-2 col-sm-3 col-xs-12">
                                    <label class="tebal">Tanggal Belanja</label>
                                  </div>

                                  <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                      <div class="input-daterange input-group">
                                        <input id="tanggal3" class="form-control input-sm datepicker2" name="tanggal" type="text" value="{{ date('d-m-Y') }}">
                                        <span class="input-group-addon">-</span>
                                        <input id="tanggal4" class="input-sm form-control datepicker2" name="tanggal" type="text" value="{{ date('d-m-Y') }}">
                                      </div>
                                    </div>
                                  </div>
                                

                                  <div class="col-md-3 col-sm-3 col-xs-12" align="center">
                                    <button class="btn btn-primary btn-sm btn-flat autoCari" type="button" onclick="cariTanggalJual()">
                                      <strong>
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                      </strong>
                                    </button>
                                    <button class="btn btn-info btn-sm btn-flat" type="button">
                                      <strong>
                                        <i class="fa fa-undo" aria-hidden="true"></i>
                                      </strong>
                                    </button>
                                  </div>

                                <div class="table-responsive">
                                  <div id="Data_Jual">
                                  {{-- table Data Jual --}}
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                           <!--end div label-badge-tab -->
                           @include('penjualan.POSretail.stockRetail.stock')
                           @include('penjualan.POSretail.history')
                  </div>
        </div>
        <!-- End div generalTab -->
      </div>
    </div>
  </div>
</div>  
@endsection
@section("extra_scripts")

    <script src="{{ asset ('assets/script/bootstrap-datepicker.js') }}"></script>
    <script type="text/javascript">


      // Bind normal buttons
      // Ladda.bind( 'div:not(.ladda-button)', { timeout: 200000000 } );

      // Bind progress buttons and simulate loading progress
      Ladda.bind( '.ladda-button', {
        callback: function( instance ) {
          var progress = 0;
          var interval = setInterval( function() {
            progress = Math.min( progress + Math.random() * 0.1, 1 );
            instance.setProgress( progress );

            if( progress === 1 ) {
              instance.stop();
              clearInterval( interval );
            }
          }, 20000000 );
        }
      } );

// var tableDetail;

      tableDetail=$('#detail-penjualan').DataTable();
     

      var datatabel1;
      $(document).ready(function() {
      var extensions = {
        "sFilterInput": "form-control input-sm",
        "sLengthSelect": "form-control input-sm"
    }
    // Used when bJQueryUI is false
    $.extend($.fn.dataTableExt.oStdClasses, extensions);
    // Used when bJQueryUI is true

    $.extend($.fn.dataTableExt.oJUIClasses, extensions);
    datatabel1 = $('#data-penjualan').DataTable({
          "responsive":true,

        "pageLength": 10,
        "lengthMenu": [[10, 20, 50, - 1], [10, 20, 50, "All"]],
        "language": {
            "searchPlaceholder": "Cari Data",
            "emptyTable": "Tidak ada data",
            "sInfo": "Menampilkan _START_ - _END_ Dari _TOTAL_ Data",
            "sSearch": '<i class="fa fa-search"></i>',
            "sLengthMenu": "Menampilkan &nbsp; _MENU_ &nbsp; Data",
            "infoEmpty": "",
            "paginate": {
                    "previous": "Sebelumnya",
                    "next": "Selanjutnya",
                 }
          }

        });

    $('#data2').dataTable({
          "responsive":true,

          "pageLength": 10,
        "lengthMenu": [[10, 20, 50, - 1], [10, 20, 50, "All"]],
        "language": {
            "searchPlaceholder": "Cari Data",
            "emptyTable": "Tidak ada data",
            "sInfo": "Menampilkan _START_ - _END_ Dari _TOTAL_ Data",
            "sSearch": '<i class="fa fa-search"></i>',
            "sLengthMenu": "Menampilkan &nbsp; _MENU_ &nbsp; Data",
            "infoEmpty": "",
            "paginate": {
                    "previous": "Sebelumnya",
                    "next": "Selanjutnya",
                 }
          }

        });

      $('#data4').dataTable({
          "responsive":true,

          "pageLength": 10,
        "lengthMenu": [[10, 20, 50, - 1], [10, 20, 50, "All"]],
        "language": {
            "searchPlaceholder": "Cari Data",
            "emptyTable": "Tidak ada data",
            "sInfo": "Menampilkan _START_ - _END_ Dari _TOTAL_ Data",
            "sSearch": '<i class="fa fa-search"></i>',
            "sLengthMenu": "Menampilkan &nbsp; _MENU_ &nbsp; Data",
            "infoEmpty": "",
            "paginate": {
                    "previous": "Sebelumnya",
                    "next": "Selanjutnya",
                 }
          }

        });

      $('#data5').dataTable({
          "responsive":true,

          "pageLength": 10,
        "lengthMenu": [[10, 20, 50, - 1], [10, 20, 50, "All"]],
        "language": {
            "searchPlaceholder": "Cari Data",
            "emptyTable": "Tidak ada data",
            "sInfo": "Menampilkan _START_ - _END_ Dari _TOTAL_ Data",
            "sSearch": '<i class="fa fa-search"></i>',
            "sLengthMenu": "Menampilkan &nbsp; _MENU_ &nbsp; Data",
            "infoEmpty": "",
            "paginate": {
                    "previous": "Sebelumnya",
                    "next": "Selanjutnya",
                 }
          }

        });

      $('#data7').dataTable({
          "responsive":true,

          "pageLength": 10,
        "lengthMenu": [[10, 20, 50, - 1], [10, 20, 50, "All"]],
        "language": {
            "searchPlaceholder": "Cari Data",
            "emptyTable": "Tidak ada data",
            "sInfo": "Menampilkan _START_ - _END_ Dari _TOTAL_ Data",
            "sSearch": '<i class="fa fa-search"></i>',
            "sLengthMenu": "Menampilkan &nbsp; _MENU_ &nbsp; Data",
            "infoEmpty": "",
            "paginate": {
                    "previous": "Sebelumnya",
                    "next": "Selanjutnya",
                 }
          }

        });
});
       
      $('.datepicker').datepicker({
        format: "mm",
        viewMode: "months",
        minViewMode: "months"
      });
      $('.datepicker2').datepicker({
        format:"dd-mm-yyyy"
      }); 

      function simpan()
      {
        var a = $('#save_customer').serialize();
        $.ajax({
          url : baseUrl + "/penjualan/POSretail/retail/store",
          type: 'get',
          data: a,
          success:function(response){
            $('#myModal').modal('hide');
              $("input[name='nama_cus']").val('');
              $("input[name='tgl_lahir']").val('');
              $("input[name='email']").val('');
              $("input[name='tipe_cust']").val('');
              $("input[name='no_hp']").val('');
              $("textarea[name='alamat']").val('');
              alert('Data Tersimpan');
              window.location.reload();
          }
        })
      }

      $("input[name='s_member']").focus();

      function sal_save_final()
      {
        var bb = $('#save_sform :input').serialize();
        var cc = $('#save_item :input').serialize();
        var data=tableDetail.$('input').serialize();
        $.ajax({
          url : baseUrl + "/penjualan/POSretail/retail/sal_save_final",
          type: 'get',
          data: bb+'&'+cc+'&'+data,

          success:function(response){
            $('#proses').modal('hide');
              $("input[name='s_member']").val('');
              $("input[name='s_gross']").val('');
              $("input[name='s_disc_percent']").val('');
              $("input[name='s_disc_value']").val('');
              $("input[name='s_pajak']").val('');
              $("input[name='s_net']").val('');
              $("input[name='sd_qty[]']").val('');
              $("input[name='sd_sell[]']").val('');
              $("input[name='s_pembayaran[]']").val('');
              $("input[name='s_dibayarkan']").val('');
              $("input[name='s_kembalian']").val('');
              $("input[name='sd_disc_percent[]']").val('');
              $("input[name='sd_disc_value[]']").val('');
              alert('Berhasil');
              window.location.reload();
              }         
        })
      }

      function sal_save_draft()
      {
        var bb = $('#save_sform :input').serialize();
        var cc = $('#save_item :input').serialize();
        var data=tableDetail.$('input').serialize();
        $.ajax({
          url : baseUrl + "/penjualan/POSretail/retail/sal_save_draft",
          type: 'get',
          data: bb+'&'+cc+'&'+data,
          success:function(response){
              $("input[name='id_cus']").val('');
              $("input[name='s_gross']").val('');
              $("input[name='s_disc_percent']").val('');
              $("input[name='s_disc_value']").val('');
              $("input[name='s_pajak']").val('');
              $("input[name='s_net']").val('');
              $("input[name='sd_qty[]']").val('');
              $("input[name='sd_sell[]']").val('');
              $("input[name='s_pembayaran[]']");
              $("input[name='s_dibayarkan']").val('');
              $("input[name='s_kembalian']").val('');
              $("input[name='sd_disc_percent[]']").val('');
              $("input[name='sd_disc_value[]']").val('');
              alert('di simpan sebagai draft');
              window.location.reload();
              }
        })
      }

      function sal_save_onProgres()
      {
        var bb = $('#save_sform :input').serialize();
        var cc = $('#save_item :input').serialize();
        var data=tableDetail.$('input').serialize();
        $.ajax({
          url : baseUrl + "/penjualan/POSretail/retail/sal_save_onprogres",
          type: 'get',
          data: bb+'&'+cc+'&'+data,

          success:function(response){
            $('#proses').modal('hide');
              $("input[name='s_member']").val('');
              $("input[name='s_gross']").val('');
              $("input[name='s_disc_percent']").val('');
              $("input[name='s_disc_value']").val('');
              $("input[name='s_pajak']").val('');
              $("input[name='s_net']").val('');
              $("input[name='sd_qty[]']").val('');
              $("input[name='sd_sell[]']").val('');
              $("input[name='s_pembayaran[]']").val('');
              $("input[name='s_dibayarkan']").val('');
              $("input[name='s_kembalian']").val('');
              $("input[name='sd_disc_percent[]']").val('');
              $("input[name='sd_disc_value[]']").val('');
              alert('Berhasil Menyimpan On_Progres');
              window.location.reload();
              }         
        })
      }
      

   


      function lihatDetail(idDetail){
         $.ajax({
          url : baseUrl + "/penjualan/POSretail/getdata",
          type: 'get',
          data: {x:idDetail},
          success:function(response){
            $('#xx').html(response);

          }
        });
        
      }

      function lihatDetailReq(idDetail){
         $.ajax({
          url : baseUrl + "/penjualan/POSretail/getdataReq",
          type: 'get',
          data: {r:idDetail},
          success:function(response){
            $('#lihatDetailReq').html(response);

          }
        });
        
      }

      // customer 

      $( "#nama" ).autocomplete({
        source: baseUrl+'/penjualan/POSretail/retail/autocomplete',
        minLength: 1,
        select: function(event, ui) 
        {
        $('#id_cus').val(ui.item.id);
        $('#nama').val(ui.item.label);
        $('#alamat2').val(ui.item.alamat);
        $("input[name='item']").focus();
        }

      });

     function setnama()
     {
      
      var id=$('#nama').val();
      $.ajax({
        url:baseUrl+'/penjualan/POSretail/retail/setnama/'+id,
        type:'get',
        success:function(data)
        {
          $('#alamat2').val(ui.item.alamat);
        }
      })
     }

     //namaitem

        $( "#namaitem" ).autocomplete({
        source: baseUrl+'/penjualan/POSretail/retail/autocompleteitem',
        minLength: 1,
        select: function(event, ui) 
        {
        $('#harga').val(ui.item.harga);
        $('#kode').val(ui.item.kode);
        $('#detailnama').val(ui.item.nama);
        $('#namaitem').val(ui.item.label);
        $('#satuan').val(ui.item.satuan);
        $('#s_qty').val(ui.item.s_qty);

        $('#qty').val(ui.item.qty);
        $('#qty').val('1');
        $("input[name='qty']").focus();
        }
      });


  function UpdateHarga(kode)
    {
      var qty = $('.qty-'+kode).val();
      var harga = $('.harga-'+kode).val();
      console.log(harga);
      var hasil = convertToAngka(harga);
      console.log(hasil);
      hasil = hasil * qty;
      var hasilRp = convertToRupiah(hasil);
      $('.hasil-'+kode).val(hasilRp);
      console.log(hasilRp);
      UpdateTotal();
    } 
    var index=0;
    var tamp=[];
    function tambah() 
      {   
        var kode  =$('#kode').val();      
        var nama  =$('#detailnama').val();             
        var harga =SetFormRupiah($('#harga').val());  
        var y     =($('#harga').val());          
        var qty   =parseInt($('#qty').val());
        var satuan=$('#satuan').val();
        var hasil = parseFloat(qty * y).toFixed(2);
        var x = SetFormRupiah(hasil);
        var b = angkaDesimal(x);
        var stok = $('#s_qty').val();
        var Hapus = '<button type="button" class="btn btn-danger hapus" onclick="hapus(this)"><i class="fa fa-trash-o"></i></button>';
        var index = tamp.indexOf(kode);
      
        if ( index == -1){         
          tableDetail.row.add([
            
            nama+'<input type="hidden" name="kode_item[]" class="kode_item kode" value="'+kode+'"><input type="hidden" name="nama_item[]" class="nama_item" value="'+nama+'"> ',
            '<input size="30" style="text-align:right" type="number"  name="sd_qty[]" class="sd_qty form-control qty-'+kode+'" value="'+qty+'" onkeyup="UpdateHarga(\''+kode+'\'); qtyInput(\''+stok+'\', \''+kode+'\')" onchange="qtyInput(\''+stok+'\', \''+kode+'\')"> ',
            satuan+'<input type="hidden" name="satuan[]" class="satuan" value="'+satuan+'"> ',
            '<input type="text" size="10" readonly style="text-align:right" name="harga_item[]" class="harga_item form-control harga-'+kode+'" value="'+harga+'"> ',
            '<input type="text" size="10"  style="text-align:right" name="" class="form-control" value="">',
            '<input type="text" size="10"  style="text-align:right" name="" class="form-control" value="">',
            '<input type="text" size="200" readonly style="text-align:right" name="hasil[]" id="hasil" class="form-control hasil hasil-'+kode+'" value="'+x+'"><input type="hidden" size="200" readonly style="text-align:right" name="" id="hasil2" class="hasil2 form-control" value="'+b+'">',          
            Hapus
            ]);
          tableDetail.draw();

        index++;
        tamp.push(kode);
            }else{
            var qtyLawas= parseInt($(".qty-"+kode).val());
            $(".qty-"+kode).val(qtyLawas+qty);
            var q = parseInt(qtyLawas+qty);
            var l = parseFloat(q * y).toFixed(2);;
            var k = SetFormRupiah(l);
            $(".hasil-"+kode).val(k);
            }

            $(function(){
            var values = $("input[name='sd_qty[]']")
            .map(function(){return $(this).val();}).get();
            });

            UpdateTotal();
        }

        $('.total').keyup(function() {            
                var sum = angkaDesimal($('#total').val());                  
                var bayar = angkaDesimal($('#bayar').val());
                var hasil=parseFloat(bayar - sum).toFixed(2);
               $('#kembalian').val(SetFormRupiah(hasil));
            });  

    function hapus(a)
    {
      var par = a.parentNode.parentNode;
      tableDetail.row(par).remove().draw(false);

      var sum = 0;
          $('.hasil').each(function() {
              sum += Number($(this).val());
          });
          $('#total').val(sum);

      var inputs = document.getElementsByClassName( 'kode' ),
      names  = [].map.call(inputs, function( input ) {
          return input.value;
      });
      tamp = names;

      UpdateTotal();
    }

  function setQty(){
      var qty = $('#s_qty').val();
      var input = $('#qty').val();
      qty = parseInt(qty);
      input = parseInt(input);
      if (input > qty) {
        $('#qty').val('');
      }
    }

    function qtyInput(stok, kode){
      input = $('.qty-'+kode).val();
      input = parseInt(input);
      stok = parseInt(stok);
      if (input > stok || input < 1) {
        $('.qty-'+kode).val(1);
      }
      UpdateHarga(kode);
    }
          $('#qty').keypress(function(e){
              var charCode;
              if ((e.which && e.which == 13)) {
                charCode = e.which;
              }else if (window.event) {
                  e = window.event;
                  charCode = e.keyCode;
              }
              if ((e.which && e.which == 13)){
                var isi   = $('#qty').val();
                var jumlah= $('#detailnama').val();
                var stok  = $('#s_qty').val();
                if(isi == '' || jumlah == '' || stok == ''){
                  toastr.warning('Item Jumlah Stok tidak boleh kosong');
                  return false;
              }
                tambah();
                $("input[name='item']").val('');
                $("input[name='s_qty']").val('');
                $("input[name='qty']").val('');
                $("input[name='item']").focus(); 
                   return false;

              }
           });



   

  function rhapus(a){
    var par = a.parentNode.parentNode;
    tableReq.row(par).remove().draw(false);

  var inputs = document.getElementsByClassName( 'kode' ),
      names  = [].map.call(inputs, function( input ) {
          return input.value;
      });
      rtamp = names;

     }

  function convertToRupiah(angka) 
  {
    var rupiah = '';        
    var angkarev = angka.toString().split('').reverse().join('');
    for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
    var hasil = 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
    return hasil+',00'; 
  }

  function convertToAngka(rupiah)
  {
      return parseInt(rupiah.replace(/,.*|[^0-9]/g, ''), 10);
  }

  function UpdateTotal(){
    var inputs = document.getElementsByClassName( 'hasil' ),
        hasil  = [].map.call(inputs, function( input ) {
            return input.value;
        });
    var total = 0;
    console.log(hasil);
    for (var i = hasil.length - 1; i >= 0; i--) 
    {
      hasil[i] = convertToAngka(hasil[i]);
      hasil[i] = parseInt(hasil[i]);
      total = total + hasil[i];
    }
    total = convertToRupiah(total);
    $('#total').val(total);
  }

  function cariTanggal()
    {
      var tgl1=$('#tanggal1').val();
      var tgl2=$('#tanggal2').val();
      $.ajax({
        url : baseUrl + "/penjualan/POSretail/get-tanggal/"+tgl1+'/'+tgl2,
        type: 'get',   
        
        success:function(response)
        {

         $('#dt_nota_jual').html(response);
        }
          });
    }

  $(document).ready(function(){ 
      $('.autoCari').trigger('click'); 
    });

  function cariTanggalJual()
    {
      var tgl1=$('#tanggal3').val();
      var tgl2=$('#tanggal4').val();
      $.ajax({
        url : baseUrl + "/penjualan/POSretail/get-tanggaljual/"+tgl1+'/'+tgl2,
        type: 'get',   
        success:function(response)
        {

         $('#Data_Jual').html(response);
        }
          });
    }

   $(document).on('click', '.pagination a',function(event)
    {
      $('#loading').css('display','')
        $('li').removeClass('active');
        $(this).parent('li').addClass('active');
        event.preventDefault();
        var myurl = $(this).attr('href');
       var page=$(this).attr('href').split('page=')[1];       
       getData(page);

    });



function getData(page){   
  
  $.ajax(
        {
            url: baseUrl + '/penjualan/POSretail/stock/table-stock?page=' + page,
            type: "get",
            datatype: "html",
           
        })
        .done(function(data)
        {          
          $("#table-stock").html(data);
          $('#loading').css('display','none')
         
        })
        .fail(function(jqXHR, ajaxOptions, thrownError)
        {
          $('#loading').css('display','none')
        });
       
}


 tableReq=$('#detail-req').DataTable();

      //transfer thoriq
    $("#rnamaitem").autocomplete({
        source: baseUrl+'/penjualan/POSretail/retail/transfer-item',
        minLength: 1,
        select: function(event, ui) 
        {
          console.log(ui);
        $('#rnamaitem').val(ui.item.label);        
        $('#rkode').val(ui.item.code);
        $('#rdetailnama').val(ui.item.name);        
        $('#rqty').val(ui.item.qty);
        $("input[name='rqty']").focus();
        }
      });

        //guyon
  $('#rqty').keypress(function(e){
      var charCode;
      if ((e.which && e.which == 13)) {
        charCode = e.which;
      }else if (window.event) {
          e = window.event;
          charCode = e.keyCode;
      }
      if ((e.which && e.which == 13)){
        var isi   = $('#rqty').val();
        var jumlah= $('#rdetailnama').val();
        if(isi == '' || jumlah == ''){
          toastr.warning('Item dan Jumlah tidak boleh kosong');
          return false;
      }
        tambahreq();
        $("#rnamaitem").val('');
        $("#rqty").val('');
        $("input[name='rnamaitem']").focus();
           return false;  
      }
   });

   var rindex=0;
    var rtamp=[];
            function tambahreq() {   
        var kode  =$('#rkode').val();      
        var nama  =$('#rdetailnama').val();                                
        var qty   =parseInt($('#rqty').val());        
        var Hapus = '<button type="button" class="btn btn-danger hapus" onclick="rhapus(this)"><i class="fa fa-trash-o"></i></button>';
        var rindex = rtamp.indexOf(kode);

        if ( rindex == -1){     
            tableReq.row.add([
              kode,
              nama+'<input type="hidden" name="kode_item[]" class="kode_item kode" value="'+kode+'"><input type="hidden" name="nama_item[]" class="nama_item" value="'+nama+'"> ',
              '<input size="30" style="text-align:right;" type="text"  name="sd_qty[]" class="sd_qty form-control r_qty-'+kode+'" value="'+qty+'"> ',
              
              Hapus
              ]);

            tableReq.draw();
        rindex++;
        // console.log(rtamp);
        rtamp.push(kode);
            }else{
            var qtyLawas= parseInt($(".r_qty-"+kode).val());
            $(".r_qty-"+kode).val(qtyLawas+qty);
            }

          var kode  =$('#rkode').val('');      
          var nama  =$('#rdetailnama').val('');
        }

       function simpanTransfer() 
      {
        var item = $('#save_request :input').serialize();
        var data = tableReq.$('input').serialize();
        $.ajax({
        url : baseUrl + "/penjualan/POSretail/retail/simpan-transfer",
        type: 'get',
        data: item+'&'+data,
        success:function(response){
              $("input[name='ri_nomor']").val('');
              $("input[name='ri_admin']").val('');
              $("input[name='ri_tanggal']").val('');
              $("input[name='ri_ketetangan']").val('');
              alert('Proses Telah Terkirim');
              window.location.reload();         
        }
        })
      }


      </script>
@endsection()