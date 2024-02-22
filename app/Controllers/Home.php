<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    
    public function index()
    {
        
        // die(var_dump($_COOKIE));

        return view('welcome_message');
    }

}
