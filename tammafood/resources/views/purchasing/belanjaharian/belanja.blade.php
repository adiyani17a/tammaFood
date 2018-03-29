@extends('main')
@section('content')
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                        <div class="page-title">Belanja Harian</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i></i>&nbsp;Purchasing&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Belanja Harian</li>
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
                                <li class="active"><a href="#alert-tab" data-toggle="tab">Belanja Harian</a></li>
                                <!-- <li><a href="#note-tab" data-toggle="tab">2</a></li>
                                <li><a href="#label-badge-tab" data-toggle="tab">3</a></li> -->
                              </ul>
                              <div id="generalTabContent" class="tab-content responsive">
                                
                                <div id="alert-tab" class="tab-pane fade in active">
                                 
                                  <div class="row" style="">
                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                      <div class="col-md-8 col-sm-12 col-xs-12" style="padding-bottom: 10px;">
                                        <div style="margin-left:-30px;">
                                          <div class="col-md-3 col-sm-2 col-xs-12">
                                            <label class="tebal">Tanggal Belanja</label>
                                          </div>

                                          <div class="col-md-6 col-sm-7 col-xs-12">
                                            <div class="form-group" style="display: ">
                                              <div class="input-daterange input-group">
                                                <input id="tanggal" data-provide="datepicker" class="form-control input-sm" name="tanggal" type="text">
                                                <span class="input-group-addon">-</span>
                                                <input id="tanggal" data-provide="datepicker" class="input-sm form-control" name="tanggal" type="text">
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-md-3 col-sm-3 col-xs-12" align="center">
                                          <button class="btn btn-primary btn-sm btn-flat" type="button">
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
                                        
                                      </div>

                                      <div align="right">
                                        <a href="{{ url('/purchasing/belanjaharian/tambah_belanja') }}" class="btn btn-box-tool"><i class="fa fa-plus"></i>&nbsp; Tambah Data</a>
                                      </div>

                                      <div class="table-responsive" style="margin-top: 15px;">
                                        <table class="table tabelan table-bordered" id="data">
                                          <thead>
                                            <th>No</th>
                                            <th>Tanggal Belanja</th>
                                            <th>Nota</th>
                                            <th>Total Gross</th>
                                            <th>Penyesuaian</th>
                                            <th>Total Net</th>
                                            <th>Item</th>
                                            <th>Aksi</th>
                                          </thead>
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