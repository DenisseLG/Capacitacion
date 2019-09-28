<?php
Route::group(['prefix'=>'admin'],function(){

	Route::get('/saludar',function(){

		return "Hola";
	});

	Route::get('/saludar-p/{name}',function($name){        //rutas con parametros  obligatorios

		return "Hola".$name;
	});

	Route::get('/saludar-d/{name?}',function($name="vacio"){   //rutas con parametros no obligatorios

		return "Hola".$name;
	});

	Route::get('/sumar/{op1}/{op2?}',function($op1,$op2=1){   //rutas con parametros por defecto se ponen al ultimo

		return $op1+$op2;
	});


	Route::get('validador/{num}',function($num){

		return $num;

	}) -> where (['num'=>'[A-Z][0-9]+']); //valida 




	Route::get('validador2/{num}/{num2}',function($num,$num2){

		return $num+$num2;

	}) -> where (['num'=>'[0-9]+','num2'=>'[0-9]+']);  //valida 


});


