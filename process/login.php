<?php
 include 'conn.php';
 session_start();
 if (isset($_POST['login_btn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($username)) {
        echo 'Please Enter Username';
    }else if(empty($password)){
        echo 'Please Enter Password';
    }
    else
{
        $check = "SELECT id,role,permission FROM user_accounts WHERE BINARY email = '$username' AND BINARY password = '$password'";
        $stmt = $conn->prepare($check);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            
            foreach($stmt->fetchALL() as $x){
                $role = $x['role'];
                ## ADDED BY PRINCE 9/11/22
                $permission = $x['permission'];
            }
            if($permission ==  1){
                if($role == 'requester'){
                    $_SESSION['username'] = $username;
                    header('location: page/requester/dashboard.php');
                }else if($role == 'admin'){
                    $_SESSION['username'] = $username;
                    header('location: page/admin/dashboard.php');    
                }
            }else{
                echo "The account is not authorized to access the system!";
            }
            
        }else{
            echo 'Wrong Username, Password or User type';
        }
    }
 }
 if (isset($_POST['Logout'])) {
    session_unset();
    session_destroy();
    header('location: ../index.php');
 }


?>