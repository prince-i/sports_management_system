<!-- Modal -->
<div class="modal fade" id="req_borrow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Form for Borrowing/Scheduling</b><br>
          <div id="code">
            
          </div>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-2">
            <label>ID Number:</label>
            <input type="text" name="id_num_borrowing" id="id_num_borrowing" class="form-control" value="<?=$id_number;?>" readonly>
          </div>
          <div class="col-3">
            <label>Name:</label>
            <input type="text" name="name_borrowing" id="name_borrowing" class="form-control" value="<?=$name;?>" readonly>
          </div>
          <div class="col-3">
            <label>Date of Borrowing:</label>
            <input type="date" name="date_of_borrowing" id="date_of_borrowing" class="form-control">
          </div>
           <div class="col-2">
            <label>Time From:</label>
            <input type="time" name="time_from_borrowing" id="time_from_borrowing" class="form-control">
          </div>
          <div class="col-2">
            <label>Time To:</label>
            <input type="time" name="time_to_borrowing" id="time_to_borrowing" class="form-control">
          </div>
        </div>
        <div class="row">   
          <div class="col-2">
            <label>Date of Returning</label>
            <input type="date" name="date_of_returning" id="date_of_returning" class="form-control">
          </div>
          <div class="col-3">
            <label>Time of Returning</label>
            <input type="time" name="time_of_returning" id="time_of_returning" class="form-control">
          </div>
          <div class="col-3">
            <label>Facility</label>
            <select id="facility_borrowing" class="form-control">
              <option value="">Select Facility</option>
              <?php 
              include '../../conn.php';
              $query = "SELECT DISTINCT facility FROM facilities WHERE status = 'Available'";
              $stmt = $conn->prepare($query);
              if ($stmt->execute()) {
                  foreach($stmt->fetchALL() as $j){
                    echo '<option value="'.$j['facility'].'">'.$j['facility'].'</option>';
                  }
              }
              ?>
            </select>
          </div>
          <div class="col-4">
              <label>Purpose/Event:</label>
              <input type="text" name="purpose_borrowing" id="purpose_borrowing" class="form-control">
          </div>
        </div>
        <div class="row">
          <div class="col-3">
            <label>Equipment:</label>
            <select id="equips_borrowing" class="form-control">
              <option value="">Select Equipment</option>
              <?php 
              include '../../conn.php';
              $query = "SELECT DISTINCT equipment_name FROM equipments WHERE status = 'Available' AND quantity > 0";
              $stmt = $conn->prepare($query);
              if ($stmt->execute()) {
                  foreach($stmt->fetchALL() as $j){
                    echo '<option value="'.$j['equipment_name'].'">'.$j['equipment_name'].'</option>';
                  }
              }
              ?>
            </select>
          </div>
          <div class="col-3">
            <label style="color:white;">.</label><br>
            <a href="#" class="btn btn-info" onclick="borrow_equipment()">Borrow Equipment</a>
          </div>
        </div>
      </div>
       <br>
      <div class="row">
        <div class="col-12">
          <div class="card-body table-responsive p-0" style="height: 300px;">
             <table  class="table table-head-fixed text-nowrap table-hover" style="">
                  <thead  style="text-align:center;">
                                  <th>#</th>
                                  <th>Equipment Name</th>
                                  <th>Quantity</th>
                  </thead>
                  <tbody style="text-align:center;" id="prev_equips"></tbody>
              </table>
            </div>
        </div>
      </div>
      <br>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="proceed_borrowing()">Proceed</button>
      </div>
    </div>
  </div>
</div>