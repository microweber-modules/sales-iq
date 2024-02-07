<?php
$config = array();
$config['name'] = "Sales IQ";
$config['author'] = "Microweber";
$config['no_cache'] = false;
$config['ui'] = false;
$config['ui_admin'] = true;
$config['categories'] = "miscellaneous";
$config['position'] = 39;
$config['version'] = 1.0;

$config['settings'] = [];

$config['settings']['routes']['admin'] = 'admin.sales-iq.index';

$config['settings']['autoload_namespace'] = [
    [
        'path' => __DIR__ . '/src/',
        'namespace' => 'MicroweberPackages\\Modules\\SalesIq'
    ],
];

$config['settings']['service_provider'] = [
    \MicroweberPackages\Modules\SalesIq\Providers\SalesIqServiceProvider::class
];
