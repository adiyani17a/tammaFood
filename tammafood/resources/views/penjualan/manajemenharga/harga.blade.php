@extends('main')
@section('content')
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                        <div class="page-title">Manajemen Harga</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i></i>&nbsp;Penjualan&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Manajemen Harga</li>
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
                                <li class="active"><a href="#alert-tab" data-toggle="tab">Manajemen Harga</a></li>
                                <!-- <li><a href="#note-tab" data-toggle="tab">2</a></li>
                                <li><a href="#label-badge-tab" data-toggle="tab">3</a></li> -->
                              </ul>
                              <div id="generalTabContent" class="tab-content responsive">
                                
                                @include('penjualan.manajemenharga.modal')

                                <div id="alert-tab" class="tab-pane fade in active">
                                 
                                  <div class="row">

                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                      <div align="right" style="margin-bottom: 15px;">
                                        <button class="btn btn-box-tool" data-target="#tambah" data-toggle="modal"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Manajemen Harga</button>
                                      </div>

                                      <div class="table-responsive">
                                        <table class="table tabelan table-bordered table-hover" id="data">
                                          <thead>
                                            <tr>
                                              <th>No</th>
                                              <th>No Manajemen Harga</th>
                                              <th>Aksi</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>1</td>
                                              <td>08022018/MH/001</td>
                                              <td>
                                                <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td>2</td>
                                              <td>08022018/MH/002</td>
                                              <td>
                                                <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td>3</td>
                                              <td>08022018/MH/003</td>
                                              <td>
                                                <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>

                                    </div>

                                  </div>
                                                
                                </div>
                                <!-- /div alert-tab -->

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