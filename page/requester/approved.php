<?php include 'plugins/navbar.php';?>
<?php include 'plugins/sidebar/approvedbar.php';?>
  <!-- Main Sidebar Container -->

 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">List of Approved</h1>
            <br>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">List of Approved</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">
                </h3> 
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <input type="hidden" name="id_num_approved" id="id_num_approved" value="<?=$id_number;?>">
                <div class="card-body">
                   <div class="row">
                    <div class="col-3">
                    <label>Facility Name:</label> <input type="text" name="facility_name_approved_req" id="facility_name_approved_req" class="form-control">
                    </div>
                     <div class="col-9">
                      <span style="visibility:hidden;">.</span>
                      <p style="text-align:right;"><a href="#" class="btn btn-primary" onclick="load_approved()">Search <i class="fa fa-search"></a></i></p>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-12">
                       <div class="card-body table-responsive p-0" style="height: 450px;">
                <table class="table table-head-fixed text-nowrap table-hover" id="">
                <thead style="text-align:center;">
                    <th>#</th>
                    <th>Borrowing Code</th>
                    <th>Date Borrowed</th>
                    <th>Time From</th>
                    <th>Time To</th>
                    <th>Facility</th>
                    <th>Purpose</th>
                    <th>Returned Date</th>
                    <th>Returned Time</th>
                    <th>Status</th>
            </thead>
            <tbody id="list_of_approved_req" style="text-align:center;"></tbody>
            </table>
             <div class="row">
                  <div class="col-6">
                    
                  </div>
                  <div class="col-6">
                    <div class="spinner" id="spinner" style="display:none;">
                        <div class="loader float-sm-center"></div>    
                    </div>
             
                  </div>
              </div>

              </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                
                </div>
              </form>
            </div>
            <!-- /.card -->

</div>
</div>
</div>
</section>
</div>

<?php include 'plugins/footer.php';?>
<?php include 'plugins/javascript/approved_script.php';?>
