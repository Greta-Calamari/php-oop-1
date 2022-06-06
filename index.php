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