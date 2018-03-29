    @extends('main')
    @section('content')
                <!--BEGIN PAGE WRAPPER-->
                <div id="page-wrapper">
                    <!--BEGIN TITLE & BREADCRUMB PAGE-->
                    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                        <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                            <div class="page-title">Form Rencana Penjualan</div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                            <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                            <li><i></i>&nbsp;Purchasing&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                            <li>Rencana Pembelian&nbsp;&nbsp;</li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                            <li class="active">Form Rencana Penjualan</li>
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
                                        <li class="active"><a href="#alert-tab" data-toggle="tab">Form Rencana Pembelian</a></li>
                                        <!-- <li><a href="#note-tab" data-toggle="tab">2</a></li>
                                        <li><a href="#label-badge-tab" data-toggle="tab">3</a></li> -->
                                    </ul>
                                    <div id="generalTabContent" class="tab-content responsive" >
                                      <!-- div alert-tab -->
                                        <div id="alert-tab" class="tab-pane fade in active">
                                            <div class="row">

                                                <div class="col-md-12 col-sm-12 col-xs-12">


                                                    <div class="col-md-6 col-sm-6 col-xs-6" style="margin-top: -10px;margin-bottom: 10px;">
                                                        <div class="form-group">
                                                          <h4>Form Rencana Pembelian</h4>
                                                        </div>
                                                    </div>
                                                       
                                                    <div class="col-md-6 col-sm-6 col-xs-6" align="right">
                                                        
                                                        
                                                        <a href="{{ url('/penjualan/rencanapenjualan/rencana') }}" class="btn"><i class="fa fa-arrow-left"></i></a>
                                                        
                                                    </div>  
                                                
                                                    <form method="POST">

                                                        <div class="col-md-12 col-sm-12 col-xs-12 tamma-bg" style="padding-bottom: 10px;padding-top: 20px;margin-bottom: 15px;">
                                                            <div class="col-md-3 col-sm-12 col-xs-12">
                                                                
                                                                    <label class="tebal">Kode Rencana Pembelian</label>
                                                            </div>
                                                            <div class="col-md-3 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <input type="text" readonly="" class="form-control input-sm" name="">
                                                                </div>
                                                                
                                                            </div>

                                                            <div class="col-md-3 col-sm-12 col-xs-12">
                                                                
                                                                    <label class="tebal">Tanggal Rencana Pembelian</label>
                                                            </div>
                                                            <div class="col-md-3 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <input class="form-control datepicker2 input-sm" type="text">
                                                                </div>
                                                                
                                                            </div>

                                                            <div class="col-md-3 col-sm-12 col-xs-12">
                                                                
                                                                    <label class="tebal">Suplier</label>
                                                            </div>
                                                            <div class="col-md-3 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <select class="form-control input-sm" >
                                                                        <option></option>
                                                                    </select>
                                                                </div>
                                                                
                                                            </div>

                                                        </div>

                                                        
                                                            <div class="table-responsive">
                                                                <table id="barang_table" class="table tabelan table-bordered table-striped">
                                                                  <thead>
                                                                 <tr>
                                                                    <th>Barang</th>
                                                                    <th>Qty</th>
                                                                    <th>Stok Gudang</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                                </thead>
                                                                  <tbody id="div_item">
                                                                    <tr>
                                                                    <td width="85%;">
                                                                        <input type="hidden" id="ip_item" class="form-control" value="">
                                                                        <input type="text" id="barang" class="form-control ui-autocomplete-input input-sm" placeholder="Masukkan nama barang" autocomplete="off">
                                                                    </td>
                                                                    <td width="25%;">
                                                                        <input type="text" id="ip_qtyreq" class="form-control input-sm" value="">
                                                                    </td>
                                                                    <td></td>
                                                                    <td>
                                                                        <button id="add_item" type="button" class="btn btn-info" title="tambah"><i class="fa fa-plus"></i></button>
                                                                    </td>
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
    @endsection
    @section("extra_scripts")
        <script type="text/javascript">
          $(document).ready(function() {
            $('#data').dataTable({
              "pageLength": 10,
            "lengthMenu": [[10, 20, 50, - 1], [10, 20, 50, "All"]],
            "language": {
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
              "pageLength": 10,
            "lengthMenu": [[10, 20, 50, - 1], [10, 20, 50, "All"]],
            "language": {
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
              "pageLength": 10,
            "lengthMenu": [[10, 20, 50, - 1], [10, 20, 50, "All"]],
            "language": {
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
            format: "mm-yyyy",
            viewMode: "months",
            minViewMode: "months"
          });
          $('.datepicker2').datepicker({
            format:"dd-mm-yyyy"
          });
          </script>
    @endsection()