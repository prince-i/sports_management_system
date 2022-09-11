<script type="text/javascript">
const load_players =()=>{
	$('#spinner').css('display','block');
	var id_number = document.getElementById('player_id_number').value;

	$.ajax({
      url: '../../process/admin/player.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_player',
                    id_number:id_number
                },success:function(response){
                   document.getElementById('list_of_players').innerHTML = response;
                   $('#spinner').fadeOut(function(){                       
                    });
                }
   });
}	

const register_player =()=>{
	var id_number = document.getElementById('id_num').value;
	var age = document.getElementById('age').value;
	var gender = document.getElementById('gender').value;
	var weight = document.getElementById('weight').value;
	var height = document.getElementById('height').value;
	var sports = document.getElementById('sports').value;
	var position = document.getElementById('position').value;
	var medical = document.getElementById('medical').value;
	var injury = document.getElementById('injury').value;
	var contact_no = document.getElementById('contact_no').value;
	var address = document.getElementById('address').value;
	var contact_p_name = document.getElementById('contact_p_name').value;
	var contact_p_no = document.getElementById('contact_p_no').value;

	if (id_number == '') {
		swal('Information','Please Input ID Number','info');
	}else if(age == ''){
		swal('Information','Please Input Age','info');
	}else if(gender == ''){
		swal('Information','Please Select Gender','info');
	}else if(weight == ''){
		swal('Information','Please Input Weight','info');
	}else if(height == ''){
		swal('Information','Please Input Height','info');
	}else if(sports == ''){
		swal('Information','Please Input Sports Playing / Intersted to play','info');
	}else if(position == ''){
		swal('Information','Please Input N/A if None','info');
	}else if(medical == ''){
		swal('Information','Please Input N/A if None','info');
	}else if(injury == ''){
		swal('Information','Please Input N/A if None','info');
	}else if(contact_no == ''){
		swal('Information','Please Input Contact No','info');
	}else if(address == ''){
		swal('Information','Please Input Address','info');
	}else if(contact_p_name == ''){
		swal('Information','Please Input Contact Person Name','info');
	}else if(contact_p_no == ''){
		swal('Information','Please Input Contact Person Contact No','info');
	}else{
	$.ajax({
		url: '../../process/admin/player.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'register_player',
                    id_number:id_number,
					age:age,
					gender:gender,
					weight:weight,
					height:height,
					sports:sports,
					position:position,
					medical:medical,
					injury:injury,
					contact_no:contact_no,
					address:address,
					contact_p_name:contact_p_name,
					contact_p_no:contact_p_no
                },success:function(response){

                   if (response == 'Already Exist') {
                   	swal('Information','Data Already Exist!','info');
                   	 $('#id_num').val('');
                     $('#age').val('');
                     $('#gender').val('');
                     $('#weight').val('');
                     $('#height').val('');
                     $('#sports').val('');
                     $('#position').val('');
                     $('#medical').val('');
                     $('#injury').val('');
                     $('#contact_no').val('');
                     $('#address').val('');
                     $('#contact_p_name').val('');
                     $('#contact_p_no').val('');
                   }
                   else if (response == 'success') {
                   	swal('Success','Successfully Registered!','success');
                    load_players();
                     $('#id_num').val('');
                     $('#age').val('');
                     $('#gender').val('');
                     $('#weight').val('');
                     $('#height').val('');
                     $('#sports').val('');
                     $('#position').val('');
                     $('#medical').val('');
                     $('#injury').val('');
                     $('#contact_no').val('');
                     $('#address').val('');
                     $('#contact_p_name').val('');
                     $('#contact_p_no').val('');
                   }else{
                   	swal('Error','Error!','error');      
                   }
                }
	});
}
}

const get_player_details =(param)=>{
	var string = param.split('~!~');
  	var id = string[0];
	var id_number = string[1];
	var age = string[2];
	var weight = string[3];
	var height = string[4];
	var sports_playing = string[5];
	var position = string[6];
	var medical_conditions = string[7];
	var injury = string[8];
	var address = string[9];
	var contact_no = string[10];
	var contact_person_name = string[11];
	var contact_person_contact_no = string[12];
	var gender = string[13];

document.getElementById('player_id_update').value = id;
document.getElementById('id_num_update').value = id_number;
document.getElementById('age_update').value = age;
document.getElementById('gender_update').value = gender;
document.getElementById('weight_update').value = weight;
document.getElementById('height_update').value = height;
document.getElementById('sports_update').value = sports_playing;
document.getElementById('position_update').value = position;
document.getElementById('medical_update').value = medical_conditions;
document.getElementById('injury_update').value = injury;
document.getElementById('contact_no_update').value = contact_no;
document.getElementById('address_update').value = address;
document.getElementById('contact_p_name_update').value = contact_person_name;
document.getElementById('contact_p_no_update').value = contact_person_contact_no;
}

const update_player =()=>{
var id = document.getElementById('player_id_update').value;
var id_number = document.getElementById('id_num_update').value;
var age = document.getElementById('age_update').value;
var gender = document.getElementById('gender_update').value;
var weight = document.getElementById('weight_update').value;
var height = document.getElementById('height_update').value;
var sports = document.getElementById('sports_update').value;
var position = document.getElementById('position_update').value;
var medical = document.getElementById('medical_update').value;
var injury = document.getElementById('injury_update').value;
var contact_no = document.getElementById('contact_no_update').value;
var address = document.getElementById('address_update').value; 
var contact_p_name = document.getElementById('contact_p_name_update').value;
var contact_p_no = document.getElementById('contact_p_no_update').value;



if (id_number == '') {
		swal('Information','Please Input ID Number','info');
	}else if(age == ''){
		swal('Information','Please Input Age','info');
	}else if(gender == ''){
		swal('Information','Please Select Gender','info');
	}else if(weight == ''){
		swal('Information','Please Input Weight','info');
	}else if(height == ''){
		swal('Information','Please Input Height','info');
	}else if(sports == ''){
		swal('Information','Please Input Sports Playing / Intersted to play','info');
	}else if(position == ''){
		swal('Information','Please Input N/A if None','info');
	}else if(medical == ''){
		swal('Information','Please Input N/A if None','info');
	}else if(injury == ''){
		swal('Information','Please Input N/A if None','info');
	}else if(contact_no == ''){
		swal('Information','Please Input Contact No','info');
	}else if(address == ''){
		swal('Information','Please Input Address','info');
	}else if(contact_p_name == ''){
		swal('Information','Please Input Contact Person Name','info');
	}else if(contact_p_no == ''){
		swal('Information','Please Input Contact Person Contact No','info');
	}else{
	$.ajax({
		url: '../../process/admin/player.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'update_player',
                    id:id,
                    id_number:id_number,
					age:age,
					gender:gender,
					weight:weight,
					height:height,
					sports:sports,
					position:position,
					medical:medical,
					injury:injury,
					contact_no:contact_no,
					address:address,
					contact_p_name:contact_p_name,
					contact_p_no:contact_p_no
                },success:function(response){

                   if (response == 'Already Exist') {
                   	swal('Information','Data Already Exist!','info');
                   }
                   else if (response == 'success') {
                   	swal('Success','Successfully Registered!','success');
                    load_players();
                     $('#id_num').val('');
                     $('#age').val('');
                     $('#gender').val('');
                     $('#weight').val('');
                     $('#height').val('');
                     $('#sports').val('');
                     $('#position').val('');
                     $('#medical').val('');
                     $('#injury').val('');
                     $('#contact_no').val('');
                     $('#address').val('');
                     $('#contact_p_name').val('');
                     $('#contact_p_no').val('');
                   }else{
                   	swal('Error','Error!','error');      
                   }
                }
	});
}

}
</script>