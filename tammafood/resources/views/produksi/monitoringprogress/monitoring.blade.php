@extends('main')
@section('content')
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                        <div class="page-title">Monitoring Order & Stock</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i></i>&nbsp;Produksi&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Monitoring Order & Stock</li>
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
                                <li class="active"><a href="#alert-tab" data-toggle="tab">Monitoring Order & Stock</a></li>
                                <!-- <li><a href="#note-tab" data-toggle="tab">2</a></li>
                                <li><a href="#label-badge-tab" data-toggle="tab">3</a></li> -->
                              </ul>
                              <div id="generalTabContent" class="tab-content responsive">
                                
                                <div id="alert-tab" class="tab-pane fade in active">
                                 
                                  <div class="row" style="margin-top:-15px;">

                                    @include('produksi.monitoringprogress.modal')
                                   
                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="table-responsive" style="margin-top:10px;">
                                          <table class="table tabelan table-hover table-bordered" width="100%" cellspacing="0" id="data">
                                           <thead>
                                              <tr>
                                               <th>Kode Item</th>
                                               <th width="25%">Nama Item</th>
                                               <th>No Nota</th>
                                               <th>Jumlah Order</th>
                                               <th>Jumlah Stok</th>
                                               <th>Jumlah Kebutuhan</th>
                                               <th>Jumlah Rencana Produksi</th>
                                               <th>Jumlah Kekuarangan</th>
                                               <th>Aksi</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>111</td>
                                                <td>Tortilla</td>
                                                 <td><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#nota">3 Nota</button></td>
                                                <td>24</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>20</td>
                                                <td>-</td>
                                                <td>
                                                  <a href="#" data-toggle="modal" data-target="#modal" class="btn btn-info btn-sm">Plan</a>
                                                </td>
                                              </tr>
                                              <tr>
                                                
                                                <td>112</td>
                                                <td>Kebab</td>
                                                 <td><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#nota">4 Nota</button></td>
                                                <td>30</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>20</td>
                                                <td>-</td>
                                               <td>
                                                  <a href="#" data-toggle="modal" data-target="#modal" class="btn btn-info btn-sm">Plan</a>
                                                </td>
                                              </tr>
                                              <tr>
                                                
                                                <td>113</td>
                                                <td>Burger</td>
                                                 <td><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#nota">5 Nota</button></td>
                                                <td>24</td>
                                                <td>8</td>
                                                <td>14</td>
                                                <td>10</td>
                                                <td>-4</td>
                                                <td>
                                                  <a href="#" data-toggle="modal" data-target="#modal" class="btn btn-info btn-sm">Plan</a>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table> 
                                        </div>                                       
                                      </div>
                                  </div>

                                  <!-- detail order-->
                                  <div class="modal fade" id="modal" role="dialog">
                                    <div class="modal-dialog">
                                    
                                      
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header" style="background-color: #e77c38;">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title" style="color: white;">Plan</h4>
                                          </div>
                                          <div class="modal-body">
                                                    
                                            

                                            <div class="table-responsive">
                                              <table class="table tabelan table-bordered table-hover">
                                                <thead>
                                                  <th>Tanggal</th>
                                                  <th>Jumlah Rencana Produksi</th>
                                                  <th>Status SPK</th>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>25/02/2018</td>
                                                    <td>1</td>
                                                    <td><i class="fa fa-check"></i></td>
                                                  </tr>
                                                  <tr>
                                                    <td>26/02/2018</td>
                                                    <td>1</td>
                                                    <td><i class="fa fa-times"></i></td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                            
                                          </div>
                                              
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                            
                                          </div>

                                        </div>
                                      
                                    </div>
                                  </div>
                                  <!-- end detail order-->

                                  
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
        format:"dd/mm/yyyy"
      });    
      </script>
@endsection()