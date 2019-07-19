<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin' ], function() {
    $this->get('admin', 'HomeController@index')->name('admin.home');
    $this->resource('admin/company', 'CompanyController');
    $this->resource('admin/profiles', 'UserController');
    $this->resource('admin/products', 'ProductController');
});

Route::redirect('/', '/site');
Route::group(['namespace' => 'Site'], function() {
    Route::get('/site', 'SiteController@index');
    $this->get('/about', 'SiteController@about');
    $this->get('/contact', 'SiteController@contact');
    $this->get('/projects', 'SiteController@projects');
    $this->any('/subscribe', 'SiteController@subscribe');
});

Auth::routes();

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'namespace' => 'Admin'] , function () {
    Route::resource('rooms', 'RoomsController');
    Route::post('rooms_mass_destroy', ['uses' => 'RoomsController@massDestroy', 'as' => 'rooms.mass_destroy']);

    // Customers
    Route::resource('customers', 'CustomersController');
    Route::post('customers_mass_destroy', ['uses' => 'CustomersController@massDestroy', 'as' => 'customers.mass_destroy']);

    // Settings
    Route::resource('settings/permissions', 'Settings\PermissionsController');
    Route::post('permissions_mass_destroy', ['uses' => 'Settings\PermissionsController@massDestroy', 'as' => 'permissions.mass_destroy']);
    Route::resource('settings/roles', 'Settings\RolesController');

    Route::resource('settings/users', 'Settings\UsersController');
});