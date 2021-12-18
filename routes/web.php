<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('public.welcome');
})->name('inicio');
*/

Route::get('/', 'DestinyController@inicio')->name('inicio');


Route::get('/nosotros', function () {
    return view('public.complements.about');
})->name('nosotros');
/*
Route::get('/nosotros', function () {
    return view('public.complements.about');
})->name('nosotros');
*/
Route::get('/nosotros', 'CustomerController@nosotros')->name('nosotros');
Route::post('nosotros/store', 'CustomerController@storereserve')->name('nosotros.store');
Route::get('/reservas', 'CustomerController@showserve')->name('nosotros.show');
Route::get('/reserva/{id}', 'CustomerController@seereserve')->name('nosotros.see');

//Route::post('nosotros/store', 'CustomerController@store')->name('contact.store');
/*Route::get('/contacto', function () {
    return view('public.complements.contact');
})->name('contacto');*/
Route::get('/contacto', 'CustomerController@index')->name('contacto');
Route::post('contact/store', 'CustomerController@store')->name('contact.store');

//



//------------------blog------------------
Route::get('/blog', 'CustomerController@blog')->name('blog');
Route::get('/blog/mejores-restaurantes-cusco', 'CustomerController@blog1')->name('blog1');
Route::get('/blog/mejores-lugares-turisticos-gratuitos-del-cusco', 'CustomerController@blog2')->name('blog2');
Route::get('/blog/mejores-lugares-turisticos-del-cusco', 'CustomerController@blog3')->name('blog3');

/*
Route::get('/blog/mejores-restaurantes-cusco', function () {
    return view('public.complements.blog-item.1');
})->name('blog1');
*/
//------------------------------------

//----------------destinies-------------

Route::get('/tours/cusco', 'DestinyController@cusco')->name('destiny.cusco');

Route::get('/tours/machupicchu', 'DestinyController@machupicchu')->name('destiny.machupicchu');

Route::get('/tours/lima', 'DestinyController@lima')->name('destiny.lima');

Route::get('/tours/arequipa', 'DestinyController@arequipa')->name('destiny.arequipa');

Route::get('/tours/puno', 'DestinyController@puno')->name('destiny.puno');

Route::get('/tours/ica-nazca', 'DestinyController@ica')->name('destiny.ica');

//-------Ver un tour especifico------------

Route::get('/tours/{tour}', 'DestinyController@showTours')->name('destiny.show.tour');
Route::post('reserve/store', 'DestinyController@store')->name('reserve.store');

//Route::get('/tours/machupicchu/{name}', 'DestinyController@machupicchuTours')->name('destiny.machupicchu');

//Route::get('/tours/lima/{name}', 'DestinyController@lima')->name('destiny.lima');

//Route::get('/tours/arequipa/{name}', 'DestinyController@arequipa')->name('destiny.arequipa');

//Route::get('/tours/puno/{name}', 'DestinyController@puno')->name('destiny.puno');

//Route::get('/tours/ica-nazca/{name}', 'DestinyController@ica')->name('destiny.ica');

//---------------------------------------

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function (){
    Route::prefix('dashboard')->group(function (){
        Route::get('home', 'HomeController@dashboard')->name('dashboard')
            ->middleware('permission:access_dashboard');
        // TODO: Rutas módulo Tour
        // Index: Muestra el listado de tours
        Route::get('tours', 'TourController@index')->name('tour.index')
            ->middleware('permission:create_tour');
        // Create: Muestra el formulario de creación
        Route::get('tour/crear', 'TourController@create')->name('tour.create')
            ->middleware('permission:create_tour');
        // Store: Guarda en la BD la tienda
        Route::post('tour/store', 'TourController@store')->name('tour.store')
            ->middleware('permission:save_tour');
        // Edit: Mostrar el formulario de actualización
        Route::get('tour/actualizar/{id}', 'TourController@edit')->name('tour.edit')
            ->middleware('permission:edit_tour');
        // Update: Guarda la nueva información del tour
        Route::post('tour/update', 'TourController@update')->name('tour.update')
            ->middleware('permission:update_tour');
        // Delete: Vista para eliminar tour
        Route::get('tour/eliminar/{id}', 'TourController@delete')->name('tour.delete')
            ->middleware('permission:destroy_tour');
        // Destroy: Eliminar el tour
        Route::post('tour/destroy', 'TourController@destroy')->name('tour.destroy')
            ->middleware('permission:destroy_tour');
        // Trashed: Devuelve los tours eliminados
        Route::get('tours/eliminados', 'TourController@trashed')->name('tour.trashed')
            ->middleware('permission:restore_tour');
        // Delete: Vista para eliminar tour
        Route::get('tour/restaurar/{id}', 'TourController@recover')->name('tour.recover')
            ->middleware('permission:destroy_tour');
        // Restore: Restaurar una tienda
        Route::post('tour/restore', 'TourController@restore')->name('tour.restore')
            ->middleware('permission:restore_tour');
        // Show: Vista para ver las consultas
        Route::get('consultas', 'CustomerController@show')->name('contact.show');
    });
});