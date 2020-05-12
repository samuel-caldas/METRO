<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>In&iacute;cio</title>
<?php
	include('eng/funcoes.php');
	include('eng/conectar.php');
	if (!sess()){go('index.php');};
?>
<link href="temas/metro.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="eng/eng1.js"></script>
</head>

<body onLoad="sel(false); rigbtn()" id="body" onselectstart="return false">
<div class="usrs">
<table border="0" align="center" cellpadding="0" cellspacing="5">
  <tr>
    <td align="center" valign="middle"><a href="#"><img src="temas/metro/control.png" name="ico" id="ico"><label>Painel de Controle</label></a></td>
    <td align="center" valign="middle"><a href="sair.php" target="loader"><img src="temas/metro/sair.png" name="ico" id="ico"><label>Sair</label></a></td>
  </tr>
</table>
</div>
<iframe id="loader" name="loader" style="visibility:hidden"></iframe>
</body>
</html>