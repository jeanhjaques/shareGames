<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif&amp;display=swap" rel="stylesheet">
	<title>Menus</title>
	<link rel="stylesheet" type="text/css" href="usuarioInicio.css">
	<script type="text/javascript" src="usuarioInicio.js"></script>
</head>
<body>
	<header>
        <nav>
			<ul> 
				<li><span><?php echo $_SESSION['nome'];?></span></li> 
			    <li><a href="#">Configurações</a> 
			      <ul class ="sub-menu"> 
			        <li><a href="usuarioPerfil.php">Seu perfil</a></li> 
			        <li><a href="#">Ajuda</a></li> 
			        <li><a href="login.php">Sair</a></li>  
			      </ul> 
			    </li> 
			</ul>
			<img class="img-perfil" src="../../public/userpadrao.jpg" alt="foto do perfil">
        </nav>
    </header>
    <article>
		<button class="menu-principal" onclick="mudarCorButtonsMenu('menu-principal',0); exibirMenuPrincipal('opcao-1', 'opcao-2','opcao-3','opcao-4')" style="color: red">Loja</button></ul>
		<button class="menu-principal" onclick="mudarCorButtonsMenu('menu-principal',1); exibirMenuPrincipal('opcao-2','opcao-1', 'opcao-3','opcao-4')">Biblioteca</button></ul>
		<button class="menu-principal" onclick="mudarCorButtonsMenu('menu-principal',2); exibirMenuPrincipal('opcao-3','opcao-1', 'opcao-2','opcao-4')">Desejados</button></ul>
		<button class="menu-principal" onclick="mudarCorButtonsMenu('menu-principal',3); exibirMenuPrincipal('opcao-4','opcao-1', 'opcao-2','opcao-3')">Conversas</button></ul>
		<div class = "opcao-1"> 
			<li class = "item-loja"> 
				<h2> Jogos Disponíveis </h2>
			<div class="pesquisar-jogo">
					<form method="post" action="../controllers/pesquisaJogosController.php">
						<label for="pesquisa-jogo"></label>
						<input id="pesquisa-jogo" name="pesquisa-jogo" required="required" type="search" placeholder="Buscar Jogo">
						<br>
						<input type="submit" value="Buscar">
					</form>
			</div>
			<?php foreach($_SESSION['jogosLoja'] as $jogo){
				echo "<ul><figure><img class = 'img-capa' src='007.jpg'><figcaption><h3>".$jogo['nome']."</h3>
					<br>Cidade: Indefinida
					<br>Categoria: ".$jogo['categoria']."
					<br>Estado de uso: ".$jogo['anosUso']."
					<br><button>Trocar</button>
					</figcaption></figure></ul>";
				}
			?>
			
			</li>
		</div>
		<div class = "opcao-2"> 
			<button onclick="mudarEstadoAndOcultBtn('cadastrar-jogo', 'btn-cadastro');" class="btn-cadastro">Cadastrar novo jogo</button>
			<div class="cadastrar-jogo">
				<form method="post" action="../controllers/cadastroJogoController.php" enctype="multipart/form-data">
					<h2>Insira os dados do  novo jogo</h2>
					<p>Nome:</p>
					<label for="nome-jogo"></label>
					<input id="nome-jogo" name="nome-jogo" required="required" type="text" placeholder="Nome do jogo">
					<p>Tempo de Uso:</p>
					<label for="anosUso-jogo"></label>
					<input id="anosUso-jogo" name="anosUso-jogo" required="required" type="number" placeholder="Tempo de uso(Anos)" >
					<p>Categoria:</p>
					<p><input type="radio" id = "categoria-jogo" required="required" name="categoria-jogo" value="Ação"> Ação
					<input type="radio" id = "categoria-jogo" required="required" name="categoria-jogo" value="Aventura"> Aventura
					<input type="radio" id = "categoria-jogo" required="required" name="categoria-jogo" value="Esporte"> Esporte
					<input type="radio" id = "categoria-jogo" required="required" name="categoria-jogo" value="RPG"> RPG
					<input type="radio" id = "categoria-jogo" required="required" name="categoria-jogo" value="outra">Outra</p>
					<p>Imagem da Capa:</p>
					<label for="capa-jogo"></label>
					<input class ="capa-jogo" id="capa-jogo" name="capa-jogo" required="required" type="file" accept=".jpg,.png" placeholder="Capa do jogo"><br>
					<input type="submit" value="Cadastrar Jogo"><br>
					</form>
				<button class="btn-ocultar" onclick="mudarEstadoAndExibeBtn('cadastrar-jogo', 'btn-cadastro');"><strong>Ocultar</strong></button>
			</div>
			<li class = "item-loja"> 
				<h2> Jogos Cadastrados na Sua Biblioteca</h2>
				<?php foreach($_SESSION['jogosUsuarioLogado'] as $jogo){
					echo "<ul><figure><img class = 'img-capa' src='007.jpg'><figcaption><h3>".$jogo['nome']."</h3>
						<br>Cidade: Indefinida
						<br>Categoria: ".$jogo['categoria']."
						<br>Estado de uso: ".$jogo['anosUso']."
						<br><button>Trocar</button>
					</figcaption></figure></ul>";
				}
				?>
			</li>
		</div>
		<div class = "opcao-3"> 
			<li class = "item-loja"> 
				<h2> Jogos que você deseja </h2>
				<ul><figure><img class = "img-capa" src="007.jpg"><figcaption><h3>007 Nightfire</h3>
					<br>Cidade: Campo Grande
					<br>Categoria: Ação
					<br>Estado de uso: 1 ano
					<br><button>Trocar</button>
				</figcaption></figure></ul>
				<ul><figure><img class = "img-capa" src="4fantastico.jpg"><figcaption><h3>Quarteto Fantástico</h3></figcaption></figure></ul>
				<ul><figure><img class = "img-capa" src="guitarhero.jpg"><figcaption><h3>Guitar Hero</h3></figcaption></figure></ul>
				<ul><figure><img class = "img-capa" src="hitmanbm.jpg"><figcaption><h3>Hitman: Blood Money</h3></figcaption></figure></ul>
				<ul><figure><img class = "img-capa" src="killswitch.jpg"><figcaption><h3>Kill Switch</h3></figcaption></figure></ul>
				<ul><figure><img class = "img-capa" src="yugiohgx.jpg"><figcaption><h3>Yu Gi Oh GX: Tag Force</h3></figcaption></figure></ul>
			</li>
		</div>
		<div class = "opcao-4">
			<h2>Suas Conversas</h2>
			<p>Aqui futuramente você poderá fazer suas negociações</p>
		</div>
	</article>
	<footer>
			<button>Sobre</button>
			<button>Quem somos</button>
			<button>Contato</button>
			<p>Criado e Desenvolvido por Hackers<br>Copyright<br>2019<p>
	</footer>
</body>
</html>