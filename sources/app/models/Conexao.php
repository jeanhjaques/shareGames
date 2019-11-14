<?php
	//classe responsável pela configuração da conexão com o banco de dados
	class Conexao{
		private static $instance;

		public static function getConnect(){
			if(!isset(self::$instance)){
				self::$instance = new \PDO('mysql:host=db4free.net;dbname=sharegames;', 'jean_henrique', 'senhasecreta');
			}
			return self::$instance;
		}
	}
?>