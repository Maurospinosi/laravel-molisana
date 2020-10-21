<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('partials_page/home');
})->name("home");

Route::get('/products', function () {
   $data = config("pasta");

   $lunga = [];
   $corta = [];
   $cortissima = [];
   foreach ($data as $key => $pasta){
       if ($pasta["tipo"] == "lunga"){
          $lunga[$key] = $pasta;
       } elseif ($pasta["tipo"] == "corta"){
          $corta[$key] = $pasta;
       } elseif ($pasta["tipo"] == "cortissima"){
          $cortissima[$key] = $pasta;
       }
   }
   $data_2 = ["lunga"=>$lunga, "corta"=>$corta,"cortissima"=> $cortissima];
   return view('partials_page/products', $data_2);
})->name("prodotti");

Route::get('/products/show/{id}', function ($id) {
   $prodotto = config("pasta.$id");

   return view('partials_page/pag-prodotti', ["data" =>$prodotto]);
})->name("pagine_prodotti");


Route::get('/news', function () {
    return view('partials_page/news');
})->name("notizie");

