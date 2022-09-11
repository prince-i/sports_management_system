<?php include 'plugins/navbar.php'; ?>
<?php include 'plugins/sidebar/borrowbar.php'; ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Form for Borrowing / Scheduling</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form for Borrowing / Scheduling</li>
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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="#" class="btn btn-primary col-md-4 btn-lg" data-toggle="modal" data-target="#req_borrow" onclick="create_borrowing_code()"> <i class="fa fa-edit"></i> Borrowing / Scheduling Form</a>
                </div>
              </form>
            </div>
       
        </div>
      </div>
    </div>
  </div>
</section>
</div>
            <!-- /.card -->
<?php  include 'plugins/javascript/borrow_script.php';?>
<?php include 'plugins/footer.php'; ?>