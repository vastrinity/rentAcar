<!DOCTYPE html>
<html >
   <head>
   <title>Rent a Car</title>
   <link href = "mainpage.css" type = "text/css" rel = "stylesheet" /> 

   </head>
   
   <body>
      
         <form action="insertcar.php" method="post">
         <fieldset id="carInfo">
             <legend>Car Info </legend>
                <div>
                    <label for="model">Model:</label>
                    <input type="text" name="model" id="mod" placeholder="Enter car's model">
                </div>
                <div>
                    <label for="manufacturer">Manufacturer:</label>
                    <input type="text" name="manufacturer" id="man" placeholder="Enter car's manufacturer" >
                </div>
                <div>
                    <label for="cubic">Cubic:</label>
                    <input type="text" name="cubic" id="cub" placeholder="Enter car's cubic" >
                </div>
                <div>
                    <label for="desc">Description:</label>
                    <textarea name="desc" id="descrip" cols="30" rows="5"placeholder="Enter car's description" ></textarea>
                
                </div>
            
               </fieldset>


               <!-- list of car categories  -->
                <datalist id="category">
                    <option value="Coupe" selected>
                    <option value="Sedan">
                    <option value="Crossover/SUV">
                    <option value="4x4">
                    <option value="Mini bus">
                    <option value="Van">
                </datalist>
	    



               <fieldset id="categories">
                    <legend>Categories</legend>
                    <div>
                        <label for="CarCategory" > Car Category</label>
                        <input name="CarCategory" id="CarCategory" list="category">
                    </div>
	            </fieldset>
	
                <input id="store" type="submit" value="Store">
         </form>
         <button onclick="location.href='carCatalogPage.php'">View Car Catalog</button>

         
   </body>
  
</html>