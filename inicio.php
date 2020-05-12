<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cpainel 3 - Início</title>
<link href="estilo.css" rel="stylesheet" type="text/css" />
<script>
function AbreAba(a){
	var b=document.getElementsByTagName('li').length;
	for(var i=1;i<b+1;i++){
		c="div"+i;
		d="td"+i;
		document.getElementById(c).style.display="none";
		document.getElementById(d).style.backgroundColor="";
		document.getElementById(c).className="div";
			if(c==a){
				document.getElementById(a).style.display="block";
				document.getElementById(d).style.backgroundColor="#999";
			}
		
	}

}
$(function(){
$("#data").datepicker();
});
</script>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/base/jquery-ui.css" type="text/css" media="all" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js" type="text/javascript"></script>
</head>
<body onLoad="AbreAba('div1');">
<?php
require_once("funcoes/funcoes.php");
require_once("funcoes/conectar.php");
	session_cache_expire(10);
	@session_start();
	if (isset($_SESSION["nome"])){
	$nome=$_SESSION["nome"];
	$permissao=$_SESSION["permissao"];
		if ($permissao==1){
			$permissao="adiministrador";
		}	else if ($permissao==2){
			$permissao="moderador";
		}	else {
			$permissao="usuario";
		}
	if (!isset($_SESSION["nome"])){
		echo("
		<script type='text/javascript'>
			document.bgColor='#FF0000';
			window.alert('Você nao está logado. Efetue o login para ter acesso &agrave; p&aacute;gina.');
			parent.window.location.href='index.php';
		</script>");
	}
?>
<div class="menu">
		<ul>
			<li>
           	  <div id="pai1" ><a href="#" onClick="AbreAba('div1')">NOT&Iacute;CIAS</a></div>
            	<ul>
                	<li id="td1" class="1"><a href="#" onClick="AbreAba('div1')">Nova notícia</a></li>
                  	<li id="td2" class="1"><a href="#" onClick="AbreAba('div2')">Editar notícia</a></li>
                </ul>
            </li>
            <li>
              <div id="pai2"><a href="#" onClick="AbreAba('div3')">FOTO E V&Iacute;DEO</a></div>
            	<ul>
               	  <li id="td3" class="2"><a href="#" onClick="AbreAba('div3')">FOTOS</a></li>
                  <li id="td4" class="2"><a href="#" onClick="AbreAba('div4')">VIDEOS</a></li>
                </ul>
          </li>
            <li>
              <div id="pai3"><a href="#" onClick="AbreAba('div5')">GALERIA DE PREFEITOS</a></div>
            	<ul>
               	  <li id="td5" class="3"><a href="#" onClick="AbreAba('div5')">PREFEITO ATUAL</a></li>
                  <li id="td6" class="3"><a href="#" onClick="AbreAba('div6')">OUTROS PREFEITOS</a></li>
                </ul>
            </li>
            <li class="sair">
            	<div id="pai4"><a href="#">▼</a></div>
                <ul>
                	<li id="td6" class="4"><a href="#" onClick="AbreAba('div7')">Listar Usu&aacute;rios</a></li>
                    <li id="td7" class="4"><a href="#" onClick="AbreAba('div8')">Editar Usu&aacute;rio</a></li>
                    <li><a href="sair.php">SAIR</a></li>
                </ul>
            </li>
		</ul>
</div>
<div class="conteudo">
<div id="div1">
<h1>Nova Not&iacute;cia</h1>
<form action="add.php" method="post" target="load">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="13%" align="right" valign="middle"><strong>Título:&nbsp; </strong></td>
    <td align="left" valign="middle"><strong>
      <input type="text" name="titulo" id="titulo" />
    </strong></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><strong>Data:&nbsp; </strong></td>
    <td align="left" valign="middle"><strong>
      <input type="text" name="data" id="data" />
    </strong></td>
  </tr>
  <tr>
    <td align="right" valign="top"><strong>Resumo:&nbsp; </strong></td>
    <td align="left" valign="middle"><strong>
      <textarea name="resumo" cols="80" rows="15" id="resumo"></textarea>
    </strong></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><strong>Autor:&nbsp; </strong></td>
    <td align="left" valign="middle"><strong>
      <input type="text" name="autor" id="autor" />
    </strong></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><strong>Galeria:&nbsp; </strong></td>
    <td align="left" valign="middle"><strong>
      <select name="galeria" id="galeria">
        <option value="slide">Slider</option>
        <option value="thumb">Top 10</option>
        <option value="nenhuma" selected="selected">Nenhuma</option>
      </select>
    </strong></td>
    </tr>
  <tr>
    <td align="right" valign="top"><strong>Notícia:&nbsp; </strong></td>
    <td valign="middle"><strong>
      <textarea name="mensagem" cols="80" rows="20" id="mensagem"></textarea>
    </strong></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="middle"><strong>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" name="button" id="button" value="Publicar" />
    </strong></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="middle">&nbsp;</td>
  </tr>
</table>
<input name="tipo" type="hidden" value="noticia" />
</form>
</div>
<div id="div2">
<h1>Editar Not&iacute;cia</h1>
<?php
$noticias= MYSQL_QUERY("select * from cpnoticias order by data DESC") or die(mysql_error());
while ($conteudo = mysql_fetch_row($noticias)){
$sql=MYSQL_QUERY("select * from cpimagens where capa='s' and id='".$conteudo[0]."'") or die(mysql_error());
$imagem = mysql_fetch_row($sql);
$data=$conteudo[1][8].$conteudo[1][9]."/".$conteudo[1][5].$conteudo[1][6]."/".$conteudo[1][0].$conteudo[1][1].$conteudo[1][2].$conteudo[1][3];
if ($conteudo[7]="thumb"){$galeria="Top 10";} 
elseif ($conteudo[7]="slide"){$galeria="Slider";} 
elseif ($conteudo[7]="nenhuma"){$galeria="Nenhuma";}
  ?>
    	<table border='0' cellspacing='0' cellpadding='0'>
          <tr>
            <td align='center' valign='middle'>
			<table border='0' cellspacing='0' cellpadding='0'>
			  <tr>
				<td align='center' valign='middle' width='15px' height='5px'>&nbsp;</td>
				<td align='center' valign='middle'>&nbsp;</td>
				<td align='center' valign='middle' width='15px' height='5px'>&nbsp;</td>
			  </tr>
			  <tr>
				<td align='center' valign='middle'>&nbsp;</td>
				<td align='center' valign='middle'>
				<img src='../<?php echo($imagem[3]); ?>' height='150' alt='' />
				</td>
				<td align='center' valign='middle'>&nbsp;</td>
			  </tr>
			  <tr>
				<td align='center' valign='middle' width='15px' height='5px'>&nbsp;</td>
				<td align='center' valign='middle'>&nbsp;</td>
				<td align='center' valign='middle' width='15px' height='5px'>&nbsp;</td>
			  </tr>
			</table>
			</td>
          </tr>
          <tr>
            <td align='center' valign='middle'><h5><?php echo($conteudo[2]); ?></h5></td>
          </tr>
		 <tr>
            <td align='center' valign='middle'>
<a href='addimg.php'><img src='imagens/adicionar.png' width='27' height='27' alt='Adicionar imagens' /></a>
<a href='editnoticia.php?cd=".$conteudo[0]."'><img src='imagens/editar.png' width='27' height='27' alt='Editar notícia' /></a>
<a href='delete.php'><img src='imagens/excluir.png' width='27' height='27' alt='Excluir notícia' /></a>
			</td>
          </tr>
          <tr>
            <td align='center' valign='middle'><b><?php echo($data); ?></b></td>
          </tr>
          <tr>
            <td align='center' valign='middle'><b><?php echo($conteudo[4]); ?></b></td>
          </tr>
          <tr>
            <td align='center' valign='middle'><?php echo($galeria); ?></td>
          </tr>
        </table>
    </td>
	<?php
};
?>

</div>
<div id="div3">
<h1>Fotos</h1>
</div>
<div id="div4">
<h1>Video</h1>
</div>
<div id="div5">
<h1>PREFEITO ATUAL</h1>
<?php
		$sql = "SELECT * FROM prefeito where atual='s'";
		$dados= MYSQL_QUERY($sql) or die(mysql_error());
		$campo = mysql_fetch_row($dados)
?>
<form action='add.php' method='post' name='prefeito'>
<input name="tipo" type="hidden" value="prefeito" />
<table border='0' cellspacing='0' cellpadding='0' align="center">
  <tr>
    <td width="25%" align='center' valign='middle'>Nome: &nbsp;</td>
    <td width="25%" align='right' valign='middle'><input name='nome' type='text' id='nome' value="<?php echo $campo[1]; ?>" /></td>
    <td width="25%" align='left' valign='middle'></td>
    <td width="25%" align='center' valign='middle'><label for='nome'></label></td>
  </tr>
  <tr>
    <td align='right' valign='middle'>Início da candidatura: &nbsp;</td>
    <td align='left' valign='middle'><input name='inicio' type='text' id='data' value="<?php echo $campo[2]; ?>" /></td>
    <td align='right' valign='middle'>¨Termino da candidatura: &nbsp;</td>
    <td align='left' valign='middle'><input name='fim' type='text' id='data2' value="<?php echo $campo[3]; ?>" /></td>
  </tr>
  <tr>
    <td colspan='4' align='center' valign='middle'><h2>Sobre o prefeito:</h2></td>
  </tr>
  <tr>
    <td colspan='4' align='center' valign='middle'><textarea name="txt" cols="100" rows="30" id="txt"><?php echo $campo[4]; ?></textarea></td>
  </tr>
  <tr>
    <td colspan='4' align='center' valign='middle'><input type='submit' name='button' id='button' value='Enviar' /></td>
  </tr>
</table>
</form>
</div>
<div id="div6">
<h1>OUTROS PREFEITOS</h1>
</div>

<div id="div7">
<h1>LISTAR USU&Aacute;RIOS</h1>
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
</div>
<div id="div7">
<h1>EDITAR USU&Aacute;RIOS</h1>
</div>
</div>
<?php
}
	else{
		echo("
		<script type='text/javascript'>
			window.alert('Você nao está logado. Efetue o login para poder ver isso.');
			parent.window.location.href='index.php';
		</script>");
	}
?>
<iframe name="load" allowtransparency="true" width="0px" height="0px" class="loadframe"></iframe>
</body>
</html>
