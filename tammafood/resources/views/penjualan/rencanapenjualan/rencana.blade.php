@extends('main')
@section('content')
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                        <div class="page-title">Rencana Penjualan</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i></i>&nbsp;Penjualan&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Rencana Penjualan</li>
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
                            <li class="active"><a href="#alert-tab" data-toggle="tab">Rencana Penjualan</a></li>
                            <!-- <li><a href="#note-tab" data-toggle="tab">2</a></li>
                            <li><a href="#label-badge-tab" data-toggle="tab">3</a></li> -->
                          </ul>
                    <div id="generalTabContent" class="tab-content responsive" >
                      <!-- div alert-tab -->
                      <div id="alert-tab" class="tab-pane fade in active">
                        
                          <div class="row" style="margin-top: -20px;">
                          
                            <div class="col-md-12 col-sm-12 col-xs-12" align="right" style="margin-bottom: 15px;">
                              <a href="{{ url('/penjualan/rencanapenjualan/tambah_rencana') }}" class="btn btn-box-tool"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Rencana Penjualan</a>
                            </div>
                      
                      <div class="col-md-12 col-sm-12 col-xs-12">    
                        <div class="table-responsive">
                          <table class="table tabelan table-hover table-bordered" width="100%" id="data" cellspacing="0">
                            <thead>
                              <th class="wd-15p">No</th>
                              <th class="wd-15p">Bulan</th>
                              <th class="wd-15p">Total Target Penjualan</th>
                              <th class="wd-15p">Kelola</th>
                            </thead>
                            <tbody>                              
                            </tbody>
                          </table>
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
      </script>
@endsection()