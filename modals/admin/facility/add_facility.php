<div class="modal fade" id="add_facility" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Add Facility</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
           <div class="col-6">
              <label>Facility Name:</label> <input type="text" name="facility_n" id="facility_n" class="form-control" autocomplete="off" >
            </div>
            <div class="col-6">
              <label>Status:</label>
              <select id="facility_s" class="form-control">
                <option value="">Select Status</option>
                <option value="Available">Available</option>
                <option value="Not_Available">Not Available</option>
              </select>
            </div>
        </div>    
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="#" class="btn btn-info" onclick="register_facility()">Register Facility</a>
      </div>
    </div>
  </div>
</div>