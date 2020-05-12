<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Login</title>
<link href="temas/metro.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="eng/eng1.js"></script>
</head>

<body onLoad="sel(false); rigbtn()" id="body" onselectstart="return false">
<a href="javascript:classlog();"><div id="claslog">Login Classico</div></a>
<form action="login.php" method="get" target="loader">
<table border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle" id="imgusr"><div class="usrimg"><img src="temas/metro/usrimg.png" width="150" height="150" id="usrimg"></div></td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="usrnm" id="usrnm">Escolha um Usu&aacute;rio</td>
  </tr>
  <tr id="classlog">
    <td align="center" valign="middle">
      <input name="nome" type="text" class="txt" placeholder="Nome" id="nome"><a href="javascript:uclasslog()"><input name="btn" type="reset" class="btn" value="Cancelar"></a>
    </td>
  </tr>
  <tr>
    <td align="center" valign="middle"  class="usrpass" id="usrpass"><input onKeyUp="usnmt();" name="senha" type="password" class="txt" maxlength="10" placeholder="Senha" id="senha"><a href="javascript:loading()"><input name="btn" type="submit" class="btn" value="Entrar"></a></td>
  </tr>
  <tr>
    <td align="center" valign="middle" nowrap="nowrap" class="usrnm" id="erro">Senha Incorreta!</td>
  </tr>
</table>
<div id="usrs" class="usrs">
<table border="0" align="center" cellpadding="8" cellspacing="0">
  <tr>
<?php
	include('eng/funcoes.php');
	include('eng/conectar.php');
	if (sess()){go('inicio.php');};
	$saida=select('','login','','');
	$j=count($saida);
	for($i=0;$i<$j;$i++){
echo '	<td align="center" valign="middle">
    	<a href="#" onclick="chusr(\''.selimg($saida[$i][0]).'\',\''.$saida[$i][3].'\',\''.$saida[$i][1].'\');">
        	<div class="musrimg"><img src="usrimg/'.selimg($saida[$i][0]).'" alt="Nome" width="50" height="50" /></div>
    		<div class="usrnm">'.$saida[$i][3].'</div>
        </a>
    </td>';
	}
?>
  </tr>
</table>
</div>
</form>
<iframe id="loader" name="loader" style="visibility:hidden"></iframe>
<img src="temas/metro/loading.gif" id="loading">
</body>
</html>
