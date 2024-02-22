<?php

namespace App\Controllers;

use App\ControllersBaseController;

class Errors extends BaseController
{

    public function denied()
    {
        return view('errors/html/error_403.php');
    }
}
