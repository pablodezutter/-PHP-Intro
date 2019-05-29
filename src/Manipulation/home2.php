<?php
            // To slice the array into half, use floor(count($array)/2) to know your offset.
            // Use array_chunk to split the array up into multiple sub-arrays, 
            // and then loop over each. To find out how large the chunks 
            // should be to divide the array in half, use ceil(count($array) / 2) 

$music= array("hardrock", "pop", "country");
               
     function divide($music){
        if($music % 2 == 0){ // is even
         floor(count($music)/2);
         echo $music;
     }   else{
       echo floor(count($music)/2 - 1);
       echo $music;
     }    
    }     
   
?>