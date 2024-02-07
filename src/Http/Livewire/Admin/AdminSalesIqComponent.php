<?php

namespace MicroweberPackages\Modules\SalesIq\Http\Livewire\Admin;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use MicroweberPackages\Admin\Http\Livewire\AdminComponent;

class AdminSalesIqComponent extends AdminComponent
{
    use AuthorizesRequests;

    public function render()
    {
        return view('microweber-module-sales-iq::admin.livewire.index', [

        ]);
    }
}
