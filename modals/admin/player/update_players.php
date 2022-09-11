<div class="modal fade" id="update_player" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document" style="min-width: 90%;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Update Player Details</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
           <div class="col-4">
            <input type="hidden" name="" id="player_id_update" class="form-control">
              <label>ID Number:</label> <input type="text" name="id_num_update" id="id_num_update" class="form-control" autocomplete="off" >
            </div>
          <div class="col-2">
              <label>Age: &nbsp;&nbsp;</label> <input type="number" name="age_update" id="age_update" class="form-control" autocomplete="off" onkeypress="return event.charCode >= 48" min="1" >
            </div>
            <div class="col-2">
              <label>Gender:</label>
              <select id="gender_update" class="form-control">
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
            <div class="col-2">
              <label>Weight:</label> <input type="text" name="weight_update" id="weight_update" class="form-control" autocomplete="off" maxlength="4">
            </div> 
            <div class="col-2">
              <label>Height:</label> <input type="text" name="height_update" id="height_update" class="form-control" autocomplete="off" maxlength="4">
            </div>  
                
        </div>

        <div class="row">  
            <div class="col-4">
              <label>Sports Playing / Interested to Play: &nbsp;&nbsp;</label> <input type="text" name="sports_update" id="sports_update" class="form-control">
            </div>    
            <div class="col-4">
              <label>If Applicable, Position that you play: (<b style="color: red;">Please Input N/A if None</b>)</label> <input type="text" name="position_update" id="position_update" class="form-control" autocomplete="off">
            </div>
            <div class="col-4">
              <label>Any Medical Conditions: (<b style="color: red;">Please Input N/A if None</b>)</label> <input type="text" name="medical_update" id="medical_update" class="form-control" autocomplete="off">
            </div>
                
      </div>

       <div class="row">  
            <div class="col-4">
              <label>Any Past Injury: (<b style="color: red;">Please Input N/A if None</b>)</label> <input type="text" name="injury_update" id="injury_update" class="form-control" autocomplete="off" >
            </div>     
            <div class="col-4">
              <label>Contact No:</label> <input type="text" name="contact_no_update" id="contact_no_update" class="form-control" autocomplete="off" maxlength="11">
            </div>
            <div class="col-4">
              <label>Address:</label> <input type="text" name="address_update" id="address_update" class="form-control" autocomplete="off">
            </div>          
      </div>
      <div class="row">
          <div class="col-4">
             <label>Contact Person(Name):</label> <input type="text" name="contact_p_name_update" id="contact_p_name_update" class="form-control" autocomplete="off">
          </div>
          <div class="col-4">
             <label>Contact Person(Contact No):</label> <input type="text" name="contact_p_no_update" id="contact_p_no_update" class="form-control" autocomplete="off" maxlength="11">
          </div>
      </div>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="#" class="btn btn-info" onclick="update_player()">Update Player</a>
      </div>
    </div>
  </div>
</div>