<script type="text/javascript">

const load_accounts =()=>{
	$('#spinner').css('display','block');
	var id_number = document.getElementById('id_number').value;
	var name = document.getElementById('name').value;
	var course = document.getElementById('course').value;
	var user_type = document.getElementById('user_type').value;
    var acct_permission = document.getElementById('permission').value;
	$.ajax({
      url: '../../process/admin/accounts.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_account',
                    id_number:id_number,
					name:name,
					course:course,
					user_type:user_type,
                    acct_permission:acct_permission
                },success:function(response){
                   document.getElementById('list_of_accounts').innerHTML = response;
                   $('#spinner').fadeOut(function(){                       
                    });
                }
   });
}	


const register_account =()=>{
	var id_num = document.getElementById('id_number_add').value;
	var name = document.getElementById('name_add').value;
	var course = document.getElementById('course_add').value;
	var year = document.getElementById('year_add').value;
	var email = document.getElementById('email_add').value;
	var pass = document.getElementById('password_add').value;
	var user_type = document.getElementById('user_type_add').value;


	if (id_num == '') {
        swal('Information','Please Input ID Number','info');
    }else if(name == ''){
        swal('Information','Please Input Name','info');
    }else if(course == ''){
        swal('Information','Please Input Course','info');
    }else if(year == ''){
        swal('Information','Please Input Year/Section','info');
    }else if(email == ''){
        swal('Information','Please Input Email','info');
    }else if(pass == ''){
        swal('Information','Please Input Password','info');
    }else if(user_type == ''){
        swal('Information','Please Select User Type','info');
    }else{
        $.ajax({
        url: '../../process/admin/accounts.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'register_account',
                    id_num:id_num,
					name:name,
					course:course,
					year:year,
					email:email,
					pass:pass,
					user_type:user_type
                },success:function(response){
                    console.log(response);
                   if (response == 'Already Exist') {
                    swal('Information','Data Already Exist!','info');
              
                   }
                   else if (response == 'success') {
                    swal('Success','Successfully Registered!','success');
                    load_accounts();
                     $('#id_num').val('');
                     $('#name').val('');
                     $('#course').val('');
                     $('#year').val('');
                     $('#email').val('');
                     $('#pass').val('');
                     $('#user_type').val('');
                   }else{
                    swal('Error','Error!','error');      
                   }
                }
    });
    }
}	


const get_account_details =(param)=>{
	var string = param.split('~!~');
    var id = string[0];
    var Name = string[1];
    var course = string[2];
    var yr_section = string[3];
    var id_number = string[4];
    var email = string[5];
    var password = string[6];
    var role = string[7];
    var permission = string[8];
  	
	
document.getElementById('id_acc_update').value = id;
document.getElementById('name_update').value = Name;
document.getElementById('course_update').value = course;
document.getElementById('year_update').value = yr_section;
document.getElementById('id_number_update').value = id_number;
document.getElementById('email_update').value = email;
document.getElementById('password_update').value = password;
document.getElementById('user_type_update').value = role;
document.getElementById('user_permission').value = permission;
}

const update_account =()=>{
	var id = document.getElementById('id_acc_update').value;
	var Name = document.getElementById('name_update').value;
	var course = document.getElementById('course_update').value;
	var yr_section = document.getElementById('year_update').value;
	var id_number = document.getElementById('id_number_update').value;
	var email = document.getElementById('email_update').value;
	var password = document.getElementById('password_update').value;
	var role = document.getElementById('user_type_update').value;
    var permission = document.getElementById('user_permission').value;

	$.ajax({
		url: '../../process/admin/accounts.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'update_account',
                    id:id,
					Name:Name,
					course:course,
					yr_section:yr_section,
					id_number:id_number,
					email:email,
					password:password,
					role:role,
                    permission:permission
                },success:function(response){
                    console.log(response);
                   if (response == 'Already Exist') {
                   	swal('Information','Data Already Exist!','info');
                   }
                   else if (response == 'success') {
                   	swal('Success','Successfully Updated!','success');
                    load_accounts();
                   }else{
                   	swal('Error','Error!','error');      
                   }
                }
	});
}


</script>