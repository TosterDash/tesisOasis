@extends('layouts/head')

@section('bodyPage')

<html>

    <body class="background-body">
        <div class="container my-5 px-0">
            <div class="container background-wood1 ">
                <div class="row">
                  <div class="col-4">
                      <form><!--Esta funcion lo que hace es agregarnos un formulario, mas en concreto nos agregar controles de formulario -->
<p><label for="name">usuario:</label> <input id="name" maxlength="8" name="name" required="" size="50" type="text" /></p>
<p><label for="password">contrase&ntilde;a:</label> <input id="password" maxlength="8" name="password" required="" size="50" type="text" /></p>
<p><button name="Inicio" id="IDInicio" onclick="" type="Button" >Inicio</button></p>
                 </div>
                 <p>¿no esta registrado? crea su cuenta nueva ahora mismo</p>
                 <p></p>
                 <p><button name="Registro" id="IDregistro" onclick="location.href='registro'" type="button">Registro</button></p>
                
                </div>
            </div>
        </div>
    </div>
@endsection