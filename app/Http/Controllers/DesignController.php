<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function loginPage() {
        return view('design.login');
    }
}
