
<?php
 //require 'Lottery.php';
 function rollDice(){
$arrayImages= ['img/burger0.png','img/friet1.png','img/pizza2.png'];
$loting=[];
// shuffle($arrayImages); werkt, maar zorgt ervoor dat je nooit 3x dezelfde hebt
  for ($i=0;$i<3;$i++){
$random=rand(0,2);// kan ook met gekozen image; 
array_push($loting,$random);

 
           echo " <img src=\"". $arrayImages[$random] . "\"/>";
              
  } 
        if(sizeof(array_unique($loting))== 1){ //lengte van de lijst met unieke waarden = 1
         /*$winner*/echo "you win" ."</br>";
        }else{
         echo "try again?";
        }
 
      
      }
?>
     





