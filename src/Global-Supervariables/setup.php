<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Setup</title>
    <link href="mystyle.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class "container">
  
     <h1>Top 5 series</h1>
         <form name="form1" action="result.php" method="POST" > 
             <input type="text" name="serie1" value="Arrow"> 
             <input type="text" name="serie2" value="Dynasty">  
             <input type="text" name="serie3" value="Star Trek: Discovery">  
             <input type="text" name="serie4" value="Riverdale">  
             <input type="text" name="serie5" value="The Flash">    
             

            <h1>Top 5 movies </h1>
             <input type="text" name="movie1" value="The Incredibles 2"> 
             <input type="text" name="movie2" value="Jurassic World: Fallen Kingdom">  
             <input type="text" name="movie3" value="Avengers: Inifinity War - Part I">  
             <input type="text" name="movie4" value="Fantastic Beast: The Crimes Of Grindelwald">  
             <input type="text" name="movie5" value="FIfty Shades Freed">    
</br>
                <input id="submit1" type="submit" name="submit" value="Submit">
        </form>
       
        <h2>Your favourite country:</h2>
        <form name="form2" action="result.php" method="GET">
               <input id="bovenste_input" type= "text" name="country" value="">
       <h2>Your worst movie ever:</h2>
        <input id="onderste_input" type= "text" name="worst_movie" value="">
    </br>
        <input id="submit2" type="submit" name="submit" value="Submit">
    </form>
    </br>
    
    
    </div>

        <?php 
       
        
        ?> 


    
</body>
</html>
<?php 




?> 