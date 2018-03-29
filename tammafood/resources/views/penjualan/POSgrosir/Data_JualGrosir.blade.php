                                  <table class="table tabelan table-bordered table-hover dt-responsive" id="data3">
                                    <thead>
                                      <th>Tanggal</th>
                                      <th>Nama Item</th>
                                      <th>Jumlah Penjualan</th>
                                    </thead>
                                    <tbody>
                                      @foreach ($leagues as $index => $league)
                                       <tr>
                                        <td>{{ date('d M Y', strtotime($league->s_date)) }}</td>
                                        <td>{{ $league->i_nama }}</td>
                                        <td>{{ $league->jumlah }}</td>
                                      </tr> 
                                      @endforeach
                                    </tbody>
                                  </table>

<script>
  $('#data3').DataTable();
</script>