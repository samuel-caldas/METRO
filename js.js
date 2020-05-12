// JavaScript Document
	(function logo(imagem,x,y)
		{
				var wimg = document.getElementById(imagem).width;
				var himg = document.getElementById(imagem).height;
				var wtela = window.innerWidth;
				var htela = window.innerHeight;
				var wf = ((wtela-wimg)/x);
				var hf= ((htela-himg)/y);
				document.getElementById(imagem).style.top=hf+'px';
				document.getElementById(imagem).style.left=wf+'px';
		})();;