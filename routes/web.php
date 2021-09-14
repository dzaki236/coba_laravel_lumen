<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Models\Buku;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return 'welcome!';
});

$router->get('/buku', function () use ($router) {
    return response()->json(Buku::all());
});
$router->post('/buku','BukuController@create');
$router->get('/buku/{id}','BukuController@detail');
$router->get('/buku/{id}/edit','BukuController@edit');
$router->put('/buku/{id}/update','BukuController@update');
$router->delete('/buku/{id}/delete','BukuController@delete');