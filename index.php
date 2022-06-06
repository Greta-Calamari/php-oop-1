<!-- - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 

require_once __DIR__.'/classes/movie.php';

$movies =[
    [
        'title' =>'Jurassic Park',
        'direction'=> 'Steven Spielberg',
        'duration'=>'2h 7m',
        'year'=>'1993'

    ],
    [
        'title' =>'Top Gun',
        'direction'=> 'Tony Scott',
        'duration'=>'1h 50m',
        'year'=>'1986'

    ],
    [
        'title' =>'It',
        'direction'=> 'Andrés Muschietti',
        'duration'=>'2h 15m',
        'year'=>'2017'

    ],
    [
        'title' =>'Harry Potter e la pietra filosofale',
        'direction'=> 'Chris Columbus',
        'duration'=>'2h 32m',
        'year'=>'2001'

    ],
]


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista Film:</h1>
    <?php
    foreach ($film as $key => $value) {
         $film = new Movie($value['title']);
        
    ?>

    


    <?php } ?>
</body>
</html>