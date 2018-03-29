@extends('main')
@section('content')
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                        <div class="page-title">Form Manajemen Output Produksi</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i></i>&nbsp;Produksi&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Manajemen Output Produksi</li><li><i class="fa fa-angle-right"></i>&nbsp;Form Manajemen Output Produksi&nbsp;&nbsp;</i>&nbsp;&nbsp;</li>
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
                              <li class="active"><a href="#alert-tab" data-toggle="tab">Form Manajemen Output Produksi</a></li>
                            <!-- <li><a href="#note-tab" data-toggle="tab">2</a></li>
                            <li><a href="#label-badge-tab-tab" data-toggle="tab">3</a></li> -->
                        </ul>
                        <div id="generalTabContent" class="tab-content responsive">
                          <div id="alert-tab" class="tab-pane fade in active">
                          <div class="row">
                          
                         <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: -10px;margin-bottom: 15px;">  
                           <div class="col-md-5 col-sm-6 col-xs-8" >
                             <h4>Form Manajemen Output Produksi</h4>
                           </div>
                           <div class="col-md-7 col-sm-6 col-xs-4" align="right" style="margin-top:5px;margin-right: -25px;">
                             <a href="{{ url('produksi/o_produksi/produksi3') }}" class="btn"><i class="fa fa-arrow-left"></i></a>
                           </div>
                         </div>
                         
                        
                         <div class="col-md-12 col-sm-12 col-xs-12">
                            <form method="POST">

                                                        <div class="col-md-12 col-sm-12 col-xs-12 tamma-bg" style="padding-bottom: 10px;padding-top: 20px;margin-bottom: 15px;">
                                                            

                                                            <div class="col-md-3 col-sm-12 col-xs-12">
                                                                
                                                                    <label class="tebal">Tanggal Produksi</label>
                                                            </div>
                                                            <div class="col-md-3 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <input value="{{ date('d-m-Y') }}" class="form-control datepicker2 input-sm" type="text">
                                                                </div>
                                                                
                                                            </div>

                                                            <div class="col-md-3 col-sm-12 col-xs-12">
                                                                
                                                                    <label class="tebal">Nama Petugas</label>
                                                            </div>
                                                            <div class="col-md-3 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <input type="text" readonly="" class="form-control input-sm" name="" value="{{ Auth::user()->name }}">
                                                                </div>
                                                                
                                                            </div>

                                                            
                                                        </div>

                                                        
                                                            <div class="table-responsive">
                                                                <table class="table tabelan table-bordered table-striped" id="data">
                                                                  <thead>
                                                                 <tr>
                                                                    <th>Nama Item</th>
                                                                    <th>Stok Tersedia</th>
                                                                    <th>Tambah Stok</th>
                                                                    <th>Satuan</th>
                                                                    <th>Harga HPP</th>
                                                                    <th>Total HPP</th>
                                                                    <th>Ttl Rusak</th>
                                                                </tr>
                                                                </thead>
                                                                  <tbody>
                                                                  </tbody>
                                                                </table>
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
        format:"dd-mm-yyyy",
        endDate:"today"
      });
</script>
@endsection                            
