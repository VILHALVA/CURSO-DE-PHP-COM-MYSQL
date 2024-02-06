<?php
//BUSCANDO A CLASS
require_once "classes/Artigo.class-pdo.php";
require_once "classes/Funcoes.class.php";
require_once "classes/Menu.class-pdo.php";
require_once "classes/fpdf181/fpdf.php";
//ESTANCIANDO
$objAt = new Artigo();
$objFc = new Funcoes();
$objMn = new Menu();
//Inicia O documento PDF com orientação P - Retrato (Picture) OU L - Paisagem (Landscape)
$pdf = new FPDF("P");
$pdf->AddPage();
//NOME DO ARQUIVO AO SER GERADO ou GERA O NOME DO ARQUIVO COM O LOCAL A SER SALVO
$arquivo = "relatorio-geral.pdf";
//DEFININDO FORMATACOES DO PDF
$fonte = "Arial";
$estilo = "B";
$border = 1;
$alinhamentoL = "L";
$alinhamentoC = "C";
/*
GERAR COMO
I: Envia o arquivo para o navegador. O visualizador de PDF é usado se disponível.
D: Enviar para o navegador e forçar o arquivo um download com o nome especificado.
F: Salva o arquivo local com o nome dado por name(pode incluir um caminho).
S: Retorna o documento como uma string.
DEFAULT: O valor padrão é I.
*/

$tipo_pdf = "I";

foreach($objMn->querySelectMenu() as $rstMn){
	$pdf->SetY("50");
	
	$nm = 0;
	$totalArtigo = count($objAt->queryListaArtigo($rstMn['idMenu']));
	
	$pdf->SetFont($fonte, $estilo, 15);
	$pdf->Cell(190, 10, $rstMn['menu'], $border, 1, $alinhamentoC);
	$pdf->Image('img/'.$rstMn['img'], 10, 15, -200);
	
	if($totalArtigo != 0){
		$pdf->SetFont($fonte, $estilo, 8);
		$pdf->Cell(30, 7, 'AUTOR (A)', 'L, B', 0, $alinhamentoC);
		
		$pdf->SetFont($fonte, $estilo, 8);
		$pdf->Cell(160, 7, 'ARTIGOS', 'L, R, B', 1, $alinhamentoC);
		foreach($objAt->queryListaArtigo($rstMn['idMenu']) as $rstAt){
			$nm = $nm + 1;
			if($totalArtigo == $nm){		
				$pdf->SetFont($fonte, '', 7);
				$pdf->Cell(30, 5, $rstAt['nome'], 'L, B', 0, $alinhamentoL);
				
				$pdf->SetFont($fonte, '', 7);
				$pdf->Cell(160, 5, $rstAt['titulo'], 'L, R, B', 1, $alinhamentoL);			
			}else{	
				$pdf->SetFont($fonte, '', 7);
				$pdf->Cell(30, 5, $rstAt['nome'], 'L', 0, $alinhamentoL);
				
				$pdf->SetFont($fonte, '', 7);
				$pdf->Cell(160, 5, $rstAt['titulo'], 'L, R', 1, $alinhamentoL);						
			}	
		}	
	}else{		
		$pdf->SetFont($fonte, '', 7);
		$pdf->Cell(190, 8, $objFc->tratarCaracter('Não tem vídeo aula', 1), 'L, R, B', 1, $alinhamentoC);
	}	
	$pdf->AddPage();
}

//FECHANDO O ARQUIVO
$pdf->Output($arquivo, $tipo_pdf);
?>