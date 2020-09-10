<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('Login');
});
Route::get('/forgot', function () {
    return view('forgot');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/registration', function () {
    return view('registration');
});  


Route::get('/create', function () {
    return view('create');
}); 
Route::get('/show', function () {
    return view('show');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/RDV', function () {
    return view('RDV');
});
//////////////////
Route::get('appointments/add','AppointmentController@index');
Route::post('appointments/add','AppointmentController@store');
Route::get('appointments','AppointmentController@calender');
///////////////
/*
Route::get('/appointments', 'AppointmentController@index');
Route::get('/appointments/filter', 'AppointmentController@filter');
Route::post('/appointments/new', 'AppointmentController@store');
Route::patch('/appointments/{appointment}/edit', 'AppointmentController@update');
Route::delete('/appointments/{appointment}', 'AppointmentController@destroy');
*/

//Route::resource('Patient', 'PatientController');
Route::get('Patient', 'PatientController@index' )->name('Patient.index');
Route::get('Patient/create', 'PatientController@create' )->name('Patient.create');
Route::post('Patient', 'PatientController@store' )->name('Patient.store');
Route::get('Patient/{id}', 'PatientController@show' )->name('Patient.show');

Route::get('Patient/edit/{id}', 'PatientController@edit')->name('Patient.edit');

Route::put('Patient/update/{patient}', 'PatientController@update')->name('Patient.update');
Route::delete('Patient/delete/{id}', 'PatientController@destroy')->name('Patient.delete');




