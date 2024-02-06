<?php
//BUSCANDO AS CLASSES
require_once "Conexao.class.php";
//CRIANDO A CLASSE
class Menu{
	//ATRIBUTOS
	private $con;
	private $idMenu;
	private $menu;
	//CONSTRUTOR
	public function __construct(){
		$this->con = new Conexao();
	}
	//METODOS MAGICOS
	public function __set($atributo, $valor){
		$this->$atributo = $valor;
	}
	public function __get($atributo){
		return $this->$atributo;
	}
	//METODOS
	public function querySelectMenu(){
		try{
			$cst = $this->con->conectar()->prepare("SELECT `idMenu`, `menu`, `img` FROM `menu`;");
			$cst->execute();
			return $cst->fetchAll();
		}catch(PDOException $ex){
			echo 'Error: '.$ex->getMessage();
		}	
	}
}
?>