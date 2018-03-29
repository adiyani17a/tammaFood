@extends('main')
@section('content')
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                        <div class="page-title">Order Pembelian</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i></i>&nbsp;Purchasing&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Order Pembelian</li>
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
                        <ul id="generalTab" class="nav nav-tabs ">
                            <li class="active"><a href="#alert-tab" data-toggle="tab">Order Pembelian</a></li>
                            <!-- <li><a href="#note-tab" data-toggle="tab">Belanja Harian</a></li> -->
                           <!--  <li><a href="#label-badge-tab" data-toggle="tab">Belanja Harian</a></li> -->
                        </ul>
                        <div id="generalTabContent" class="tab-content responsive">

                          @include('purchasing.orderpembelian.modal')
                                
                                <div id="alert-tab" class="tab-pane fade in active">
                                 
                                  <div class="row" style="margin-top: -10px;">
                                    <div class="col-md-12 col-sm-12 col-xs-12" >

                                      <div align="right">
                                        <a href="{{ url('/purchasing/orderpembelian/tambah_order') }}" class="btn btn-box-tool" style="margin-bottom: 10px;"><i class="fa fa-plus"></i>&nbsp;Tambah Order</a>
                                        
                                      </div>
                                      <div class="table-responsive">
                                        <table class="table tabelan table-bordered" id="data">
                                          <thead>
                                            <tr>
                                              <th>Tanggal Order</th>
                                              <th>No Order</th>
                                              <th>Suplier</th>
                                              <th>Nama Item</th>
                                              <th>QTY</th>
                                              <th>Cara Pembayaran</th>
                                              <th>Tanggal Pengiriman</th>
                                              <th>Status</th>
                                              <th>Aksi</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>05-02-2018</td>
                                              <td>111</td>
                                              <td>Alpha</td>
                                              <td>Tortilla</td>
                                              <td>21</td>
                                              <td>Tunai</td>
                                              <td>19-02-2018</td>
                                              <td><span class="label label-success">Di Setujui</span></td>
                                              <td>
                                                <button class="btn btn-warning btn-sm" title="Edit"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-danger btn-sm" title="Hapus"><i class="fa fa-trash-o"></i></button>
                                                <button data-toggle="modal" data-target="#detail" class="btn-link">Detail</button>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td>05-02-2018</td>
                                              <td>112</td>
                                              <td>Bravo</td>
                                              <td>Burger</td>
                                              <td>21</td>
                                              <td>Deposit</td>
                                              <td>22-02-2018</td>
                                              <td><span class="label label-success">Di Setujui</span></td>
                                              <td>
                                                <button class="btn btn-warning btn-sm" title="Edit"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-danger btn-sm" title="Hapus"><i class="fa fa-trash-o"></i></button>
                                                <button data-toggle="modal" data-target="#detail" class="btn-link">Detail</button>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td>05-02-2018</td>
                                              <td>111</td>
                                              <td>Charlie</td>
                                              <td>Kebab</td>
                                              <td>21</td>
                                              <td>Tempo</td>
                                              <td>21-02-2018</td>
                                              <td><span class="label label-success">Di Setujui</span></td>
                                              <td>
                                                <button class="btn btn-warning btn-sm" title="Edit"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-danger btn-sm" title="Hapus"><i class="fa fa-trash-o"></i></button>
                                                <button data-toggle="modal" data-target="#detail" class="btn-link">Detail</button>
                                              </td>
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
          "scrollX":true,
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
      </script>
@endsection()