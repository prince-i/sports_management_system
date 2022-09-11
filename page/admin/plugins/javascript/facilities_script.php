<script type="text/javascript">
	
const load_facilities =()=>{
	$('#spinner').css('display','block');
	var facility_name = document.getElementById('facility_name').value;
    var facility_status = document.getElementById('facility_status').value;

	$.ajax({
      url: '../../process/admin/facilities.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_facilities',
                    facility_name:facility_name,
                    facility_status:facility_status
                },success:function(response){
                   document.getElementById('list_of_facilities').innerHTML = response;
                   $('#spinner').fadeOut(function(){                       
                    });
                }
   });
}	

const register_facility =()=>{
    var facility_name = document.getElementById('facility_n').value;
    var facility_status = document.getElementById('facility_s').value;

    if (facility_name == '') {
        swal('Information','Please Input Facility Name','info');
    }else if(facility_status == ''){
        swal('Information','Please Input Facility Status','info');
    }else{
        $.ajax({
        url: '../../process/admin/facilities.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'register_facility',
                    facility_name:facility_name,
                    facility_status:facility_status
                },success:function(response){

                   if (response == 'Already Exist') {
                    swal('Information','Data Already Exist!','info');
                     $('#facility_name').val('');
                     $('#facility_status').val('');
                   }
                   else if (response == 'success') {
                    swal('Success','Successfully Registered!','success');
                    load_facilities();
                      $('#facility_name').val('');
                     $('#facility_status').val('');
                   }else{
                    swal('Error','Error!','error');      
                   }
                }
    });
    }
}

const get_facilities_details =(param)=>{
    var string = param.split('~!~');
    var id = string[0];
    var facility = string[1];
    var status = string[2];

document.getElementById('facility_id_update').value = id;
document.getElementById('facility_n_update').value = facility;
document.getElementById('facility_s_update').value = status;
}

const update_facility =()=>{
	var id = document.getElementById('facility_id_update').value;
	var facility = document.getElementById('facility_n_update').value;
	var status = document.getElementById('facility_s_update').value;

	if (facility_name == '') {
	        swal('Information','Please Input Facility Name','info');
	    }else if(facility_status == ''){
	        swal('Information','Please Input Facility Status','info');
	    }else{
	    $.ajax({
        url: '../../process/admin/facilities.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'update_facility',
                    id:id,
                    facility:facility,
                    status:status
                },success:function(response){

                   if (response == 'Already Exist') {
                    swal('Information','Data Already Exist!','info');
                   }
                   else if (response == 'success') {
                    swal('Success','Successfully Registered!','success');
                    load_facilities();
                   }else{
                    swal('Error','Error!','error');      
                   }
                }
    });
    }

}

</script>