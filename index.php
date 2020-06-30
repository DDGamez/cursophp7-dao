<?php
	
	require_once("config.php");
	
	// Carrega somente um usuario
	//$root = new Usuario();
	//$root->loadbyid(3);
	//echo $root;
	
	//Carrega uma lista de usuario 
	//$lista = Usuario::getList();
	//echo json_encode($lista);
	
	//Carrega uma lista de usuario buscando pelo login
	//$search = Usuario::search("jo");
	//echo json_encode($search);	
	
	//carrega os usuario usando ow login e a senha
	//$usuario = new Usuario();
	//$usuario->login("Jonas", "456");
	//echo $usuario;

	//iserção de um novo aluno no banco passando os setters	
	//$aluno = new Usuario();
	//$aluno->setDeslogin("Aluno");
	//$aluno->setDessenha("123b456");
	//$aluno->insert();
	//echo $aluno;
	
	//iserção de um novo aluno no banco passando os setters	
	//$aluno = new Usuario("Raissa", "5897");
	//$aluno->insert();
	//echo $aluno;
	
	//$sql = new Sql();
	//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
	//echo json_encode($usuarios);
	
	//Alterando um dado atraves do UPDATE
	//$usuario = new Usuario();
	//$usuario->loadbyid(12);
	//$usuario->update("Manu", "13@@@46");
	//echo $usuario;

	//Deletando Dados
	$usuario = new Usuario();
	$usuario->loadbyid(11);
	$usuario->delete();
	
	echo $usuario;
	
	
?>
	
