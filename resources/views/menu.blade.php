@extends('layouts/head')

@section('titlePage',"Tacos Oasis")

@section('bodyPage')
<!--aqui hira el codigo HTML-->
<html>
    <body class="background-body">
        <div class="container my-5 px-0">
            <div class="container background-wood1 ">
                <div class="row">
                  <div class="col-4">
                      <form>
                        <table class="editorDemoTable" style="height: 362px;">
                            <thead>
                            <tr style="height: 18px;">
                            <td style="height: 18px; width: 262px;">
                            <h4>Producto</h4>
                            </td>
                            <td style="height: 18px; width: 349px;">
                            <h4>Precio</h4>
                            </td>
                            
                            </thead>
                            <tbody>
                                @foreach ($menu as $menu)
                                    <tr style="height: 22px;">
                                    <td style="height: 22px; width: 262px;">
                                    <h4>{{$menu->nombreProducto}}</h4>
                                    </td>
                                    <td style="height: 22px; width: 349px;">
                                    <h4>${{$menu->precio}}</h4>
                                    </td>
                                    
                                    </tr>
                                @endforeach
                            
                            
                            </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>    
    </body>

@endsection
