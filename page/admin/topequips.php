
<?php include 'plugins/navbar.php';?>
<?php include 'plugins/sidebar/topequipsbar.php';?>
  <!-- Main Sidebar Container -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Top 10 Most Borrowed Equipment</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Top 10 Most Borrowed Equipment</li>
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
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                    <div class="row">
                      <div class="card-body table-responsive p-0" style="height: 450px; display: none;">
                            <table class="table table-head-fixed text-nowrap table-hover" id="">
                            <thead style="text-align:center;">
                               <th>Equipment Name</th>
                               <th>Quantity</th>
                        </thead>
                        <tbody id="list_of_topequips" style="text-align:center;"></tbody>
                        </table>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-11">
                        <canvas id="chart_equips" width="1200" height="600"></canvas>
                      </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
               
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php include 'plugins/footer.php';?>
<?php include 'plugins/javascript/topequips_script.php';?>