<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
#Funções de Banco de Dados
	//Conect&&select
	function conect($servidor,$usuario,$senha,$banco){$conexao=mysql_connect($servidor,$usuario,$senha) or die(alerta("Falha na Conexão com o Banco de Dados")); mysql_select_db($banco,$conexao) or die(alerta("Falha ao selecionar a DB - ".$banco));}
	// insere
	function insert($tabela,$onde,$valores,$retorno){if ($onde!=""){$onde="(".$onde.")";};$resultado=mysql_query("INSERT INTO ".$tabela." ".$onde." VALUES (".$valores.")") or die (alerta("Falha na inserção dos dados!"));if($resultado){sucesso($retorno);}};
	// Deleta
	function delet($tabela,$onde,$retorno){$resultado= mysql_query("DELETE FROM ".$tabela." WHERE ".$onde) or die (alerta("Falha ao deletar os dados!"));};
	//seleciona
	function select($oq, $tabela, $onde, $ordenar){
		if($oq==""){$oq="*";}; 
		if($onde!=""){$onde=" WHERE ".$onde;}; 
		if($ordenar!=""){$ordenar=" ORDER BY ".$ordenar;}; 
		$sql=MYSQL_QUERY("SELECT ".$oq." FROM ".$tabela.$onde.$ordenar); 
		if (mysql_num_rows($sql)!=0){
			return mysql_fetch_row($sql);
		} else {return false;}
	};
	//Atualisa
	function update($tabela,$valores,$onde){$valores=implode(', ', $valores);$onde=implode(', ', $onde);$inserir = "UPDATE ".$tabela." SET ".$valores." WHERE ".$onde;$resultado= mysql_query($inserir) or die (alerta("Falha ao atualizar os dados!"));};
	#Imagem no Banco de Dados#
	function dbimg($id, $caminho, $capa){
		$valotres="'', ".$id.", ".$caminho.", ".$capa;
		insert("imagens","",$valores,"");
	};
	#Conectar#
	#em ordem	(servidor, usuario, senha e banco de dados);
	conect		('localhost', 'root', '', 'painel');
	//sel img
	function selimg($id){
		$img=select('','img','cp=1 and id='.$id,'');
		return $img[0][2];
	};
	// autentica login retrna t/f
	function auth($nome,$senha){
		$saida=select('','login','nome="'.$nome.'" and senha="'.$senha.'" or login="'.$nome.'" and senha="'.$senha.'" or email="'.$nome.'" and senha="'.$senha.'"','');
		if($saida){
			session_start();
			$_SESSION["cd"]=$saida[5];
			$_SESSION["per"]=$saida[1];
			$_SESSION["nome"]=$saida[3];
			$_SESSION["email"]=$saida[4];
			return true;
		}else{
			return false;
		}
	};
?>
		
        