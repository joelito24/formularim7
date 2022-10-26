<?php

function connectMysql(string $dsn,string $dbuser,string $dbpass){
    try{
        $db = new PDO($dsn, $dbuser, $dbpass); //conecta con la base dedatos
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $db->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

    }catch(PDOException $e){
        die( $e->getMessage());
        
    }
    return $db;
}


/**
 * @param string $db
 * @param string $email
 * @param string $password
 * @return boolean
 */
function auth(PDO $db, string $email, string $pass):bool
{
    $stmt = $db->prepare("SELECT * FROM users WHERE email = :email"); //busca el email en la base de datos
    $stmt->execute(['email' => $email]);


    if($stmt->rowCount() == 1){
        $user = $stmt->fetchAll()[0];

        if(password_verify($pass, $user["password"])){
            $_SESSION['user'] = $user;
            return true;
        }
}
    return false;
}