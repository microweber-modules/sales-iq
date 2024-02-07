<?php

namespace MicroweberPackages\Modules\SalesIq\Http\Controllers\Admin;

use MicroweberPackages\Admin\Http\Controllers\AdminController;
use Illuminate\Http\Request;

class AdminSalesIqController extends AdminController
{
    public function index(Request $request)
    {
        return view('microweber-module-sales-iq::admin.index');
    }
}
