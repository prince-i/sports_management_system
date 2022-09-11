<script type="text/javascript">
	
const load_facilities =()=>{
	$('#spinner').css('display','block');
	var facility_name = document.getElementById('facility_name_req').value;

	$.ajax({
      url: '../../process/requester/facilities.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_facilities',
                    facility_name:facility_name
                },success:function(response){
                   document.getElementById('list_of_facilities_req').innerHTML = response;
                   $('#spinner').fadeOut(function(){                       
                    });
                }
   });
}	

</script>