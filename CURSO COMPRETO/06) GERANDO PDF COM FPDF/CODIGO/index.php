<?php
//BUSCANDO A CLASSE
require_once "classes/Artigo.class-pdo.php";
require_once "classes/Funcoes.class.php";
//ESTANCIANDO A CLASSE
$objAt = new Artigo();
$objFc = new Funcoes()
?>
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Criando Relatório em PDF</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
<div id="base">
	<div id="rltTotal"><a href="relatorio-geral.php" target="_blank" title="RELATÓRIO GERAL">RELATÓRIO GERAL</a></div>
    <div id="registros">
    	<div id="cabecario"><div id="tituNome">AUTOR (A)</div><div id="tituCategoria">CATEGORIA</div><div id="tituArtigo">ARTIGO</div></div>
    	<?php foreach($objAt->querySelectArtigo() as $rst){ ?>
        <div class="lh">
        	<div class="nome"><?=$rst['nome']?></div>
            <div class="categoria"><?=$objFc->tratarCaracter($rst['menu'], 2)?></div>
            <div class="artigo"><?=$objFc->tratarCaracter($rst['titulo'], 2)?></div>
        </div>
        <?php } ?>
    </div>
</div>
</body>
</html>