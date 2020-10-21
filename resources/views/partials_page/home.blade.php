@php
$data = config("pasta");
 //Creo tre array vuoti distinguendoli per "tipo"
 $lunga = [];
 $corta = [];
 $cortissima = [];
 //Pusho , in base al tipo di basta,  il singolo array all'interno degli array vuoti creati prima
 foreach ($data as $key => $pasta){
    $pasta["id"] = $key;
     if ($pasta["tipo"] == "lunga"){
        $lunga[] = $pasta;
     } elseif ($pasta["tipo"] == "corta"){
        $corta[] = $pasta;
     } elseif ($pasta["tipo"] == "cortissima"){
        $cortissima[] = $pasta;
     }
 }
@endphp

@extends('layout.layout')

@section('title')
 La Molisana   
@endsection

@section('main')
 <!-- MAIN -->
  <div class="container">
    <!-- Stampo , con un ciclo foreach, gli array divisi per tipo (Lunga) -->
    <h2>LE LUNGHE</h2>
    @foreach ($lunga as $pasta)
      <div class="main_img">
        <div class="info_pasta">
          <a href="#">
            {{$pasta["titolo"]}}
          </a>
          <a href="#">
           <img src="../img/icon.svg" alt="icona">
          </a>
         </div>
       <img src="{{$pasta["src"]}}" alt="pasta_img">
      </div>
    @endforeach

    <!-- Stampo , con un ciclo foreach, gli array divisi per tipo (Corta) -->
    <h2>LE CORTE</h2>
    @foreach ($corta as $pasta)
      <div class="main_img">
        <div class="info_pasta">
          <a href="#">
            {{$pasta["titolo"]}}
          </a>
          <a href="#">
           <img src="../img/icon.svg" alt="icona">
          </a>
         </div>
       <img src="{{$pasta["src"]}}" alt="pasta_img">
      </div>
    @endforeach

    <!-- Stampo , con un ciclo foreach, gli array divisi per tipo (Cortissima) -->
    <h2>LE CORTISSIME</h2>
    @foreach ($cortissima as $pasta)
      <div class="main_img">
        <div class="info_pasta">
          <a href="#">
            {{$pasta["titolo"]}}
          </a>
          <a href="#">
           <img src="../img/icon.svg" alt="icona">
          </a>
         </div>
       <img src="{{$pasta["src"]}}" alt="pasta_img">
      </div>
    @endforeach
  </div>
 <!-- /MAIN -->
@endsection

