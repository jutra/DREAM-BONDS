var form = d.querySelector('form'); // formulario

var lnombre = d.getElementById('label-name'); // Etiqueta del nombre proyecto

var nombrepro = d.querySelectorAll('input[type=text]')[0]; // campo nombre del proyecto

var ldescripcion = d.getElementById('label-desc'); // Etiqueta de la descripcion del proyecto

var descripcion = d.querySelectorAll('textarea')[0]; // campo Descripcion del proyecto

var lobj = d.getElementById('label-obj'); // Etiqueta de los objetivos del proyecto

var objetivos = d.querySelectorAll('textarea')[1]; // campo Objetivos del proyecto

var lneeds = d.getElementById('label-needs'); // Etiqueta de los requerimientos del proyecto

var needs = d.querySelectorAll('input[type=text]')[1]; // campo requerimentos del proyecto

var btnCrear = d.getElementById('create-proyect'); // Agarramo el boton para crear
var labele = d.getElementById('error-from');

var error = true;  // booleano para validar el boton final
var puerta1 = 2;
var puerta2 = 2;
var puerta3 = 2;
var puerta4 = 2;
function puertamaestra(){
  var resultado = puerta1+puerta2+puerta3+puerta4;
  return resultado;
}
btnCrear.onclick = function(e) {
  if (puertamaestra()) {
    e.preventDefault();
    labele.innerHTML = " Por favor llena todos los campos y vuelve a intentarlo"
    labele.style.align = "center"
    labele.style.color = "#d52626";
    if (puerta1 == 2) {
      nombrepro.style.border = "2px solid #d52626";
      lnombre.style.color = "#d52626";
      lnombre.innerHTML = " El campo nombre del proyecto no puede estar vacío";
      lnombre.className = "ion-close-round";
    }
    if (puerta2 == 2) {
      descripcion.style.border = "2px solid #d52626";
      ldescripcion.style.color = "#d52626";
      ldescripcion.innerHTML = " La descripción del proyecto no puede estar vacía";
      ldescripcion.className = "ion-close-round";
    }
    if (puerta3 == 2) {
        objetivos.style.border = "2px solid #d52626";
        lobj.style.color = "#d52626";
        lobj.innerHTML = " Los objetivos del proyecto no pueden estar vacíos";
        lobj.className = "ion-close-round";
    }
    if (puerta3 == 2) {
    needs.style.border = "2px solid #d52626";
    lneeds.style.color = "#d52626";
    lneeds.innerHTML = " Los objetivos del proyecto no pueden estar vacíos";
    lneeds.className = "ion-close-round";
    }

  }else {
    d.getElementById('prform').submit();
  }
}


  nombrepro.onclick = function(){
    nombrepro.id = "focusin"
  }
  nombrepro.onblur = function(){
    nombrepro.id = ""
  }
  // Y aqui Caballeros... es donde comienza la magia
  nombrepro.addEventListener("input", valNombre);

  function valNombre() {
      if(nombrepro.value.length == 0){
        nombrepro.style.border = "2px solid #d52626";
        lnombre.style.color = "#d52626";
        lnombre.innerHTML = " El campo nombre del proyecto no puede estar vacío";
        lnombre.className = "ion-close-round";
        puerta1 = 2;
    } else if (nombrepro.value.length < 5 && nombrepro.value.length > 0 && nombrepro.value.length < 50) {
        nombrepro.style.border = "1px solid #ff8200";
        lnombre.style.color = "#ff8200";
        lnombre.innerHTML = " El campo nombre del proyecto debe tener mas de 5 caracteres";
        lnombre.className = "ion-alert-circled";
        puerta1 = 1;
    } else {
      nombrepro.style.border = "solid 0.5px #c6c6c6";
      lnombre.style.color = "#0bbd63";
      lnombre.innerHTML =" Elige un nombre para tu proyecto";
      lnombre.className = "ion-checkmark-round";
      puerta1 = false;
      }
  }

  // lo de antes pero con el siguiente input

  descripcion.onclick = function(){
    descripcion.id = "focusin"
  }
  descripcion.onblur = function(){
    descripcion.id = ""
  }

  descripcion.addEventListener("input",valDescripcion)
  function valDescripcion(){
    if(descripcion.value.length == 0){
      descripcion.style.border = "2px solid #d52626";
      ldescripcion.style.color = "#d52626";
      ldescripcion.innerHTML = " La descripción del proyecto no puede estar vacía";
      ldescripcion.className = "ion-close-round";
      puerta2 = 2;
  } else if (descripcion.value.length < 50 && descripcion.value.length > 0 ) {
      descripcion.style.border = "1px solid #ff8200";
      ldescripcion.style.color = "#ff8200";
      ldescripcion.innerHTML = " El campo descripción del proyecto debe tener mas de 50 caracteres";
      ldescripcion.className = "ion-alert-circled";
      puerta2= 1;
  } else {
    descripcion.style.border = "solid 0.5px #c6c6c6";
    ldescripcion.style.color = "#0bbd63";
    ldescripcion.innerHTML =" Descripcion del proyecto";
    ldescripcion.className = "ion-checkmark-round";
    puerta2 = false;
    }
  }

  //debo explicarlo nuevamente?

  objetivos.onclick = function(){
    objetivos.id = "focusin"
  }
  objetivos.onblur = function(){
    objetivos.id = ""
  }

  objetivos.addEventListener("input",valObjetivos)
  function valObjetivos(){
    if(objetivos.value.length == 0){
      objetivos.style.border = "2px solid #d52626";
      lobj.style.color = "#d52626";
      lobj.innerHTML = " Los objetivos del proyecto no pueden estar vacíos";
      lobj.className = "ion-close-round";
      puerta3 = 2;
  } else if (objetivos.value.length < 50 && objetivos.value.length > 0 ) {
      objetivos.style.border = "1px solid #ff8200";
      lobj.style.color = "#ff8200";
      lobj.innerHTML = " El campo objetivos del proyecto debe tener mas de 50 caracteres";
      lobj.className = "ion-alert-circled";
      puerta3 = 1;
  } else {
    objetivos.style.border = "solid 0.5px #c6c6c6";
    lobj.style.color = "#0bbd63";
    lobj.innerHTML =" Descripcion del proyecto";
    lobj.className = "ion-checkmark-round";
    puerta3 = false;
    }
  }
  // a que quedo bonito!!! verdad?
  needs.onclick = function(){
    needs.id = "focusin"
  }
  needs.onblur = function(){
    needs.id = ""
  }

  needs.addEventListener("input",valNeeds)
  function valNeeds(){
    if(needs.value.length == 0){
      needs.style.border = "2px solid #d52626";
      lneeds.style.color = "#d52626";
      lneeds.innerHTML = " Los objetivos del proyecto no pueden estar vacíos";
      lneeds.className = "ion-close-round";
      puerta4 = 2;
  } else if (needs.value.length < 10 && needs.value.length > 0 ) {
      needs.style.border = "1px solid #ff8200";
      lneeds.style.color = "#ff8200";
      lneeds.innerHTML = " El campo habilidades requeridas debe tener mas de 10 caracteres";
      lneeds.className = "ion-alert-circled";
      puerta4 = 1;
  } else {
    needs.style.border = "solid 0.5px #c6c6c6";
    lneeds.style.color = "#0bbd63";
    lneeds.innerHTML =" Descripcion del proyecto";
    lneeds.className = "ion-checkmark-round";
    puerta4 = false;
    }
  }
