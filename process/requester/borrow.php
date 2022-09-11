<?php 
include '../conn.php';
$method = $_POST['method'];

if($method == 'code'){
		$prefix = "BC:";
		$dateCode = date('ymd');
		$randomCode = mt_rand(10000,50000);
		echo $prefix."".$dateCode."".$randomCode;
}

if ($method == 'borrow_equipment') {
	$id_num = $_POST['id_num'];
	$name = $_POST['name'];
	$date_of_borrowing = $_POST['date_of_borrowing'];
	$time_from = $_POST['time_from'];
	$time_to = $_POST['time_to'];
	$date_of_returning = $_POST['date_of_returning'];
	$time_of_returning = $_POST['time_of_returning'];
	$facility = $_POST['facility'];
	$purpose = $_POST['purpose'];
	$equips = $_POST['equips'];
	$code = $_POST['code'];

	$query ="INSERT INTO borrowed_equipments(`equipment`,`quantity`,`id_number`,`borrowed_date`,`time_from`,`time_to`,`facility`,`purpose`,`borrow_code`)VALUES('$equips',1,'$id_num','$date_of_borrowing','$time_from','$time_to','$facility','$purpose','$code')";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		echo 'success';
	}else{
		echo 'error';
	}
}

if ($method == 'prev_equips') {
	$code = $_POST['code'];
	$c = 0;

	$query = "SELECT equipment,SUM(quantity) AS TOTAL FROM borrowed_equipments WHERE borrow_code = '$code' GROUP BY equipment";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;
			echo '<tr>';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['equipment'].'</td>';
				echo '<td>'.$j['TOTAL'].'</td>';
			echo '<tr>';
		}
	}
}

if ($method == 'proceed_borrowing') {
	$code = $_POST['code'];
	$id_num = $_POST['id_num'];
	$name = $_POST['name'];
	$date_of_borrowing = $_POST['date_of_borrowing'];
	$time_from = $_POST['time_from'];
	$time_to = $_POST['time_to'];
	$date_of_returning = $_POST['date_of_returning'];
	$time_of_returning = $_POST['time_of_returning'];
	$facility = $_POST['facility'];
	$purpose = $_POST['purpose'];

	$check = "SELECT id FROM borrow_list WHERE id_number = '$id_num' AND name = '$name' AND borrowed_date = '$date_of_borrowing' AND time_from = '$time_from' AND time_to = '$time_to' AND returned_date = '$date_of_returning' AND returned_time = '$time_of_returning' AND facility = '$facility' AND purpose = '$purpose'";
	$stmt = $conn->prepare($check);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		echo 'Already Exist';
	
	}else{
		$stmt = NULL;
		$query = "INSERT INTO borrow_list(`id_number`,`name`,`borrowed_date`,`time_from`,`time_to`,`returned_date`,`returned_time`,`facility`,`purpose`,`borrowing_code`)VALUES('$id_num','$name','$date_of_borrowing','$time_from','$time_to','$date_of_returning','$time_of_returning','$facility','$purpose','$code')";
		$stmt = $conn->prepare($query);
		if ($stmt->execute()) {
			echo 'success';
		}else{
			echo 'error';
		}
	}
}
$conn = NULL;
?>