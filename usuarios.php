<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Usuários</title>
<link href="painel.css" rel="stylesheet" type="text/css" />
</style>
</head>

<body>
<table width='98%' border='1' align='center' cellpadding='1' cellspacing='0' bordercolor='#CCCCCC'>
  <tr class='titulo'>
    <td align='left' valign='middle' bgcolor='#FFFFFF'><strong>Codigo</strong></td>
    <td align='left' valign='middle' bgcolor='#FFFFFF'><strong>Tipo de permissao</strong></td>
    <td align='left' valign='middle' bgcolor='#FFFFFF'><strong>Usuário des de</strong></td>
    <td align='left' valign='middle' bgcolor='#FFFFFF'><strong>Nome</strong></td>
    <td align='left' valign='middle' bgcolor='#FFFFFF'><strong>Login</strong></td>
    <td align='left' valign='middle' bgcolor='#FFFFFF'><strong>Email</strong></td>
    <td align='left' valign='middle' bgcolor='#FFFFFF'><strong>Senha</strong></td>
    <td align='left' valign='middle' bgcolor='#FFFFFF'><strong>Deletar</strong></td>
  </tr>
<?php
	include_once("conectar.php");
	session_cache_expire(10);
	@session_start();
	if (isset($_SESSION["nome"])){}
	else{
		echo("
		<script type='text/javascript'>
			document.bgColor='#FF0000';
			window.alert('Você nao está logado. Efetue o login para poder ver isso.');
			parent.window.location.href='index.php';
		</script>");
	}
$permissao=$_SESSION["permissao"];
$sql = "SELECT * FROM cplogin";
$login= MYSQL_QUERY($sql) or die(mysql_error());
while ($campo = mysql_fetch_row($login)){
	
	if (($permissao==1) or $permissao==2){
		$delete="<td align='center'><strong><a href='delete.php?cd=".$campo[0]."&t=cplogin'>X</a></strong></td>";
	}
	else{
		$delete="<td>&nbsp;</td>";
	}

	if ($_SESSION["cd"]==1){
		$senha="<td>".$campo[6]."</td>";
	}else{
		$senha="<td>&nbsp;</td>";
	}
	
echo"<tr>
		<td>".$campo[0]."</td>
		<td>".$campo[1]."</td>
		<td>".$campo[2][8].$campo[2][9]."/".$campo[2][5].$campo[2][6]."/".$campo[2][0].$campo[2][1].$campo[2][2].$campo[2][3]."</td>
		<td>".$campo[3]."</td>
		<td>".$campo[4]."</td>
		<td>".$campo[5]."</td>
		".$senha."
		".$delete."
	  </tr>";
}
?>
  <tr class="titulo">
    <td colspan="8" align='center' valign='middle' bgcolor="#FFFFFF"><a href="addu.php"><font color='#333333'><strong>Adicionar outro usuário</strong></font></a></td>
  </tr>
</table>
</body>
</html>