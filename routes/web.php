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

Route::get('/', function () {
    return view('welcome/inicio');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*RUTAS TEMPORALES PARA LAS VISTAS*/

/*RUTAS del Blog*/
Route::get('blog', function () {
    return view('blog/blog');
});

Route::get('blog/blog-post', function () {
    return view('blog/blog-post');
});


/*RUTAS de Ventas*/
Route::get('ventas', function () {
    return view('venta/ventas');
});

Route::get('ventas/venta', function () {
    return view('venta/venta');
});

/*RUTAS de Arriendos*/
Route::get('arriendos', function () {
    return view('arriendo/arriendos');
});

Route::get('arriendos/arriendo', function () {
    return view('arriendo/arriendo');
});

/*RUTAS de Proyectos*/
Route::get('proyectos', function () {
    return view('proyecto/proyectos');
});
Route::get('proyectos/proyecto', function () {
    return view('proyecto/proyecto');
});

/*RUTAS de Servicios*/
Route::get('servicios', function () {
    return view('servicio/servicios');
});

Route::get('servicios/servicio', function () {
    return view('servicio/servicio');
});

/*RUTAS de formularios*/
Route::get('contacto', function () {
    return view('formulario/contacto');
});

/*RUTA de quienes somos*/
Route::get('quienes-somos', function () {
    return view('quienes-somos');
});




