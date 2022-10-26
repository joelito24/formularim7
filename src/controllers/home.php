<?php

//render template home

require 'src\render.php';
$title = "CLASE"; 



if(isset($_SESSION["user"])){
    $alumnes = [$_SESSION["user"]['email']];
    $frases = "Este es el usuario conectado";
}else{
    $alumnes= [
        'Perico Palotes',
        'Pepito Grillo',
        'Pepa Pig',
    ];
    $frases = 'Estos son los usuarios de ejemplo, registrate para verlos para añadirte a la lista';
}


echo render('home', ['title' => $title,
                    'alumnes' => $alumnes,
                    'frases' => $frases]
            );

?>