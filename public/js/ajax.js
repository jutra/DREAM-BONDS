// Función AjaxCall Genérica

function ajaxCall (url, callbackFunction) {

	var myAjax = new XMLHttpRequest();



	myAjax.onreadystatechange = function () {

		if (this.readyState === 4 && this.status === 200) {

			var resultado = JSON.parse(this.responseText);

			callbackFunction(resultado.contenido);

		}

	};

	myAjax.open('GET', url);


	myAjax.send();

}



var urlPaises = 'http://pilote.techo.org/?do=api.getPaises';

var urlRegiones = '  http://pilote.techo.org/?do=api.getRegiones?idPais=';


// 1er llamada para el combo de países

ajaxCall(urlPaises, getPaises);



// Función para el combo de paises

function getPaises (resultado) {

	var comboPaises = document.getElementById('paises');



	for (var x in resultado) {

		var option = document.createElement('option');

		option.innerText = x;

		option.value = resultado[x];

		comboPaises.appendChild(option);

	 comboPaises.value = "";


	}

	comboPaises.onchange = function () {

		ajaxCall(urlRegiones + this.value, getProvincias);
		var comboProvincias = document.getElementById('provincias');

		if(this.value == 1){
			comboProvincias.style.display = "block";
		} else {
			comboProvincias.style.display = "none";
		}

		// Vaciar  el combo de provincias si tiene hijos



		if (comboProvincias.hasChildNodes()) {

			comboProvincias.innerHTML = '';
		}
	};
}

// Función para el combo de provincias

function getProvincias (resultado) {

	var comboProvincias = document.getElementById('provincias');

	var option = document.createElement('option');

	option.innerText = 'Elegí una provincia';

	option.value = 0;

	comboProvincias.appendChild(option);



	for (var x in resultado) {

		var option = document.createElement('option');

		option.innerText = x;

		option.value = resultado[x];

		comboProvincias.append(option);

	}

}
