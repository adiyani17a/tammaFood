<div id="nav-ReqRetail" class="tab-pane fade">
  <div class="row" style="margin-top: 15px;">
    <div class="col-md-12 col-sm-12 col-xs-12">

      <div class="table-responsive">
        <table class="table tabelan table-bordered" id="data5">
          <thead>
            <tr>
              <th>No Req</th>
              <th>Tgl Req</th>
              <th>Keterangan</th>
              <th>Item</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($request as $reques)
            <tr>
              <td>{{ $reques->ti_code }}</td>
               <td>{{ date('d M Y', strtotime( $reques->ti_time)) }}</td>
              <td>{{ $reques->ti_note }}</td>
              <td class="text-center">
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"  onclick="lihatDetailReq('{{ $reques->ti_id }}')" data-target="#myItemReq">Buka Item</button>
              </td>
              <td class="text-center"> 
                <span class="label label-warning">Belum diSetujui</span>
              </td>
              <td class="text-center">
                <a href="#" class="btn btn-warning btn-sm" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
                <a href="#" class="btn btn-danger btn-sm" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>
<div class="modal fade" id="myItemReq" role="dialog">
  <div class="modal-dialog" >
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #e77c38;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"  style="color: white;">Nama Item</h4>
        
      </div>
      <div class="modal-body">
        <div id="detailReqRit">
         
        </div>
      </div>
    </div>
  </div>
</div>



