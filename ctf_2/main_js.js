window.oncontextmenu = function(){
 alert('You look more of like a mouse-button person. Use the keyboard. Or enable right click (on all pages) and get 200 points! For free.');
 return false;
}
document.attachEvent('onmousedown',function(event){
 if(event.button == 2){
  alert('You look more of like a mouse-button person. Use the keyboard. Or enable right click (on all pages) and get 200 points! For free.');
  if(event.preventDefault)
	event.preventDefault();
  else
	event.returnValue=false;
 }
 return false;
})

function dispopup(uri){
 window.open('./problems/'+uri+'.php','_blank');
}