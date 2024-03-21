<?php
//CRIANDO A CLASSE
class Conexao{
	//ATRIBUTOS PRIVATOS
	private $servidor;
	private $banco;
	private $usuario;
	private $senha;
	private static $pdo;
	//CONSTRUTOR ALTENTICANDO A CONEXAO
	public function __construct(){
		$this->servidor = "localhost";
		$this->banco = "galactus";
		$this->usuario = "root";
		$this->senha = "";
	}
	//METODO PARA FAZER A CONEXAO
	public function conectar(){
		try{
			if(is_null(self::$pdo)){
				self::$pdo = new PDO("mysql:host=".$this->servidor.";dbname=".$this->banco, $this->usuario, $this->senha);
			}
			return self::$pdo;
		}catch(PDOException $ex){
			echo 'Error: '.$ex->getMessage();
		}
	}
	
}

?>