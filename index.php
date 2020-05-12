<?php
	@session_start();
	if (isset($_SESSION["nome"])){
		echo("<script language='javascript'>parent.window.location.href='inicio.php' </script>");
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
	function loading(){
		document.getElementById("box").style.visibility="hidden";
		
	};
	<!--
	function fechar(){
	window.opener = window
	window.close("#")}
	// -->
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CPainel - Login</title>
<link href="estilo.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div class="box" id="box">
<div class="titulo">CPainel 3.0<a href="" onClick="fechar();"><div class="close">X</div></a></div>
<div class="box2">
<form action="autentica.php" method="post" target="login">
<label>Nome:  </label>	<input name="nome" type="text" id="nome" size="30" maxlength="20" />
<br />
<label>Senha: </label>	<input name="senha" type="password" id="senha" size="30" maxlength="10" />
<br />
<a onclick="loading();"><input name="Login" type="submit" value="Login" class="btn"/></a>
</form>
</div>
</div>
<iframe name="login" allowtransparency="true" width="0px" height="0px" class="loadframe"></iframe>
</body>
</html>

