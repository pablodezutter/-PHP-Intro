<?php
// Start the session
session_start();
?>
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
    <!-- <div><form name="user" action="result.php" method="POST">Fill in your name: -->
    <!-- <input type="text" name="username" value=""> -->
    <!-- </form> -->
    </div>

     <h1>Top 5 series</h1>
         <form  action="resultx.php" method="POST"> <!--change between result and result1 -->
         <!--put <p> cauz all el are then block level, input is inline-->
             <p><input type="text" name="serie1" value="Arrow"></p> 
             <p><input type="text" name="serie2" value="Dynasty"></p>  
             <p><input type="text" name="serie3" value="Star Trek: Discovery"></p>  
             <p><input type="text" name="serie4" value="Riverdale"> </p> 
             <p><input type="text" name="serie5" value="The Flash"> </p>  
            
             
             

            <h1>Top 5 movies </h1>
             <p><input type="text" name="movie1" value="The Incredibles 2"></p> 
             <p><input type="text" name="movie2" value="Jurassic World: Fallen Kingdom"> </p> 
             <p><input type="text" name="movie3" value="Avengers: Inifinity War - Part I"></p>  
             <p><input type="text" name="movie4" value="Fantastic Beast: The Crimes Of Grindelwald"> </p> 
             <p><input type="text" name="movie5" value="FIfty Shades Freed"></p>  
             <p><input id="submit1" type="submit" name="submit" value="Submit"></p>
             </form>
</br>
            <h2>Your favourite country:</h2>
                    <form  action="resultx.php" method="GET">
                        <p><input id="bovenste_input" type= "text" name="country" value=""></p>
                <h2>Your worst movie ever:</h2>
                    <p><input id="onderste_input" type= "text" name="worst_movie" value=""></p>
                </br>
                    <p><input id="submit2" type="submit" name="submit" value="Submit"></p>
                </form>
    </br>
    </body>
</html>