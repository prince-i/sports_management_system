<!-- Modal -->
<div class="modal fade" id="req_pending" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b><h5 id="title">Pending Items</b></h5><br>
          <div id="code">
            
          </div>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="id_pending_req" id="id_pending_req" class="form-control">
        <input type="hidden" name="borrowing_code_pending_req" id="borrowing_code_pending_req" class="form-control">
        <div class="row">
          <div class="col-2">
            <label>ID Number:</label>
            <input type="text" name="id_num_pending_req" id="id_num_pending_req" class="form-control" readonly>
          </div>
          <div class="col-3">
            <label>Name:</label>
            <input type="text" name="name_pending_req" id="name_pending_req" class="form-control"  readonly>
          </div>
          <div class="col-3">
            <label>Date of Borrowing:</label>
            <input type="date" name="date_of_pending_req" id="date_of_pending_req" class="form-control" readonly>
          </div>
           <div class="col-2">
            <label>Time From:</label>
            <input type="time" name="time_from_pending_req" id="time_from_pending_req" class="form-control" readonly>
          </div>
          <div class="col-2">
            <label>Time To:</label>
            <input type="time" name="time_to_pending_req" id="time_to_pending_req" class="form-control" readonly>
          </div>
        </div>
        <div class="row">   
          <div class="col-2">
            <label>Date of Returning</label>
            <input type="date" name="date_of_returning_pending_req" id="date_of_returning_pending_req" class="form-control" readonly>
          </div>
          <div class="col-3">
            <label>Time of Returning</label>
            <input type="time" name="time_of_returning_pending_req" id="time_of_returning_pending_req" class="form-control" readonly>
          </div>
          <div class="col-3">
            <label>Facility</label>
            <input type="text" name="facility_pending_req" id="facility_pending_req" class="form-control" readonly>
          </div>
          <div class="col-4">
              <label>Purpose/Event:</label>
              <input type="text" name="purpose_pending_req" id="purpose_pending_req" class="form-control" readonly>
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
                  <tbody style="text-align:center;" id="prev_equips_req"></tbody>
              </table>
            </div>
        </div>
      </div>
      <br>
      <div class="modal-footer">
  <!--          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="proceed_borrowing()">Proceed</button> -->
      </div>
    </div>
  </div>
</div>