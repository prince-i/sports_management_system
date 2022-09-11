<script type="text/javascript">
	
const load_equipments =()=>{
	$('#spinner').css('display','block');
	var equipment_name = document.getElementById('equipment_name').value;

	$.ajax({
      url: '../../process/requester/equipment.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_equipment',
                    equipment_name:equipment_name
                },success:function(response){
                   document.getElementById('list_of_equipments').innerHTML = response;
                   $('#spinner').fadeOut(function(){                       
                    });
                }
   });
}		

const register_equipment =()=>{
    var equipment_name = document.getElementById('equip_name').value;
    var equipment_qty = document.getElementById('equip_qty').value;
    var equipment_status = document.getElementById('equip_status').value;

    if (equipment_name == '') {
        swal('Information','Please Input Equipment Name','info');
    }else if(equipment_qty == ''){
        swal('Information','Please Input Equipment Quantity','info');
    }else if(equipment_status == ''){
        swal('Information','Please Select Equipment Status','info');
    }else{
        $.ajax({
        url: '../../process/admin/equipment.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'register_equipment',
                    equipment_name:equipment_name,
                    equipment_qty:equipment_qty,
                    equipment_status:equipment_status
                },success:function(response){

                   if (response == 'Already Exist') {
                    swal('Information','Data Already Exist!','info');
                     $('#equipment_name').val('');
                     $('#equipment_qty').val('');
                     $('#equipment_status').val('');
                   }
                   else if (response == 'success') {
                    swal('Success','Successfully Registered!','success');
                    load_equipments();
                      $('#equipment_name').val('');
                     $('#equipment_qty').val('');
                     $('#equipment_status').val('');
                   }else{
                    swal('Error','Error!','error');      
                   }
                }
    });
    }
}

const get_equipment_details =(param)=>{
    var string = param.split('~!~');
    var id = string[0];
    var equipment_name = string[1];
    var quantity = string[2];
    var status = string[3];

document.getElementById('equip_id_update').value = id;
document.getElementById('equip_name_update').value = equipment_name;
document.getElementById('equip_qty_update').value = quantity;
document.getElementById('equip_status_update').value = status;
}

const update_equipment =()=>{
  var id = document.getElementById('equip_id_update').value;
  var equipment_name = document.getElementById('equip_name_update').value;
  var quantity = document.getElementById('equip_qty_update').value;
  var status = document.getElementById('equip_status_update').value;

  if (equipment_name == '') {
        swal('Information','Please Input Equipment Name','info');
  }else if(quantity == ''){
        swal('Information','Please Input Equipment Quantity','info');
  }else if(status == ''){
        swal('Information','Please Select Equipment Status','info');
  }else{
  $.ajax({
        url: '../../process/admin/equipment.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'update_equipment',
                    id:id,
                    equipment_name:equipment_name,
                    quantity:quantity,
                    status:status
                },success:function(response){

                   if (response == 'Already Exist') {
                    swal('Information','Data Already Exist!','info');
                   }
                   else if (response == 'success') {
                    swal('Success','Successfully Updated!','success');
                    load_equipments();
                     $('#equipment_name').val('');
                     $('#quantity').val('');
                     $('#status').val('');
                   }else{
                    swal('Error','Error!','error');      
                   }
                }
    });
}
}
</script>