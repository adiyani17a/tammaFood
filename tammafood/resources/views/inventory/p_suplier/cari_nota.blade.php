@extends('main')
@section('content')
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left" style="font-family: 'Raleway', sans-serif;">
                        <div class="page-title">Cari Nomor Nota</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right" style="font-family: 'Raleway', sans-serif;">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ url('/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i></i>&nbsp;Inventory&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Penerimaan Barang Suplier</li><li><i class="fa fa-angle-right"></i>&nbsp;Cari Nomor Nota&nbsp;&nbsp;</i>&nbsp;&nbsp;</li>
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
                              <li class="active"><a href="#alert-tab" data-toggle="tab">Cari Nomor Nota</a></li><!-- 
                            <li><a href="#note-tab" data-toggle="tab">2</a></li>
                            <li><a href="#label-badge-tab-tab" data-toggle="tab">3</a></li> -->
                        </ul>
                        <div id="generalTabContent" class="tab-content responsive">
                          <div id="alert-tab" class="tab-pane fade in active">
                            <div class="row">
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                  <label class="tebal">Nomor Nota</label> 
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-6">

                                  <div class="input-group">
                                    
                                    <span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>
                                    <input type="text" name="carinota" id="carinota" class="form-control input-sm">
                                    <span class="input-group-btn"><button class="btn btn-info btn-sm"><i class="fa fa-search"></i></button></span>
                                  </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6" align="right">
                                  <a href="{{ url('/inventory/p_suplier/suplier') }}" class="btn btn-box-tool"><i class="fa fa-arrow-left"></i></a>
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

