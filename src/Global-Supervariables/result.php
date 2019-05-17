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
    <title>Result</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href= "mystyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
if ($_SERVER[REQUEST_METHOD] == $_POST){
    $moviesarray= array();
    $seriesarray= array();
    for($x=1;$x<=5;$x++){
        array_push($moviesarray($_POST["movies"$x]));
        array_push($seriesarray($_POST["series"$x]));
        echo 
    }


}

?>
    <!-- <div class="container"> -->
            <!-- <h1>Your data</h1>
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
 
     

      
      <p>Timestamp:

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
        <p>Server info:
                    <?php 
                                     
                     $info3= $_SERVER['SERVER_SOFTWARE'];
                     echo $info3;

                     ?>
        </p>
        <p>Remote port info:
                    <?php 
                                     
                     $info4= $_SERVER['REMOTE_PORT'];
                     echo $info4;

                     ?>
        </p>
 -->

    <?php
     if(isset($_REQUEST["form2"])){
      print_r ($_REQUEST);
      $vragen= htmlentities($_REQUEST["form2"]);
        echo $vragen;
     }
      
      ?> 
      
    </div>


</body>
</html>