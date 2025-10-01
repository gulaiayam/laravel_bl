<?php
Route::get('/no-access', function () {
    return view('no-access');
});


Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', 'App\Http\Controllers\Adm\DashboardController@index')->name('dashboard'); 
    Route::resource('laporan', 'App\Http\Controllers\Adm\LaporanController',['name'=>'laporan']);

    Route::resource('kekerasan', 'App\Http\Controllers\Adm\KekerasanController',['name'=>'laporan']);
    Route::resource('identitas', 'App\Http\Controllers\Adm\IdentitasController',['name'=>'identitas']);
    Route::resource('universitas', 'App\Http\Controllers\Adm\UniversitasController',['name'=>'universitas']);
    Route::resource('template', 'App\Http\Controllers\Adm\TemplateController',['name'=>'template']);
    Route::resource('user', 'App\Http\Controllers\Adm\UserController',['name'=>'user']);
 
    Route::get('dashboard', 'App\Http\Controllers\Adm\DashboardController@index')->name('dashboard');   
    
});
