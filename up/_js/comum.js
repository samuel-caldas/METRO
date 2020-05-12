// Recebe um objeto com os arquivos selecionados e suas informações
function adicionaArquivos(arquivos)
{
	// Número de arquivos selecionados
	var num = arquivos.length;

	// Faz o loop para mostrar todos os arquivos na página
	for (var i = 0; i < num; i++)
	{
		// Arquivo atual
		var arq = arquivos[i];

		// id do arquivo para manter referência com o Flash
		var id = arq.id;

		// Exibir no máximo 32 caractéres no nome do arquivo
		var nome = (arq.nome.length > 32) ? arq.nome.substring(0, 29) + "..." : arq.nome;

		// Adiciona uma div com o nome do arquivo na div "#arquivos" e cria a barra de progresso
		$('<div class="arquivo"><label>'+nome+':</label></div>').appendTo("#arquivos")
			.append($('<span id="upload_'+id+'" />').progressBar({ barImage: 'images/progressbg_green.gif' }));
	}
}

function progresso(id, valor)
{
	// Atualiza a porcentagem da barra de progresso
	$("#upload_"+id).progressBar(valor);
}

function uploadFinalizado()
{
	$("body").append('<div>Todos os arquivos foram enviados.</div>');
}
