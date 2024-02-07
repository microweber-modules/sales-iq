<?php

Route::name('admin.sales-iq.')
    ->prefix(ADMIN_PREFIX . '/sales-iq')
    ->middleware(['admin'])
    ->namespace('MicroweberPackages\Modules\SalesIq\Http\Controllers\Admin')
    ->group(function () {

        Route::get('/', 'AdminSalesIqController@index')->name('index');

    });
