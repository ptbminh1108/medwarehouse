<?php

namespace App\Controllers\Admin;

use App\Controllers\Admin\AdminBaseController;

class Dashboard extends AdminBaseController
{

    public function index()
    {
        return view('admin/dashboard');
    }
}
