// JavaScript Document
function sel(act){ //cancela a selecao
// 	target=document.getElementsByTagName("body").item(0);
	target=document.getElementById('body');
	target.style.cursor = "default";
	if (!act) {
		if (typeof target.onselectstart!="undefined") {//IE route
			target.onselectstart=function(){return false;}
		} else if (typeof target.style.MozUserSelect!="undefined") {//Firefox route
			target.style.MozUserSelect="none";
		} else {//All other route (ie: Opera)
			target.onmousedown = function() { return false; }
		}
	} else {
		if (typeof target.onselectstart != "undefined") {//IE route
			target.onselectstart = function() { return true; }
		} else if (typeof target.style.MozUserSelect != "undefined") {//Firefox route
					target.style.MozUserSelect = "none";
		} else {//All other route (ie: Opera)
			target.onmousedown = function() { return true; }
		}
	}
}
function rigbtn(){
var mensagem="";
function clickIE() {
	if (document.all){
		(mensagem);return false;
	}
}
function clickNS(e) {
	if(document.layers||(document.getElementById&&!document.all)) {
		if (e.which==2||e.which==3) {
			(mensagem);
			return false;
		}
	}
}
if (document.layers){
	document.captureEvents(Event.MOUSEDOWN);
	document.onmousedown=clickNS;
}else{
	document.onmouseup=clickNS;
	document.oncontextmenu=clickIE;
}
document.oncontextmenu=new Function("return false");
}
//-------------------------------------------------------------------
function chusr(img,nome,login){
	if (img==''){
		document.getElementById('usrimg').src='temas/metro/usrimg.png';
	} else {
		document.getElementById('usrimg').src='usrimg/'+img;
	}
	document.getElementById('usrnm').innerHTML=nome;
	document.getElementById('nome').value=login;
}
//-------------------------------------------------------------------
function usnmt(){
	if (document.getElementById('nome').value=='' || document.getElementById('nome').value==null){
		document.getElementById('senha').value='';
		return false
	}
}
//-------------------------------------------------------------------
function vis(obj,vis){
	if (vis==1){
		opt='visible';
	} else if (vis==0){
		opt='hidden';
	}
	document.getElementById(obj).style.visibility=opt;
}
//-------------------------------------------------------------------
function loading(){
	vis('usrpass',0);
	vis('classlog',0);
	vis('usrs',0);
	vis('claslog',0);
	vis('loading',1);
}
//-------------------------------------------------------------------
function erro(){
	vis('usrpass',1);
	vis('usrs',1);
	vis('loading',0);
	vis('erro',1);
}
//-------------------------------------------------------------------
function classlog(){
	vis('usrs',0);
	vis('imgusr',0);
	vis('usrnm',0);
	vis('claslog',0);
	vis('classlog',1);
}
function uclasslog(){
	vis('usrs',1);
	vis('imgusr',1);
	vis('usrnm',1);
	vis('claslog',1);
	vis('classlog',0);
}
