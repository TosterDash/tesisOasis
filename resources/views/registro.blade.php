@extends('layouts/head')
@section('titlePage',"Tacos Oasis")
@section('bodyPage')

<html>
<form>
    <body class="background-body">
        <div class="container my-5 px-0">
            <div class="container background-wood1 ">
                <div class="row">
                  <div class="col-4">
<p><label for="name">usuario:</label> <input id="name" maxlength="8" name="name" required="" size="50" type="text" /></p>
<p><label for="password">contrase&ntilde;a:</label> <input id="password" maxlength="8" name="password" required="" size="50" type="text" /></p>
<p><label for="nombre">Nombre:</label> <input id="nombre" maxlength="8" name="password" required="" size="50" type="text" /></p>
<p><label for="apellidos">Apellido:</label> <input id="nombre" maxlength="8" name="apellidos" required="" size="50" type="text" /></p>
<p><label for="telefono">Telefono:</label> <input id="nombre" maxlength="8" name="telefono" required="" size="50" type="text" /></p>
<p><label for="direccion">Direccion:</label> <input id="nombre" maxlength="8" name="direccion" required="" size="50" type="text" /></p>
<p><button name="Registro" id="IDRegistro1" onclick="" type="Button" >Inicio</button></p> <!--en onclick se pone el codigo de que va a realizar el boton -->
                 </div>
                 <!--<p>no esta registrado? crea su cuenta nueva ahora mismo</p>
                 <p></p>
                 <p>(Boton de registro)</p>-->
                </div>
            </div>
        </div>
    </div>
</form>
@endsection