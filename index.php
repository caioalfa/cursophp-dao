<?php

    require_once("config.php");

    /* Traz do banco os usuarios

    $sql = new Sql();

    $usuarios = $sql->select("SELECT * FROM tb_usuarios");
    
    echo json_encode($usuarios);
    */

    /* 
    //Carrega um usuário
    $usuario = new Usuario();
     
    $usuario->loadById(8);

    echo $usuario;
    */

    // Carrega uma lista de usuário
    /*
    $lista = Usuario::getList();

    echo json_encode($lista);
    */

    // Carrega uma lista de usuários buscando pelo login ou parte dele
    /*
    $search = Usuario::search("ai");
    echo json_encode($search);
    */

    //Carrega um usuário buscando pelo login e senha
    $usuario = new Usuario();
    $usuario->login("Caio","12345");
    echo $usuario;


?>