<div class="modal fade" id="tambah" role="dialog">
  <div class="modal-dialog" style="width: 90%;margin: auto;">
      
    <form method="get" action="#">
      <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header" style="background-color: #e77c38;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" style="color: white;">Form Manajemen Harga</h4>
          </div>

          <div class="modal-body">

            <div class="col-md-12 col-sm-12 col-xs-12 tamma-bg" style="margin-bottom: 15px;padding-top: 15px; ">
                                        
              <div class="col-md-4 col-sm-4 col-xs-12">
                <label class="tebal">No Manajemen Harga</label>
              </div>
              <div class="col-md-4 col-sm-8 col-xs-12">
                <div class="form-group">  
                  <input type="text" class="form-control input-sm" readonly="" maxlength="10" name="">
                </div>
              </div>

              <div class="col-md-4 col-sm-0 col-xs-0" style="height: 45px;">
                
              </div>

              <div class="col-md-4 col-sm-4 col-xs-12">
                <label class="tebal">Periode</label>
              </div>

              <div class="col-md-4 col-sm-8 col-xs-12">
                <div class="form-group">  
                  <input type="text" class="form-control input-sm datepicker2"; name="">
                </div>
              </div>

              <div class="col-md-4 col-sm-0 col-xs-0" style="height: 45px;">
                
              </div>

              <div class="col-md-4 col-sm-4 col-xs-12">
                <label class="tebal">Kelompok Barang</label>
              </div>

              <div class="col-md-4 col-sm-8 col-xs-12">
                <div class="form-group">  
                  <select class="form-control input-sm">
                    <option>Semua</option>
                    <option>Tortila</option>
                    <option>Burger</option>
                  </select>
                </div>
              </div>

            </div>
          
            <div class="table-responsive">
              <table class="table tabelan table-bordered table-hover" id="data2">
                <thead>
                  <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Isi</th>
                    <th>Harga(Eceran)</th>
                    <th>Harga(per pcs)</th>
                    <th>Min Pembelian</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1111</td>
                    <td>Tortilla</td>
                    <td>Pcs</td>
                    <td>15</td>
                    <td>Rp. 30.000,-</td>
                    <td>Rp. 1.500,-</td>
                    <td>10</td>
                  </tr>
                  <tr>
                    <td>1112</td>
                    <td>Kebab</td>
                    <td>Pcs</td>
                    <td>20</td>
                    <td>Rp. 25.000,-</td>
                    <td>Rp. 1.000,-</td>
                    <td>10</td>
                  </tr>
                  <tr>
                    <td>1113</td>
                    <td>Burger</td>
                    <td>Pcs</td>
                    <td>10</td>
                    <td>Rp. 60.000,-</td>
                    <td>Rp. 8.000,-</td>
                    <td>10</td>
                  </tr>
                </tbody>
              </table>
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