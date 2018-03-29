<div class="modal fade" id="detail" role="dialog">
  <div class="modal-dialog" style="width: 90%;margin: auto;">
      
    <form method="get" action="#">
      <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header" style="background-color: #e77c38;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" style="color: white;">Detail Order Pembelian</h4>
          </div>

          <div class="modal-body">

            <label class="tebal">Status : </label>&nbsp;&nbsp;<span class="label label-success">Di setujui</span>
            
            <div class="col-md-12 col-sm-12 col-xs-12 tamma-bg" style="margin-top:10px;padding-bottom: 10px;padding-top: 20px;margin-bottom: 15px;">
                                                            
              <div class="col-md-3 col-sm-12 col-xs-12">
                  
                      <label class="tebal">No Order Pembelian</label>
              </div>
              <div class="col-md-3 col-sm-12 col-xs-12">
                  <div class="form-group">
                      <label>05022018/ORD/001</label>
                  </div>
                  
              </div>

              <div class="col-md-3 col-sm-12 col-xs-12">
                  
                      <label class="tebal">Cara Pembayaran</label>
              </div>
              <div class="col-md-3 col-sm-12 col-xs-12">
                  <div class="form-group">
                      <label>Tunai</label>
                  </div>
                  
              </div>
              
              <div class="col-md-3 col-sm-12 col-xs-12">
                  
                      <label class="tebal">Tanggal Order Pembelian</label>
              </div>
              <div class="col-md-3 col-sm-12 col-xs-12">
                  <div class="form-group">
                      <label>05-02-2018</label>
                  </div>
                  
              </div>

              <div class="col-md-3 col-sm-12 col-xs-12">
                  
                      <label class="tebal">Tanggal Pengiriman</label>
              </div>
              <div class="col-md-3 col-sm-12 col-xs-12">
                  <div class="form-group">
                      <label>12-02-2018</label>
                  </div>
                  
              </div>

              <div class="col-md-3 col-sm-12 col-xs-12">
                  
                      <label class="tebal">Suplier</label>
              </div>
              <div class="col-md-3 col-sm-12 col-xs-12">
                  <div class="form-group">
                      <label>Bravo</label>
                  </div>
                  
              </div>

            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 tamma-bg" style="margin-bottom: 20px; padding-bottom:5px;padding-top: 10px;">

                <div class="col-md-3 col-sm-12 col-xs-12">
                  <label class="tebal">Total Harga</label>
                </div>

                <div class="col-md-3 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" readonly="" class="input-sm form-control" name="">
                  </div>
                </div>

                <div class="col-md-3 col-sm-12 col-xs-12">
                  <label class="tebal">Diskon</label>
                </div>

                <div class="col-md-3 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" readonly="" class="input-sm form-control" name="">
                  </div>
                </div>

                <div class="col-md-3 col-sm-12 col-xs-12">
                  <label class="tebal">PPN</label>
                </div>

                <div class="col-md-3 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" readonly="" class="input-sm form-control" name="">
                  </div>
                </div>

                <div class="col-md-3 col-sm-12 col-xs-12">
                  <label class="tebal">Total</label>
                </div>

                <div class="col-md-3 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" readonly="" class="input-sm form-control" name="">
                  </div>
                </div>
              </div>

          
              <div class="table-responsive">
                  <table id="barang_table" class="table tabelan table-bordered table-striped">
                    <thead>
                   <tr>
                      <th width="50%">Nama Item</th>
                      <th width="10%">Qty</th>
                      <th>Stok Gudang</th>
                      <th width="20%">Harga</th>
                      <th width="25%">Total</th>
                      <th>Aksi</th>
                  </tr>
                  </thead>
                    <tbody id="div_item">
                      <tr>
                      <td width="50%;">
                          <input type="text" id="barang" class="form-control input-sm" placeholder="Masukkan nama Item" value="Tortila" readonly="">
                      </td>
                      <td width="7%;">
                          <input type="text" id="ip_qtyreq" class="form-control input-sm" value="2" readonly="">
                      </td>
                      <td><input type="text" readonly="" value="25" class="form-control input-sm" name=""></td>
                      <td><input type="text" readonly="" value="10000" class="form-control input-sm" name=""></td>
                      <td><input type="text" readonly="" value="20000" class="form-control input-sm" name=""></td>
                      <td align="center">
                         ...
                      </td>
                      </tr>
                    </tbody>
                  </table>
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12 tamma-bg" style="padding-top:15px;margin-bottom: 25px;">
                <input type="checkbox" name="">&nbsp;Di tolak&nbsp;<input type="checkbox" name="">&nbsp;Di Setujui&nbsp;<input type="checkbox" name="">&nbsp;Di revisi<br>
                <div class="col-md-8 col-sm-8 col-xs-12" style="margin-top: 10px;">
                  <div class="form-group">  
                    <textarea class="form-control"></textarea>
                  </div>
                </div>
              </div>
            
          </div>
      
          <div class="modal-footer" style="border-top: none;">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
          </div>
        </div>
      </form>   
    </div>
</div>