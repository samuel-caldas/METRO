<?php
	include('eng/funcoes.php');
	include('eng/conectar.php');
	if(auth($_GET['nome'],$_GET['senha'])){
		parentgo('inicio.php');
	}else{
		parentjs('erro()');
	}
?>
<style type="text/css">
* {
	color: #000;
	background-color: #F00;
}
</style>
<strong>GO OUT!</strong><br />
<noscript>
OPS! Seu Javascript deve estar desativado!
</noscript>
