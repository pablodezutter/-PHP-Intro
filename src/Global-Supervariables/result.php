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
        <h2>Top 5 series</h2>
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
                            echo $show4
                            ;
                    ?> 
                </li>
                <li>
                    <?php
                         
                        $show5= $_POST["serie5"]; 
                            echo $show5;
                    ?> 
                </li>
            </ul>
            <h2>Top 5 movies </h2>

            <ul>
                 <li>
    
                   <?php
                         
                        $movie1= $_POST["movie1"]; 
                            echo $movie1;
                          
                    ?> 
                </li>
                <li>
                    <?php
                         
                        $movie2= $_POST["movie2"];
                            echo $movie2;
                    ?> 
                </li>
                <li>
                    <?php
                         
                        $movie3= $_POST["movie3"]; 
                            echo $movie3;
                    ?> 
                </li>
                <li>
                    <?php
                         
                        $movie4
                        = $_POST["movie4"]; 
                            echo $movie4
                            ;
                    ?> 
                </li>
                <li>
                    <?php
                         
                        $movie5= $_POST["movie5"]; 
                            echo $movie5;
                    ?> 
                </li>
            </ul>
               
</br>
</br>
                    <?php
                    echo "<h2>Your favourite country:</h2>\n";
                        echo $_GET["country"];
                       echo "\n";
                       echo "<h2>Your worst movie ever:</h2>\n";
                        echo $_GET["worst_movie"];
                    ?>
      <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET") {
        // collect value of input field
        $name = $_REQUEST['toppie'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
     

      ?>
      <p>Time elapsed:

                    <?php
                    $info1=$_SERVER['REQUEST_TIME'];
                    echo $info1;
                    ?>
        </p>
       <p>Method used:
                    <?php 
                                     
                     $info2= $_SERVER['REQUEST_METHOD'];
                     echo $info2;

                     ?>
        </p>
      
    </div>


</body>
</html>