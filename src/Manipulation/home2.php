<?php
// To slice the array into half, use floor(count($array)/2) to know your offset.
// Use array_chunk to split the array up into multiple sub-arrays,
// and then loop over each. To find out how large the chunks
// should be to divide the array in half, use ceil(count($array) / 2)

$music = array("hardrock", "pop", "country");

function divide($music)
{
    if ($music % 2 == 0) { // is even
      /*  
      Review:
      Een array is geen cijfer, dus $array % 2 is iets wat niet kan. Wat je waarschijnlijk 
      bedoelt is *de lengte* van de array, maar dat is niet wat je code zegt.
      Waarom overigens dit testen? Wat zou je bij een array met een oneven aantal items - zoals 
      $music er overigens een is - anders gaan doen, rekening hopudend met lijn 19?
      */
      floor(count($music) / 2);
      /*  
      Review:
      OK, hier neem je dus de lengte van de array gedeeld door 2, en je rond af naar beneden. 
      3 / 2 = 1,5, en afgerond geeft 1.
      Het resultaat van die berekening moet je nu meegeven aan array_chunck of array_splice:
      */

      echo $music;
      /*  
      Review:
      De intentie is goed, maar je hebt $music op geen enkele manier bewerkt, dus hier is die nog steeds identiek aan lijn 7.

      Je moet eerst de bewerking doen, met array_chunck of array_slice, de oorspronkelijke array, en het cijfer dat je op 
      lijn 19 hebt berekend.

      array_chunk ( array $array , int $size [, bool $preserve_keys = FALSE ] ) : array

      OF 

      array_slice ( array $array , int $offset [, int $length = NULL [, bool $preserve_keys = FALSE ]] ) : array

      */
    } else {
        echo floor(count($music) / 2 - 1);
        /*
        Review:
        Denk eens na wat floor(count($music) / 2 - 1) eigenlijk doet.

        Als de array 3 elementen lang is:
          3 / 2 = 1,5
          1,5 - 1 = 0,5
          floor (0,5) = 0  -> Je komt dus op een lege array uit.

        Stel dat een array 9 elementen bevat, dan wil je er 4 overhouden, juist?
          9 / 2 = 4,5
          4,5 - 1 = 3,5
          floor (3,5) = 3 -> Je komt op 3 uit ipv op 4!


        */
        echo $music;
    }
}


/*
VOORBEELD:
// bekijk elk item in de associatieve array $_SESSION, en gebruik binnen de foreach 
//de benamingen $member voor de key, en $value voor de waarde die aan die key is gekoppeld

  foreach ($_SESSION as $member => $value) {  

    // we willen dit enkel gaan doen voor arrays, dus $value moet een array zijn

    if (is_array($value)) {  

      // Ongeacht of het een gewone of een asociatieve array is, willen we weten hoe lang de array is 
      // en gaan we al meteen de helft darvan berekenen, afgerond naar beneden wat indoen de array-lengte 
      // oneven is kunnen we geen halve item nemen, en overigens aanvaarden array_chunk en array_slice enkel integers.

          $arrayLength = count($value);
          $splitPos = floor($arrayLength / 2);

          // Gewoon ter illustratie en omdat we absoluut beide functies eens willen gebruiken, kijken we of 
          // datgene wat we aan het behandelen zijn een associatieve array is of niet. Het toont gewoon aan 
          // dat de verschillende functies anders werken, eventueel bijkomende parameters moeten hebben, en 
          // ook iets anders teruggeven. 

          if (is_assoc2($value)) {
              $value = array_chunk($value, $splitPos, true)[0];
              // array_chunk geeft een array terug met daarin alle stukken van de oorspronkelijke array. 
              // We hebben enkel het eerste stukje nodig, vandaar de [0] op het eind.
          } else {
              $value = array_slice($value, 0, $splitPos, true);
              // array_slice geeft enkel het stuk terug dat beging op offset en gaat tot $splitPos
          }
      }

      // Nadat we de array hebben geknipt steken we die terug in $_SESSION, onder de oorspronkelijke key $member. 
      $_SESSION[$member] = $value;
  }




*/