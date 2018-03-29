
  <table class="table tabelan table-bordered table-hover" 
  id="tableInputItemReq" >
      <thead>
        <tr>
          <th width="5%">No</th>
          <th>Item</th>
          <th width="10%">Jumlah</th>
          <th width="10%">Jumlah dikirim</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($request as $index => $reques)
        <tr>
          <td>{{ $index+1 }}</td>
          <td>{{ $reques->i_name }}</td>
          <td>
            <input type="hidden" class="form-control input-sm" name="kodeItemReq[]" readonly value="{{ $reques->tidt_item }}"  >
            <input type="hidden" class="form-control input-sm" name="rd_request[]" value="{{ $reques->tidt_id }}">
            <input type="hidden" class="form-control input-sm" name="rd_detail[]" value="{{ $reques->tidt_detail }}">
            <input type="hidden" class="form-control input-sm" name="rd_item[]" value="{{ $reques->tidt_item }}">
            <input type="text" class="form-control input-sm" name="rd_qty[]" readonly value="{{ $reques->tidt_qty }}">
            
          </td>
          <td>
            <input type="text" class="form-control input-sm" name="tambahItemReq[]" value="{{ $reques->tidt_qty_appr }}">
            {{-- <input type="text" class="form-control input-sm" name="tambahItemReq[]" > --}}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  <div class="modal-footer">
    <button type="button" class="btn btn-info" data-dismiss="modal" onclick="tambahItemReq()">Proses</button>
    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
  </div>

<script>
  
  tableInputItemReq=$('#tableInputItemReq').DataTable();

      function tambahItemReq(){
        var data = tableInputItemReq.$('input').serialize();
        $.ajax({
          url : baseUrl + "/penjualan/POSgrosir/grosir/tambahItemReq",
          type: 'get',
          data: data,

          success:function(response) {
            
            $("input[name='rd_request[]']").val('');
            $("input[name='rd_detail[]']").val('');
            $("input[name='rd_item[]']").val('');
            $("input[name='rd_qty[]']").val('');
            $("input[name='kodeItemReq[]']").val('');
            $("input[name='tambahItemReq[]]']").val('');
            alert('tersimpan');
          }

        });
      }
</script>