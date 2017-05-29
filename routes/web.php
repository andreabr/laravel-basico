<?php



Route::get('/', function () {

	
});

Route::group(['prefix' => 'admin'], function () {

	Route::resource('clientes', 'CustomersController');

});
