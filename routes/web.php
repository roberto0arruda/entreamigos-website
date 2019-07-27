<?php

Auth::routes(['verify' => true]);
$this->group(['middleware' => ['auth', 'verified'], 'namespace' => 'Admin' ], function() {
    Route::redirect('home', 'admin', 301);
    $this->get('admin', 'HomeController@index')->name('admin.home');
    $this->resource('admin/company', 'CompanyController');
    $this->resource('admin/profiles', 'UserController');
});

$this->redirect('/', '/site');
$this->group(['namespace' => 'Site'], function() {
    $this->get('/site', 'SiteController@index');
    $this->get('/about', 'SiteController@about');
    $this->get('/contact', 'SiteController@contact');
    $this->get('/projects', 'SiteController@projects');
    $this->any('/subscribe', 'SiteController@subscribe');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'namespace' => 'Admin'] , function () {
    Route::post('rooms_mass_destroy', ['uses' => 'RoomsController@massDestroy', 'as' => 'rooms.mass_destroy']);
    // Customers
    Route::post('customers_mass_destroy', ['uses' => 'CustomersController@massDestroy', 'as' => 'customers.mass_destroy']);
    // Settings
    Route::post('permissions_mass_destroy', ['uses' => 'Settings\PermissionsController@massDestroy', 'as' => 'permissions.mass_destroy']);
});