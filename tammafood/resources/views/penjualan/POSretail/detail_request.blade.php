      <table class="table tabelan table-bordered table-hover" id="detailReq">
          <thead>
            <tr>
              <th width="5%">No</th>
              <th>Item</th>
              <th width="10%">Jumlah</th>
              <th width="10%">Jumlah diSetujui</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($request as $index => $reques)
            <tr>
              <td>{{ $index+1 }}</td>
              <td>{{ $reques->i_name }}</td>
              <td>{{ $reques->tidt_qty }}</td>
              <td></td>
            </tr>
            @endforeach
          </tbody>
        </table>

<script>

  $('#detailReq').DataTable();
  
</script>