<?php

//render template home

require 'src\render.php';
$title = "CLASE"; 
$alumnes= [
    'Perico Palotes',
    'Pepito Grillo',
    'Pepa Pig',
];

echo render('home', ['title' => $title,
                    'alumnes' => $alumnes]);