    <div class="col-md-12 tamma-bg" style="margin-top: 5px;margin-bottom: 5px;margin-bottom: 20px; padding-bottom:20px;padding-top:20px;" >
         <div class="col-md-6">
           <label class="control-label tebal" for="">Masukan Kode / Nama</label>
              <div class="input-group input-group-sm" style="width: 100%;">
                  <input type="text" id="namaitem" name="item" class="form-control">
                  <input type="hidden" id="kode" name="sd_item" class="form-control">
                  <input type="hidden" id="harga" name="sd_sell" class="form-control">
                  <input type="hidden" id="detailnama" name="nama" class="form-control">
                  <input type="hidden" id="satuan" name="satuan" class="form-control" >
              </div>
          </div>      
          <div class="col-md-3">
           <label class="control-label tebal" name="qty">Masukan Jumlah</label>
              <div class="input-group input-group-sm" style="width: 100%;">
                 <input type="number" id="qty" name="qty" class="form-control" onkeyup="setQty()">
              </div>
          </div>
          <div class="col-md-3">
           <label class="control-label tebal" name="qty">Kuantitas Stok</label>
              <div class="input-group input-group-sm" style="width: 100%;">
                 <input type="number" id="s_qty" name="s_qty" class="form-control" readonly>
              </div>
          </div>
    </div>                      
    <div class="table-responsive">
      <table class="table tabelan table-bordered table-hover dt-responsive" id="detail-penjualan">
       <thead align="right">
        <tr>
         {{-- <th>Kode</th> --}}
         <th>Nama</th>
         <th width="2%">Jumlah</th>
         <th width="2%">Satuan</th>
         <th width="15%">Harga</th>
         <th>Disc Percent</th>
         <th>Disc Value</th>
         <th width="15%">Total</th>
         <th><button class="hidden" onclick="tambah()">add</button></th>
        </tr>
       </thead> 
       <tbody>
        
       </tbody>
      </table>
    </div>
