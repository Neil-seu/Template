<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Defaults;


class DefaultController extends Controller
{
    public function index() {
        return view ('default');
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

        $data = new Defaults;
        $data->firstName = $request->firstName;
        $data->lastName = $request->lastName;
        $data->save();

        return redirect()->back();
    }
}
