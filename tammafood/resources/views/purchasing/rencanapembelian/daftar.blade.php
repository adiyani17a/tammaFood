<div id="alert-tab" class="tab-pane fade in active">
    <div class="row">
   

    <div class="col-md-12 col-sm-12 col-xs-12" align="right" style="margin-bottom: 10px;">
      <a href="{{ url('/purchasing/rencanapembelian/create') }}"><button type="button" class="btn btn-box-tool" title="Tambahkan Data Item">
         <i class="fa fa-plus" aria-hidden="true">
             &nbsp;
         </i>Tambah Data
      </button></a>
   </div>

   
    <div class="col-md-12 col-sm-12 col-xs-12">                          
      <div class="table-responsive">
        <table class="table tabelan table-hover table-bordered" width="100%" cellspacing="0" id="data">
              <thead>
                  <tr>
                    <th class="wd-15p">No</th>
                    <th class="wd-15p">Nama Barang</th>
                    <th class="wd-20p">Suplier</th>
                    <th class="wd-15p">Permintaan Kuantitas</th>
                    <th class="wd-10p">Kuantitas Disetujui</th>
                    <th class="wd-15p">Status</th>
                    <th class="wd-15p">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>1</td>
                      <td>Tepung Terigu</td>
                      <td><i class="fa fa-check"></i></td>
                      <td>10</td>
                      <td></td>
                      <td>
                        <span class="badge badge-info">Menunggu</span>
                      </td>
                      <td>
                        <div class="">    
                          <a href="#" class="btn btn-success btn-sm" title="Setuju"><i class="fa fa-check"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Pending"><i class="fa fa-times"></i></a>
                        </div> 
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Tepung Beras</td>
                      <td><i class="fa fa-times"></i></td>
                      <td>10</td>
                      <td></td>
                      <td>
                        <span class="badge badge-info">Menunggu</span>
                      </td>
                      <td>
                        <div class="">    
                          <a href="#" class="btn btn-success btn-sm" title="Setuju"><i class="fa fa-check"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Pending"><i class="fa fa-times"></i></a>
                        </div> 
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Tepung Jagung</td>
                      <td><i class="fa fa-check"></i></td>
                      <td>10</td>
                      <td></td>
                      <td>
                        <span class="badge badge-warning">Dapat di edit</span>
                      </td>
                      <td>
                        <div class="">    
                          <a href="#" class="btn btn-success btn-sm" title="Setuju"><i class="fa fa-check"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Pending"><i class="fa fa-times"></i></a>
                        </div> 
                      </td>
                    </tr>
                </tbody>
                           
        </table> 
      </div>  
    </div>  

    </div>
  </div>