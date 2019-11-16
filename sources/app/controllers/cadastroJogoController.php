<?php
  //controla o cadastro dos jogos
	session_start();
    require_once '../models/Jogo.php';
	require_once '../models/JogoDAO.php';

  $valido = false;

  //verifica se tudo foi preenchido, se sim $valido recebe true
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $valido = isset($_POST['nome-jogo'], $_POST['anosUso-jogo'], $_POST['categoria-jogo'], $_POST['capa-jogo']);
  }
  if($valido){ 
    $nome = $_POST['nome-jogo'];
    $anosUso = $_POST['anosUso-jogo'];
    $categoria = $_POST['categoria-jogo'];
    $capa = $_POST['capa-jogo'];

	  //aqui o certo seria chamar o metodo cadastrarJogo() da classe usuario, com isso ele já recuperaria o ID
		//cadastrarJogo($jogo);
    $novoJogo = new Jogo($nome, $capa, $anosUso, $categoria, 1); // o 1 aqui representa um valor fixo para IDUsuario(deverá ser substituido pelo id do usuario responsavel)
    $novoJogoDAO = new JogoDAO();
    $novoJogoDAO->create($novoJogo);
    header('Location: ../views/usuarioInicio.php');
  }
?>
