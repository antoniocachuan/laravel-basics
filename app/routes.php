<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	//return "hola mundo";
	//return View::make('hello');

	//Metodos para retornar cuando solo tengo un valor de retorno
	//return View::make('hello', array('name'=> 'friend')); // pasar por parametros siempre se pasa un array
	//return View::make('hello')->with('name', 'friend');
	//return View::make('hello')->withName('friend');

	//Para retornar cuando tengo mas de una variable de retorno
	//en el view simplemente los llamo con el nombre de la
	//variable
	//$data = ['name' => 'antonio', 'email' => 'antonio@mail.com'];
	//return View::make('hello2')->with($data);

	$data = [
	'name' => 'antonio', 
	'email' => 'antonio@mail.com',
	'location' => 'Lima',
	'direction' => 'Driven',
	'last_name' => 'Cachuan'
	];
	//Retorna todo de manera individual separados no como un array
	// en la vista se incluyen independientemente
	//ej $name $email etc
	//return View::make('hola')->with($data);

	//Retorna como un array se usa
	//data['name']
	return View::make('hola')->withData($data);

});


//Ejemplo de enrutamiento
//'/hello/{name?}' el ? significa que name puede estar vacio
//Route::get('/hello/{name?}', function($name = 'world')
//{
//	return View::make('hello')->with('name', $name);
//});