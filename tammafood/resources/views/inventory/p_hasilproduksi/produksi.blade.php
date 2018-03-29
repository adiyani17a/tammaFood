@extends('main')
@section('content')
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                        <div class="page-title">Penerimaan Barang Hasil Produksi</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i></i>&nbsp;Inventory&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Penerimaan Barang Hasil Produksi</li>
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
                              <li class="active"><a href="#alert-tab" data-toggle="tab">Penerimaan Barang Hasil Produksi</a></li>
                            <!-- <li><a href="#note-tab" data-toggle="tab">2</a></li>
                            <li><a href="#label-badge-tab-tab" data-toggle="tab">3</a></li> -->
                        </ul>
                         <div id="generalTabContent" class="tab-content responsive">

                                  @include('inventory.p_suplier.modal')

                                    <div id="alert-tab" class="tab-pane fade in active">
                                      <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                          
                                          <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom: 20px;">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                              <label class="tebal">No Nota :</label>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                              <div class="input-group">
                                                <select class="form-control input-sm" id="cariId" name="CariId">
                                                  <option> - Pilih Nomor Nota</option>
                                                </select>
                                                <span class="input-group-btn">
                                                  <a href="#" class="btn btn-info btn-sm"><i class="fa fa-search" alt="search"></i></a>
                                                </span>
                                              </div>
                                            </div>

                                          </div>

                                          <div class="table-responsive">
                                            <table class="table tabelan table-hover table-bordered" id="data2">
                                              <thead>
                                                <tr>
                                                  <th width="5%">No</th>
                                                  <th>No PO</th>
                                                  <th>Suplier</th>
                                                  <th width="5%">Status</th>
                                                  <th width="10%">Aksi</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>1</td>
                                                  <td>06022018/PO/001</td>
                                                  <td>Alpha</td>
                                                  <td><span class="label label-info">Tidak Lengkap</span></td>
                                                  <td>
                                                    <button class="btn btn-warning btn-sm" title="Edit"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-danger btn-sm" title="Hapus"><i class="fa fa-trash-o"></i></button>
                                                    <button class="btn-link" data-toggle="modal" data-target="#detail">Detail</button>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td>2</td>
                                                  <td>06022018/PO/002</td>
                                                  <td>Bravo</td>
                                                  <td><span class="label label-info">Tidak Lengkap</span></td>
                                                  <td>
                                                    <button class="btn btn-warning btn-sm" title="Edit"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-danger btn-sm" title="Hapus"><i class="fa fa-trash-o"></i></button>
                                                    <button class="btn-link" data-toggle="modal" data-target="#detail">Detail</button>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td>3</td>
                                                  <td>06022018/PO/003</td>
                                                  <td>Charlie</td>
                                                  <td><span class="label label-info">Tidak Lengkap</span></td>
                                                  <td>
                                                    <button class="btn btn-warning btn-sm" title="Edit"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-danger btn-sm" title="Hapus"><i class="fa fa-trash-o"></i></button>
                                                    <button class="btn-link" data-toggle="modal" data-target="#detail">Detail</button>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>

                                        </div>
                                        
                                      </div>
                                    </div>
                                     <!-- End div #alert-tab  -->

                                    <!-- div note-tab -->
                                    <div id="note-tab" class="tab-pane fade">
                                      <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">

                                           <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom: 20px;">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                              <label class="tebal">Gudang :</label>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                              <select class="form-control input-sm">
                                                <option>-- Pilih Gudang --</option>
                                                <option>Pusat</option>
                                                <option>Pinggiran</option>
                                              </select>
                                            </div>
                                          </div>

                                          <div class="table-responsive">
                                            <table class="table tabelan table-hover table-bordered" id="data">
                                              <thead>
                                                <tr>
                                                  <th>No</th>

                                                  <th>No PO</th>
                                                  <th>Suplier</th>
                                                  <th>Status</th>
                                                  <th>Aksi</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>1</td>
                                                  <td>06022018/PO/001</td>
                                                  <td>Alpha</td>
                                                  <td><span class="label label-success">Lengkap</span></td>
                                                  <td><button data-toggle="modal" data-target="#detail" class="btn btn-primary btn-sm"><i class="fa fa-arrow-right"></i></button></td>
                                                </tr>
                                                <tr>
                                                  <td>2</td>
                                                  <td>06022018/PO/002</td>
                                                  <td>Bravo</td>
                                                  <td><span class="label label-success">Lengkap</span></td>
                                                  <td><button data-toggle="modal" data-target="#detail" class="btn btn-primary btn-sm"><i class="fa fa-arrow-right"></i></button></td>
                                                </tr>
                                                <tr>
                                                  <td>3</td>
                                                  <td>06022018/PO/003</td>
                                                  <td>Charlie</td>
                                                  <td><span class="label label-success">Lengkap</span></td>
                                                  <td><button data-toggle="modal" data-target="#detail" class="btn btn-primary btn-sm"><i class="fa fa-arrow-right"></i></button></td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!--/div note-tab -->

                                    <!-- div label-badge-tab -->
                                    <div id="label-badge-tab" class="tab-pane fade">
                                      <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
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
        format:"dd-mm-yyyy",
        autoclose:true,
        endDate:"today"
      });    
      </script>
@endsection