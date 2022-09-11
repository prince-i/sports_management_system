<?php 
include '../conn.php';

$method = $_POST['method'];
if ($method == 'fetch_facilities') {
	$facility_name = $_POST['facility_name'];
	$c = 0;

	$query = "SELECT * FROM facilities WHERE facility LIKE '$facility_name%' AND status = 'Available'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$status = $j['status'];
			$c++;

			echo '<tr>';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['facility'].'</td>';
				echo '<td>'.$j['status'].'</td>';
			echo '</tr>';
		}
	}else{
		echo '<tr>';
				echo '<td colspan ="3" style="color:red;">No Result<td>';
		echo '</tr>';
	}

}


$conn = NULL;
?>