<!-- Modal -->
<div class="modal fade" id="update_acc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Update Account Details</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-3">
            <input type="hidden" name="id_acc_update" id="id_acc_update" class="form-control">
              <label>ID Number:</label> <input type="text" name="id_number_update" id="id_number_update" class="form-control" autocomplete="off" >
          </div>
          <div class="col-3">
                <label>Name:</label> <input type="text" name="name_update" id="name_update" class="form-control" autocomplete="off" >
          </div>
          <div class="col-3">
                <label>Course:</label> <input type="text" name="course_update" id="course_update" class="form-control" autocomplete="off" >
          </div>
           <div class="col-3">
                <label>Year/Section:</label> <input type="text" name="year_update" id="year_update" class="form-control" autocomplete="off" >
          </div>
        </div>
        <div class="row">
          <div class="col-4">
               <label>Email:</label> <input type="text" name="email_update" id="email_update" class="form-control" autocomplete="off" >
          </div>
          <div class="col-4">
                <label>Password:</label> <input type="password" name="password_update" id="password_update" class="form-control" autocomplete="off" >
          </div>
          <div class="col-4">
                <label>User Type:</label>
                <select id="user_type_update" class="form-control">
                        <option value="">Select User Type</option>
                        <option value="admin">Admin</option>
                        <option value="requester">Requester</option>
                </select>
          </div>
          <div class="col-4">
                <label>Permission:</label>
                <select id="user_permission" class="form-control">
                        <option value="">Select User Permission</option>
                        <option value="0">Unauthorized</option>
                        <option value="1">Authorized</option>
                </select>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="#" class="btn btn-info" onclick="update_account()">Update Account</a>
      </div>
    </div>
  </div>
</div>