<div id="nav-stock" class="tab-pane fade">
    @include('penjualan.POSgrosir.request')
  {{-- End modal --}}
  <div class="row" style="margin-top: 15px;">
    <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- Trigger the modal with a button -->
            <div class="" align="right" style="margin-bottom: 15px;">
              <button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#myRequest"><i class="fa fa-plus"></i>&nbsp;&nbsp;Request Item</button>
            </div>

  <div class="row" style="margin-top: 15px;">
    <div class="col-md-12 col-sm-12 col-xs-12">
      
      <div class="table-responsive">
        <table class="table tabelan table-bordered" id="data4">
          <thead>
            <tr>
              <th>Nama Item</th>
              <th>Harga Jual</th>
              <th>Stock</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($stock as $stok)
            <tr>
              <td>{{ $stok->i_name }}</td>
              <td>Rp.{{ number_format($stok->i_price,2,',','.')}}</td>
              <td>{{ $stok->s_qty }}</td>
            </tr> 
            @endforeach
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>
</div>
</div>