<?php 
include '../conn.php';

$method = $_POST['method'];

if ($method == 'register_player') {
	$id_number = $_POST['id_number'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$weight = $_POST['weight'];
	$height = $_POST['height'];
	$sports = $_POST['sports'];
	$position = $_POST['position'];
	$medical = $_POST['medical'];
	$injury = $_POST['injury'];
	$contact_no = $_POST['contact_no'];
	$address = $_POST['address'];
	$contact_p_name = $_POST['contact_p_name'];
	$contact_p_no = $_POST['contact_p_no'];

	$check = "SELECT id FROM prospect_player_records WHERE id_number = '$id_number'";
	$stmt = $conn->prepare($check);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		echo 'Already Exist';
	}else{
		$stmt = NULL;

		$query = "INSERT INTO prospect_player_records (`id_number`,`age`,`weight`,`gender`,`height`,`sports_playing`,`position`,`medical_conditions`,`injury`,`contact_no`,`address`,`contact_person_name`,`contact_person_contact_no`)VALUES('$id_number','$age','$weight','$gender','$height','$sports','$position','$medical','$injury','$contact_no','$address','$contact_p_name','$contact_p_no')";
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

if ($method == 'fetch_player') {
	$id_number = $_POST['id_number'];
	$c = 0;

	$query = "SELECT prospect_player_records.id,prospect_player_records.id_number,prospect_player_records.age,prospect_player_records.weight,prospect_player_records.height,prospect_player_records.sports_playing,prospect_player_records.position,prospect_player_records.medical_conditions,prospect_player_records.injury,prospect_player_records.contact_no,prospect_player_records.address,prospect_player_records.contact_person_name,prospect_player_records.contact_person_contact_no,prospect_player_records.gender,user_accounts.Name FROM prospect_player_records LEFT JOIN user_accounts ON user_accounts.id_number = prospect_player_records.id_number  WHERE prospect_player_records.id_number LIKE '$id_number%'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;
			echo '<tr style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#update_player" onclick="get_player_details(&quot;'.$j['id'].'~!~'.$j['id_number'].'~!~'.$j['age'].'~!~'.$j['weight'].'~!~'.$j['height'].'~!~'.$j['sports_playing'].'~!~'.$j['position'].'~!~'.$j['medical_conditions'].'~!~'.$j['injury'].'~!~'.$j['address'].'~!~'.$j['contact_no'].'~!~'.$j['contact_person_name'].'~!~'.$j['contact_person_contact_no'].'~!~'.$j['gender'].'&quot;)">';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['id_number'].'</td>';
				echo '<td>'.$j['Name'].'</td>';
				echo '<td>'.$j['age'].'</td>';
				echo '<td>'.$j['gender'].'</td>';
				echo '<td>'.$j['weight'].'</td>';
				echo '<td>'.$j['height'].'</td>';
				echo '<td>'.$j['sports_playing'].'</td>';
				echo '<td>'.$j['position'].'</td>';
				echo '<td>'.$j['medical_conditions'].'</td>';
				echo '<td>'.$j['injury'].'</td>';
				echo '<td>'.$j['address'].'</td>';
				echo '<td>'.$j['contact_no'].'</td>';
				echo '<td>'.$j['contact_person_name'].'</td>';
				echo '<td>'.$j['contact_person_contact_no'].'</td>';
			echo '</tr>';
		}
	}else{
			echo '<tr>';
				echo '<td colspan="14" style="color:red;">No Result!</td>';
			echo '<tr>';
	}
}

if ($method == 'update_player') {
	$id = $_POST['id'];
	$id_number = $_POST['id_number'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$weight = $_POST['weight'];
	$height = $_POST['height'];
	$sports = $_POST['sports'];
	$position = $_POST['position'];
	$medical = $_POST['medical'];
	$injury = $_POST['injury'];
	$contact_no = $_POST['contact_no'];
	$address = $_POST['address'];
	$contact_p_name = $_POST['contact_p_name'];
	$contact_p_no = $_POST['contact_p_no'];

	$check = "SELECT id FROM prospect_player_records WHERE id_number = '$id_number' AND age = '$age' AND gender = '$gender' AND weight = '$weight' AND height = '$height' AND sports_playing = '$sports' AND position = '$position' AND medical_conditions = '$medical' AND injury = '$injury' AND contact_no = '$contact_no' AND address = '$address' AND contact_person_name = '$contact_p_name' AND contact_person_contact_no = '$contact_p_no'";
	$stmt = $conn->prepare($check);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		echo 'Already Exist';
	}else{
		$stmt = NULL;

	$query = "UPDATE prospect_player_records SET id_number = '$id_number', age = '$age', gender = '$gender', weight = '$weight', height = '$height', sports_playing = '$sports', position = '$position', medical_conditions = '$medical', injury = '$injury', contact_no = '$contact_no', address = '$address', contact_person_name = '$contact_p_name', contact_person_contact_no = '$contact_p_no' WHERE id = '$id'";
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

$conn = NULL;
?>