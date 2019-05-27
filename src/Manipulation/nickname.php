<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cool Nickname Generator</title> 

    <link rel= "stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montaga&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container mt-4">
        <div class="row">       
            <div class="col">
                <p>Hawdy over there! So, you are into a fancy cool nickname ey?
                    Try clicking the super green button.
                </p>

            <form action="" method="POST">
            <input type="text" class="form-control-sm" name="inputUser">
                 <button type="submit" class="btn btn-outline-success">Give it a try!</button>
            </form>
                <span id="textfield">
                <?php 
                $inputName=$_POST["inputUser"];
                echo $inputName;?>
                <br>
                <?php echo strrev($inputName); ?>
                <br>
                <?php echo strtoupper($inputName);
                ?>
                <br>
                <?php 
                $inputName2= strtoupper($inputName);
                echo strrev($inputName2); ?>
                <br>
                <?php echo str_pad($inputName2, strlen($inputName2) + 4  , "-", STR_PAD_BOTH );
                ?>
                <br>
                <?php echo str_pad($inputName2,strlen($inputName2) + 1 , "x", STR_PAD_LEFT);
                ?>
                <br>
                <?php 
               $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 4);
                echo $randomString . $inputName2;
                ?>
                <br>
                <?php 
               $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 4);
                echo '['. $randomString . ']' . $inputName2;
                ?>
                <br>
            
                <?php
                //Get the length of the string.
                $stringLength = strlen($randomString);
 
                //Generate a random index based on the string in question.
                $randomIndex = mt_rand(0, $stringLength - 0);
 
                // //Print out the random character.
                // echo $randomString[$randomIndex] ;
            

            $newChar= $randomString[$randomIndex];
                if ($newChar == (ctype_upper($newChar))) {
                    echo strtolower($newChar). $randomString;
                } else {
                    echo strtoupper($newChar). $randomString;
                }

            
                
                ?>
               
            
            
            
            
            
            </div>




            </div>





        </div>


       <p id="source">Source: Photo by Annie Spratt on Unsplash</p>
    </div>

 <!-- <?php
//_POST if (strlen > 1)



?>
  -->
</body>
</html>