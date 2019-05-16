<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<?php

    $tvshows = [
        ["tvshow" => "Game of Thrones", "rating" => 9], //0
        ["tvshow" => "Dead To Me", "rating" => 8], //1
        ["tvshow" => "The Big Bang Theory", "rating" => 8],
        ["tvshow" => "Grey's Anatomy", "rating" => 7],
        ["tvshow" => "The Flash", "rating" => 8],
        ["tvshow" => "The Society", "rating" => 6],
        ["tvshow" => "Black Mirror", "rating" => 8],
        ["tvshow" => "Blackadder II", "rating" => 8],
        ["tvshow" => "Ironside", "rating" => 3],
        ["tvshow" => "We are men", "rating" => 2]
    ];

    //var_dump($tvshows);

?>
   
    <div class="container">
        <table class="table mt-5">
            <thead>
                <tr>
                    <td>TvShow</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($tvshows as $arr): ?>
                    <tr>
                        <td><?php echo $arr["tvshow"]; ?></td>
                        <td><?php echo $arr["rating"]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>









    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>