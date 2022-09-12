<?php 
include '../conn.php';
$method = $_POST['method'];

if ($method == 'fetch_rejected') {
	$facility_name = $_POST['facility_name'];
	$c = 0;

	$query = "SELECT * FROM borrow_list WHERE facility LIKE '$facility_name%' AND status = 'Dis-Approved'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;
			$status = $j['status'];
			if($status == 'Dis-Approved'){
				$status = 'Disapproved';
			}
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
				echo '<td style="color:red; font-weight:bold;">'.$status.'</td>';
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
$conn = NULL;
?>