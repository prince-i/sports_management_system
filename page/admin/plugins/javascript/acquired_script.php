<script type="text/javascript">
	
const load_acquired =()=>{
	$('#spinner').css('display','block');
	var facility_name = document.getElementById('facility_name_acquired_admin').value;

	$.ajax({
      url: '../../process/admin/acquired.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_acquired',
                    facility_name:facility_name
                },success:function(response){
                   document.getElementById('list_of_acquired_admin').innerHTML = response;
                   $('#spinner').fadeOut(function(){                       
                    });
                }
   });
}	

const get_admin_pending_details =(param)=>{
	var string = param.split('~!~');
    var id = string[0];
    var id_number = string[1];
    var name = string[2];
    var borrowed_date = string[3];
    var time_from = string[4];
    var time_to = string[5];
    var returned_date = string[6];
    var returned_time = string[7];
    var facility = string[8];
    var purpose = string[9];
    var borrowing_code = string[10];
    var status = string[11];
	
document.getElementById('id_pending_admin').value = id;
document.getElementById('id_num_pending_admin').value = id_number;
document.getElementById('name_pending_admin').value = name;
document.getElementById('date_of_pending_admin').value = borrowed_date;
document.getElementById('time_from_pending_admin').value = time_from;
document.getElementById('time_to_pending_admin').value = time_to;
document.getElementById('date_of_returning_pending_admin').value = returned_date;
document.getElementById('time_of_returning_pending_admin').value = returned_time;
document.getElementById('facility_pending_admin').value = facility;
document.getElementById('purpose_pending_admin').value = purpose;
document.getElementById('borrowing_code_pending_admin').value = borrowing_code;
document.getElementById('dis-approved').style.visibility = 'hidden';
document.getElementById('approve').style.visibility = 'hidden';
document.getElementById('title').innerHTML = "<b>Borrowed Items</b>";
load_prev_equips();
}	

const load_prev_equips =()=>{
	var code = document.getElementById('borrowing_code_pending_admin').value;

	 $.ajax({
        url:'../../process/admin/acquired.php',
        type:'POST',
        cache:false,
        data:{
            method:'prev_equips',
			 code:code
        },success:function(response){
            $('#prev_equips_admin').html(response);
        }
    });
}

const returned =()=>{
    var id = document.getElementById('id_pending_admin').value;
    var borrowing_code = document.getElementById('borrowing_code_pending_admin').value;
    var facility = document.getElementById('facility_pending_admin').value;

    $.ajax({
        url: '../../process/admin/acquired.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'returned',
                    id:id,
                    borrowing_code:borrowing_code,
                    facility:facility
                },success:function(response){
                   if (response == 'error') {
                    swal('Error','Error','error');
                   }else{
                    swal('Success','Successfully Returned','success');
                    load_acquired();
                   }
                }
    });
}
</script>