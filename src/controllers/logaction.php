<?php

// coger $_REQUEST['email'] y $_REQUEST['password'] 
$db = connectMysql($dsn,$userdb,$passdb);
var_dump($db);
$db=null;
die();

if(!empty($_POST['email']) && !empty($_POST['password'])) {
    if(isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        if (auth($db, $email, $password)) {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('Location: index.php');
        } else {
            $error = 'Usuario o contraseña incorrectos';
        }
    }
}

//comprobar si existe en la base de datos

//si existe, crear una sesión y redirigir a home.php

//si no existe, redirigir a login.php