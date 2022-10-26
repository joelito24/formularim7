<?php
require 'src\render.php';
$title = "DETAIL"; 



if(isset($_SESSION["user"])){
    $user = $_SESSION["user"]["username"];
    $email = $_SESSION["user"]["email"];
}else{
    $user = "USUARIOEJEMPLO";
    $email = "EMIL@EJEMPLO.COM";
}


echo render('detail',[  'title' => $title,
                        'user' => $user,
                        'email' => $email,
                    ]);


?>