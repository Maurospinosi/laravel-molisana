@extends('layout.layout')
@section('title')
 La Molisana(Prodotti)   
@endsection

@section('main')
 <!-- MAIN -->
 <div class="container_2">
    @foreach ($lunga as $key => $pasta) 
    <div class="pruducts_main">
        <h2>{{$pasta["titolo"]}}</h2>
        <img class="first-foto" src="{{$pasta["src-h"]}}" alt="">
        <img  class="second-foto" src="{{$pasta["src-p"]}}" alt="">
        <p>{{$pasta["descrizione"]}}</p>
    </div>
  @endforeach 
  @foreach ($corta as $key => $pasta) 
    <div class="pruducts_main">
        <h2>{{$pasta["titolo"]}}</h2>
        <img class="first-foto" src="{{$pasta["src-h"]}}" alt="">
        <img  class="second-foto" src="{{$pasta["src-p"]}}" alt="">
        <p>{{$pasta["descrizione"]}}</p>
    </div>
  @endforeach
  @foreach ($cortissima as $key => $pasta) 
    <div class="pruducts_main">
        <h2>{{$pasta["titolo"]}}</h2>
        <img class="first-foto" src="{{$pasta["src-h"]}}" alt="">
        <img  class="second-foto" src="{{$pasta["src-p"]}}" alt="">
        <p>{{$pasta["descrizione"]}}</p>
    </div>
  @endforeach
 </div>
 <!-- /MAIN -->
@endsection