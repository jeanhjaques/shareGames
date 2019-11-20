<?php

  //controla o cadastro dos jogos
	session_start();
  require_once '../models/Jogo.php';
	require_once '../models/JogoDAO.php';

  $valido = false;

  //verifica se tudo foi preenchido, se sim $valido recebe true
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $valido = isset($_POST['nome-jogo'], $_POST['anosUso-jogo'], $_POST['categoria-jogo'], $_FILES['capa-jogo']['name']);
  }
  if($valido){ 
    /*$extensao = strtolower(substr($_FILES['capa-jogo']['name'], -4));
    $novo_nome = md5(time()) . $extensao;
    $diretorio = "upload";
    move_uploaded_file($_FILES['capa-jogo']['tmp_name'], $diretorio.$novo_nome);*/

    $nome = $_POST['nome-jogo'];
    $anosUso = $_POST['anosUso-jogo'];
    $categoria = $_POST['categoria-jogo'];
    $capa = $_FILES['capa-jogo']['name'];
    $id = $_SESSION['idUsuario'];

    $diretorio = "C:/wamp64/www/Trabalho/Sistema_ProgWeb/shareGames/sources/public/upload/";
    move_uploaded_file($_FILES['capa-jogo']['tmp_name'], $diretorio);
    //Upload aqui

    $novoJogo = new Jogo($nome, $capa, $anosUso, $categoria, $id);
    $novoJogoDAO = new JogoDAO();
    $novoJogoDAO->create($novoJogo);
    header('Location: ../views/usuarioInicio.php');
  }


?>