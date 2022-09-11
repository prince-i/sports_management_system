<?php 
include '../conn.php';

$method = $_POST['method'];

if ($method == 'fetch_request_chart') {
	
	$query = "SELECT count(id) as total,status FROM borrow_list GROUP BY status";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			echo '<tr>';
				echo '<td class="name">'.$j['status'].'</td>';
				echo '<td class="qty">'.$j['total'].'</td>';
			echo '<tr>';
		}
	}
}

$conn = NULL;
?>