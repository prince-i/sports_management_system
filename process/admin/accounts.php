<?php 
include '../conn.php';

$method = $_POST['method'];

if ($method == 'fetch_account') {
	$id_number = $_POST['id_number'];
	$name = $_POST['name'];
	$course = $_POST['course'];
	$user_type = $_POST['user_type'];
	$permission = $_POST['acct_permission'];
	$c = 0;

	$query = "SELECT * FROM user_accounts WHERE id_number LIKE '$id_number%' AND Name LIKE '$name%' AND course LIKE '$course%' AND role LIKE '$user_type%' AND permission LIKE '$permission%'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;
			$permission = $j['permission'];
			if($permission == 0){
				$permission = 'unauthorized';
			}else{
				$permission = 'authorized';
			}
			echo '<tr style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#update_acc" onclick="get_account_details(&quot;'.$j['id'].'~!~'.$j['Name'].'~!~'.$j['course'].'~!~'.$j['yr_section'].'~!~'.$j['id_number'].'~!~'.$j['email'].'~!~'.$j['password'].'~!~'.$j['role'].'~!~'.$j['permission'].'&quot;)">';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['id_number'].'</td>';
				echo '<td>'.strtoupper($j['Name']).'</td>';
				echo '<td>'.strtoupper($j['course']).'</td>';
				echo '<td>'.strtoupper($j['yr_section']).'</td>';
				echo '<td>'.$j['email'].'</td>';
				echo '<td>'.strtoupper($j['role']).'</td>';
				echo '<td>'.strtoupper($permission).'</td>';
			echo '</tr>';
		}
	}else{
		echo '<tr>';
				echo '<td colspan ="4" style="color:red;">No Result<td>';
		echo '</tr>';
	}

}

if ($method == 'update_account') {
	$id = $_POST['id'];
	$Name = $_POST['Name'];
	$course = $_POST['course'];
	$yr_section = $_POST['yr_section'];
	$id_number = $_POST['id_number'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$role = $_POST['role'];
	$permission = $_POST['permission'];
	
	## SQL
	$check = "SELECT id FROM user_accounts WHERE id_number = '$id_number' AND Name = '$Name' AND course = '$course' AND yr_section = '$yr_section' AND email = '$email' AND password = '$password' AND role = '$role' AND permission = '$permission'";
	$stmt = $conn->prepare($check);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		echo 'Already Exist';
		$stmt = NULL;
	}else{
		$stmt = NULL;

		$query = "UPDATE user_accounts SET id_number = '$id_number', Name = '$Name', course = '$course', yr_section = '$yr_section', email = '$email', password = '$password', role = '$role', permission = '$permission' WHERE id = '$id'";
		$stmt = $conn->prepare($query);
		if ($stmt->execute()) {
			echo 'success';
		}else{
			echo 'error';
		}
	}
}
## FIXED
if($method == 'register_account'){
	$id_number = $_POST['id_num'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $usertype = $_POST['user_type'];
    $permission = '1';


	## CHECK IF EXISTS
	$check = "SELECT id FROM user_accounts WHERE id_number = '$id_number' AND Name = '$name' AND course = '$course' AND yr_section = '$year' AND email = '$email' AND password = '$password' AND role = '$usertype' AND permission = '$permission'";
	$stmt = $conn->prepare($check);
	$stmt->execute();
	if($stmt->rowCount() > 0){
		echo "Already Exist";
		$stmt = NULL;
	}else{
		$stmt = null;
		$INSERT = "INSERT INTO user_accounts (`Name`,`course`,`yr_section`,`id_number`,`email`,`password`,`role`,`permission`)
		VALUES ('$name','$course','$year','$id_number','$email','$password','$usertype','$permission')";
		$stmt = $conn->prepare($INSERT);
		if($stmt->execute()){
			echo "success";
		}else{
			echo "failed";
		}
	}


    
}

$conn = NULL;
?>