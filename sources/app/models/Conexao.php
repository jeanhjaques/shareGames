<?php
	//classe responsável pela configuração da conexão com o banco de dados
class Conexao{
	private static $instance;

	public static function getConnect(){
		if(!isset(self::$instance)){
			self::$instance = new \PDO('mysql:host=localhost;dbname=share;', 'root', '');
		}
		return self::$instance;
	}
}
?>