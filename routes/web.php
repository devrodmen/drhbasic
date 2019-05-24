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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Rutas para Permisos
 */
Route::get('/acl', 'AclController@index')->name('acl');
Route::get('/users', 'AclController@users')->name('users');
Route::get('/roles', 'AclController@roles')->name('roles');

/**
 * Rutas para Construir DataTable
 */
Route::get('acl.roles.dataTable', 'AclController@getRoleUserDataTable')->name('acl.roles.dataTable');