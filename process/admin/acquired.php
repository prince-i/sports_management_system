<?php 
include '../conn.php';
$method = $_POST['method'];

if ($method == 'fetch_acquired') {
	$facility_name = $_POST['facility_name'];
	$c = 0;

	$query = "SELECT * FROM borrow_list WHERE facility LIKE '$facility_name%' AND status = 'Approved'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;
			echo '<tr style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#admin_pending" onclick="get_admin_pending_details(&quot;'.$j['id'].'~!~'.$j['id_number'].'~!~'.$j['name'].'~!~'.$j['borrowed_date'].'~!~'.$j['time_from'].'~!~'.$j['time_to'].'~!~'.$j['returned_date'].'~!~'.$j['returned_time'].'~!~'.$j['facility'].'~!~'.$j['purpose'].'~!~'.$j['borrowing_code'].'~!~'.$j['status'].'&quot;)">';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['borrowing_code'].'</td>';
				echo '<td>'.$j['borrowed_date'].'</td>';
				echo '<td>'.$j['time_from'].'</td>';
				echo '<td>'.$j['time_to'].'</td>';
				echo '<td>'.$j['facility'].'</td>';
				echo '<td>'.$j['purpose'].'</td>';
				echo '<td>'.$j['returned_date'].'</td>';
				echo '<td>'.$j['returned_time'].'</td>';
				echo '<td>'.$j['status'].'</td>';
			echo '</tr>';
		}
	}else{
			echo '<tr>';
				echo '<td colspan="10" style="color:red;">No Result!<td>';
			echo '</tr>';
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


if ($method == 'returned') {
	$id = $_POST['id'];
	$borrowing_code = $_POST['borrowing_code'];
	$facility = $_POST['facility'];

	$query = "UPDATE borrow_list SET status = 'Returned' WHERE id = '$id'";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		$stmt = NULL;

		$query = "UPDATE facilities SET status = 'Available', date_updated = '$server_date_only' WHERE facility = '$facility'";
		$stmt = $conn->prepare($query);
		if ($stmt->execute()) {
			$stmt = NULL;

			$query = "SELECT equipment,SUM(quantity) AS TOTAL FROM borrowed_equipments WHERE borrow_code = '$borrowing_code' GROUP BY equipment";
			$stmt = $conn->prepare($query);
			$stmt->execute();
			foreach($stmt->fetchALL() as $j){
				 $equipment = $j['equipment'];
				 $total = $j['TOTAL'];
				$stmt = NULL;

				$query = "UPDATE equipments SET quantity = quantity + $total WHERE equipment_name = '$equipment'";
				$stmt = $conn->prepare($query);
				if ($stmt->execute()) {
					echo 'success';
				}else{
					echo 'error';
				}
			}

		}else{
			echo 'error';
		}

	}else{
		echo 'error';
	}
}
$conn = NULL;
?>