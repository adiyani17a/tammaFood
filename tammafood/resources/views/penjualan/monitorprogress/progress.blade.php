@extends('main')
@section('content')
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                        <div class="page-title">Monitoring Progress Penjualan</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i></i>&nbsp;Penjualan&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Monitoring Progress Penjualan</li>
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
                                <li class="active"><a href="#alert-tab" data-toggle="tab">Monitoring Progress Penjualan</a></li>
                                <!-- <li><a href="#note-tab" data-toggle="tab">2</a></li>
                                <li><a href="#label-badge-tab" data-toggle="tab">3</a></li> -->
                              </ul>
                              <div id="generalTabContent" class="tab-content responsive">
                                
                                <div id="alert-tab" class="tab-pane fade in active">
                                 
                                  <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    
                                      <div class="col-md-2 col-sm-4 col-xs-12">
                                        <label class="tebal">Bulan</label>
                                      </div>
                                      <div>
                                        <div class="col-md-3 col-sm-8 col-xs-12">
                                          <div class="form-group">
                                            <input type="text" name="bulan" class="form-control input-sm datepicker">
                                          </div>
                                        </div>
                                      </div>

                                      <div class="table-responsive">
                                        <table class="table tabelan table-hover table-bordered" width="100%" id="" cellspacing="0">
                                          <thead>
                                            <th class="wd-15p">No</th>
                                            <th class="wd-15p">Bulan</th>
                                            <th class="wd-15p">Total Target Penjualan</th>
                                            <th class="wd-15p">Kelola</th>
                                          </thead>
                                          <tbody>  
                                            <tr>
                                              <td colspan="4" align="center">Tidak Ada Data</td>

                                            </tr>                            
                                          </tbody>
                                        </table>
                                      </div>

                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group" style="margin-top: 25px;">
                                          <h4 style="font-family: 'Raleway', sans-serif;">Penjualan Tertinggi</h4>
                                        </div>
                                      </div>

                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: -25px;">
                                        <hr>
                                      </div>

                                      <div class="table-responsive">
                                        <table class="table tabelan table-bordered">
                                          <thead>
                                            <tr>
                                              <th>No.</th>
                                              <th>Nama Barang</th>
                                              <th>Jumlah Penjualan</th>
                                              <th>Total Penjualan</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>1</td>
                                              <td>Tepung Terigu</td>
                                              <td>4096 Kg</td>
                                              <td>Rp. 4.096.000,-</td>
                                            </tr>
                                            <tr>
                                              <td>2</td>
                                              <td>Tepung Jagung</td>
                                              <td>2048 Kg</td>
                                              <td>Rp. 2.048.000,-</td>
                                            </tr>
                                            <tr>
                                              <td>3</td>
                                              <td>Tepung Beras</td>
                                              <td>1024 Kg</td>
                                              <td>Rp. 1.024.000,-</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>

                                      <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:25px;">
                                        <div class="form-group">
                                          <h4 style="font-family: 'Raleway', sans-serif;">Penjualan Real Time</h4>
                                        </div>
                                      </div>
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: -25px;">
                                        <hr>
                                      </div>
                                      <div class="table-responsive">
                                        <table class="table tabelan table-bordered" id="data2">
                                          <thead>
                                            <tr>
                                              <th>Tanggal</th>
                                              <th>No Nota</th>
                                              <th>Nama Pelanggan</th>
                                              <th>No Hp</th>
                                              <th>Barang</th>
                                              <th>QTY</th>
                                              <th>Total Harga</th>
                                              <th>Kasir</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>19/02/2018</td>
                                              <td>PJN/19/02/2018/01</td>
                                              <td>Alpha Bravo</td>
                                              <td>085331219757</td>
                                              <td>
                                                <ul>
                                                  <li>Tepung Beras</li>
                                                  <li>Tepung Jagung</li>
                                                  <li>Tepung Terigu</li>
                                                </ul>
                                              </td>
                                              <td>
                                                <ul>
                                                  <li>1 Kg</li>
                                                  <li>1 Kg</li>
                                                  <li>1 Kg</li>
                                                </ul>
                                              </td>
                                              <td>Rp. 30.000,-</td>
                                              <td>Zulu Yankee</td>
                                            </tr>
                                            <tr>
                                              <td>12/02/2018</td>
                                              <td>PJN/12/02/2018/02</td>
                                              <td>Alpha Bravo</td>
                                              <td>085331219757</td>
                                              <td>
                                                <ul>
                                                  <li>Tepung Beras</li>
                                                  <li>Tepung Jagung</li>
                                                  <li>Tepung Terigu</li>
                                                </ul>
                                              </td>
                                              <td>
                                                <ul>
                                                  <li>1 Kg</li>
                                                  <li>1 Kg</li>
                                                  <li>1 Kg</li>
                                                </ul>
                                              </td>
                                              <td>Rp. 30.000,-</td>
                                              <td>Zulu Yankee</td>
                                            </tr>
                                            <tr>
                                              <td>23/02/2018</td>
                                              <td>PJN/23/02/2018/03</td>
                                              <td>Alpha Bravo</td>
                                              <td>085331219757</td>
                                              <td>
                                                <ul>
                                                  <li>Tepung Beras</li>
                                                  <li>Tepung Jagung</li>
                                                  <li>Tepung Terigu</li>
                                                </ul>
                                              </td>
                                              <td>
                                                <ul>
                                                  <li>1 Kg</li>
                                                  <li>1 Kg</li>
                                                  <li>1 Kg</li>
                                                </ul>
                                              </td>
                                              <td>Rp. 30.000,-</td>
                                              <td>Zulu Yankee</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>

                                    </div>
                                  </div>
                                              
                                </div><!-- /div alert-tab -->


                               <!-- div note-tab -->
                                <div id="note-tab" class="tab-pane fade">
                                  <div class="row">
                                    <div class="panel-body">
                                      <!-- Isi Content -->we we we
                                    </div>
                                  </div>
                                </div><!--/div note-tab -->


                                <!-- div label-badge-tab -->
                                <div id="label-badge-tab" class="tab-pane fade">
                                  <div class="row">
                                    <div class="panel-body">
                                      <!-- Isi content -->we
                                    </div>
                                  </div>
                                </div><!-- /div label-badge-tab -->
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
      $('.datepicker').datepicker({
        format: "mm/yyyy",
        viewMode: "months",
        minViewMode: "months"
      });
      $('.datepicker2').datepicker({
        format:"dd/mm/yyyy"
      });    
      </script>
@endsection()