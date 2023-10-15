<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tickets', 'App\Http\Controllers\TicketController@index')->name('tickets.index');

Route::get('/tickets/create', 'App\Http\Controllers\TicketController@create')->name('tickets.create');

Route::post('/tickets/create', 'App\Http\Controllers\TicketController@store')->name('tickets.store');

Route::post('tickets/{ticket}', 'App\Http\Controllers\TicketController@update')->name('tickets.update');

Route::get('tickets/delete/{ticket}', 'App\Http\Controllers\TicketController@delete')->name('tickets.delete');

Route::post('tickets/delete/{ticket}', 'App\Http\Controllers\TicketController@destroy')->name('tickets.destroy');

Route::get('tickets/{ticket}', 'App\Http\Controllers\TicketController@show')->name('tickets.show');