<?php 
include '../conn.php';

$method = $_POST['method'];

if ($method == 'fetch_topequips') {
	
	$query = "SELECT COUNT(id) as qty, equipment FROM borrowed_equipments GROUP BY equipment ORDER BY qty DESC ";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			echo '<tr>';
				echo '<td class="equipment">'.$j['equipment'].'</td>';
				echo '<td class="qty">'.$j['qty'].'</td>';
			echo '<tr>';
		}
	}
}

$conn = NULL;
?>