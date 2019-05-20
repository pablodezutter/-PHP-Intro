<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
 
    <div class="container">

        <div class="row">
            <div class="col">
                <h1>Welkom to the lottery!</h1>
                <h2>Wanna play?</h2>
                    <p>Push this button</p>
                    <button class="btn btn-success action="Lottery.php" method="POST" ">Play now</button>
                    </br>
                    <input name="0" type="image">
                    <input name="1" type="image">
                    <input name="2" type="image">

                     </p>  
            </div>
        </div>
</div>
<?php
$img_0="img/burger0.png";
$img_1="img/friet1.png";
$img_2="img/friet1.png";
$randomPic =rand(0,2);


if ($randomPic == 0){
    echo $pic1 ='<img src="' . $img_0 . '"/>';
}


if ($randomPic == 1){
    echo $pic2= '<img src="' . $img_1 . '"/>';
    }


    if ($randomPic == 2){
        echo $pic3= '<img src="' . $img_2 . '"/>';
        }


?>


</body>
</html>