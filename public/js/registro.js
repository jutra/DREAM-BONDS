//Acá empieza la validación del registro

// capturo los elementos del formulario

var form = d.querySelector('form'); // formulario

var divErrores = d.getElementById('div-validado'); // div que mostrará los errores

var nombre = d.querySelectorAll('input[type=text]')[0]; // campo nombre

var apellido = d.querySelectorAll('input[type=text]')[1]; // campo apellido

var email = d.querySelector('input[type=email]'); // campo email

var pass = d.querySelectorAll('input[type=password]')[0]; // campo contraseña

var rePass = d.querySelectorAll('input[type=password]')[1]; // campo repetir contraseña(repass)

var file = d.querySelector('input[type=file]'); // campo foto

var roberto = d.querySelector('input[type=submit]'); // input submit
console.log(roberto);

var ul = divErrores.querySelector('ul'); // ul dentro del div errores
var lis = d.createElement('li'); // li que se crea cuando hay algun error

var error = 0;

var texto = new RegExp("[^a-zA-Z]"); // patron de texto
var pEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
var pPass = /^\w+$/;

  nombre.onblur = function(){
    var nameerror=0;
    if(nombre.value.trim() === ""){
    error++;
    nameerror++;
    nombre.style.border = "2px solid red";
    nombre.nextElementSibling.innerText = "El campo nombre no puede estar vacío";
    }
    if(texto.test(nombre.value)){
        nombre.style.border = "2px solid red";
        nombre.nextElementSibling.innerText = "Debe ser texto";
        error++;
        nameerror++;
    }
    if(nameerror == 0){
        nombre.nextElementSibling.innerText = "";
        nombre.style.border = "2px solid #0088eb";
        error = 0;
    }
  }

  apellido.onblur = function(){
    var lastnameerror=0;
    if(apellido.value.trim() === ""){
    error++;
    lastnameerror++;
    apellido.style.border = "2px solid red";
    apellido.nextElementSibling.innerText = "El campo apellido no puede debe vacío";
    }
    if(texto.test(apellido.value)){
        apellido.style.border = "2px solid red";
        apellido.nextElementSibling.innerText = "Debe ser texto";
        error++;
        lastnameerror++;
    }
    if(lastnameerror == 0){
        apellido.nextElementSibling.innerText = "";
        apellido.style.border = "2px solid #0088eb";
        error = 0;
    }
  }


  email.onblur = function(){
    var emailerror=0;
    if(email.value.trim() === ""){
    error++;
    emailerror++;
    email.style.border = "2px solid red";
    email.nextElementSibling.innerText = "El campo email no debe vacío";
    }
    if(!pEmail.test(email.value)){
        email.style.border = "2px solid red";
        email.nextElementSibling.innerText = "Debe ser tipo email";
        error++;
        emailerror++;
    }
    if(emailerror == 0){
        email.nextElementSibling.innerText = "";
        email.style.border = "2px solid #0088eb";
        error = 0;
    }
  }

  pass.onblur = function(){
    var passerror=0;
    if(pass.value.trim() === ""){
    error++;
    passerror++;
    pass.style.border = "2px solid red";
    pass.nextElementSibling.innerText = "El campo contraseña no puede debe vacío";
    }
    if(pPass.test(pass.value)){
        pass.style.border = "2px solid red";
        pass.nextElementSibling.innerText = "Debe ser alfanumerica";
        error++;
        passerror++;
    }
    if(passerror == 0){
        pass.nextElementSibling.innerText = "";
        pass.style.border = "2px solid #0088eb";
        error = 0;
    }
  }

  rePass.onblur = function(){
    var repasserror=0;
    if(rePass.value.trim() === ""){
    error++;
    repasserror++;
    rePass.style.border = "2px solid red";
    rePass.nextElementSibling.innerText = "El campo confirmar contraseña no puede estar vacío";
    }
    if(rePass.value !== pass.value){
        rePass.style.border = "2px solid red";
        rePass.nextElementSibling.innerText = "Las contraseñas no  coinciden";
        error++;
        repasserror++;
    }
    if(repasserror == 0){
        rePass.nextElementSibling.innerText = "";
        rePass.style.border = "2px solid #0088eb";
        error = 0;
    }
  }

file.onblur = function(){
  var fileerror = 0;
  var ext = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
  if(!ext.test(file.value)){
      file.style.border = "2px solid red";
      file.nextElementSibling.innerText = "El formato debe ser jpg, jpeg o png";
      file.value = '';
      error++;
      fileerror++;
  }if(fileerror == 0){

    file.style.border = "2px solid #0088eb";
    file.nextElementSibling.innerText = ""
    error = 0;
  }

roberto.onsubmit=function(e){
  if (error > 0){
    e.preventDefault();
  }
}
}
