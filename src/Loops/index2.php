
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
      <div class="container">
        <div class="row">
            <h1>Play a game</h1>
</br>
<?php
$arrayImages= ['img/burger0.png','img/friet1.png','img/pizza2.png'];
$loting=[];
// shuffle($arrayImages); werkt, maar zorgt ervoor dat je nooit 3x dezelfde hebt
  for ($i=0;$i<3;$i++){
$random=rand(0,2);// kan ook met gekozen image; 
array_push($loting,$random);
?>
 
                <div class="col"><img src="<?php echo $arrayImages[$random]; ?>" /></div>
              
 <?php } 
        if(sizeof(array_unique($loting))== 1){ //lengte van de lijst met unieke waarden = 1
         echo "you win";
        }else{
            echo "try again?";
        }
 
      ?>
 </div>
 </div>
     





</body>
</html>