<?php
// Por padrão, o Flash envia o arquivo como 'Filedata'
$file = $_FILES['Filedata'];
 
// Onde salvar o arquivo
$arquivo = "uploads/".$file['name'];
 
// Move o arquivo e retorna o resultado para o Flash com o "echo"
echo move_uploaded_file($file['tmp_name'], $arquivo);
?>
