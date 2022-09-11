<div class="modal fade" id="update_equipment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Update Equipment Details</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
           <div class="col-4">
            <input type="hidden" name="" id="equip_id_update" class="form-control">
              <label>Equipment Name:</label> <input type="text" name="equip_name_update" id="equip_name_update" class="form-control" autocomplete="off" >
            </div>
          <div class="col-4">
              <label>Quantity: &nbsp;&nbsp;</label> <input type="number" name="equip_qty_update" id="equip_qty_update" class="form-control" autocomplete="off" onkeypress="return event.charCode >= 48" min="1" >
            </div>
            <div class="col-4">
              <label>Status:</label>
              <select id="equip_status_update" class="form-control">
                <option value="">Select Status</option>
                <option value="Available">Available</option>
                <option value="Not_Available">Not Available</option>
              </select>
            </div>
        </div>    
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="#" class="btn btn-info" onclick="update_equipment()">Update Equipment</a>
      </div>
    </div>
  </div>
</div>