<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usermanagement_controller extends Controller
{
    public function index(){
        return view('admin/user_management/user');
    }
}
