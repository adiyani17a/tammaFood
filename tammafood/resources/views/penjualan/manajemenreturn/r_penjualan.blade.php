@extends('main')
@section('content')
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                        <div class="page-title">Manajemen Return Penjualan</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i></i>&nbsp;Penjualan&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Manajemen Return Penjualan</li>
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
                                <li class="active"><a href="#alert-tab" data-toggle="tab">Manajemen Return Penjualan</a></li>
                                <!-- <li><a href="#note-tab" data-toggle="tab">2</a></li>
                                <li><a href="#label-badge-tab" data-toggle="tab">3</a></li> -->
                              </ul>
                              <div id="generalTabContent" class="tab-content responsive">
                                
                                  @include('penjualan.manajemenreturn.modal')

                                <div id="alert-tab" class="tab-pane fade in active">
                                 
                                  <div class="row">
                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div align="right" style="margin-bottom: 10px;">
                                        <button class="btn btn-box-tool" data-target="#tambah" data-toggle="modal">
                                          <i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Data
                                        </button>
                                    </div>
                                    <div class="table-responsive">
                                      <table class="table tabelan table-hover table-bordered" width="100%" cellspacing="0" id="data">
                                    <thead>
                                      <tr>
                                        <th class="wd-15p">No.</th>
                                        <th class="wd-15p">No. Return</th>
                                        <th class="wd-15p">Tanggal Return</th>
                                        <th class="wd-15p">Jumlah Return</th>
                                        <th class="wd-15p">Status</th>
                                        <th class="wd-15p">Aksi</th>
                                      </tr>
                                    </thead>

                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>1111</td>
                                      <td>31/12/2017</td>
                                      <td>1</td>
                                      <td><span class="badge badge-success">Sampai</span></td>
                                     <td class="text-center">
                                       <div class="">    
                                       <a href="#" class="btn btn-warning btn-sm" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
                                       <a href="#" class="btn btn-danger btn-sm" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
                                      </div>                                 
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td>1112</td>
                                      <td>31/12/2017</td>
                                      <td>21</td>
                                      <td><span class="badge badge-success">Sampai</span></td>
                                     <td class="text-center">
                                       <div class="">    
                                       <a href="#" class="btn btn-warning btn-sm" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
                                       <a href="#" class="btn btn-danger btn-sm" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
                                      </div>                                 
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>1113</td>
                                      <td>30/12/2018</td>
                                      <td>1</td>
                                      <td><span class="badge badge-danger">Belum Sampai</span></td>
                                     <td class="text-center">
                                      <div class="">    
                                       <a href="#" class="btn btn-warning btn-sm" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
                                       <a href="#" class="btn btn-danger btn-sm" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
                                      </div>                                 
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
        format:"dd/mm/yyyy"
      });    
      </script>
@endsection()