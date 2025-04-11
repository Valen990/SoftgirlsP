<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Admin;

/*

"Sin uso de controladores".

Route::get('/', function () {
    return view('TestView');
});

Route::get('/teacher', function () {
    return view('AdminView.Teacher');
});

Route::get('/secretary', function () {
    return view('AdminView.Secretary');
});

Route::get('/test', function () {
    return 'Esta es una prueba';
});

Route::get('/teacher/list', function () {
    return view('AdminView.teacher_list');
});

Route::get('/secretary/list', function () {
    return view('AdminView.secretary_list');
});

//Ruta con un parámetro obligatorio.
Route::get('/users/{id}', function ($id) {
    return 'Este es el usuario con id: ' .$id;
})->where('id', '[0-9]+');

//Ruta con dos parámetros obligatorios.
Route::get('/student/{name}/{lastname}', function ($name, $lastname) {
    return 'Esta es el estudiante con nombre: '.$name. ' y apellido: '.$lastname;
});

//Ruta con tres parámetros.
Route::get('/student/{name}/{lastname}/{age}', function ($name, $lastname, $age) {
    return 'Este es el estudiante con nombre: ' .$name. ' Apelllido: ' .$lastname. ' Y edad: ' .$age;
})->where('age', '[0-9]+');

//Ruta con dos parámetros: 1 obligatorio y 1 opcional.
Route::get('/employeer/{name}/{lastname?}', function ($name, $lastname = null) {
    return 'Esta es el empleado con nombre: '.$name. ' y apellido: '.$lastname;
});

//Ruta con tres parámetros: 2 obligatorios y 1 opcional.
Route::get('/teacher/{id}/{name}/{lastname}', function ($id, $name, $age  =  null) {
    return 'Esta es el profesor con id: '.$id. ' nombre: '.$name. ' y edad '.$age;
});

*/

Route::get('/', [Admin::class, 'index']);
Route::get('/teacher', [Admin::class, 'test']);
Route::get('/teacher/list', [Admin::class, 'example']);