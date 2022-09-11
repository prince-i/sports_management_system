<?php 
include '../conn.php';

$method = $_POST['method'];

if ($method == 'fetch_equipment') {
	$equipment_name = $_POST['equipment_name'];
	$equipment_status = $_POST['equipment_status'];
	$c = 0;

	$query = "SELECT * FROM equipments WHERE equipment_name LIKE '$equipment_name%' AND status LIKE '$equipment_status%'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$status = $j['status'];
			$c++;

			echo '<tr style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#update_equipment" onclick="get_equipment_details(&quot;'.$j['id'].'~!~'.$j['equipment_name'].'~!~'.$j['quantity'].'~!~'.$j['status'].'&quot;)">';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['equipment_name'].'</td>';
				echo '<td>'.$j['quantity'].'</td>';
				if ($status == 'Available') {
					echo '<td>'.$j['status'].'</td>';
				}else{
					echo '<td style="color:red;">Not Available</td>';
				}	
				echo '<td>'.$j['date_created'].'</td>';
			echo '</tr>';
		}
	}else{
		echo '<tr>';
				echo '<td colspan ="4" style="color:red;">No Result<td>';
		echo '</tr>';
	}

}

if ($method == 'register_equipment') {
	$equipment_name = $_POST['equipment_name'];
	$equipment_qty = $_POST['equipment_qty'];
	$equipment_status = $_POST['equipment_status'];

	$check = "SELECT id FROM equipments WHERE equipment_name = '$equipment_name'";
	$stmt = $conn->prepare($check);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		echo 'Already Exist';
		$stmt = NULL;
	}else{
		$stmt = NULL;
		$query = "INSERT INTO equipments(`equipment_name`,`quantity`,`status`,`date_created`)VALUES('$equipment_name','$equipment_qty','$equipment_status','$server_date_only')";
		$stmt = $conn->prepare($query);
		if ($stmt->execute()) {
			echo 'success';
			$stmt = NULL;
		}else{
			echo 'error';
			$stmt = NULL;
		}
	}
}

if ($method == 'update_equipment') {
	$id = $_POST['id'];
	$equipment_name = $_POST['equipment_name'];
	$quantity = $_POST['quantity'];
	$status = $_POST['status'];

	$check = "SELECT id FROM equipments WHERE equipment_name = '$equipment_name' AND quantity = '$quantity'";
	$stmt = $conn->prepare($check);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		echo 'Already Exist';
		$stmt = NULL;
	}else{
		$stmt = NULL;
	$query = "UPDATE equipments SET equipment_name = '$equipment_name', quantity = '$quantity', status = '$status', date_updated = '$server_date_only' WHERE id = '$id'";
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