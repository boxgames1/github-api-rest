<?php

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

//Public URLs
$router->group(['prefix' => 'github/v1'], function($router)
{
  //Route for the required queries. Query param can contain slashes
  $router
    ->get('/{query:[\s\S]*}','SearchController@query');

});

//On the root url, render the doc view
$router
  ->get('/',
    function () {
      return response(view('docu'), 200);
    }
  );
