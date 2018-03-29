<div class="modal fade" id="tambah" role="dialog">
  <div class="modal-dialog" style="width: 80%;margin:auto;">
      
    
      <!-- Modal content-->
        <div class="modal-content" >
          <div class="modal-header" style="background-color: #e77c38;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" style="color: white;">Form Manajemen Return Penjualan</h4>
          </div>

          <div class="modal-body">

            <form method="post">
                            <div class="col-md-12 col-sm-12 col-xs-12 tamma-bg" style="margin-bottom: 20px; padding-top:30px;padding-bottom:20px;">
                              <div class="col-md-2 col-sm-3 col-xs-12">
                                
                                    <label class="tebal">Nama Suplier</label>
                                
                              </div>

                              <div class="col-md-4 col-sm-9 col-xs-12">
                                <div class="form-group">
                                  
                                      <input type="text" readonly="" id="nama_sup" name="nama_supa" class="form-control input-sm" >
                                  
                                </div>
                              </div>

                              <div class="col-md-2 col-sm-3 col-xs-12">
                                
                                    <label class="tebal">Tanggal Return</label>
                                
                              </div>

                              <div class="col-md-4 col-sm-9 col-xs-12">
                                <div class="form-group">
                                  
                                      <input type="text" readonly="" value="{{ date('d-m-Y') }}" class="form-control input-sm">
                                      <input type="hidden" name="tgl_return" value="{{ date('d-m-Y') }}">
                                  
                                </div>
                              </div>
                             
                              <div class="col-md-2 col-sm-3 col-xs-12">
                                
                                    <label class="tebal">Nota Return</label>
                                
                              </div>

                              <div class="col-md-4 col-sm-9 col-xs-12">
                                <div class="form-group">
                                  
                                      <input type="text" readonly=""  class="form-control input-sm">
                                      <input type="hidden" name="no_nota" >
                                  
                                </div>
                              </div>

                              <div class="col-md-2 col-sm-3 col-xs-12">
                                
                                  <label class="tebal">Kode IMEI</label>
                                
                              </div>

                              <div class="col-md-4 col-sm-9 col-xs-12">

                                <div class="form-group">
                                  <div class="input-group">

                                    <input type="text"  class="form-control input-sm">
                                    <span class="input-group-btn">
                                      <button class="btn btn-info btn-sm"><i class="fa fa-search"></i></button>
                                    </span>
                                  </div>
                                </div>
                              </div>

                               <div class="col-md-2 col-sm-3 col-xs-12">
                                
                                    <label class="tebal">No Nota</label>
                                
                              </div>

                              <div class="col-md-4 col-sm-9 col-xs-12">
                                <div class="form-group">
                                  <div class="input-group">

                                    <input type="text"  class="form-control input-sm">
                                    <span class="input-group-btn">
                                      <button class="btn btn-info btn-sm"><i class="fa fa-search"></i></button>
                                    </span>
                                  </div>
                                </div>
                              </div>

                              
                            </div>

                            <div class="table-responsive">
                              <table class="table tabelan table-bordered">
                                <thead>
                                  <tr>
                                    <th>Nama Item</th>
                                    <th>IMEI</th>
                                    <th>Jumlah</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                  </tr>
                                </thead>
                              </table>
                            </div>

                          </form>                        

          </div>
      
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
          </div>
        </div>
       
    </div>
</div>