
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<!-- In this PHP exercise, you will use a conditional statement 
to determine what gets printed to the browser. 
Write a script that gets the current month and prints one of the following responses, 
depending on whether it's August or not:

It's August, so it's really hot.
Not August, so at least not in the peak of the heat.

Hint: the function to get the current month is 'date('F', time())' for the month's full name.
source: https://www.phpexercises.com
 -->

<?php
$d = date("m");
echo $d;
if ($d == 8){
echo "It is August, so it's really hot.";
}else{
echo "Not August, so at least not in the peak of the heat";
}
?>
<!-- even better -->
<?php
$d = date('F', time());
if ($d == "August"){
echo "<p>It is August, so it's really hot.</p>";
}else{
echo "<p> It is "."$d"." " ."not August, so at least not in the peak of the heat</p>";
}
var_dump("$d");
echo "\n";
print_r($d);

?>

<!--In this PHP exercise, you will put all the loops through their paces. 
Write a script using first a while loop, then a do while loop, then two for loops. 
The script will output the following to the browser:

abc abc abc abc abc abc abc abc abc

xyz xyz xyz xyz xyz xyz xyz xyz xyz

1 2 3 4 5 6 7 8 9

Item A
Item B
Item C
Item D
Item E
Item F
Create the 'abc' row with a while loop, the 'xyz' row with a do while loop, 
and the last two sections with for loops.
 Remember to include HTML and source code line breaks in your output. 
 No arrays allowed in this solution.-->
</br>
</br>
 <?php
 $i=0;
 $x="abc";
while ($i<9){
$i++;
echo $x . " " ; 
}

echo "<p>\n";
echo "</p>\n";

$i=0;
$x="xyz";
do{
    echo $x . " ";
    $i++;
}
while($i<9);

echo "<p>\n";
echo "</p>\n"; 

for($i=1;$i<10;$i++){
echo $i ." ";
}
echo "<p>\n";
echo "</p>\n"; 

echo "<ol>";
for($i='A';$i<'G';$i++){
    echo "<li>".'Item'." " . $i . "</li>";
}
echo"</ol>";

var_dump(debug_backtrace());
error_reporting(-1);
?>


</body>
</html>