
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
shuffle($arrayImages);
  for ($i=0;$i<3;$i++){
$random=rand(0,2);
?>
 
                <div class="col"><img src="<?php echo $arrayImages[$random]; ?>" /></div>
              
 <?php } 
        
 
      ?>
 </div>
 </div>
     





</body>
</html>