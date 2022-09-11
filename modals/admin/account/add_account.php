<!-- Modal -->
<div class="modal fade" id="add_acc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Add Account</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-3">
              <label>ID Number:</label> <input type="text" name="id_number_add" id="id_number_add" class="form-control" autocomplete="off" >
          </div>
          <div class="col-3">
                <label>Name:</label> <input type="text" name="name_add" id="name_add" class="form-control" autocomplete="off" >
          </div>
          <div class="col-3">
                <label>Course:</label> <input type="text" name="course_add" id="course_add" class="form-control" autocomplete="off" >
          </div>
           <div class="col-3">
                <label>Year/Section:</label> <input type="text" name="year_add" id="year_add" class="form-control" autocomplete="off" >
          </div>
        </div>
        <div class="row">
          <div class="col-4">
               <label>Email:</label> <input type="text" name="email_add" id="email_add" class="form-control" autocomplete="off" >
          </div>
          <div class="col-4">
                <label>Password:</label> <input type="password" name="password_add" id="password_add" class="form-control" autocomplete="off" >
          </div>
          <div class="col-4">
                <label>User Type:</label>
                <select id="user_type_add" class="form-control">
                        <option value="">Select User Type</option>
                        <option value="admin">Admin</option>
                        <option value="requester">Requester</option>
                </select>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="#" class="btn btn-info" onclick="register_account()">Register Account</a>
      </div>
    </div>
  </div>
</div>