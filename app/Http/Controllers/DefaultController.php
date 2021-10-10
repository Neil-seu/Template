<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Defaults;

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

    public function dataInsert(Request $request) {
        // $name = new Defaults;
        // $name->firstName = $request->insert('firstName');
        // $name->lastName = $request->insert('lastName');
        // $name->save();
        // dd('ok');
        // return redirect('layout.default');

        Defaults::insert([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName
        ]);

        dd('ok');
    }
}
