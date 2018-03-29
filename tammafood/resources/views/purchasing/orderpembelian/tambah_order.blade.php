@extends('main')
@section('content')
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                        <div class="page-title">Form Order Pembelian</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i></i>&nbsp;Purchasing&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Order Pembelian</li><li><i class="fa fa-angle-right"></i>&nbsp;Form Order Pembelian&nbsp;&nbsp;</i>&nbsp;&nbsp;</li>
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
                              <li class="active"><a href="#alert-tab" data-toggle="tab">Form Order Pembelian</a></li>
                            <!-- <li><a href="#note-tab" data-toggle="tab">2</a></li>
                            <li><a href="#label-badge-tab-tab" data-toggle="tab">3</a></li> -->
                        </ul>
                        <div id="generalTabContent" class="tab-content responsive">
                          <div id="alert-tab" class="tab-pane fade in active">
                          <div class="row">
                          
                         <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: -10px;margin-bottom: 15px;">  
                           <div class="col-md-5 col-sm-6 col-xs-8" >
                             <h4>Form Order Pembelian</h4>
                           </div>
                           <div class="col-md-7 col-sm-6 col-xs-4" align="right" style="margin-top:5px;margin-right: -25px;">
                             <a href="{{ url('purchasing/orderpembelian/order') }}" class="btn"><i class="fa fa-arrow-left"></i></a>
                           </div>
                         </div>
                         
                        
                         <div class="col-md-12 col-sm-12 col-xs-12">
                            <form method="POST">

                                                        <div class="col-md-12 col-sm-12 col-xs-12 tamma-bg" style="padding-bottom: 10px;padding-top: 20px;margin-bottom: 15px;">
                                                            

                                                            <div class="col-md-3 col-sm-12 col-xs-12">
                                                                
                                                                    <label class="tebal">No Order Pembelian</label>
                                                            </div>
                                                            <div class="col-md-3 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <input class="form-control input-sm" type="text">
                                                                </div>
                                                                
                                                            </div>

                                                            <div class="col-md-3 col-sm-12 col-xs-12">
                                                                
                                                                    <label class="tebal">Cara Pembayaran</label>
                                                            </div>
                                                            <div class="col-md-3 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <select class="form-control input-sm" >
                                                                        <option value="">Tunai</option>
                                                                        <option value="">Deposit</option>
                                                                        <option value="">Tempo</option>
                                                                    </select>
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                            <div class="col-md-3 col-sm-12 col-xs-12">
                                                                
                                                                    <label class="tebal">Tanggal Order Pembelian</label>
                                                            </div>
                                                            <div class="col-md-3 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <input class="form-control datepicker2 input-sm" type="text">
                                                                </div>
                                                                
                                                            </div>

                                                            <div class="col-md-3 col-sm-12 col-xs-12">
                                                                
                                                                    <label class="tebal">Tanggal Pengiriman</label>
                                                            </div>
                                                            <div class="col-md-3 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <input class="form-control datepicker2 input-sm" type="text">
                                                                </div>
                                                                
                                                            </div>

                                                            <div class="col-md-3 col-sm-12 col-xs-12">
                                                                
                                                                    <label class="tebal">Suplier</label>
                                                            </div>
                                                            <div class="col-md-3 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <select class="form-control input-sm" >
                                                                        <option value="">-- Pilih Nama Suplier --</option>
                                                                        <option value="">Alpha</option>
                                                                        <option value="">Bravo</option>
                                                                        <option value="">Charlie</option>
                                                                    </select>
                                                                </div>
                                                                
                                                            </div>

                                                        </div>

                                                        
                                                            <div class="table-responsive">
                                                                <table id="barang_table" class="table tabelan table-bordered table-striped">
                                                                  <thead>
                                                                 <tr>
                                                                    <th width="50%">Nama Item</th>
                                                                    <th width="10%">Qty</th>
                                                                    <th>Stok Gudang</th>
                                                                    <th width="20%">Harga</th>
                                                                    <th width="25%">Total</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                                </thead>
                                                                  <tbody id="div_item">
                                                                    <tr>
                                                                    <td width="50%;">
                                                                        <input type="text" id="barang" class="form-control input-sm" placeholder="Masukkan nama Item" value="Tepung">
                                                                    </td>
                                                                    <td width="7%;">
                                                                        <input type="text" id="ip_qtyreq" class="form-control input-sm" value="2">
                                                                    </td>
                                                                    <td><input type="text" readonly="" value="25" class="form-control input-sm" name=""></td>
                                                                    <td><input type="text" readonly="" value="10000" class="form-control input-sm" name=""></td>
                                                                    <td><input type="text" readonly="" value="20000" class="form-control input-sm" name=""></td>
                                                                    <td>
                                                                        <button id="add_item" type="button" class="btn btn-info" title="tambah"><i class="fa fa-plus"></i></button>
                                                                    </td>
                                                                    </tr>
                                                                  </tbody>
                                                                </table>
                                                            </div>

                                                            <div class="col-md-3 col-md-offset-9 col-sm-6 col-sm-offset-6 col-xs-12 tamma-bg" style="margin-bottom: 20px; padding-bottom:5px;padding-top: 10px;">

                                                              <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <label class="tebal">Total Harga</label>
                                                              </div>

                                                              <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                  <input type="text" readonly="" class="input-sm form-control" name="">
                                                                </div>
                                                              </div>

                                                              <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <label class="tebal">Diskon</label>
                                                              </div>

                                                              <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                  <input type="text" readonly="" class="input-sm form-control" name="">
                                                                </div>
                                                              </div>

                                                              <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <label class="tebal">PPN</label>
                                                              </div>

                                                              <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                  <input type="text" readonly="" class="input-sm form-control" name="">
                                                                </div>
                                                              </div>

                                                              <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <label class="tebal">Total</label>
                                                              </div>

                                                              <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                  <input type="text" readonly="" class="input-sm form-control" name="">
                                                                </div>
                                                              </div>

                                                            </div>

                                                            <div align="right" style="padding-top:10px;">
                                                                <div id="div_button_save" class="form-group">
                                                                    <button type="button" id="button_save" class="btn btn-primary">Simpan Data</button> 
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
$(document).ready(function() {
    var extensions = {
         "sFilterInput": "form-control input-sm",
        "sLengthSelect": "form-control input-sm"
    }
    // Used when bJQueryUI is false
    $.extend($.fn.dataTableExt.oStdClasses, extensions);
    // Used when bJQueryUI is true
    $.extend($.fn.dataTableExt.oJUIClasses, extensions);
    $('#data').dataTable({
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
    $('#data3').dataTable({
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

      $("#perusahaan").load("/master/datasuplier/tambah_suplier", function(){
      $("#perusahaan").focus();
      });
      $('.datepicker2').datepicker({
        format:"dd-mm-yyyy"
      });
</script>
@endsection                            
