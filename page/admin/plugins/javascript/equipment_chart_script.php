<script type="text/javascript">
$(document).ready(function(){
    setTimeout(load_equipment_chart,100);
});  	

const load_equipment_chart =()=>{

	$.ajax({
      url: '../../process/admin/equipment_chart.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_equipment_chart',
               
                },success:function(response){
                   document.getElementById('list_of_equipss').innerHTML = response;

			        var name = [];
					$('.name').each(function(){
						name.push($(this).html());
					});

					var qty = [];
					$('.qty').each(function(){
						qty.push($(this).html());
					});
                    
					chart(name,qty);
                }
   });

}	

const chart =(name,qty)=>{
           var ctx = document.getElementById('chart_equipss');
     var myChart = new Chart(ctx, {
                 type: 'bar',
                 data: {
                 labels: name,
                 datasets: [{
                 label: 'Total Available Quantity',
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