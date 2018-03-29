@extends('main')
@section('content')
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                        <div class="page-title">Penerimaan Barang Return Customer</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i></i>&nbsp;Inventory&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Penerimaan Barang Return Customer</li>
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
                              <li class="active"><a href="#alert-tab" data-toggle="tab">Penerimaan Barang Return Customer</a></li>
                            <!-- <li><a href="#note-tab" data-toggle="tab">2</a></li>
                            <li><a href="#label-badge-tab-tab" data-toggle="tab">3</a></li> -->
                        </ul>
                         <div id="generalTabContent" class="tab-content responsive">
                                    <div id="alert-tab" class="tab-pane fade in active">
                                      <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="input-group">
                                                <select class="form-control input-sm" id="cariId" name="CariId">
                                                  <option> - Pilih Nomor Nota</option>
                                                </select>
                                                <span class="input-group-btn">
                                                  <button type="button" class="btn btn-info btn-sm"><i class="fa fa-search"></i></button>
                                                </span>
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12" align="right">
                                              <div class="form-group">
                                                <a href="{{ url('/inventory/p_returncustomer/cari_nota') }}" class="btn btn-box-tool"><i class="fa fa-search"></i>&nbsp;&nbsp;Cari Nota</a>
                                              </div>
                                          </div>
                                        </div>
                                          
                                        
                                        </div>
                                      </div>                                    
                                <hr>
                                  <p align="center">
                                  Data list barang yang sesuai nomor nota akan ditampilkan disini
                                  </p>
                                  <hr>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
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