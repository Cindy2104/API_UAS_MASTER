<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// Rute API Klinik
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/kliniks', 'KlinikController@index');
    $router->post('/kliniks', 'KlinikController@store');
    $router->get('/kliniks/{id}', 'KlinikController@show');
    $router->put('/kliniks/{id}', 'KlinikController@update');
    $router->delete('/kliniks/{id}', 'KlinikController@destroy');
});
