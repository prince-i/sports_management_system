<div class="modal fade" id="update_facilities" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Update Facility Details</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <input type="hidden" name="facility_id_update" id="facility_id_update">
           <div class="col-6">
              <label>Facility Name:</label> <input type="text" name="facility_n_update" id="facility_n_update" class="form-control" autocomplete="off" >
            </div>
            <div class="col-6">
              <label>Status:</label>
              <select id="facility_s_update" class="form-control">
                <option value="">Select Status</option>
                <option value="Available">Available</option>
                <option value="Not_Available">Not Available</option>
              </select>
            </div>
        </div>    
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="#" class="btn btn-info" onclick="update_facility()">Update Facility</a>
      </div>
    </div>
  </div>
</div>