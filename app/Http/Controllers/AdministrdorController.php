<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministrdorController extends Controller
{
    public function __construct()
    {
        $this->middleware('EsAdmin');
    }

    public function index(){
        return "Si has llegado tienes rol de admin";
    }
}
