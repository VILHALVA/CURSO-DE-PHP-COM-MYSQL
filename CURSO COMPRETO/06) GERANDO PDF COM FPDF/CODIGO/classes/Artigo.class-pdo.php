<?php
//BUSCANDO AS CLASSES
require_once "Conexao.class.php";
require_once "Funcoes.class.php";
//CRIANDO A CLASSE
class Artigo{
	//ATRIBUTOS
	private $con;
	private $objFc;
	private $objMn;
	private $objUs;
	private $idArtigo;
	private $idMenu;
	private $idUsuario;
	private $titulo;
	//CONTRUTOR
	public function __construct(){
		$this->con = new Conexao();
		$this->objFc = new Funcoes();
	}
	//METODOS MAGICOS
	public function __set($atributo, $valor){
		$this->$atributo = $valor;
	}
	public function __get($atributo){
		return $this->$atributo;
	}
	//METODOS
	public function querySelectArtigo(){
		try{
			$cst = $this->con->conectar()->prepare("SELECT art.idArtigo, usu.nome, mn.menu, art.titulo FROM  artigo art 
													INNER JOIN menu mn ON mn.idMenu = art.menu_idMenu
													INNER JOIN usuario usu ON usu.idUsuario = art.usuario_idUsuario;");
			$cst->execute();
			return $cst->fetchAll();										
		}catch(PDOException $ex){
			echo 'Error: '.$ex->getMessage();
		}
	}
	
	public function queryListaArtigo($vlr){
		try{
			$this->idMenu = $vlr;
			$cst = $this->con->conectar()->Prepare("SELECT art.idArtigo, art.menu_idMenu, usu.nome, art.titulo FROM  artigo art
												    INNER JOIN usuario usu ON usu.idUsuario = art.usuario_idUsuario WHERE art.menu_idMenu = :menu;");
			$cst->bindParam(":menu", $this->idMenu, PDO::PARAM_INT);
			$cst->execute();
			return $cst->fetchAll();									
		}catch(PDOException $ex){
			echo 'Error: '.$ex->getMessage();
		}
	}
	
}
?>