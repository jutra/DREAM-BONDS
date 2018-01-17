@extends('layouts.app')
@section('estructura')
<?php use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
?>
  <div class="container-perfil">
        <section class="container-fotoperfil">
          {{-- <li class="perfil-name">Fernando Colorado Deibe</li> --}}
          <img class="foto-perfil" src="css/empresario_off.png" alt="Foto de perfil">
          <ul class="datos-perfil">
<?php $u = Auth::user();
if ($proyects) {
  $pt=0;
  foreach ($proyects as $key => $value) {
    if ($value->deleted_at==null) {
      $pt=$pt+1;
    }
  }
}
?>


            <li><?php echo "$u->name"; ?></li>
            <li><?php echo "$u->lastname"; ?></li>
            <li><?php echo "$u->email"; ?></li>

            <ul class="follow-perfil">
              <li><span><?php echo "$pt"; ?></span>Proyectos actuales</li>
            </ul>
          </ul>
          <section class="proyectx">
            <h3 id="mis-proyectos">Mis Proyectos </h3>
                <article class="toggle">
                    <!-- <span id="x">CERRAR</span> -->


<?php
if ($proyects) {


foreach ($proyects as $key => $p) {
if ($p->deleted_at== null): ?>



                    <ul>
                      <li><a href="#" id="main-proyect"><?php  echo "$p->name"; ?></a></li>
                      <!-- <h2 id="progress">Participantes: <span>10</span></h2> -->
                      <form action="{{route('borrado', $p->id)}}" method="post">
                      {{ csrf_field() }}
                      {{method_field("DELETE")}}
                      <h3 class="descripsao">Descripcion del proyecto:</h3>
                      <div>
                        <p> <?php  echo "$p->description";  ?> </p>
                        <h4>Objetivos del Proyecto:</h4>
                        <p><?php echo"$p->objetive"; ?></p>
                        <h4>Requerimientos Del proyecto:</h4>
                        <p><?php echo"$p->needs"; ?></p>
                      </div>
                      <button class="delete-btn" type="submit" name="button">Eliminar</button>
                      </form>
                    </ul>
                    <hr>
                    <section class="solicitudes-pendientes">
                      <h3>Solicitudes Pendientes Para el Proyecto: </h3>
                      <ul>
                        <button type="button" name="button" class="ion-checkmark-round"> Confirmar Todos</button>
                        <button type="button" name="button" class="ion-close-round"> Rechazar Todos</button>
                        <li>Juan Quiere Participar en tu proyecto<button type="button" name="button" class="ion-checkmark-round"></button><button type="button" name="button" class="ion-close-round"></button></li>
                        <li>Gonzalo Quiere Participar en tu proyecto<button type="button" name="button" class="ion-checkmark-round"></button><button type="button" name="button" class="ion-close-round"></button></li>
                        <li>Alan Quiere Participar en tu proyecto<button type="button" name="button" class="ion-checkmark-round"></button><button type="button" name="button" class="ion-close-round"></button></li>
                      </ul>
                    </section>
<?php endif;}  } ?>



                    <hr>
                    <h4 id="follow-proyect">Proyectos a los que sigo:</h4>
                      <section class="proyectos">
                        <article>
                          <ul>
                            <li>
                              <a href="#"><h2>Salvemos a Mexico</h2>
                              <span class="ion-close-round"></span>
                              <p>Debido a los recientes acontecimientos, estamos en campaña de SALVAR A MEXICO,
                                Mediante donaciones podemos ayudar a nuestros hermanos mexicanos bien chingones
                                que luego bebemos su tequila. Asique no seas rata y colabora wacho Here is the Donation
                              </p>
                              </a>
                            </li>
                            </article>
                            <article>
                            <li>
                              <a href="#"><h2>PROYECT WORLD: la dinastia</h2>
                              <span class="ion-close-round"></span>
                              <p>Estamos con el ferviente Deseo de abrir un nuevo local de juegos llamado:
                              Proyect World. Alli habran muchos juegos Shooters de Laser para adolescentes y Adultos.
                              Colabora con el proyecto y gana entradas de preVenta para ti y dos amigos mas!!
                              </p>
                              </a>
                            </li>
                            </article>
                            <article >
                            <li>
                              <a href="#"><h2>Zapatillas para Pepe</h2>
                              <span class="ion-close-round"></span>
                              <p>El pobre Pepe necesita Zapatillas y quiene somos nosotros para negarselas.
                              Colabora con Pepe y comprale unas Zapas, dale amargo copate, te lo va a agradecer
                              Si Juntamos mucha gente le compramos unas Adidas o unas Nike , si nadie se copa le doy la de mi primo
                              </p>
                              </a>
                            </li>

                          </section>
                          <h3 align="center">Mis lugares favoritos</h3>
                          <ul class="galeria">
                            <li class="galeria_item"><img src="modal/1.jpg" alt="1" class="galeria_img"></li>
                            <li class="galeria_item"><img src="modal/2.jpg" alt="2" class="galeria_img"></li>
                            <li class="galeria_item"><img src="modal/3.jpg" alt="3" class="galeria_img"></li>
                            <li class="galeria_item"><img src="modal/4.jpg" alt="4" class="galeria_img"></li>
                          </ul>
                            </article>
                          </ul>
                      </section>
                </article>
          </section>
        </section>
        <section>

  </div>
@endsection
