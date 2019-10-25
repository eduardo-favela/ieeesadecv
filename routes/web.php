<?php

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

Route::get('/','Controllerroutes@verinicio');
Route::get('/productos','Controllerroutes@verproductos');
Route::get('/contacto','Controllerroutes@vercontacto');
Route::get('/servicios','Controllerroutes@verservicios');
Route::get('/deploy','DeployController@deploy');
Route::post('/filtroproductos','ControllerProductos@productosfiltrados');
Route::post('/sendmail','ControllerMails@enviarcorreo2');