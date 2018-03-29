
<style type="text/css">
#loading {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 100;
  width: 100%;
  height: 100%;
  background-color: rgba(192, 192, 192, 0.5);
  background-image: url("https://i.stack.imgur.com/MnyxU.gif");
  background-repeat: no-repeat;
  background-position: center;
}  
</style>
<div id="loading" style="display: none;"></div>
<div id="nav-stock" class="tab-pane fade">

  <!-- Modal -->
  @include('penjualan.POSretail.stockRetail.transfer')
  {{-- End modal --}}
  <div class="row" style="margin-top: 15px;">
    <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- Trigger the modal with a button -->
           
      <div class="" align="right" style="margin-bottom: 15px;">
               <button  data-toggle="modal" data-target="#myRequest" aria-controls="list" role="tab"  class="btn-primary btn-flat btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp; Transfer Item</button>

      </div>
      <div id="table-stock">
        
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function stock(){
       $.ajax({
        url : baseUrl + "/penjualan/POSretail/stock/table-stock",
        type: 'get',           
          success:function(response)
          {
            $('#table-stock').html(response);
          }
        });
  }

      


</script>
