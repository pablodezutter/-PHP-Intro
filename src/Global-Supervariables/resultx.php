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
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $moviesarray= array();
    $seriesarray= array();
    for($x=1;$x<=5;$x++){
        array_push($moviesarray,$_POST["movie$x"]);
        array_push($seriesarray,$_POST["serie$x"]);
    }
        // echo "<p class='title'>Favourite movies:</p></br>";
        // printall($moviesarray);
        //echo "<ul>";
    //         foreach($moviesarray as $movie){
    //        // echo ("<li>".$movie."</li>");
    //     }
    //    // echo"</ul>";//buiten foreach
        // echo "<p class='title'>Favourite series:</p></br>";
        // printall($seriesarray);
    //     foreach($seriesarray as $serie){
    //         echo("<li>".$serie."</li>");
        // }
}else if ($_SERVER["REQUEST_METHOD"] == "GET"){
    // echo "Favorite country:$_GET[country]</br>
    // Worst movie: $_GET[worst_movie]";
} 

function printall($data){
    echo "<ol>";
    foreach($data as $element){
        echo "<li>$element</li>";
    }
    echo "</ol>";
}

?>

<!--html code voor tabs-->
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#menu1">Movies</a> <!--# niet vergeten om link te maken-->
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill"  href="#menu2">Shows</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#menu3">Favourite Country/Worst Movie</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#Superdata.php">Superdata</a>
  </li>
</ul>

<div class="tab-content">
    <div id="menu1" class="tab-pane fade in active">
        <h3>Top movies</h3>
        <p><?php printall($moviesarray);
        ?></p>
    </div>

    <div id="menu2" class="tab-pane fade in active">
        <h3>Top Series</h3>
        <p><?php printall($seriesarray);
        ?></p>
    </div>

    <div id="menu3" class="tab-pane fade in active">
        <h3>Favo country, Worst Movie</h3>
        <p><?php  echo "Favorite country:$_GET[country]</br>
    Worst movie: $_GET[worst_movie]"; 
        ?></p>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </body>
        </html>