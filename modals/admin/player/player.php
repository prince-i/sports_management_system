<div class="modal fade bd-example-modal-lg" id="add_player" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document"  style="min-width: 90%;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Add Player</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="row">
           <div class="col-4">
              <label>ID Number:</label> <input type="text" name="id_num" id="id_num" class="form-control" autocomplete="off" >
            </div>
          <div class="col-2">
              <label>Age: &nbsp;&nbsp;</label> <input type="number" name="age" id="age" class="form-control" autocomplete="off" onkeypress="return event.charCode >= 48" min="1" >
            </div>
            <div class="col-2">
              <label>Gender:</label>
              <select id="gender" class="form-control">
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
            <div class="col-2">
              <label>Weight:</label> <input type="text" name="weight" id="weight" class="form-control" autocomplete="off" maxlength="4">
            </div> 
            <div class="col-2">
              <label>Height:</label> <input type="text" name="height" id="height" class="form-control" autocomplete="off" maxlength="4">
            </div>  
                
        </div>

        <div class="row">  
            <div class="col-4">
              <label>Sports Playing / Interested to Play: &nbsp;&nbsp;</label> <input type="text" name="sports" id="sports" class="form-control">
            </div>    
            <div class="col-4">
              <label>If Applicable, Position that you play: (<b style="color: red;">Please Input N/A if None</b>)</label> <input type="text" name="position" id="position" class="form-control" autocomplete="off">
            </div>
            <div class="col-4">
              <label>Any Medical Conditions: (<b style="color: red;">Please Input N/A if None</b>)</label> <input type="text" name="medical" id="medical" class="form-control" autocomplete="off">
            </div>
                
      </div>

       <div class="row">  
            <div class="col-4">
              <label>Any Past Injury: (<b style="color: red;">Please Input N/A if None</b>)</label> <input type="text" name="injury" id="injury" class="form-control" autocomplete="off" >
            </div>     
            <div class="col-4">
              <label>Contact No:</label> <input type="text" name="contact_no" id="contact_no" class="form-control" autocomplete="off" maxlength="11">
            </div>
            <div class="col-4">
              <label>Address:</label> <input type="text" name="address" id="address" class="form-control" autocomplete="off">
            </div>          
      </div>
      <div class="row">
          <div class="col-4">
             <label>Contact Person(Name):</label> <input type="text" name="contact_p_name" id="contact_p_name" class="form-control" autocomplete="off">
          </div>
          <div class="col-4">
             <label>Contact Person(Contact No):</label> <input type="text" name="contact_p_no" id="contact_p_no" class="form-control" autocomplete="off" maxlength="11">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="#" class="btn btn-info" onclick="register_player()">Register Player</a>
      </div>
    </div>
  </div>
</div>