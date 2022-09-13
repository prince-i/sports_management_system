<?php require 'process/login.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

   <link rel="icon" href="dist/img/logo.ico" type="image/x-icon" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <h2><b>Sports Management System</b></h2>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><b>Sign in to start your session</b></p>

      <form action="" method="POST" id="login_form">
        <div class="input-group mb-3">
          <input type="email" class="form-control" id="username"  name="username" placeholder="Username" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control"  id="password" name="password" placeholder="Password" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>


          <!-- /.col -->
          <div class="input-group mb-3">
            <button type="submit" class="btn btn-primary btn-block" name="login_btn" value="login">Sign In</button>

          </div>
          
      
          <!-- /.col -->

          <div class="input-group mb-3">
           <a href="" data-toggle="modal" data-target="#add_acc" >Sign Up </a>

          </div>
        </div>
      </form>



      <!-- Modal -->
<div class="modal fade" id="add_acc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Sign Up</b></h5>
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
                <select id="user_type_add" class="form-control" disabled>
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
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
  const register_account =()=>{
    // console.log('add')
    var id_number = $('#id_number_add').val();
    var name = $('#name_add').val();
    var course = $('#course_add').val();
    var year = $('#year_add').val();
    var email = $('#email_add').val();
    var password = $('#password_add').val();
    var usertype = $('#user_type_add').val();

    if(id_number == '' || name == '' || course == '' || year == '' || password == '' || usertype == ''){
      alert('Please complete all the details!');
    }else{
      $.ajax({
        url: 'process/requester/account_signup.php',
        type: 'POST',
        cache:false,
        data:{
          method: 'signup',
          id_number:id_number,
          name:name,
          course:course,
          year:year,
          email:email,
          password:password,
          usertype:usertype
        },success:function(response){
          // console.log(response);
          if(response == 'success'){
            alert('Account request is on pending kindly wait until it was approved/authorized!');
          }else{
            alert('Account request failed please report to system admin.');
          }
          location.reload();
        }
      })
    }
  }
 
</script>
</body>
</html>
