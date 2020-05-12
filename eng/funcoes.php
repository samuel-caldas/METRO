<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php #Diversos#
	//data
	function data($data){$data=$data[8].$data[9]."/".$data[5].$data[6]."/".$data[0].$data[1].$data[2].$data[3];
	return $data;
	};
	//caracteres especiais
	header("Content-Type:text/html; charset=ISO-8859-1", true);
#Funções de navegação
	//Historico
	function historico($go){echo"<script>history.go(".$go.");</script>";}
	//Redireciona
	function refresh($tempo,$pag){if($pag!=""){$pag="URL=".$pag;};echo"<meta http-equiv='refresh' content='".$tempo.";".$pag."' />";};
	//redireciona 2
	function go($pag){echo"<script>window.location.href='".$pag."'</script>";};
	//redireciona 3
	function parentgo($pag){echo"<script>parent.window.location.href='".$pag."'</script>";};
	//JS
	function js($js){echo'<script>window.location.href="javascript:'.$js.'";</script>';};
	//Parent JS
	function parentjs($js){echo"<script>parent.window.location.href='javascript:".$js."'</script>";};
	//Alerta
	function alerta($msg){echo "<script>parent.window.alert('".$msg."');</script>";};
	//Eerro
	function myErro($erro){alerta($erro);};
	//Sucesso
	function sucesso(){alerta("Sucesso!");historico("-1");};
	//session
	function sess(){session_start(); return $_SESSION;};
	//session out
	function goout(){@session_start(); @session_unset(); $_SESSION=array(); @session_destroy();};
?>