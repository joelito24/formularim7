<?php


include 'src\routes.php';

function getRoute(array $routes):string
{
    if(isset($_REQUEST['url'])){
        $url = $_REQUEST['url'];
    }else{
        $url = 'home';
    }

    if(in_array($url, $routes)){
        return $url;
    }else{
        return 'error';
    }

}