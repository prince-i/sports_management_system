<?php 
include '../conn.php';

$method = $_POST['method'];

if ($method == 'fetch_topborrower') {
	
	$query = "SELECT COUNT(id) as qty, name FROM borrow_list GROUP BY name ORDER BY qty DESC";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			echo '<tr>';
				echo '<td class="name">'.$j['name'].'</td>';
				echo '<td class="qty">'.$j['qty'].'</td>';
			echo '<tr>';
		}
	}
}

$conn = NULL;
?>