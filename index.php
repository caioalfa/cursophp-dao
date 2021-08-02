<?php

    require_once("config.php");

    /* Traz do banco os usuarios

    $sql = new Sql();

    $usuarios = $sql->select("SELECT * FROM tb_usuarios");
    
    echo json_encode($usuarios);
    */
    $usuario = new Usuario();
     
    $usuario->loadById(8);

    echo $usuario;




?>