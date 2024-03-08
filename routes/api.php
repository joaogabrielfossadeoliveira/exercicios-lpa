<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('receber/nome', function(Request $request){ 

    $nome = $request -> input('name'); 

    return  $nome; 

}); 
Route::get('nome/idade',function(Request $request){ 

    $nome = $request->input('name'); 

    $idade = $request->input('idade'); 

    return ' Meu nome é ' . $nome . ' tenho ' .$idade.' anos de idade ';

}); 
Route::get('cidade',function(Request $request){

    $nome = $request->input('nome');
     
    $data = $request->input('data');
    
    $city = $request->input('cidade');

 return 'Meu nome é ' . $nome . ' nasci no ano de ' . $data . ' na cidade de ' . $city ;
    
});
Route::get('resultado',function(Request $request){

    $primeironumero = $request->input('primeironumero');

    $segundonumero = $request->input('segundonumero');
    
    $resultado = $primeironumero + $segundonumero;

    return $resultado;

});
Route::get('eduardo',function(Request $request){

    $primeironumero = $request->input('primeironumero');
    $segundonumero = $request->input('segundonumero');
    $terceironumero = $request->input('terceironumero');
    $resultado = $primeironumero - $segundonumero - $terceironumero;
    return $resultado;

});
Route::get('wyll',function(Request $request){
    $primeironumero = $request->input('primeironumero');
    $segundonumero = $request->input('segundonumero');
    $resultado = $primeironumero / $segundonumero;
    return $resultado;
});
Route::get('professor',function(Request $request){
    $primeironumero = $request->input('primeironumero');
    $segundonumero = $request->input('segundonumero');
    $resultado = $primeironumero * $segundonumero;
    return $resultado;
});