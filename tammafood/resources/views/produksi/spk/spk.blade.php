@extends('main')
@section('content')
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                        <div class="page-title">Manajemen SPK</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i></i>&nbsp;Produksi&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Manajemen SPK</li>
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
                                <li class="active"><a href="#alert-tab" data-toggle="tab">Manajemen SPK</a></li>
                                <!-- <li><a href="#note-tab" data-toggle="tab">2</a></li>
                                <li><a href="#label-badge-tab" data-toggle="tab">3</a></li> -->
                              </ul>
                              <div id="generalTabContent" class="tab-content responsive">
                                
                                <div id="alert-tab" class="tab-pane fade in active">
                                 
                                    <div class="row" style="margin-top: -5px;">
                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                     
                           
                                        <div class="col-md-12 col-sm-12 col-xs-12" align="right">
                                          <a href="#" data-toggle="modal" data-target="#create" class="btn btn-box-tool" style="margin-bottom: 15px;"><i class="fa fa-plus"></i>&nbsp;Buat SPK</a>
                                        </div>

                                        <!-- Modal -->
                                        @include('produksi.spk.create')
                                        <!-- End Modal -->

                                        <div class="table-responsive">
                                          <table class="table tabelan table-hover table-bordered" width="100%" cellspacing="0" id="data">
                                            <thead>
                                              <tr>
                                                <th>Tanggal</th>
                                                <th>Item</th>
                                                <th>Rencana Produksi</th>
                                                <th>Bahan Baku</th>
                                                <th>Stok Bahan Baku</th>
                                                <th>Kekurangan</th>
                                                <th>Following Up</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>15-02-2018</td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                  <a class="btn-link" data-toggle="modal" data-target="#1">Tepung Beras</a>
                                                </td>
                                                <td>25</td>
                                                <td>-10</td>
                                                <td><button class="btn-link"><i class="fa fa-check"></i></button></td>
                                              </tr>
                                               <tr>
                                                <td>16-02-2018</td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                  <a class="btn-link" data-toggle="modal" data-target="#1">Tepung Terigu</a>
                                                </td>
                                                <td>20</td>
                                                <td>0</td>
                                                <td><button class="btn-link"><i class="fa fa-check"></i></button></td>
                                              </tr>
                                              <tr>
                                                <td>17-02-2018</td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                  <a class="btn-link" data-toggle="modal" data-target="#1">Tepung Jagung</a>
                                                </td>
                                                <td>20</td>
                                                <td>0</td>
                                                <td><button class="btn-link"><i class="fa fa-check"></i></button></td>
                                              </tr>
                                            </tbody>
                                          
                                            </table> 
                                          </div>                                       
                                        </div>
                                      </div>
                                  
                                </div>
                                <!-- /div alert-tab -->

                                <!-- Rencana -->
                                @include('produksi.spk.bahan')
                                <!-- End Rencana -->

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
        format: "mm",
        viewMode: "months",
        minViewMode: "months"
      });
      $('.datepicker2').datepicker({
        format:"dd-mm-yyyy"
      });    
      </script>
@endsection()