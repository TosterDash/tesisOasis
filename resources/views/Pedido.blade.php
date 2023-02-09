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
                        <table class="editorDemoTable" style="height:204px; width:674px">
                            <thead>
                                <tr>
                                    <td style="height:18px; width:253px">
                                    <h4>Producto</h4>
                                    </td>
                                    <td style="height:18px; width:336px">
                                    <h4>Fecha</h4>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="height:22px; width:253px">
                                    <h4>&nbsp;</h4>
                        
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height:22px; width:336px">
                                    <h4><div id="current_date"></p>
                                        <script>
                                        date = new Date();
                                        year = date.getFullYear();
                                        month = date.getMonth() + 1;
                                        day = date.getDate();
                                        document.getElementById("current_date").innerHTML = month + "/" + day + "/" + year;
                                        </script>
                                        ;</h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                </div>
            </div>
        </div>    
    </body>

@endsection
