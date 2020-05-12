<?php
function up($arquivo, $tamanho, $local){
	ini_set('upload_tmp_dir', '/temp/');//Define a pasta temporaria
	if($tamanho==""){$tamanho=1000;};//Define o tamanho máximo da imagem, caso já não esteja definido
    $image = $arquivo['name'];//Guarda na variavél $image o nome completo da imagem (nome+extensão)
	//Verifica se existe alguma imagem para ser importada
    if($image){//Existe uma imagem para ser importada
		$filename = stripslashes($arquivo['name']);//Retira os elementos "/"
		$extension = getExtension($filename);//Verifica qual a extensão do ficheiro
		$extension = strtolower($extension);//Coloca todos os caracteres da extensão com letra minuscula
		//Verifica os formatos de imagem que podem ser importados
        if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "gif") && ($extension != "png")){//Formato diferente dos permitidos 
			echo "<script>alert('Este formato não pode ser importado! Utilize o formato jpg, png ou gif!');</script>";}//Exibir "ERRO"
        else{//Formato permitido
            $size=filesize($arquivo['tmp_name']);//Verifica qual o tamanho da imagem seleccionada
            if ($size > $tamanho*1024){//Verifica se o tamanho é superior a $tamanhokb
            	echo "<script>alert('A imagem nao pode execer o tamanho de ".$tamanho."kb!');</script>";}
            else{//tamanho inferior
                $image_name=time().'.'.$extension;//Gera um nome para a imagem
                $newname=$local."/".$image_name;//Directorio para a qual a imagem será enviada
				require_once( 'canvas.php' );//Inclui a classe de tratamento de imagens
				$tmp_name=$arquivo['tmp_name'];//arquivo temporario 
				list($w, $h) = getimagesize($tmp_name);//Obtem largura e altura
				$x = ($w > $h) ? 640 : 480;//define o tamanho a ser redmencionado
				$img = new canvas();//carrega a classe
				$img->carrega($tmp_name);//abre a foto
				$img->redimensiona($x, '', '');//redmenciona
				$img->grava($newname);//Efectua o upload da imagem para a pasta
                if ($img){ //Verifica se o upload foi efectuado com sucesso
					echo "<script>alert('Upload da imagem foi efectuado com sucesso!');</script>";}			//Upload bem sucessido
                else{echo "<script>alert('Não foi possivél efetuar o upload da imagem!');</script>";}}}}	//Upload mal sucessido
	else{echo "<script>alert('Selecione uma imagem!');</script>";}//Não existe nenhuma imagem para ser importada
	return $newname;
}
?>