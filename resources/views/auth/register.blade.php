@extends('layouts.App')
@section('estructura')

<div class="container-registro">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

<div class="container-registro">
    <h2>Registrate ya!</h2>
    <div id="div-validado">
      <br>
      <ul>
      </ul>
    </div>
    <div class="panel-body">
          <form  class="reg" action="{{ route('register') }}" method="POST" enctype="multipart/form-data" novalidate>
          {{ csrf_field() }}
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                  <div class="col-md-6">
                    <input id="name"class="form-control" type="text" name="name" value="" placeholder="Name" required autofocus><span></span>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


            <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">

                  <div class="col-md-6">
                    <input id="lastname" type="text" class="form-control" name="lastname" value="" placeholder="Lastname" required autofocus><span></span>
                    @if ($errors->has('lastname'))
                        <span class="help-block">
                            <strong>{{ $errors->first('lastname') }}</strong>
                        </span>
                    @endif
                </div>
            </div>



            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="" placeholder="email@mail.com" required autofocus><span></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" value="" placeholder="password" required><span></span>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6">
              <input id="password-confirm" class="form-control" type="password" name="password_confirmation" value="" placeholder="Confirme su contraseña" ><span></span>

          <input type="file" name="file" value="foto"><span></span>
        </div>
        </div>
        <label>Selecione un Pais</label>
        <select id="paises" ></select>
        <select id="provincias" style="display:none"></select>


            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn-register">
                        Registrate
                    </button>
                </div>
        </div>
        </form>
        </div>
        </div>
        </div>
        </div>
        </div>
</body>
@endsection
