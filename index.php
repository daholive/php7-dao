<?php

    require_once("config.php");

    /*$sql = new Sql();
    $usuarios = $sql->select("SELECT * FROM tb_usuarios");

    echo json_encode($usuarios);*/

//    $user = new Usuario();
    //$user->loadById(6);
//    echo $user;
    //$lista = Usuario::getList();
    
/*    $search = Usuario::search("jose");
    echo json_encode($search);*/

    $usuario = new Usuario();
    $usuario->login("user3","12345");

    echo $usuario;
?>