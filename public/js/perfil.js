var d = document;
/* perfil */
var lista = document.getElementById('toggle')
var proyectos = document.getElementById('mis-proyectos')
var x = document.getElementById('x')
var segproyectos = document.getElementById('follow-proyect')
var listdos = document.getElementById('toggle2')
var min = document.getElementById('min')
proyectos.onclick = function(){
  if (lista.style.display = "none") {
    lista.style.display = "block"
  }
}
x.onclick = function(){
  if (lista.style.display = "block") {
    lista.style.display = "none"
  }
}
segproyectos.onclick = function(){
  if (listdos.style.display = "none"){
    listdos.style.display = "block"
  }
}
min.onclick = function(){
  if (listdos.style.display = "block"){
    listdos.style.display = "none"
  }
}
