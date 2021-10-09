<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function index() {
        return view ('layouts.default');
    }

    public function about() {
        return view ('about');
    }

    public function contact() {
        return view ('contact');
    }

    public function addNew() {
        return view ('insert');
    }

    public function dataInsert() {
        
    }
}
