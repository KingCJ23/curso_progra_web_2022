function mostraralerta(){
    alert('se hiszo clic en el titulo desde una funcion de javascript');
}
function mostraMensaje(){
    alert('hizo clic');
}
function hacerclic(){
    var click=document.getElementById("logo")[0].onclick=mostraMensaje();
}

function hacerClick2(){
    var elemento=document.getElementById('parrafoConClick');
    elemento.addEventListener('click',mostraMensaje, false);
}
function poscicion(){
    alert('no olvides poner un comentario');
}

function posicion2(){
    var pos=document.getElementById('SubtituloPri');
    pos.addEventListener('onmouseover',poscicion, false);
}
window.onload=hacerclic();
window.addEventListener('load',poscicion2, false);