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

Route::get('/storage-link', function () {
    Artisan::call('storage:link');
});

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

Route::get('forget-password',  'Auth\ForgotPasswordController@showForgetPasswordForm')->name('forget.password.get');
Route::post('forget-password', 'Auth\ForgotPasswordController@submitForgetPasswordForm')->name('forget.password.post'); 
Route::get('reset-password/{token}', 'Auth\ForgotPasswordController@showResetPasswordForm')->name('reset.password.get');
Route::post('reset-password', 'Auth\ForgotPasswordController@submitResetPasswordForm')->name('reset.password.post');


Route::get('/userdisabled',function(){
    return redirect('/login')->withErrors(['errors'=>'Usuario desactivado.']);
});
 
Route::get('/dashboard', 'MainController@home')->name('dashboard')->middleware(['auth','checkstatus']);

Route::group(['prefix'=>'clientes','middleware' => ['auth','checkstatus']], function() {
    Route::get('/', 'ClienteController@index')
    ->name('clientes.index')
    ->middleware('permission:client.list');

    Route::get('/create', 'ClienteController@create')
    ->name('clientes.create')
    ->middleware('permission:client.create');

    Route::post('/', 'ClienteController@store')
    ->name('clientes.store')
    ->middleware('permission:client.create');

    Route::get('{id}/edit', 'ClienteController@edit')
    ->name('clientes.edit')
    ->middleware('permission:client.update');

    Route::put('{id}/update', 'ClienteController@update')
    ->name('clientes.update')
    ->middleware('permission:client.update');

    Route::get('{id}/show', 'ClienteController@show')
    ->name('clientes.show')
    ->middleware('permission:client.show');

    Route::get('{id}/pedidos', 'ClienteController@pedidos')
    ->name('clientes.pedidos')
    ->middleware('permission:client.pedidos');

    Route::get('{id}/apigetcliente', 'ClienteController@apiGetCliente')
    ->name('clientes.apigetcliente');

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

Route::group(['prefix'=>'almacen','middleware' => ['auth','checkstatus']], function() {

    Route::get('/', 'AlmacenController@index')
    ->name('almacen.index')
    ->middleware('permission:almacen.list');

    Route::get('/create', 'AlmacenController@create')
    ->name('almacen.create')
    ->middleware('permission:almacen.create');

    Route::post('/', 'AlmacenController@store')
    ->name('almacen.store')
    ->middleware('permission:almacen.create');

    Route::get('{id}/edit', 'AlmacenController@edit')
    ->name('almacen.edit')
    ->middleware('permission:almacen.update');

    Route::put('{id}/update', 'AlmacenController@update')
    ->name('almacen.update')
    ->middleware('permission:almacen.update');

    Route::get('{id}/show', 'AlmacenController@show')
    ->name('almacen.show')
    ->middleware('permission:almacen.show');

    Route::get('{form_id}/{ingreso_id}/apigetformproducto', 'AlmacenController@apiGetFormproducto')
    ->name('clientes.apigetcliente');

});

Route::group(['prefix'=>'proveedor','middleware' => ['auth','checkstatus']], function() {

    Route::get('/', 'ProveedorController@index')
    ->name('proveedor.index')
    ->middleware('permission:proveedor.list');

    Route::get('/create', 'ProveedorController@create')
    ->name('proveedor.create')
    ->middleware('permission:proveedor.create');

    Route::post('/', 'ProveedorController@store')
    ->name('proveedor.store')
    ->middleware('permission:proveedor.create');

    Route::get('{id}/edit', 'ProveedorController@edit')
    ->name('proveedor.edit')
    ->middleware('permission:proveedor.update');

    Route::put('{id}/update', 'ProveedorController@update')
    ->name('proveedor.update')
    ->middleware('permission:proveedor.update');

    Route::get('{id}/show', 'ProveedorController@show')
    ->name('proveedor.show')
    ->middleware('permission:proveedor.show');

    Route::get('{id}/pedidos', 'ProveedorController@pedidos')
    ->name('proveedor.pedidos')
    ->middleware('permission:proveedor.pedidos');
});


Route::group(['prefix'=>'procedencia','middleware' => ['auth','checkstatus']], function() {

    Route::get('/', 'ProcedenciaController@index')
    ->name('procedencia.index')
    ->middleware('permission:procedencia.list');

    Route::get('/create', 'ProcedenciaController@create')
    ->name('procedencia.create')
    ->middleware('permission:procedencia.create');

    Route::post('/', 'ProcedenciaController@store')
    ->name('procedencia.store')
    ->middleware('permission:procedencia.create');

    Route::get('{id}/edit', 'ProcedenciaController@edit')
    ->name('procedencia.edit')
    ->middleware('permission:procedencia.update');

    Route::put('{id}/update', 'ProcedenciaController@update')
    ->name('procedencia.update')
    ->middleware('permission:procedencia.update');

    Route::get('{id}/show', 'ProcedenciaController@show')
    ->name('procedencia.show')
    ->middleware('permission:procedencia.show');

    Route::get('{id}/pedidos', 'ProcedenciaController@pedidos')
    ->name('procedencia.pedidos')
    ->middleware('permission:procedencia.pedidos');
});

Route::group(['prefix'=>'marcavehiculo','middleware' => ['auth','checkstatus']], function() {

    Route::get('/', 'MarcavehiculoController@index')
    ->name('marcavehiculo.index')
    ->middleware('permission:marcavehiculo.list');

    Route::get('/create', 'MarcavehiculoController@create')
    ->name('marcavehiculo.create')
    ->middleware('permission:marcavehiculo.create');

    Route::post('/', 'MarcavehiculoController@store')
    ->name('marcavehiculo.store')
    ->middleware('permission:marcavehiculo.create');

    Route::get('{id}/edit', 'MarcavehiculoController@edit')
    ->name('marcavehiculo.edit')
    ->middleware('permission:marcavehiculo.update');

    Route::put('{id}/update', 'MarcavehiculoController@update')
    ->name('marcavehiculo.update')
    ->middleware('permission:marcavehiculo.update');

    Route::get('{id}/show', 'MarcavehiculoController@show')
    ->name('marcavehiculo.show')
    ->middleware('permission:marcavehiculo.show');

    Route::get('{id}/pedidos', 'MarcavehiculoController@pedidos')
    ->name('marcavehiculo.pedidos')
    ->middleware('permission:marcavehiculo.pedidos');
});

Route::group(['prefix'=>'tipovehiculo','middleware' => ['auth','checkstatus']], function() {

    Route::get('/', 'TipovehiculoController@index')
    ->name('tipovehiculo.index')
    ->middleware('permission:tipovehiculo.list');

    Route::get('/create', 'TipovehiculoController@create')
    ->name('tipovehiculo.create')
    ->middleware('permission:tipovehiculo.create');

    Route::post('/', 'TipovehiculoController@store')
    ->name('tipovehiculo.store')
    ->middleware('permission:tipovehiculo.create');

    Route::get('{id}/edit', 'TipovehiculoController@edit')
    ->name('tipovehiculo.edit')
    ->middleware('permission:tipovehiculo.update');

    Route::put('{id}/update', 'TipovehiculoController@update')
    ->name('tipovehiculo.update')
    ->middleware('permission:tipovehiculo.update');

    Route::get('{id}/show', 'TipovehiculoController@show')
    ->name('tipovehiculo.show')
    ->middleware('permission:tipovehiculo.show');

    Route::get('{id}/pedidos', 'TipovehiculoController@pedidos')
    ->name('tipovehiculo.pedidos')
    ->middleware('permission:tipovehiculo.pedidos');
});

Route::group(['prefix'=>'area','middleware' => ['auth','checkstatus']], function() {
    Route::get('{id}/cargos', 'AreaController@getAreaCargos')
    ->name('area.cargos');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
