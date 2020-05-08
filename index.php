<?php

require_once("config.php");

//die(print_r('aqui', true ));

/* $root = new Usuario();
  $root->loadById(3); 
  echo $root;*/

/*$lista = Usuario::getList();
echo json_encode($lista);*/

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/

/*$search = Usuario::search("s");
echo json_encode($search);*/

/*$usuario = new Usuario();
$usuario->login("jose", "1234567890");
echo $usuario;*/

$aluno = new Usuario("aluno", "@lun0");
$aluno->insert();
echo $aluno;


?>