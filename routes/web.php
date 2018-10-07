<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin' ], function() {
    $this->get('admin', 'HomeController@index')->name('admin.home');
    Route::get('admin/post/{id}/update', 'HomeController@update');


    Route::resource('admin/settings/profiles', 'UserController');
});

$this->get('/', 'Site\SiteController@index')->name('home');

Auth::routes();