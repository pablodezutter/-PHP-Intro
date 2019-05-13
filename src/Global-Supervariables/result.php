<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href= "mystyle.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
    <h1>Your data</h1>
    <ul>
        <li>
            <?php
                         
    $show1= $_POST["serie1"]; 
        echo $show1;
            ?> 
        </li>
        <li>
            <?php
                         
    $show2= $_POST["serie2"]; 
        echo $show2;
            ?> 
        </li>
        <li>
            <?php
                         
    $show3= $_POST["serie3"]; 
        echo $show3;
            ?> 
        </li>
        <li>
            <?php
                         
    $show4= $_POST["serie4"]; 
        echo $show4;
            ?> 
        </li>
        <li>
            <?php
                         
    $show5= $_POST["serie5"]; 
        echo $show5;
            ?> 
        </li>
    

      
      
 </div>


</body>
</html>