<?php
class Funcoes {
    
    public function tratarCaracter($vlr, $tipo){
		switch($tipo){
            case 1: $rst = utf8_decode($vlr); break;
            case 2: $rst = utf8_encode($vlr); break;    
        }
        return $rst;
    }	
       
}
?>