@extends('main')
@section('content')
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                        <div class="page-title">Form Belanja Harian</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i></i>&nbsp;Purchasing&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Belanja Harian&nbsp;&nbsp;</li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Form Belanja Harian</li>
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
                            <li class="active"><a href="#alert-tab" data-toggle="tab">Form Belanja Harian</a></li>
                            <!-- <li><a href="#note-tab" data-toggle="tab">2</a></li>
                            <li><a href="#label-badge-tab" data-toggle="tab">3</a></li> -->
                          </ul>
                    <div id="generalTabContent" class="tab-content responsive" >
                      <!-- div alert-tab -->
                      <div id="alert-tab" class="tab-pane fade in active">
                      <div class="row">  
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          
                          <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: -10px;margin-bottom: 15px;">  
                           <div class="col-md-5 col-sm-6 col-xs-8" >
                             <h4>Form Belanja Harian</h4>
                           </div>
                           <div class="col-md-7 col-sm-6 col-xs-4" align="right" style="margin-top:5px;margin-right: -25px;">
                             <a href="{{ url('purchasing/belanjaharian/belanja') }}" class="btn"><i class="fa fa-arrow-left"></i></a>
                           </div>
                         </div>

                         <form method="post">
                              <div class="col-md-12 col-sm-12 col-xs-12 tamma-bg" style="margin-bottom: 20px; padding-top:30px;padding-bottom:20px;">
                               
                               
                              

                                 <div class="col-md-2 col-sm-3 col-xs-12">
                                  
                                      <label class="tebal">Tanggal Beli</label>
                                  
                                </div>

                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    <div class="input-icon ">
                                      <i class="glyphicon glyphicon-calendar"></i>
                                        <input type="text" maxlength="10" readonly="" class="form-control input-sm" value="{{ date('d/m/Y') }}">
                                        <input type="hidden" name="tgl_beli" value="{{ date('d/m/Y') }}">
                                    </div>
                                  </div>
                                </div>

                                <div class="col-md-2 col-sm-3 col-xs-12">
                                  
                                   
                                      <label class="tebal">No Nota</label>
                                  
                                </div>

                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                   
                                      <input type="text" readonly="" class="form-control input-sm">                
                                    
                                  </div>
                                </div>

                                <div class="col-md-2 col-sm-3 col-xs-12">
                                   
                                    <label class="tebal">Total Gross</label>
                                  
                                </div>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    <div class="input-icon ">
                                      <i class="fa fa-money"></i>
                                      <input type="text" class="form-control input-sm" readonly="">
                                    </div>
                                  </div>
                                </div>


                                <div class="col-md-2 col-sm-3 col-xs-12">
                                  
                                      <label class="tebal">Petugas Administrator</label>
                                  
                                </div>

                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                      <input type="text" readonly="" value="{{ Auth::user()->username }}" class="form-control input-sm">
                                      <input type="hidden" value="{{ Auth::user()->id }}" name="">
                                  </div>
                                </div>

                                <div class="col-md-2 col-sm-3 col-xs-12">
                                  
                                    <label class="tebal">Penyesuian</label>
                                 
                                </div>

                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                   
                                      <input type="text" id="penyesuian" name="penyesuian" class="form-control input-sm" ">
                                    
                                  </div>
                                </div>

                                <div class="col-md-2 col-sm-3 col-xs-12">
                                  
                                      <label class="tebal">Total Net</label>
                                  
                                </div>

                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                      <input type="text"  readonly="" class="form-control input-sm">
                                  </div>
                                </div>

                                <div class="col-md-2 col-sm-3 col-xs-12">
                                  
                                      <label class="tebal">Jumlah Yang Dibayarkan</label>
                                  
                                </div>

                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                      <input type="text"  class="form-control input-sm">
                                  </div>
                                </div>

                              </div>


                              <div class="table-responsive">
                                <table class="table tabelan table-bordered" id="data">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th width="25%">Nama Barang</th>
                                      <th>QTY</th>
                                      <th width="5%">Satuan</th>
                                      <th>Harga Satuan</th>
                                      <th>Total Harga</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>Tepung Beras</td>
                                      <td>
                                        <input type="text" class="form-control input-sm" name="">
                                      </td>
                                      <td>Kg</td>
                                      <td>
                                        <input class="form-control input-sm" type="text" readonly="" name="">
                                      </td>
                                      <td>
                                        <input type="text" class="form-control input-sm" name="">
                                      </td>
                                    </tr>

                                  </tbody>
                                </table>
                              </div>

                              <div align="right" style="margin-top:20px;">
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
@endsection()