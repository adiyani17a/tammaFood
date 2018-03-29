@extends('main')
@section('content')
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                        <div class="page-title">Form Manajemen User</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i></i>&nbsp;System&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Manajemen User</li><li><i class="fa fa-angle-right"></i>&nbsp;Form Manajemen User&nbsp;&nbsp;</i>&nbsp;&nbsp;</li>
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
                              <li class="active"><a href="#alert-tab" data-toggle="tab">Form Manajemen User</a></li>
                            <!-- <li><a href="#note-tab" data-toggle="tab">2</a></li>
                            <li><a href="#label-badge-tab-tab" data-toggle="tab">3</a></li> -->
                        </ul>
                        <div id="generalTabContent" class="tab-content responsive">
                          <div id="alert-tab" class="tab-pane fade in active">
                          <div class="row">
                          
                         <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: -10px;margin-bottom: 15px;">  
                           <div class="col-md-5 col-sm-6 col-xs-8" >
                             <h4>Form Manajemen User</h4>
                           </div>
                           <div class="col-md-7 col-sm-6 col-xs-4" align="right" style="margin-top:5px;margin-right: -25px;">
                             <a href="{{ url('system/hakuser/user') }}" class="btn"><i class="fa fa-arrow-left"></i></a>
                           </div>
                         

                            <form method="POST">

                                <div class="col-md-12 col-sm-12 col-xs-12 tamma-bg" style="padding-bottom: 10px;padding-top: 20px;margin-bottom: 15px;">
                                    
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <label class="tebal">Username</label>
                                    </div>

                                    <div class="col-md-3 col-sm-8 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-sm" name="">
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <label class="tebal">Password</label>
                                    </div>

                                    <div class="col-md-3 col-sm-8 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-sm" name="">
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <label class="tebal">Nama Lengkap</label>
                                    </div>

                                    <div class="col-md-3 col-sm-8 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-sm" name="">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        
                                            <label class="tebal">Tanggal Lahir</label>
                                    </div>
                                    <div class="col-md-3 col-sm-8 col-xs-12">
                                        <div class="form-group">
                                            <input class="form-control datepicker2 input-sm" value="02-02-1990" type="text">
                                        </div>
                                        
                                    </div>

                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <label class="tebal">Alamat</label>
                                    </div>

                                    <div class="col-md-9 col-sm-8 col-xs-12">
                                        <div class="form-group">
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>

                                    

                                    

                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        
                                            <label class="tebal">Pilih Akses Grub</label>
                                    </div>
                                    <div class="col-md-3 col-sm-8 col-xs-12">
                                        <div class="form-group">
                                            <select class="form-control input-sm">
                                                <option>Admin</option>
                                                <option>Owner</option>
                                                <option>Kasir</option>
                                            </select>
                                        </div>
                                        
                                    </div>

                                </div>

                                
                                <div class="table-responsive">
                                    <table class="table tabelan table-bordered table-hover" id="data">
                                      <thead>
                                     <tr>
                                        <th>No</th>
                                        <th>Nama Menu</th>
                                        <th>Level 1</th>
                                        <th>Level 2</th>
                                        <th>Level 3</th>
                                        
                                    </tr>
                                    </thead>
                                      <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Master Data Suplier</td>
                                            <td><input type="checkbox" class="checkbox" name="">&nbsp;Lihat</td>
                                            <td><input type="checkbox" class="checkbox" name="">&nbsp;Lihat, Edit</td>
                                            <td><input type="checkbox" class="checkbox" name="">&nbsp;Lihat, Tambah, Hapus, Edit</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Master Data Customer</td>
                                            <td><input type="checkbox" class="checkbox" name="">&nbsp;Lihat</td>
                                            <td><input type="checkbox" class="checkbox" name="">&nbsp;Lihat, Edit</td>
                                            <td><input type="checkbox" class="checkbox" name="">&nbsp;Lihat, Tambah, Hapus, Edit</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Master Data Bahan Baku</td>
                                            <td><input type="checkbox" class="checkbox" name="">&nbsp;Lihat</td>
                                            <td><input type="checkbox" class="checkbox" name="">&nbsp;Lihat, Edit</td>
                                            <td><input type="checkbox" class="checkbox" name="">&nbsp;Lihat, Tambah, Hapus, Edit</td>
                                        </tr>
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
        endDate:'0d'
      });
</script>
@endsection                            
