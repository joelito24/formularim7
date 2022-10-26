<?php



//var_dump($dsn,$dbuser,$dbpass);
// coger $_REQUEST['email'] y $_REQUEST['password'] 
//$db= new PDO($dsn,$dbuser,$dbpass);




if(!empty($_POST['email']) && !empty($_POST['password'])) {
    if(isset($_POST['email']) && isset($_POST['password'])) {

        $db = connectMysql($dsn,$dbuser,$dbpass);
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];


        if (auth($db, $email, $password)) {
            $_SESSION['user']['email'] = $email;
            $_SESSION['user']['password'] = $password;

            setcookie('email', $_POST['email'], time() + 60 * 60 * 24 * 30);
            setcookie('password', $_POST['password'], time() + 60 * 60 * 24 * 30); // setea las cookies
            
            header('Location: index.php');
        } else {
            header('Location: ?url=login');
        }
    }
}

//comprobar si existe en la base de datos
//si existe, crear una sesión y redirigir a home.php
//si no existe, redirigir a login.php