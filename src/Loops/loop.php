<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<?php
//information from IMDb//

$array =[
["tvshow" => "Game of Thrones", "rating" => 9],
["tvshow" => "Dead To Me", "rating" => 8],
["tvshow" => "The Big Bang Theory", "rating" => 8],
["tvshow" => "Grey's Anatomy", "rating" => 7],
["tvshow" => "The Flash", "rating" => 8],
["tvshow" => "The Society", "rating" => 6],
["tvshow" => "Black Mirror", "rating" => 8],
["tvshow" => "Game of Thrones", "rating" => 9],
["tvshow" => "Game of Thrones", "rating" => 9],
["tvshow" => "Game of Thrones", "rating" => 9]
];

foreach($array as $arr): ?>
<tr>
	<td><?php echo $arr["tvshow"]; ?></td>
	<td><?php echo $arr["rating"]; ?></td>
</tr>
<?php endforeach; ?>



</body>
</html>