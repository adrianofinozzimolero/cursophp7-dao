<?php

require_once("config.php");

//die(print_r('aqui', true ));

//Carrega um usuário
/* $root = new Usuario();
  $root->loadById(3); 
  echo $root;*/

//Carrega uma lista de usuários
/*$lista = Usuario::getList();
echo json_encode($lista);*/

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/

//Carrega uma lista de usuário buscando pelo login
/*$search = Usuario::search("s");
echo json_encode($search);*/

//Carrega um usuário usando o login e a senha
/*$usuario = new Usuario();
$usuario->login("jose", "1234567890");
echo $usuario;*/

//Cria um novo usuário
/*$aluno = new Usuario("aluno", "@lun0");
$aluno->insert();
echo $aluno;*/

//Altera um usuário
$usuario = new Usuario();
$usuario->loadById(9);
$usuario->update('Almeida','Almeida');
echo $usuario;
$search = usuario::search("Almeida");
echo json_encode($search);


?>