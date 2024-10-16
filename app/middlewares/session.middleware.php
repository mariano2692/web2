<?php

function sessionMiddleware($res){
    session_start();
    if(isset($_SESSION['id_user'])){
        $res->user = new stdClass();
        $res->user->id =  $_SESSION['id_user'];
        $res->user->user = $_SESSION['user'];
        $res->user->password = $_SESSION['password'];
        $res->user->rol = $_SESSION['rol'];
    }
    else{
        header('Location: ' . BASE_URL . 'showLogin');
    }
 
}
?>