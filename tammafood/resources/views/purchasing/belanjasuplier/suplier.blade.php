@extends('main')
@section('content')
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                 <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title" style="font-weight:bold; font-size:25px; color:black; ">
                            Belanja suplier</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-tachometer fa-fw"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Belanja suplier</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Belanja suplier</li>
                    </ol>
                    <div class="clearfix">
                    </div>
    <!--END TITLE & BREADCRUMB PAGE-->
     <div class="page-content">
		<div id="tab-general">
			<div class="row mbl">
				<div class="panel panel-orange">
					<div class="col-lg-12">
						<div class="portlet-body">
							<div class="col-lg-16">
								<div class="page-content">
<div id="tab-general">
	<div class="row mbl">
		<div class="col-lg-16">                                
			<div class="col-md-16">
				<div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
					</div>
					</div>
						<ul id="generalTab" class="nav nav-tabs responsive">
							<li><a href="#note-tab" data-toggle="tab">Daftar Belanja Suplier</a></li>
								<li class="active"><a href="#alert-tab" data-toggle="tab">Kelola Belanja Suplier</a></li>
						<div align="right" style=" font-family:'Open Sans', sans-serif;">
							<a href="#">
						<button type="button" class="btn"  style="background-color: white; color:#f00; border-color:#f00; font-size:12pt; font-family:'Open Sans', sans-serif;" title="Tambahkan Data Item">
									   <i aria-hidden="true" class="fa fa-plus">
										   &nbsp; 
									   </i>Tambah Data</button>
								</a>
                           </div>
                        </ul>
						
					<div id="generalTabContent" class="tab-content responsive" style="min-height:auto;">
				<div id="alert-tab" class="tab-pane fade in active">
			<button type="submit" style="float:right; width:18%; margin:auto;" class="btn btn-green">Simpan</button>	
	   <div class="row">
	<div style=" width:80%;">                     
  <table class="table no-padding table-borderless calculator" style="background:#f9f9fd">
    <tr>
        <th style="width:15%">Tanggal Belanja</th>
        <td style="width:20%"> <div class="input-group"><input readonly required name="p_date" type="text" class="form-control col-xs-5" style="width: 100%;" id="exampleInputName2" placeholder="22 dec 2017" ><span class="input-group-addon">!</span></div></td>        
        <th colspan = "1" >Nomor Nota</th>
        <td colspan = "3"> <input  readonly name="p_nota" type="text" class="form-control col-md-9" style="width: 100%" id="exampleInputName2" placeholder="Nomor Nota" value=""></td>
    </tr>                                
    <tr>
        <th>Nama Supplier</th>
        <td>
		<div class="input-group">
		<input readonly name="p_nama_supplier" id="exampleInputName2" type="text" placeholder="Tacik" class="form-control col-xs-3"/>
			<div class="input-group-btn">
				<button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">
					&nbsp;<span class="caret"></span></button>
				<ul class="dropdown-menu pull-right">
					<li><a href="#">Action</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li class="divider"></li>
					<li><a href="#">Separated link</a></li>
				</ul>
			</div>
		</div>
		</td>
        <th>Pembayaran</th>
        <td>
		<div class="input-group">
			<span class="input-group-addon">$</span>
				<input readonly name="p_pembayaran" type="text"  class="form-control col-xs-9"  style="width: 100%" id="exampleInputName2" placeholder="Rp. 0,00">
				</div>         
        </td>  	
        <th>jatuh Tempo</th>
        <td> 
		<div class="input-group" >
			<input  readonly name="p_jatuh_tempo" type="text" class="form-control col-xs-3" style="width: 100%" id="exampleInputName2" placeholder="Tanggal" value=""><span class="input-group-addon">!</span>
				</div>
		</td>
	</tr>                                 
    <tr>
        <th>Total Gross</th>
        <td>
		<input readonly  name="p_total_gross" type="text"  class="form-control col-md-9"  style="width: 100%" id="exampleInputName2" placeholder="Rp. 0,00">
		</td>
        <th>Disc</th>
        <td><input name="p_disc" type="text"  class="form-control col-md-9"  style="width: 100%" id="exampleInputName2" placeholder="0">            
        </td>    
        <th>Penyesuaian</th>
        <td><input name="p_penyesuaian" type="text"  class="form-control col-md-9"  style="width: 100%" id="exampleInputName2" placeholder="Rp. 0,00">            
        </td>    
        
	</tr>                                
	<tr>
	<th>Total Net</th>
        <td>
		<input  readonly name="p_total_net" type="text" class="form-control col-md-9" style="width: 100%" id="exampleInputName2" placeholder="Rp. 0,00" value="">
		</td>
        <th>Nama Petugas</th>
        <td colspan="3">
		<input readonly="readonly" name="p_officer" type="text" class="form-control col-md-9" style="width: 100%" id="exampleInputName2" value="" placeholder="Nama Petugas">
		</td>    
		</tr>
	</table>
        </div>
			</div>
	<div class="panel-heading">
      <table class="table table-hover table-responsive table-bordered" width="100%" cellspacing="0" id="data">
			<thead>
                <tr>
                  <th class="wd-10p">Detail Belanja</th>
                  <th class="wd-15p">Nama Barang</th>
                  <th class="wd-10p">Kuantitas</th>
                  <th class="wd-10p">Satuan</th>
                  <th class="wd-15p">Harga Satuan</th>
                  <th class="wd-15p">Total Harga</th>
                </tr>
              </thead>
              <tbody>
			  klik tambahkan detail untuk menambah detail belanja
               <!-- <tr>
                  <td>1</td>
                  <td>Air Galon</td>
                  <td><input type="text" name=""></td>
                  <td>Kg</td>
                  <td><input type="text" name="" value="Rp.7000,00"></td>
                  <td><input type="text" name="" disabled></td>
                </tr>-->
              </tbody>
                    </table> 
                         </div>
						 <div align="left" style=" font-family:'Open Sans', sans-serif;">
							<a href="#">
						<button type="button" class="btn"  style="background-color: white; color:#f00; border-color:#f00; font-size:7pt; font-family:'Open Sans', sans-serif;" title="Tambahkan Data Item">
									   Tambah Data Detail</button>
								</a>
                           </div>
							</div>
								
							<!--disini-->
							<div id="note-tab" class="tab-pane fade">
                     <div class="row">
                         <div class="panel-body">
                              <div class="col-lg-12">
                                  <div class="col-md-9" style="padding-bottom: 10px; margin-left:100px;">
									<div style="margin-left:-15px;">
										<div class="col-md-3">
											<label style="padding-top: 7px; width:auto;font-size: 13px; margin-right:0px;">
											Tanggal Belanja</label>
										</div>
                 <div class="col-sm-5">
                     <div class="form-group" style="display: ">
                         <div class="input-daterange input-group">
                                <input id="tanggal" data-provide="datepicker" class="form-control input-sm" name="tanggal" type="text">
                                <span class="input-group-addon">-</span>
                                <input id="tanggal" data-provide="datepicker" class="input-sm form-control" name="tanggal" type="text">
							</div>
						</div>
                     </div>
				</div>
                   <div class="col-sm-3">
                       <button class="btn btn-primary btn-sm btn-flat" type="button">
                           <strong>
                                <i class="fa fa-search" aria-hidden="true"></i>
									</strong>
								</button>
                        <button class="btn btn-default btn-sm btn-flat" type="button">
							<strong>
                                <i class="fa fa-undo" aria-hidden="true"></i>
									</strong>
                        </button>
                          </div>
							</div>
		<div class="panel-heading">
		<div style="margin-left:-20px;">
			<table class="table table-hover table-responsive table-bordered" width="100%" cellspacing="0" id="data2">
				<thead>
                <tr>
				  <th class="wd-10p">No.</th>
                  <th class="wd-15p">Tanggal Belanja</th>
                  <th class="wd-15p">Nama Outlet</th>
                  <th class="wd-15p">Supplier</th>
                  <th class="wd-10p">Nota</th>
                  <th class="wd-10p">Total Net</th>
                  <th class="wd-15p">Jatuh Tempo</th>
                  <th class="wd-15p">Tanggal Bayar</th>
                  <th class="wd-15p">Jenis</th>
                  <th class="wd-15p">Item</th>
                  <th class="wd-15p">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <!--<tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>-->
                
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
        $('#data').dataTable();
        $('#data2').dataTable();
            });
      </script>	
@endsection