@php
$data = config("pasta");
 //Creo tre array vuoti distinguendoli per "tipo"
 $lunga = [];
 $corta = [];
 $cortissima = [];
 //Pusho , in base al tipo di basta,  il singolo array all'interno degli array vuoti creati prima
 foreach ($data as $key => $pasta){
     if ($pasta["tipo"] == "lunga"){
        $lunga[$key] = $pasta;
     } elseif ($pasta["tipo"] == "corta"){
        $corta[$key] = $pasta;
     } elseif ($pasta["tipo"] == "cortissima"){
        $cortissima[$key] = $pasta;
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
    <?php foreach ($lunga as $pasta){ ?>
      <div class="main_img">
       <img src="<?php echo $pasta["src"]; ?>" alt="pasta_img">
      </div>
    <?php  }?>

    <!-- Stampo , con un ciclo foreach, gli array divisi per tipo (Corta) -->
    <h2>LE CORTE</h2>
    <?php foreach ($corta as $pasta){ ?>
      <div class="main_img">
        <img src="<?php echo $pasta["src"]; ?>" alt="pasta_img">
      </div>
    <?php  }?>

    <!-- Stampo , con un ciclo foreach, gli array divisi per tipo (Cortissima) -->
    <h2>LE CORTISSIME</h2>
    <?php foreach ($cortissima as $pasta){ ?>
      <div class="main_img">
        <img src="<?php echo $pasta["src"]; ?>" alt="pasta_img">
      </div>
    <?php  }?>
  </div>
 <!-- /MAIN -->
@endsection

