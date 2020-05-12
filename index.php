<!DOCTYPE HTML>
<html>
<head>
<meta name="google-site-verification" content="P59h8ZQMBW-Z-SxcCzYKOzqK2z9CW5thQs0hP0voDaE" />
<meta charset="utf-8">
<meta name="description" content="Site pessoal, voltado para a programacao para internet." />
<meta name="keywords" content="programacao,php,javascript,site,web,samuel,caldas,samuel.caldas@gmail.com,email,marketing,criarte,dominio,programador,musica,musico,curriculo" />
<meta name="author" content="Samuel Caldas">
<meta name="robots" content="index, follow" />
<link rel="icon" href="http://icons.iconarchive.com/icons/ampeross/ampola/128/cmd-icon.png" />
<?php
if (isset($_GET['l'])){
	if ($_GET['l']!=''){
		$more=$_GET['l'].'/';
		$link=$_GET['l'];
	}else{
		$more='';
		$link='';
	}
}else{
	$more='';
	$link='';
}
?>
<title>METRO 1.0</title>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" type="text/css" media="screen" />
<link href="typefiles.css" rel="stylesheet" type="text/css">
<style type="text/css">
body,td,th {
	font-family: "Segoe UI";
	color: #FFF;
	font-weight: lighter;
	-webkit-transition: all 50ms;
	-moz-transition: all 50ms;
	-ms-transition: all 50ms;
	-o-transition: all 50ms;
	transition: all 50ms;
}
body {
	background-color: #000;
	margin: 0px;
	padding: 0px;
}
a:link, a:visited, a:hover, a:active {
	text-decoration: none;
	color: #FFF;
}
h1,h2,h3,h4,h5,h6 {
	font-family: "Segoe UI";
	font-weight: lighter;
	text-transform: capitalize;
}
.top{
	display: block;
	height: 100px;
	margin-left: 50px;
}
.top h1{
	font-size: 60px;
	line-height: 100px;
	margin: 0px;
	padding: 0px;
	text-align: left;
	vertical-align: middle;
	display: block;
}
.tiles{
	display: block;
	position: relative;
	width: auto;
	padding-right: 50px;
	padding-left: 50px;
}
.tile{
	word-wrap: break-word;
	display: block;
	float: left;
	height: 120px;
	width: 120px;
	margin: 6px;
	border: 1px solid #FFF;
	background-repeat: no-repeat;
	background-position: center center;
	background-size: contain;
	cursor: default;
	text-shadow: 1px 1px 1px rgba(51,51,51,0.9);
	padding: 4px;
	text-align: left;
	vertical-align: bottom;
}
.largo{
	width: 260px;
}
.tile:hover{
	-moz-box-shadow: 0px 0px 3px 3px rgba(255,255,255,0.5);
	-webkit-box-shadow: 0px 0px 3px 3px rgba(255,255,255,0.5);
	box-shadow: 0px 0px 3px 3px rgba(255,255,255,0.5);
}
iframe, span{
	visibility: hidden;
}
</style>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script type="text/javascript" src="https://raw.github.com/furf/jquery-ui-touch-punch/master/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript">
$(function(){
	$(".tiles").sortable();
	$(".tile").contextmenu(function(e) {
		if(!$(this).hasClass("selecionado")){
			$(this).addClass("selecionado");
		}else{
			$(this).removeClass("selecionado");
		}
        return false;
    });
	$(".tile").resizable({
		handles: "e",
      	grid: 140,
	  	maxHeight: 128,
      	maxWidth: 268,
      	minHeight: 128,
      	minWidth: 128
    });
	$("body").disableSelection(); 
});
</script>
</head>
<body>
<div class="top"><h1>Início <?php echo $link; ?> </h1></div>
<div class="tiles">
<?php
// pega o endereço do diretório
//$diretorio = getcwd(); 
$diretorio = getcwd().'/'.$more;
// abre o diretório
$ponteiro  = opendir($diretorio);
// monta os vetores com os itens encontrados na pasta
while (($nome_itens = readdir($ponteiro))!==false) {
    $itens[] = $nome_itens;
}
// ordena o vetor de itens
sort($itens);
// percorre o vetor para fazer a separacao entre arquivos e pastas 
foreach ($itens as $listar) {
// retira "./" e "../" para que retorne apenas pastas e arquivos
   if ($listar!="." && $listar!=".."){ 
// checa se o tipo de arquivo encontrado é uma pasta
   		if (is_dir($more.$listar)) { // caso VERDADEIRO adiciona o item à variável de pastas
			if(strlen($listar)>11){
				$name=substr($listar, 0, 8).'...';
			}else{
				$name=$listar;
			}
echo'<a href="?l='.$more.$listar.'" class="tile fold">'.$listar.'</a>';
		} else{
				$fileico="ukn";
			switch (substr(strtolower($listar), -4)) {
				case ".php":
					$fileico='largo htm';
				break;
				case ".htm":
					$fileico='htm';
				break;
				case "html":
					$fileico='largo htm';
				break;
				case ".png":
					$fileico="img";
				break;
				case ".jpg":
					$fileico="img";
				break;
				case ".gif":
					$fileico="img";
				break;
				case ".ico":
					$fileico="img";
				break;
				case ".js":
					$fileico="css";
				break;
				case ".txt":
					$fileico="txt";
				break;
				case ".css":
					$fileico="css";
				break;
				case ".doc":
					$fileico="doc";
				break;
				case ".zip":
					$fileico="rar";
				break;
				case ".rar":
					$fileico="rar";
				break;
				case ".mp3":
					$fileico="au";
				break;
				case ".wav":
					$fileico="au";
				break;
				case ".wma":
					$fileico="au";
				break;
				case ".avi":
					$fileico="vd";
				break;
				case ".mpg":
					$fileico="vd";
				break;
				case ".rmv":
					$fileico="vd";
				break;
				case "rmvb":
					$fileico="vd";
				break;
				case ".ini":
					$fileico="txt";
				break;
				case ".xml":
					$fileico="txt";
				break;
			}
			if(strlen($listar)>11){
				$name=substr($listar, 0, 7).'.'.substr($listar, -4);
			}else{
				$name=$listar;
			}
			echo'<a href="'.$more.$listar.'" class="tile '.$fileico.'">'.$listar.'</a>';
		}
   }
}
?>
</div>
</body>
</html>
