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

                    </br>

                    <form method="post" class=" m-5">
                        <label for="pos1">Guess First</label>
                        <select id="pos1" name="pos1"  class="form-control">
                            <option value="🍔">🍔</option>
                            <option value="🍟">🍟</option>
                            <option value="🍕">🍕</option>   
                        </select>                 </select>

                        <label for="pos2">Guess Second</label>
                        <select id="pos2" name="pos2"  class="form-control">
                            <option value="🍔">🍔</option>
                            <option value="🍟">🍟</option>
                            <option value="🍕">🍕</option>   
                        </select>  

                        <label for="pos3">Guess Third</label>
                        <select id="pos3" name="pos3"  class="form-control">
                            <option value="🍔">🍔</option>
                            <option value="🍟">🍟</option>
                            <option value="🍕">🍕</option>   
                        </select>  

                        <button class="btn btn-success btn-block mt-3" action="Lottery.php" type="submit">Play now</button>
                    </form>


                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                        $userGuess = [$_POST['pos1'], $_POST['pos2'],$_POST['pos3']];

                        echo ("<p>Your guess: ");
                        foreach ($userGuess as $pos) {
                            echo " ".$pos." ";
                        }
                        echo("<br>");
                        print_r(array_values($userGuess));
                        echo ("</p>");

                        echo ("<p>Computer says: ");
                        $pics = array("🍔", "🍟", "🍕");
                        shuffle($pics);
                        // Met shuffle schud je wel de array en verander je dus de volgorde binnen de array, maar krijg je nooit 2 keer hetzelfde beeldje.
                        // Dit is OK als je interpretatie van de opdracht is dat de gebruiker de volgorde moet raden,  maar niet voor een slot-machine interpretatie.

                        foreach ($pics as $pic) {
                            echo " ".$pic." ";
                        }
                        echo("<br>");
                        print_r($pics);
                        echo ("</p>");
                        

                        if ($pics == array_values($userGuess)) {
                            echo ("<p>Winner. You can read minds!</p>");
                        } else {
                            echo ("<p>Nope ... Try again!</p>");
                        }
                        
                        // re-initialize $_POST
                        $_POST = [];
                    }
                    ?>

            </div>
        </div>
</div>


<!-- 
//First try:
 //$img_0="img/burger0.png";
// $img_1="img/friet1.png";
// $img_2="img/pizza2.png";
// $randomPic =rand(0,2);


// if ($randomPic == 0){
//     echo $pic1 ='<img src="' . $img_0 . '"/>';
// }


// if ($randomPic == 1){
//     echo $pic2= '<img src="' . $img_1 . '"/>';
//     }


//     if ($randomPic == 2){
//         echo $pic3= '<img src="' . $img_2 . '"/>';
//         }


//?>
-->


</body>
</html>