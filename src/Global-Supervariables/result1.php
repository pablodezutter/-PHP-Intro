<?php
// Start the session
session_start();
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
        <h2>Top 5 series</h2>
        <?php
         
            echo "<p>".$_REQUEST["serie1"]."</p>";
            echo "<p>".$_REQUEST["serie2"]."</p>";
            echo "<p>".$_REQUEST["serie3"]."</p>";
            echo "<p>".$_REQUEST["serie4"]."</p>";
            echo "<p>".$_REQUEST["serie5"]."</p>";
           
       
        ?>
        <h2>Top 5 movies </h2>
        <h2>Your favourite country:</h2>
        <h2>Your worst movie ever:</h2>
    
</body>
</html>