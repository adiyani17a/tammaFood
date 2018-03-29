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

            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="col-md-6 col-sm-6 col-xs-12">  
                <label class="tebal">Suplier</label>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label>Alpha</label>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <label class="tebal">No PO</label>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label>06022018/PO/001</label>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <label class="tebal">Tanggal Diterima</label>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <input type="text" maxlength="10" class="datepicker2 form-control input-sm" name="">
                </div>
              </div>
            </div>

            <div class="table-responsive">
              <table class="table tabelan table-hover table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Item</th>
                    <th>Satuan</th>
                    <th>Jumlah dikirim</th>
                    <th>Jumlah yang diterima</th>
                    <th>Sisa</th>
                    <th>Tambahan Qty disamping</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Tortila</td>
                    <td>Pcs</td>
                    <td>25</td>
                    <td><input type="number" class="form-control input-sm" name=""></td>
                    <td><input type="text" class="form-control input-sm" readonly="" value="7" name=""></td>
                    <td><button class="btn btn-info"><i class="fa fa-plus"></i>&nbsp;&nbsp;Samping</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
      
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
          </div>
        </div>
      </form>   
    </div>
</div>