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

    /*$usuario = new Usuario();
    $usuario->login("user","12345");*/

    /*$aluno = new Usuario("aluno2","@lunos3");
    $aluno->insert();
    echo $aluno;*/

   /* $usuario = new Usuario();
    $usuario->loadById(11);
    $usuario->update("professor","@342342");
 
    echo $usuario;*/

    $usuario = new Usuario();
    $usuario->loadById(2);

    $usuario->delete();

    echo $usuario;

?>