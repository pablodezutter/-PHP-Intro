<?php
// Start the session
session_start();
$_SESSION["starting_up"]= "completed";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href= "mystyle.css" rel="stylesheet" type="text/css">
    <title>Result1</title>
</head>
<body>
<div class="container">
            <h1>Your data</h1>
       
        <?php
            echo  "<h2>Top 5 series:</h2>\n";

            echo "<p>".$_REQUEST["serie1"]."</p>";
            echo "<p>".$_REQUEST["serie2"]."</p>";
            echo "<p>".$_REQUEST["serie3"]."</p>";
            echo "<p>".$_REQUEST["serie4"]."</p>";
            echo "<p>".$_REQUEST["serie5"]."</p>";
           
           
            echo "<h2>Top 5 movies:</h2>\n";

            echo "<p>".$_REQUEST["movie1"]."</p>";
            echo "<p>".$_REQUEST["movie2"]."</p>";
            echo "<p>".$_REQUEST["movie3"]."</p>";
            echo "<p>".$_REQUEST["movie4"]."</p>";
            echo "<p>".$_REQUEST["movie5"]."</p>";


        echo "<h2>Your favourite country:</h2>\n";
            // echo $_REQUEST["country"];

if($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"]=="GET"){
     //required fields//
    if(empty($_POST["country"])){
       echo "EMPTY";
    }else{ 
        echo $_POST["country"];
    }
        
            echo "<h2>Your worst movie ever:</h2>\n";
            echo $_REQUEST["worst_movie"];
};
        ?>

     <!-- $questionErr = "";
 $veld1 = 'country';-->
<?php

?>
<?php
$_COOKIE="Hmmm Cookies";
setrawcookie();
print_r($_COOKIE);
?>
</br>
<?php
echo "my username is ".$_ENV['username'];
?>
</br>
        
        <?php
echo $_SESSION["starting_up"];
?>  
</br>
    
</body>
</html>