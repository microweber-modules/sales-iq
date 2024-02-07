<?php

namespace MicroweberPackages\Modules\SalesIq\Providers;

use Illuminate\Support\Facades\View;
use Livewire\Livewire;
use MicroweberPackages\Module\Facades\ModuleAdmin;
use MicroweberPackages\Modules\SalesIq\Http\Livewire\Admin\AdminSalesIqComponent;
use MicroweberPackages\Modules\SalesIq\Http\Livewire\SalesIqSettingsComponent;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;


class SalesIqServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('microweber-module-sales-iq');
        $package->hasViews('microweber-module-sales-iq');

        $package->hasRoute('admin');
    }


    public function register(): void
    {
        parent::register();

        $this->loadRoutesFrom(__DIR__ . '/../routes/admin.php');

        Livewire::component('microweber-module-sales-iq::admin-sales-iq', AdminSalesIqComponent::class);


    }
}
