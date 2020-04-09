<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomPageController extends Controller
{
    public function index(){
        return view('admin/custom-pages/addPages');
    }
    public function addPage(){

    }
}
