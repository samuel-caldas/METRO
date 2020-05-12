// JavaScript Document
function load() {document.getElementById('show').style.visibility = 'visible'};

window.addEvent('domready',function(){$.localScroll.defaults.axis='x';$.localScroll();jQuery('#accordion').accordion({autoHeight:false,active: false,event: 'mouseover',animated: "bounceslide"});$("a[rel^='prettyPhoto']").prettyPhoto();document.addEvent('mousewheel',function(event){event=new Event(event);if(event.wheel>0){$(window).scrollTop(0);$.scrollTo('-=100px',0);$(window).scrollTop(0)}else if(event.wheel<0){$(window).scrollTop(0);$.scrollTo('+=100px',0);$(window).scrollTop(0)}})});