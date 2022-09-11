
<?php include 'plugins/navbar.php';?>
<?php include 'plugins/sidebar/request_chartbar.php';?>
  <!-- Main Sidebar Container -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Request </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Request </li>
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
                               <th>Status</th>
                               <th>Quantity</th>
                        </thead>
                        <tbody id="list_of_reqs" style="text-align:center;"></tbody>
                        </table>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-11">
                        <canvas id="chart_reqs" width="1200" height="600"></canvas>
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
<?php include 'plugins/javascript/request_chart_script.php';?>