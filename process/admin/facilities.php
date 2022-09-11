<?php 
include '../conn.php';

$method = $_POST['method'];
if ($method == 'fetch_facilities') {
	$facility_name = $_POST['facility_name'];
	$facility_status = $_POST['facility_status'];
	$c = 0;

	$query = "SELECT * FROM facilities WHERE facility LIKE '$facility_name%' AND status LIKE '$facility_status%'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$status = $j['status'];
			$c++;

			echo '<tr style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#update_facilities" onclick="get_facilities_details(&quot;'.$j['id'].'~!~'.$j['facility'].'~!~'.$j['status'].'&quot;)">';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['facility'].'</td>';
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

if ($method == 'register_facility') {
	$facility_name = $_POST['facility_name'];
	$facility_status = $_POST['facility_status'];

	$check = "SELECT id FROM facilities WHERE facility = '$facility_name'";
	$stmt = $conn->prepare($check);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		echo 'Already Exist';
		$stmt = NULL;
	}else{
		$stmt = NULL;
		$query = "INSERT INTO facilities(`facility`,`status`,`date_created`)VALUES('$facility_name','$facility_status','$server_date_only')";
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

if ($method == 'update_facility') {
	$id = $_POST['id'];
	$facility = $_POST['facility'];
	$status = $_POST['status'];

	$check = "SELECT id FROM facilities WHERE facility = '$facility' AND status = '$status'";
	$stmt = $conn->prepare($check);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		echo 'Already Exist';
		$stmt = NULL;
	}else{
		$stmt = NULL;
	$query = "UPDATE facilities SET facility = '$facility', status = '$status', date_updated = '$server_date_only' WHERE id = '$id'";
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