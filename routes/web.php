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

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('/', function () {
	return redirect('/dashboard');
});

Auth::routes();

Route::post('/login', [
    'uses'          => 'Auth\LoginController@login',
    'middleware'    => 'checkstatus',
]);

Route::get('/userdisabled',function(){
    return redirect('/login')->withErrors(['errors'=>'Usuario desactivado.']);
});
 
Route::get('/dashboard', 'MainController@home')->name('dashboard')->middleware(['auth','checkstatus']);

Route::group(['prefix'=>'clientes','middleware' => ['auth','checkstatus']], function() {
    Route::get('/', 'ClienteController@index')
    ->name('clientes.index')
    ->middleware('permission:client.list');

    Route::get('{id}/show', 'ClienteController@show')
    ->name('clientes.show')
    ->middleware('permission:client.show');

    Route::get('{id}/pedidos', 'ClienteController@pedidos')
    ->name('clientes.pedidos')
    ->middleware('permission:client.pedidos');
});

Route::group(['prefix'=>'cobranzas','middleware' => ['auth','checkstatus']], function() {
    Route::get('/', 'CobranzaController@index')
    ->name('cobranzas.index')
    ->middleware('permission:cobranza.list');

    Route::get('{id}/show', 'CobranzaController@show')
    ->name('cobranzas.show')
    ->middleware('permission:cobranza.show');
});

Route::group(['prefix'=>'usuarios','middleware' => ['auth','checkstatus']], function() {
    Route::get('/', 'UsersController@index')
    ->name('usuarios.index')
    ->middleware('permission:user.list');
    Route::get('/create', 'UsersController@create')
    ->name('usuarios.create')
    ->middleware('permission:user.create');
    Route::post('/', 'UsersController@store')
    ->name('usuarios.store')
    ->middleware('permission:user.create');
    Route::get('{id}/edit', 'UsersController@edit')
    ->name('usuarios.edit')
    ->middleware('permission:user.update');
    Route::put('{id}/update', 'UsersController@update')
    ->name('usuarios.update')
    ->middleware('permission:user.update');
    Route::delete('destroy/{id}', 'UsersController@destroy')
    ->name('usuarios.destroy')
    ->middleware('permission:user.delete');
    Route::get('/profile/edit/{id}', 'UsersController@profileEdit')
    ->name('usuarios.profile.edit')
    ->middleware('permission:user.profile.update');
    Route::put('profile/{id}/update', 'UsersController@profileUpdate')
    ->name('usuarios.profile.update')
    ->middleware('permission:user.profile.update');
});

Route::group(['prefix'=>'roles','middleware' => ['auth','checkstatus']], function() {
    Route::get('/', 'RolesController@index')
    ->name('roles.index')
    ->middleware('permission:role.list');
    Route::get('/create', 'RolesController@create')
    ->name('roles.create')
    ->middleware('permission:role.create');
    Route::post('/', 'RolesController@store')
    ->name('roles.store')
    ->middleware('permission:role.create');
    Route::get('{id}/edit', 'RolesController@edit')
    ->name('roles.edit')
    ->middleware('permission:role.update');
    Route::put('{id}/update', 'RolesController@update')
    ->name('roles.update')
    ->middleware('permission:role.update');
    Route::delete('destroy/{id}', 'RolesController@destroy')
    ->name('roles.destroy')
    ->middleware('permission:role.delete');
});

Route::group(['prefix'=>'permisos','middleware' => ['auth','checkstatus']], function() {
    Route::get('/', 'PermissionsController@index')
    ->name('permisos.index')
    ->middleware('permission:permission.list');
    Route::get('/create', 'PermissionsController@create')
    ->name('permisos.create')
    ->middleware('permission:permission.create');
    Route::post('/', 'PermissionsController@store')
    ->name('permisos.store')
    ->middleware('permission:permission.create');
    Route::get('{id}/edit', 'PermissionsController@edit')
    ->name('permisos.edit')
    ->middleware('permission:permission.update');
    Route::put('{id}/update', 'PermissionsController@update')
    ->name('permisos.update')
    ->middleware('permission:permission.update');
    Route::delete('destroy/{id}', 'PermissionsController@destroy')
    ->name('permisos.destroy')
    ->middleware('permission:permission.delete');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
