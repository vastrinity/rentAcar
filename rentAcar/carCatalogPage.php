
<!DOCTYPE html>
<html>
<head>
<title>e-Catalog</title>
<link rel="stylesheet" type="text/css" href="carCatalogPage.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
</head>

<body>


	<table  >
      
	 <tr>
   		 <th  colspan="2"  id="ecat">e-Catalog Αυτοκινήτων </th>
     </tr>
     <tr>
         <th> 
            <div style="font-size:20px;text-align:left;color:#FFD000">
            <h2 >Categories </h2>

            </div>
            <div>
            <canvas  id="chartjs_bar"></canvas> 
            </div>
         
        
        </th>
         
         
         
         
         <th>
        
         <div style="font-size:15px;text-align:left">
         <form>
            <label for="CarCategory"> Details for the category:</label>
            <select name="categ" onchange="showcars(this.value)">
                                <option value=""></option>
                                <option value="Coupe" >Coupe</option>
                                <option value="Sedan">Sedan</option>
                                <option value="Crossover/SUV">Crossover/SUV</option>
                                <option value="4x4">4x4</option>
                                <option value="Mini bus">Mini bus</option>
                                <option value="Van">Van</option>
                        
            
            </select>
        </form>
        </div>
        <br>
            <div id="txtHint"><b></b></div>
</br>
        
       
       
           </th>
         
     </tr>
	</table>
	
	<div id="txtHint"><b></b></div>

</body>
<?php

$con  = mysqli_connect("localhost","root","","CarCatalog");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
    $sqlQ="SELECT COUNT(id) as sum ,Category  FROM `car` GROUP BY Category ";
    $result = mysqli_query($con,$sqlQ);
    $chart_data="";
       
    while ($row = mysqli_fetch_array($result)) { 

       $sum []  =  $row['sum'];
       $Category []  =  $row['Category'];
        }
       
 
 
 }
 
 
?>
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
  <script type="text/javascript">
      var graph = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(graph, {
                    type: 'bar',
    data: {
        labels:<?php echo json_encode($Category); ?>,
        y: {
                beginAtZero: true
                
            },
                datasets: [{
            
                    data:<?php echo json_encode($sum); ?>,
            backgroundColor: [
                '#F16335',
                '#F16335',                
                '#F16335',
                '#F16335',
                '#F16335',
                '#F16335'
            ],
            borderColor: [
                '#F16335',
                '#F16335',                
                '#F16335',
                '#F16335',
                '#F16335',
                '#F16335'
            ],
            borderWidth: 1,
            
        }]
    },
    
    options: {
        legend: {
                display: false
                    },
        scales: {
            
            grid:{circular:true}
            
        },
        
    }
});
    </script>
    
    <script>
        function showcars(str) {
        if (str == "") {
            
            return;
        } 
        else { 
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
            };
            xmlhttp.open("GET","testindex.php?q="+str,true);
            xmlhttp.send();
        }
        }

    </script>
   
</html>
