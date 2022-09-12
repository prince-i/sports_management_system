<?php include 'plugins/navbar.php';?>
<?php include 'plugins/sidebar/equipmentbar.php';?>
  <!-- Main Sidebar Container -->

 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Equipment Management</h1>
            <br>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Equipment Management</li>
            </ol>
          </div><!-- /.col -->
           <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
             <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#add_equip">Add Equipment</a>
            </ol>
          </div>
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
                <div class="card-body">
                   <div class="row">
                    <div class="col-3">
                    <label>Equipment Name:</label> <input type="text" name="equipment_name" id="equipment_name" class="form-control">
                    </div>
                    <div class="col-3">
                      <label>Equipment Status:</label>
                      <select id="equipment_status" class="form-control">
                        <option value="">Select Status</option>
                        <option value="Available">Available</option>
                        <option value="Not_Available">Not Available</option>
                      </select>
                    </div>
                     <div class="col-6">
                      <span style="visibility:hidden;">.</span>
                      <p style="text-align:right;"><a href="#" class="btn btn-primary" onclick="load_equipments()">Search <i class="fa fa-search"></a></i>
                      <a href="#" class="btn btn-success" onclick="export_equipment('equipment_tbl')">Export</a>
                    </p>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-12">
                       <div class="card-body table-responsive p-0" style="height: 450px;">
                <table class="table table-head-fixed text-nowrap table-hover" id="equipment_tbl">
                <thead style="text-align:center;">
                    <th>#</th>
                    <th>Equipment Name</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Date Created</th>
            </thead>
            <tbody id="list_of_equipments" style="text-align:center;"></tbody>
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
<?php include 'plugins/javascript/equipment_script.php';?>
<script>setTimeout(load_equipments,1000);
function export_equipment(table_id, separator = ',') {
    var rows = document.querySelectorAll('table#' + table_id + ' tr');
    var csv = [];
    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll('td, th');
        for (var j = 0; j < cols.length; j++) {
            var data = cols[j].innerText.replace(/(\r\n|\n|\r)/gm, '').replace(/(\s\s)/gm, ' ')
            data = data.replace(/"/g, '""');
            row.push('"' + data + '"');
        }
        csv.push(row.join(separator));
    }
    var csv_string = csv.join('\n');
    var filename = 'EQUIPMENT_MASTERLIST'+ '_' + new Date().toLocaleDateString() + '.csv';
    var link = document.createElement('a');
    link.style.display = 'none';
    link.setAttribute('target', '_blank');
    link.setAttribute('href', 'data:text/csv;charset=utf-8,' + encodeURIComponent(csv_string));
    link.setAttribute('download', filename);
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}
</script>