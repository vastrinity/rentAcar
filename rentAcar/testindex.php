<!DOCTYPE html>
<html>
<head>
<style>
   label{
    text-color:black;
   }
   
</style>
</head>

<body>

         
         </div>

<?php
$q = $_GET['q'];


$con  = mysqli_connect("localhost","root","","CarCatalog");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{

    $sql="SELECT  Model FROM `car` WHERE Category='".$q."'";
    $result = $con->query($sql);
    $sql1="SELECT COUNT(`id`) as total FROM `car` WHERE Category='".$q."'";
    $result1 = mysqli_query($con,$sql1);
    $sql2="SELECT   Manufacturer FROM `car` WHERE Category='".$q."'";
    $result2 = $con->query($sql2);

    while ($row1 = mysqli_fetch_array($result1)) { 

        $total  =  $row1['total']."<br>";
        
    }
    
    while($row = $result->fetch_assoc()) {
        $mod[]=$row['Model'];
    
    
    }
    $CarModel=implode(" , ",$mod);
   
   
    while($row2 = $result2->fetch_assoc()) {
    $man[]=  $row2['Manufacturer'];
    
    }
    $CarManufacturer=implode(" , ",$man);
    
   
   
 }
mysqli_close($con);

?>
<div style="font-size:15px;text-align:left;color:#FFD000">
        
        <br>
        <label style=" color:#000000">Total: </label>
        <?php  echo  $total ?></br>
        <br>
        <label style=" color:#000000">Car Models: </label>
        <?php echo $CarModel ?></br>
        <br><label style=" color:#000000">Car Manufacturer: </label>
        <?php echo $CarManufacturer ?></br>
</div>
</body>
</html>



