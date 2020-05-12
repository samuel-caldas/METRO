<?php
	ini_set('upload_tmp_dir', 'temp/');
	// Configurações do DB
	$servidor		= 'dbmy0038.whservidor.com';
	$db				= 'corregonov1';
	$usuario		= 'corregonov1';
	$senha			= 'corregonovo';
	// Função retorna erro
	function myErro($msgerro){
	    echo "<center></BR><h1>".$msgerro."<h1></BR></center>
			<br />
			<h5><strong>Desculpe-nos, ocorreu um pequeno erro em nossos servidores, tente novamente e, se o erro persistir, contate nossa equipe técnica atraves do email <a>agencia@grupocriarte.com</a> :p</strong></h5>
<meta http-equiv='refresh' content='0' />

			";
	}
	// conecta && seleciona
	$conexao = mysql_connect($servidor,$usuario,$senha) or die(myErro("<strong>Falha na Conexão com o Banco de Dados</strong>"));
	mysql_select_db($db , $conexao) or die(myErro("<h1><strong>Falha ao selecionar o banco de dados: $db</strong></h1>"));
	mysql_set_charset('utf8',$conexao);
?>
<noscript>
<h4>Ops! Por favor verifique se seu JavaScript esá desativado ou se seu browser é compativel.<br />
Algumas funçoes podem ficar temporariamente destaivadas até o problema ser resolvido.</h4>
</noscript>
