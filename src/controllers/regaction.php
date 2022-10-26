<?php

if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    setcookie('username', $_POST['username'], time() + 60 * 60 * 24 * 30);
    setcookie('email', $_POST['email'], time() + 60 * 60 * 24 * 30);
    setcookie('password', $_POST['password'], time() + 60 * 60 * 24 * 30);


    $db = connectMysql($dsn, $dbuser, $dbpass);

    $sql = "INSERT INTO users (username, password, email) VALUES (:username, :password, :email)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password); //encripta la contraseña

    if ($stmt->execute()) {
        $message = 'Successfully created new user';
    }

    if($message){
        header('location:?url=home');
    }else{
        $message = 'Sorry there must have been an issue creating your account';
    }
}

?>