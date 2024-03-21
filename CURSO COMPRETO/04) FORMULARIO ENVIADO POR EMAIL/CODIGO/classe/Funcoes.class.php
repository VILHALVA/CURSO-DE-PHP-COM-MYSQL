<?php
//BUSCANDO A CLASSE
require_once 'PHPMailer-master/PHPMailerAutoload.php';
//INICIANDO A CLASSE
class Funcoes{
	//ATRIBUTOS
	private $objmail;
	//CONTRUTOR
	public function __construct(){
		$this->objmail = new PHPMailer();		
	}
	//METODO RESPONWSAVEL POR TRATAR OS CARACTERES DOS DADOS
	public function tratarCaracter($vlr, $tipo){
		switch($tipo){
			case 1: $rst = utf8_decode($vlr); break;
			case 2: $rst = htmlentities($vlr, ENT_QUOTES, "ISO-8859-1"); break; 
		}
		return $rst;
	}
	//RESPONSAVEL POR ENVIAR O E-MAIL
	public function enviarEmail($dados){

		$this->objmail->IsSMTP();
		$this->objmail->SMTPAuth = true;
		$this->objmail->SMTPSecure = 'tls';
		$this->objmail->Port = 587;
		$this->objmail->Host = 'smtpt.dominio.com.br';
		$this->objmail->Username = 'email@dominio.com.br';
		$this->objmail->Password = 'senha12345';
		$this->objmail->ContentType = 'text/html; charset=utf-8';
		$this->objmail->SetFrom('email@dominio.com.br', 'Contato');
		$this->objmail->AddAddress('email@dominio.com.br', 'Teste de envio de e-mail');
		$this->objmail->Subject = ''.$this->tratarCaracter($dados['assunto'], 1).'';
		
		$html = '<p><strong>Nome:</strong> '.$this->tratarCaracter($dados['nome'], 1).'<br>';
		$html .= '<strong>E-mail:</strong> '.$dados['email'].'<br>';
		$html .= '<strong>Assunto:</strong> '.$this->tratarCaracter($dados['assunto'], 1).'<br>';
		$html .= '<strong>Mensagem:</strong><br>';
		$html .= $this->tratarCaracter($dados['mensagem'], 1).'</p>';
		
		$this->objmail->MsgHTML($html);
		
		if (!$this->objmail->Send()) {
			echo "Mailer Error: " . $this->objmail->ErrorInfo;
		} else {
			echo "Mensagem enviada";
		}

	}
}

?>
