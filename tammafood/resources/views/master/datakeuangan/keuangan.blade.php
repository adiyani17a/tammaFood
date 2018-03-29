@extends('main')
@section('content')
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                        <div class="page-title">Master Data Akun Keuangan</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i></i>&nbsp;Master&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Master Data Akun Keuangan</li>
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
                              <li class="active"><a href="#alert-tab" data-toggle="tab">Master Data Akun Keuangan</a></li>
                            <!-- <li><a href="#note-tab" data-toggle="tab">2</a></li>
                            <li><a href="#label-badge-tab-tab" data-toggle="tab">3</a></li> -->
                        </ul>
                        <div id="generalTabContent" class="tab-content responsive">
                            <div id="alert-tab" class="tab-pane fade in active">
                            <div class="row">
                           

                        

                
               
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="panel-default">
                        <a data-toggle="collapse" href="#collapse1">
                        <div class="panel-heading panel-bg panel-top" style="border: 1px solid #e5e5e5;">
                          <h4 class="panel-title">
                            Harta
                          </h4>
                        </div>
                        </a>
                        <div id="collapse1" class="panel-collapse collapse">
                          <div class="panel-body" style="border: 1px solid #e5e5e5;">
                            <div class="table-responsive">
                            <table class="table tabelan table-hover table-bordered" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                  <th width="15%">Kode Akun</th>
                                  <th width="20%">Nama Akun</th>
                                  <th>Pembukaan Akun</th>
                                  <th width="15%">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td style="padding-left: 20px;">1010000</td>
                                  <td>Harta Lancar</td>
                                  <td align="right">0,00</td>
                                  <td align="center">
                                    <div class=""> 
                               <a href="#" class="btn btn-info btn-sm" title="Tambah Sub Akun"><i class="glyphicon glyphicon-plus"></i></a>   
                               <a href="#" class="btn btn-warning btn-sm" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
                               <a href="#" class="btn btn-danger btn-sm" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
                              </div>  
                                  </td>
                                </tr>
                                <tr>
                                  <td style="padding-left: 40px;">1010100</td>
                                  <td>Kas & Setara Kas</td>
                                  <td align="right">0,00</td>
                                  <td align="center">
                                   <div class=""> 
                               <a href="#" class="btn btn-info btn-sm" title="Tambah Sub Akun"><i class="glyphicon glyphicon-plus"></i></a>   
                               <a href="#" class="btn btn-warning btn-sm" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
                               <a href="#" class="btn btn-danger btn-sm" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
                              </div>  
                                  </td>
                                </tr>
                                <tr>
                                  <td style="padding-left: 60px;">1010101</td>
                                  <td>Kas Pusat</td>
                                  <td align="right">123.450,00</td>
                                  <td align="center">
                                    <div class=""> 
                               <a href="#" class="btn btn-info btn-sm" title="Tambah Sub Akun"><i class="glyphicon glyphicon-plus"></i></a>   
                               <a href="#" class="btn btn-warning btn-sm" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
                               <a href="#" class="btn btn-danger btn-sm" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
                              </div>                                    </td>
                                </tr>
                                <tr>
                                  <td style="padding-left: 60px;">1010102</td>
                                  <td>Kas BCA</td>
                                  <td align="right">1.230,00</td>
                                  <td align="center">
                                    <div class=""> 
                               <a href="#" class="btn btn-info btn-sm" title="Tambah Sub Akun"><i class="glyphicon glyphicon-plus"></i></a>   
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
                  
                      <div class="panel-default">
                        <a data-toggle="collapse" href="#collapse2" style="width: 100%;">
                        <div class="panel-heading panel-bg" style="border: 1px solid #e5e5e5;">
                          <h4 class="panel-title">
                            Kewajiban
                          </h4>
                        </div>
                        </a>
                        <div id="collapse2" class="panel-collapse collapse">
                          <div class="panel-body" style="border: 1px solid #e5e5e5;">
                            <div class="table-responsive">
                             <table class="table tabelan table-hover table-bordered" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                  <th width="15%">Kode Akun</th>
                                  <th width="20%">Nama Akun</th>
                                  <th>Pembukaan Akun</th>
                                  <th width="15%">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td style="padding-left: 20px;">2010000</td>
                                  <td>Kewajiban Jangka Pendek</td>
                                  <td align="right">0,00</td>
                                  <td align="center">
                                    <div class=""> 
                               <a href="#" class="btn btn-info btn-sm" title="Tambah Sub Akun"><i class="glyphicon glyphicon-plus"></i></a>   
                               <a href="#" class="btn btn-warning btn-sm" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
                               <a href="#" class="btn btn-danger btn-sm" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
                              </div>  
                                  </td>
                                </tr>
                                <tr>
                                  <td style="padding-left: 40px;">2010100</td>
                                  <td>Hutang Non Usaha</td>
                                  <td align="right">0,00</td>
                                  <td align="center">
                                    <div class=""> 
                               <a href="#" class="btn btn-info btn-sm" title="Tambah Sub Akun"><i class="glyphicon glyphicon-plus"></i></a>   
                               <a href="#" class="btn btn-warning btn-sm" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
                               <a href="#" class="btn btn-danger btn-sm" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
                              </div>  
                                  </td>
                                </tr>
                                <tr>
                                  <td style="padding-left: 60px;">2010101</td>
                                  <td>Hutang ke Pihak III</td>
                                  <td align="right">123.450,00</td>
                                  <td align="center">
                                    <div class=""> 
                               <a href="#" class="btn btn-info btn-sm" title="Tambah Sub Akun"><i class="glyphicon glyphicon-plus"></i></a>   
                               <a href="#" class="btn btn-warning btn-sm" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
                               <a href="#" class="btn btn-danger btn-sm" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
                              </div>  
                                  </td>
                                </tr>
                                <tr>
                                  <td style="padding-left: 60px;">2010102</td>
                                  <td>Hutang Pajak</td>
                                  <td align="right">1.230,00</td>
                                  <td align="center">
                                    <div class=""> 
                               <a href="#" class="btn btn-info btn-sm" title="Tambah Sub Akun"><i class="glyphicon glyphicon-plus"></i></a>   
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
                  
                      <div class="panel-default">
                      <a data-toggle="collapse" href="#collapse3" style="width: 100%;">
                        <div class="panel-heading panel-bg" style="border: 1px solid #e5e5e5;">
                          <h4 class="panel-title">
                              Modal
                          </h4>
                        </div>
                      </a>
                        <div id="collapse3" class="panel-collapse collapse">
                          <div class="panel-body" style="border: 1px solid #e5e5e5;">
                            <div class="table-responsive">
                              <table class="table tabelan table-hover table-bordered" width="100%" cellspacing="0">
                                <thead>
                                  <tr>
                                    <th width="15%">Kode Akun</th>
                                    <th width="20%">Nama Akun</th>
                                    <th>Pembukaan Akun</th>
                                    <th width="15%">Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td style="padding-left: 20px;">3010000</td>
                                    <td>Modal Disetor</td>
                                    <td align="right">0,00</td>
                                    <td align="center">
                                      <div class=""> 
                               <a href="#" class="btn btn-info btn-sm" title="Tambah Sub Akun"><i class="glyphicon glyphicon-plus"></i></a>   
                               <a href="#" class="btn btn-warning btn-sm" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
                               <a href="#" class="btn btn-danger btn-sm" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
                              </div>  
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="padding-left: 40px;">3010100</td>
                                    <td>Modal Bapak Muhammad</td>
                                    <td align="right">0,00</td>
                                    <td align="center">
                                      <div class=""> 
                               <a href="#" class="btn btn-info btn-sm" title="Tambah Sub Akun"><i class="glyphicon glyphicon-plus"></i></a>   
                               <a href="#" class="btn btn-warning btn-sm" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
                               <a href="#" class="btn btn-danger btn-sm" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
                              </div>  
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="padding-left: 40px;">3010200</td>
                                    <td>Modal Bapak A</td>
                                    <td align="right">123.450,00</td>
                                    <td align="center">
                                      <div class=""> 
                               <a href="#" class="btn btn-info btn-sm" title="Tambah Sub Akun"><i class="glyphicon glyphicon-plus"></i></a>   
                               <a href="#" class="btn btn-warning btn-sm" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
                               <a href="#" class="btn btn-danger btn-sm" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
                              </div>  
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="padding-left: 20px;">3020000</td>
                                    <td>Laba</td>
                                    <td align="right">1.230,00</td>
                                    <td align="center">
                                      <div class=""> 
                               <a href="#" class="btn btn-info btn-sm" title="Tambah Sub Akun"><i class="glyphicon glyphicon-plus"></i></a>   
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

                  </div>
                    
                        </div>
                                
                                    </div>
                                         </div>
                            </div>
@endsection
@section("extra_scripts")
    <script type="text/javascript">
      $(document).ready(function() {
        $('#mitra').dataTable({
          "pageLength": 10,
        "lengthMenu": [[10, 20, 50, - 1], [10, 20, 50, "All"]],
        "language": {
            "emptyTable": "Tidak ada data",
            "sInfo": "Menampilkan _START_ - _END_ Dari _TOTAL_ Data",
            "sSearch": 'Pencarian..',
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
@endsection