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

    return ' Meu nome é ' . $nome . ' tenho ' . $idade .' anos de idade ';

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
Route::get('senior',function(Request $request){

    $primeironumero = $request->input('primeironumero');
    $segundonumero = $request->input('segundonumero');
    $terceironumero = $request->input('terceironumero');
    $quartonumero = $request->input('quartonumero');
    $quintonumero = $request->input('quintonumero');
    $resultado = ($primeironumero + $segundonumero + $terceironumero + $quartonumero + $quintonumero) /5;
     return $resultado;

});
Route::get('green',function(Request $request){
    $segundonumero = $request->input('primeironumero');
    $primeironumero = $request->input('segundonumero');
    $resultado = $segundonumero / $primeironumero;
    return $resultado;
});
Route::get('java',function(Request $request){
    $primeironumero = $request->input('primeironumero');
    $resultado = $primeironumero * '2';
    return ' O dobro do ' . $primeironumero . ' é igual a ' . $resultado ;

});
Route::get('quest',function(Request $request){
    $base = $request->input('base');
    $altura = $request->input('altura');
    $resultado = $base * $altura;
    return $resultado;

});
Route::get('mouse',function(Request $request){
    $valororiginal = $request->input('valor');
    $desconto = $request->input('desconto');
    $porcentagem = $valororiginal / 100;
    $resultado  = $valororiginal - ($porcentagem * $desconto);
    return ' o valor do produto é ' . $valororiginal . ' com o desconto de ' . $desconto . ' o valor atual e de ' . $resultado;
});
Route::get('not',function(Request $request){
    $salarioantigo = $request->input('salarioantigo');
    $aumento = $request->input('aumento');
    $porcentagem = $salarioantigo / 100;
    $resultado  = $salarioantigo + ($porcentagem * $aumento);
    return $resultado;
});
Route::get('icore',function(Request $request){
    $valorinicial = $request-> input('valor');
$resultado = $valorinicial / 10;
return $resultado;
});
Route::get('nvidia',function(Request $request){
    $preçoproduto = $request->input('preçoproduto');
    $comissão = $request->input('comissão');
    $porcentagem = $preçoproduto / 100;
    $resultado  = $preçoproduto + ($porcentagem * $comissão);
    return $resultado;
});
Route::get('dell', function (request $request) {
$dia = $request->input('dia');
 $hora = $dia * 24;
 $minutos = $hora * 60;
 $segundos = $minutos * 60;
$resultado = "dias: " . $dia . ", horas: " . $hora . ", minutos: " . $minutos . ", segundos: " . $segundos;
return $resultado;
});
Route::get('mercado', function (request $request) {
        $precoProduto = $request->input('Produto');
    $quantidade = $request->input('quantidade');
    $resultado = "valor total: " . $precoProduto * $quantidade;
    return $resultado;
    });
route::get('exemplo/condicao', function (Request $request) {
        $Idade = $request->input('idade');
        $retorno = "";
        if($Idade >= 18){
        $retorno = "Maior de idade";
        }
        else{
            $retorno = "Menor de idade";
        }
        return $retorno;
    
        }); 
    
