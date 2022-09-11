<?php 
include '../conn.php';

$method = $_POST['method'];

if ($method == 'fetch_equipment_chart') {
	
	$query = "SELECT equipment_name,quantity FROM equipments GROUP BY equipment_name";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			echo '<tr>';
				echo '<td class="name">'.$j['equipment_name'].'</td>';
				echo '<td class="qty">'.$j['quantity'].'</td>';
			echo '<tr>';
		}
	}
}

$conn = NULL;
?>