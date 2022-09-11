<?php
require "../conn.php";

$method = $_POST['method'];
if($method == "signup"){
    $id = $_POST['id_number'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];
    $permission = '0';

    $INSERT = "INSERT INTO user_accounts (`Name`,`course`,`yr_section`,`id_number`,`email`,`password`,`role`,`permission`)
    VALUES ('$name','$course','$year','$id','$email','$password','$usertype','$permission')";
    $stmt = $conn->prepare($INSERT);
    if($stmt->execute()){
        echo "success";
    }else{
        echo "failed";
    }


}

?>