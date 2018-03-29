<table class="table tabelan table-bordered table-hover dt-responsive" id="data3">
  <thead>
    <th>Tanggal</th>
    <th>Nama Item</th>
    <th>Jumlah Penjualan</th>
  </thead>
  <tbody>
    @foreach ($leagues as $index => $league)
     <tr>
      <td>{{ date('d M Y', strtotime($league->ti_time)) }}</td>
      <td>{{ $league->i_name }}</td>
      <td>{{ $league->jumlah }}</td>
    </tr> 
    @endforeach
  </tbody>
</table>

<script>
  $('#data3').DataTable();
</script>