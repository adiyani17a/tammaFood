<div id="label-badge-tab" class="tab-pane fade">
                                  <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                          
                                      <div class="col-md-12 col-sm-12 col-xs-12 tamma-bg" style="padding-bottom: 5px;margin-bottom:15px;padding-top: 15px;">
                                        
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                          <label class="tebal">Laporan Neraca</label>
                                        </div>

                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                          <div class="form-group">
                                            <select class="form-control input-sm">
                                              <option>Neraca Percobaan</option>
                                              <option>Neraca Final</option>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                          <div class="form-group">
                                            <div class="input-icon right">
                                              <i class="fa fa-calendar"></i>
                                              <input type="text" maxlength="10" class="form-control input-sm datepicker2" name="">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                          <button class="btn btn-info btn-sm">Lihat</button>
                                          <button class="btn btn-primary btn-sm">Cetak</button>
                                        </div>
                                      </div>

                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label class="tebal">Aset</label>
                                        <div class="table-responsive">
                                          <table class="table table-hover table-bordered">
                                            <thead class="bg-info">
                                              <tr>
                                                <th>Kode</th>
                                                <th>Nama Akun</th>
                                                <th>Nilai</th>
                                                <th>Presentase</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>

                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label class="tebal">Kewajiban</label>
                                        <div class="table-responsive">
                                          <table class="table table-hover table-bordered">
                                            <thead class="bg-warning">
                                              <tr>
                                                <th>Kode</th>
                                                <th>Nama Akun</th>
                                                <th>Nilai</th>
                                                <th>Presentase</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                        <label class="tebal">Modal</label>
                                        <div class="table-responsive">
                                          <table class="table table-hover table-bordered">
                                            <thead class="bg-danger">
                                              <tr>
                                                <th>Kode</th>
                                                <th>Nama Akun</th>
                                                <th>Nilai</th>
                                                <th>Presentase</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>

                                      <div class="col-md-6 col-sm-6 col-xs-12" style="border-top: 1px solid gray;">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                          <label class="tebal">Total</label>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12" align="right">
                                          <label>{{ number_format(0,2,',','.') }}</label>
                                        </div>
                                      </div>

                                      <div class="col-md-6 col-sm-6 col-xs-12" style="border-top: 1px solid gray;">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                          <label class="tebal">Total</label>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12" align="right">
                                          <label>{{ number_format(0,2,',','.') }}</label>
                                        </div>
                                      </div>

                                      

                                    </div>
                                  </div>
                                </div>