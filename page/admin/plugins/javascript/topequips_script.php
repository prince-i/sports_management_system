<script type="text/javascript">
$(document).ready(function(){
    setTimeout(load_topequips,100);
});  	

const load_topequips =()=>{

	$.ajax({
      url: '../../process/admin/topequips.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_topequips',
               
                },success:function(response){
                   document.getElementById('list_of_topequips').innerHTML = response;

			        var equipment = [];
					$('.equipment').each(function(){
						equipment.push($(this).html());
					});

					var qty = [];
					$('.qty').each(function(){
						qty.push($(this).html());
					});
					chart(equipment,qty);
                }
   });

}

const chart =(equipment,qty)=>{
           var ctx = document.getElementById('chart_equips');
     var myChart = new Chart(ctx, {
                 type: 'bar',
                 data: {
                 labels: equipment,
                 datasets: [{
                 label: 'Borrowed Count',
                 data: qty,
                 backgroundColor: [
             			    'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'

            ],
            borderColor: [
                 'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'

            ],
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        },
        indexAxis: 'x'
    }
});
        }


</script>