var d = document;

    var pLogin = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    var loginMail =
    d.getElementById('logMail');

    loginMail.onblur = function(){
      var logEmailerror=0;
      if(loginMail.value.trim() === ""){
      error++;
      logEmailerror++;
      loginMail.style.border = "2px solid red";
      loginMail.nextElementSibling.innerText = "El campo email no puede debe vacío";
      }
      if(!pLogin.test(logMail.value)){
          loginMail.style.border = "2px solid red";
          loginMail.nextElementSibling.innerText = "Debe ser tipo email";
          error++;
          logEmailerror++;
      }
      if(logEmailerror == 0){
          loginMail.nextElementSibling.innerText = "";
          loginMail.style.border = "2px solid #0088eb";
          error = 0;
      }
    }

    var loginPass = d.getElementById('logPass');
    var loginTexto = new RegExp("[^a-z]");

    loginPass.onblur = function(){
      var logPasserror=0;
      if(loginPass.value.trim() === ""){
      error++;
      logPasserror++;
      loginPass.style.border = "2px solid red";
      loginPass.nextElementSibling.innerText = "El campo apellido no debe vacío";
      }
      if(loginTexto.test(loginPass.value)){
          loginPass.style.border = "2px solid red";
          loginPass.nextElementSibling.innerText = "Debe ser texto";
          error++;
          logPasserror++;
      }
      if(logPasserror == 0){
          loginPass.nextElementSibling.innerText = "";
          loginPass.style.border = "2px solid #0088eb";
          error = 0;
      }
    }
