<script type="text/javascript">

const create_borrowing_code =()=> {
    setTimeout(generatecode,100);
  
} 

const generatecode =()=>{
    $.ajax({
        url: '../../process/requester/borrow.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'code'
        },success:function(response){
            $('#code').html(response);
        }
    });
} 
	
const borrow_equipment =()=>{
	var code = document.querySelector('#code').innerHTML;
	var id_num= document.getElementById('id_num_borrowing').value;
	var name = document.getElementById('name_borrowing').value;
	var date_of_borrowing = document.getElementById('date_of_borrowing').value;
	var time_from = document.getElementById('time_from_borrowing').value;
	var time_to = document.getElementById('time_to_borrowing').value;
	var date_of_returning = document.getElementById('date_of_returning').value;
	var time_of_returning = document.getElementById('time_of_returning').value;
	var facility = document.getElementById('facility_borrowing').value;
	var purpose = document.getElementById('purpose_borrowing').value;
	var equips = document.getElementById('equips_borrowing').value;

	if (date_of_borrowing == '') {
        swal('Information','Please Set Date of Borrowing','info');
    }else if(time_from == ''){
        swal('Information','Please Set Time From','info');
    }else if(time_to == ''){
        swal('Information','Please Set Time To','info');
    }else if(date_of_returning == ''){
        swal('Information','Please Set Returned Date','info');
    }else if(time_of_returning == ''){
        swal('Information','Please Set Returned Time','info');
    }else if(facility == ''){
        swal('Information','Please Select Facility','info');
    }else if(purpose == ''){
        swal('Information','Please Input Purpose/Event','info');
    }else if(equips == ''){
        swal('Information','Please Select Equipment','info');
    }else if(code == ''){
		swal('Information','Please Refresh the Page','info');
	}else if(time_from > time_to){
		swal('Information','Invalid Time From & Time To','info');
	}else{
		$.ajax({
		url: '../../process/requester/borrow.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'borrow_equipment',
                    id_num:id_num,
					name:name,
					date_of_borrowing:date_of_borrowing,
					time_from:time_from,
					time_to:time_to,
					date_of_returning:date_of_returning,
					time_of_returning:time_of_returning,
					facility:facility,
					purpose:purpose,
					equips:equips,
					code:code
                },success:function(response){

                  if (response == 'success') {
                  	swal('Success','Success','success');
                  	load_prev_equips();
                  }else{
                  	swal('Error','Error','error');
                  }
                }
	});

    }

}

const load_prev_equips =()=>{
	var code = document.querySelector('#code').innerHTML;

	 $.ajax({
        url:'../../process/requester/borrow.php',
        type:'POST',
        cache:false,
        data:{
            method:'prev_equips',
			 code:code
        },success:function(response){
            $('#prev_equips').html(response);
        }
    });
}

const proceed_borrowing =()=>{
	var code = document.querySelector('#code').innerHTML;
	var id_num= document.getElementById('id_num_borrowing').value;
	var name = document.getElementById('name_borrowing').value;
	var date_of_borrowing = document.getElementById('date_of_borrowing').value;
	var time_from = document.getElementById('time_from_borrowing').value;
	var time_to = document.getElementById('time_to_borrowing').value;
	var date_of_returning = document.getElementById('date_of_returning').value;
	var time_of_returning = document.getElementById('time_of_returning').value;
	var facility = document.getElementById('facility_borrowing').value;
	var purpose = document.getElementById('purpose_borrowing').value;

	if (date_of_borrowing == '') {
        swal('Information','Please Set Date of Borrowing','info');
    }else if(time_from == ''){
        swal('Information','Please Set Time From','info');
    }else if(time_to == ''){
        swal('Information','Please Set Time To','info');
    }else if(date_of_returning == ''){
        swal('Information','Please Set Returned Date','info');
    }else if(time_of_returning == ''){
        swal('Information','Please Set Returned Time','info');
    }else if(facility == ''){
        swal('Information','Please Select Facility','info');
    }else if(purpose == ''){
        swal('Information','Please Input Purpose/Event','info');
    }else if(code == ''){
		swal('Information','Please Refresh the Page','info');
	}else if(time_from > time_to){
		swal('Information','Invalid Time From & Time To','info');
	}else{
		$.ajax({
		url: '../../process/requester/borrow.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'proceed_borrowing',
                    code:code,
					id_num:id_num,
					name:name,
					date_of_borrowing:date_of_borrowing,
					time_from:time_from,
					time_to:time_to,
					date_of_returning:date_of_returning,
					time_of_returning:time_of_returning,
					facility:facility,
					purpose:purpose
                },success:function(response){
                	console.log(response);
                  if (response == 'Already Exist') {
                  	swal('Information','Data Already Exist','info');     	
                  }else if(response == 'success'){
                  	swal('Success','Success','success');
                  }else{
                  	swal('Error','Error','error');
                  }
                }
	});

    }
}


</script>