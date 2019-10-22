<?php
	class PagesController{
		//nao esta funcionando ainda	
		function homepage(){
			header('Location: /sources3/app/views/Homepage.php');
		}
		
		function minhaconta(){
			include 'app/views/MinhaConta.php';
		}

	}
?>