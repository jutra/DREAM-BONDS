var d = document;
var p = d.querySelectorAll('p');
var body = d.querySelector('body');
var select = d.querySelector("select");
var header = d.querySelector('header'); // header
var dream = d.querySelectorAll('a'); // logo
var a = d.querySelectorAll('a'); // obtengo todos los a
var loginjs = d.getElementById('loginjs'); // a de iniciar sesion
var regjs = d.getElementById('regjs'); // a de registro
var buscah2 = d.querySelectorAll('h2'); // todos los h2
var articles = d.querySelectorAll('article'); // todos los article
var p = d.querySelectorAll('p'); // todos los p
var divProyectos = d.querySelector('.proyectos');
var lupita = d.querySelector('.ion-ios-search-strong');
var inputBuscar = d.querySelector('.campo-buscar');
var seguirProyecto = d.querySelectorAll('.ion-person-add');
var bonds = d.querySelectorAll('span')[0];
var bizzarro = d.getElementById('bizzarro');
var footer = d.querySelector('footer');
var pFooter = d.querySelector('.footer-links');
var aFooter = pFooter.querySelectorAll('a');
var dreambondsR = d.querySelector('.footer-left');
var Adreambonds = dreambondsR.querySelector('p');
var copy = d.getElementById('copyright');

    select.onchange = function(){
        if(select.selectedIndex == 0){
          header.style.background = "#ffffff";
          bonds.style.color = "#5383d3";
          dream[0].style.color = "#ffffff";
          a.forEach(function(value) {
              value.style.color = "#5c616a";
          });
          loginjs.style.background = "#000"
          loginjs.style.color = "#ffffff";
          regjs.style.background = "#000"
          regjs.style.color = "#ffffff";
          bizzarro.style.color = "#000000";
          buscah2.forEach(function(value) {
              value.style.color = "#000000";
          });
          articles.forEach(function(value) {
              value.style.backgroundColor = "#ffffff";
              value.style.border = "1px solid #5383d3";
          });
          p.forEach(function(value) {
              value.style.color = "#000000";
          });
          seguirProyecto.forEach(function(value) {
              value.style.color = "#5383d3";
          });
          lupita.style.backgroundColor = "#5383d3";
          inputBuscar.onfocus = function(){
            inputBuscar.style.border = "2px solid #5383d3";
          }
          footer.style.backgroundColor = "#000000";

          aFooter.forEach(function(value) {
              value.style.color = "#ffffff";
          });
          copy.style.color = "#8f9296";
        }
        else if(select.selectedIndex == 1){ // BLACK THEME
      	    header.style.background = "black";
            dream[0].style.color = "white";
            bonds.style.color = "#5383d3";
            a.forEach(function(value) {
                value.style.color = "white";
            });
            loginjs.style.background = "#ffffff"
            loginjs.style.color = "#000";
            regjs.style.background = "#ffffff"
            regjs.style.color = "#000";
            buscah2.forEach(function(value) {
                value.style.color = "#ffffff";
            });
            bizzarro.style.color = "#000000";
            articles.forEach(function(value) {
                value.style.backgroundColor = "#000";
                value.style.color = "#ffffff";
                value.style.border = "1px solid #5383d3";
            });
            p.forEach(function(value) {
                value.style.color = "#ffffff";
            });
            seguirProyecto.forEach(function(value) {
                value.style.color = "#ffffff";
            });
            lupita.style.backgroundColor = "#000";
            inputBuscar.onfocus = function(){
              inputBuscar.style.border = "2px solid black";
            }
            footer.style.backgroundColor = "#000000";
            aFooter.forEach(function(value) {
                value.style.color = "#ffffff";
            });
            copy.style.color = "#8f9296";
          }
        else if(select.selectedIndex == 2){ // BIZZARRO THEME
          header.style.background = "#ff0000";
          bonds.style.color = "#ffeb00";
          // #ffeb00
          a.forEach(function(value) {
              value.style.color = "#ffffff";
          });
          loginjs.style.background = "#ffffff"
          loginjs.style.color = "#000";
          regjs.style.background = "#ffffff"
          regjs.style.color = "#000";

          buscah2.forEach(function(value) {
              value.style.color = "#ffeb00";
          });
          bizzarro.style.color = "#ff0000";
          articles.forEach(function(value) {
              value.style.backgroundColor = "#ff0000";
              value.style.border = "1px solid #ffeb00";
          });
          p.forEach(function(value) {
              value.style.color = "#ffeb00";
          });
          seguirProyecto.forEach(function(value) {
              value.style.color = "#ff0000";
          });
          lupita.style.backgroundColor = "#ff0000";
          inputBuscar.onfocus = function(){
            inputBuscar.style.border = "2px solid #ff0000";
          }

          footer.style.backgroundColor = "#ff0000";
          }
      }
