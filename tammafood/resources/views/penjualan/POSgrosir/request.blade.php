            <div class="modal fade" id="myRequest" role="dialog">
              <div class="modal-dialog">
              
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Inventory</h4>
                  </div>
                  <div class="modal-body">
                    
                            <div class="col-md-12 col-sm-12 col-xs-12 tamma-bg" style="margin-bottom: 20px; padding-bottom:5px;padding-top:20px; ">

                                <div class="col-md-4 col-sm-3 col-xs-12"> 
                              
                                  <label class="tebal">No Request</label>
                                  
                                </div>
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                        <input type="text" id="" readonly="true" name="no_req" value="{{ $idreq }}" class="form-control input-sm">
                                  </div>
                                </div>
                                <div class="col-md-4 col-sm-3 col-xs-12">
                                  
                                      <label class="tebal" name="admin">Admin</label>
                                  
                                </div>
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    <div class="input-icon right">
                                      <i class="glyphicon glyphicon-user"></i>
                                      <input type="text" id="" readonly="true" name="admin" class="form-control input-sm" value="{{ Auth::user()->name }}"> 
                                      <input type="hidden" id="" readonly="true" name="admin" class="form-control input-sm" value="{{ Auth::user()->id }}">      
                                    </div>                           
                                  </div>
                                </div>
                                <div class="col-md-4 col-sm-3 col-xs-12">
                                  
                                      <label class="tebal">Ket</label>
                                  
                                </div>
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    <div class="input-icon right">
                                      <i class="glyphicon glyphicon-envelope"></i>
                                      <input type="text" id="" name="ket" class="form-control input-sm">
                                    </div>                                
                                  </div>
                                </div>
                            </div>
                        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 15px;margin-bottom: 15px;">
                             <div class="col-md-6 col-sm-6 col-xs-12">
                               <label class="control-label tebal" >Masukan Kode / Nama</label>
                                  <div class="input-group input-group-sm" style="width: 100%;">
                                      <input type="text" id="rnamaitem" name="rnamaitem" class="form-control">

                                      <input type="hidden" id="rkode" name="rsd_item" class="form-control">
                                      <input type="hidden" id="rharga" name="rsd_sell" class="form-control">
                                      <input type="hidden" id="rdetailnama" name="rnama" class="form-control">
                                      <input type="hidden" id="rsatuan" name="rsatuan" class="form-control" >
                                      <input type="hidden" id="rstok" name="rstok" class="form-control" >                                              
                                  </div>
                              </div>        
                              <div class="col-md-6 col-sm-6 col-xs-12">
                               <label class="control-label tebal">Masukan Jumlah</label>
                                  <div class="input-group input-group-sm" style="width: 100%;">
                                     <input type="number" id="rqty" name="r_qty" class="form-control" >
                                  </div>
                              </div>
                        </div> 
                        <div class="table-responsive">
                          <table class="table tabelan table-bordered table-hover dt-responsive" id="detail-req">
                           <thead align="right">
                            <tr>
                             <th>Kode Item</th>
                             <th>Nama Item</th>
                             <th width="2%">Jumlah</th>
                             <th width="2%">Satuan</th>
                             <th>Stok Retail</th>
                             <th><button class="hidden" onclick="tambahreq()">add</button></th>
                            </tr>
                           </thead> 
                           <tbody>
                            
                           </tbody>
                          </table>
                        </div>
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="button">Proses</button> 
                  </div>
                </div>
                
              </div>
            </div>