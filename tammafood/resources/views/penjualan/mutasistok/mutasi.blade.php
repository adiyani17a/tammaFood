@extends('main')
@section('content')
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                        <div class="page-title">Mutasi Stok & Retail</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i></i>&nbsp;Penjualan&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Mutasi Stok & Retail</li>
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
                                <li class="active"><a href="#alert-tab" data-toggle="tab">Grosir to Retail</a></li>
                                <li><a href="#note-tab" data-toggle="tab">Retail to Grosir</a></li>
                                <!-- <li><a href="#label-badge-tab" data-toggle="tab">3</a></li> -->
                              </ul>
                              <div id="generalTabContent" class="tab-content responsive">
                                
                                <div id="alert-tab" class="tab-pane fade in active">
                                 
                                  <div class="row">
                                   
                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                        

                                            
                                              <div class="col-md-2 col-sm-3 col-xs-12">
                                                <label class="tebal">Tanggal</label>
                                              </div>

                                              <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                  <div class="input-daterange input-group">
                                                    <input id="tanggal" class="form-control input-sm datepicker2" name="tanggal" type="text">
                                                    <span class="input-group-addon">-</span>
                                                    <input id="tanggal"" class="input-sm form-control datepicker2" name="tanggal" type="text">
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

                                            
                                        
                                          
                                        <div class="table-responsive" style="margin-top: 50px;">
                                          <table class="table tabelan table-hover table-bordered" width="100%" cellspacing="0" id="data">
                                            <thead>
                                              <tr>
                                                <th>Tanggal</th>
                                                <th>Kode Item</th>
                                               <th>Nama Item</th>
                                               <th>Stok Tersedia</th>
                                               <th>Status</th>
                                              </tr>
                                            </thead>

                                            <tbody>
                                              <tr>
                                                <td>28-02-2018 23:59:59</td>
                                                <td>111</td>
                                                <td>Tortilla</td>
                                                <td>30</td>
                                                <td><i class="fa fa-check"></i></td>
                                              </tr>
                                              <tr>
                                                <td>27-02-2018 23:59:59</td>
                                                <td>112</td>
                                                <td>Kebab</td>
                                                <td>25</td>
                                                <td><i class="fa fa-check"></i></td>
                                              </tr>
                                              <tr>
                                                <td>26-02-2018 23:59:59</td>
                                                <td>113</td>
                                                <td>Burger</td>
                                                <td>24</td>
                                                <td><i class="fa fa-times"></i></td>
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
                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                            
                                              <div class="col-md-2 col-sm-3 col-xs-12">
                                                <label class="tebal">Tanggal</label>
                                              </div>

                                              <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                  <div class="input-daterange input-group">
                                                    <input id="tanggal" class="form-control input-sm datepicker2" name="tanggal" type="text">
                                                    <span class="input-group-addon">-</span>
                                                    <input id="tanggal" class="input-sm form-control datepicker2" name="tanggal" type="text">
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

                                           
                                        
                                          
                                        <div class="table-responsive" style="margin-top: 50px;">
                                          <table class="table tabelan table-hover table-bordered" width="100%" cellspacing="0" id="data2">
                                            <thead>
                                              <tr>
                                                <th>Tanggal</th>
                                                <th>Kode Item</th>
                                               <th>Nama Item</th>
                                               <th>Stok Tersedia</th>
                                               <th>Status</th>
                                              </tr>
                                            </thead>

                                            <tbody>
                                              <tr>
                                                <td>28-02-2018 23:59:59</td>
                                                <td>111</td>
                                                <td>Tortilla</td>
                                                <td>30</td>
                                                <td><a<i class="fa fa-check"></i></td>
                                              </tr>
                                              <tr>
                                                <td>27-02-2018 23:59:59</td>
                                                <td>112</td>
                                                <td>Kebab</td>
                                                <td>25</td>
                                                <td><i class="fa fa-check"></i></td>
                                              </tr>
                                              <tr>
                                                <td>26-02-2018 23:59:59</td>
                                                <td>113</td>
                                                <td>Burger</td>
                                                <td>24</td>
                                                <td><i class="fa fa-times"></i></td>
                                              </tr>
                                            </tbody>
                                          </table> 
                                        </div>  

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
                                </div>
                                <!-- /div label-badge-tab -->
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