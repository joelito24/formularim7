<?php

session_start();
session_unset();
session_destroy(); //destruye la sesión

//Delete cookies
setcookie('username', '', time() - 3600); // setea las cookies una hora atrás
setcookie('email', '', time() - 3600);
setcookie('password', '', time() - 3600);



header('Location: /loginform');

?>