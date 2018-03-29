                                  <table class="table tabelan table-bordered table-hover dt-responsive" id="data2">
                                    <thead>
                                      <th>Tanggal Nota</th>
                                      <th>No Nota</th>
                                      <th>Customer</th>
                                      <th>Item</th>
                                      <th>Nominal</th>
                                      <th>Status</th>
                                      <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                      @foreach ($detalis as $index => $detail)                       
                                      <tr>
                                        <td>{{ date('d M Y', strtotime($detail->s_date)) }}</td>
                                        <td>{{ $detail->s_nota }}</td>
                                        <td>{{ $detail->S_customer }}</td>
                                        <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal"  onclick="lihatDetail('{{ $detail->s_id }}')" data-target="#myItem">Buka Item</button></td>
                                        <td>Rp.{{ number_format( $detail->s_gross ,2,',','.')}}</td>
                                        <td>{{ $detail->s_type }}</td>
                                        <td class="text-center">
                                      <div class="">

                                       <a href="{{ url('/penjualan/POSretail/retail/edit_sales',$detail->s_id) }}" class="btn btn-warning btn-sm" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
                                       <a onclick="return confirm('Apakah anda yakin?')"; href="{{ url('/penjualan/POSretail/retail/distroy',$detail->s_id) }}" class="btn btn-danger btn-sm" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>

                                      </div>                            
                                      </td>
                                      </tr>
                                      @endforeach
                                    </tbody>
                                  </table>
<script>
  $('#data2').DataTable();

</script>