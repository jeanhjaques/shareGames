<?php
	//controla o login
	
  session_start();
  
	require_once '../models/Usuario.php';
	require_once '../models/UsuarioDAO.php';
  
  if((isset($_POST['email_login'])) && (isset($_POST['senha_login']))){
    $email = $_POST['email_login'];
    $senha = MD5($_POST['senha_login']);
    $usuarioDAO = new UsuarioDAO();
    $usuarioDAO->logar($email, $senha);
    if($usuarioDAO->logar($email, $senha)){
      header('Location: ../views/usuarioInicio.php');
    }
    else{
      $_SESSION['loginErro'] = "<h1>Acesso Negado</h1>";
      header('Location: ../views/login.php');
    }
  }
  else{
	header('Location: ../views/login.php');
  }
?>
