<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$app->get('/', function() use ($app) {
    return 'FLP Product Server';
});

$app->get('api/products','ProductController@index');
 
$app->get('api/product/{id}','ProductController@getProduct');
 
// $app->post('api/product','Flpps\Http\Controllers\ProductController@saveProduct');
 
// $app->put('api/product/{id}','Flpps\Http\Controllers\ProductController@updateProduct');
 
// $app->delete('api/product/{id}','Flpps\Http\Controllers\ProductController@deleteProduct');
