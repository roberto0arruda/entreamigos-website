<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin' ], function() {
    $this->get('admin', 'HomeController@index')->name('admin.home');
});

$this->get('/', 'Site\SiteController@index')->name('home');

Auth::routes();