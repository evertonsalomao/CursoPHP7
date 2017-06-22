<?php 

require_once("config.php");

//Carrega 1 usuário
// $root = new Usuario();
// $root->loadById(3);
// echo $root;

//Carrega Lista de usuários
// $lista = Usuario::getList();
// echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
// $busca = Usuario::search("ro");
// echo json_encode($busca);

//Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("root", "98765");
echo $usuario;
 ?>