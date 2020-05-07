<?php

require_once("config.php");

$root = new Usuario();

//die(print_r('aqui', true ));


$root->loadById(3);

echo $root;



/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

?>