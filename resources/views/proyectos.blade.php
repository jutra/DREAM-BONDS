@extends('layouts.App')
@section('estructura')
  <div class="proyectos-container">
            <h2>Crea tu proyecto</h2>

            <form class="form_proyecto" action="" method="post" id="prform">
              {{ csrf_field() }}
                <h3 id="fading">Contanos cuales son tus ideas!!!</h3>
                <label id="label-name">Elige un nombre para tu proyecto</label>
                <input type="text" name="name-proyect" value="" placeholder="Ej: DREAMBONDS" id="fading">
                <label id="label-desc">¿Sobre que trata este proyecto?</label>
                <textarea class="textarea" rows="4" cols="50" name="descripcion-proyect" form="prform" placeholder="Ej: Desarrollo de Videojuego" id="fading"></textarea>
                <label id="label-obj">Describe tus objetivos a corto y largo plazo</label>
                <textarea class="textarea" rows="4" cols="50" name="objetivos-proyect" form="prform" placeholder="Ej: tener un millon de amigos" id="fading"></textarea>
                <label id="label-needs">¿Que habilidades necesitas?</label>
                <input type="text" name="needs-proyect" value="" placeholder="Desarrolador C#, Diseñador, Tester" id="fading">
                <label id="error-from"></label>
                <input type="submit" name="" value="Crear Proyecto" id="create-proyect">
            </form>
        </div>
@endsection
