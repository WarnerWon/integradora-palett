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
    return view('Welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('users/{id}', function ($id) {
    
});

Route::group(['middleware' => ['auth']], function () {
    //Israel
    # Dashboard
    Route::resource('Dashboard', 'DashboardController');
    # Ordenes
    Route::GET('Ordenes', 'OrdenesController@traerOrdenes')->name('Ordenes');
    Route::GET('nuevaOrden', 'OrdenesController@nuevaOrden')->name('nuevaOrden');
    Route::POST('crearOrden', 'OrdenesController@crearOrden')->name('crearOrden');
    #RUTAS DE PRODUCTOS
    Route::GET('productos', 'ProductosController@index')->name('productos');
    Route::get('Productosdel/{id}', 'ProductosController@Destroy')->name('Productosdel');
    Route::get('Editarproductos/{id}','ProductosController@Edit')->name('Editarproductos');
    Route::POST('Actualizarproducto', 'ProductosController@update');
    Route::get('Createproducto', 'ProductosController@Createproducto');
    Route::POST('Nuevoproducto','ProductosController@store');
    #RUTAS DE MATERIALES 
    Route::get('materiales', 'MaterialesController@index')->name('materiales');
    Route::get('materialesdel/{id}', 'MaterialesController@Destroy')->name('materialdel');
    Route::get('Editarmaterial/{id}','MaterialesController@Edit')->name('Editarmaterial');
    Route::get('Creatematerial','MaterialesController@Createmateriales');
    Route::POST('Actualizarmaterial','MaterialesController@update');
    Route::POST('Nuevomaterial', 'MaterialesController@store');
    #RUTAS DE CATEGORIAS
    Route::get('Categorias', 'CategoriasController@index')->name('categorias');
    Route::get('Categoriasdel/{id}', 'CategoriasController@Destroy')->name('Categoriasdel');
    Route::get('Createcategoria', 'CategoriasController@Createcategorias');
    Route::POST('Nuevacategoria', 'CategoriasController@store');

    #RUTAS DE UNIDADES DE MEDIDA
    Route::get('Unidadesmedida', 'UnidadesMedidaController@index')->name('Unidadesmedida');
    Route::get('Unidadesmedidadel/{id}','UnidadesMedidaController@destroy')->name('Unidadesmedidadel');
    Route::get('Editarunidadmed/{id}','UnidadesMedidaController@Edit')->name('Editarmaterial');
    Route::get('Createunidadmed','UnidadesMedidaController@Createunidadmed');
    Route::POST('Actualizarunidadmed','UnidadesMedidaController@update');
    Route::POST('Nuevaunidadmed', 'UnidadesMedidaController@store'); 
});


Auth::routes();


