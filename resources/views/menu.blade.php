@extends('layouts/head')

@section('titlePage',"Tacos Oasis")

@section('bodyPage')
<!--aqui hira el codigo HTML-->
<html>
    <body class="background-body">
        <div class="container my-5 px-0">
            <div class="container background-wood1  border-card  ">
                
                @livewire('show-menu')
            
                        
            </div>
            
        </div>    
    </body>

@endsection
