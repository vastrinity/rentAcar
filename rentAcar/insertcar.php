<!DOCTYPE html>
<html>
 
<head>
    <title>page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "CarCatalog");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $model =  $_REQUEST['model'];
        $manufacturer = $_REQUEST['manufacturer'];
        $cubic =  $_REQUEST['cubic'];
        $desc = $_REQUEST['desc'];
        $CarCategory = $_REQUEST['CarCategory'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO car  VALUES (null,'$model',
            '$manufacturer','$cubic','$desc','$CarCategory')";
         
        if(mysqli_query($conn, $sql)){
            header("Location: mainPage.php");
            
        }
        else{
            
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>
