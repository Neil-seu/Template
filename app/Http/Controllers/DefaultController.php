<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Defaults;


class DefaultController extends Controller
{
    public function index() {
        // $data_View = Defaults::paginate(3);
        $data_View = Defaults::all();
        return view('default', compact('data_View'));
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

        // $data = new Defaults;
        // $data->firstName = $request->firstName;
        // $data->lastName = $request->lastName;
        // $data->save();

        Defaults::create($request->all());

        return redirect()->back();
    }

    public function dataEdit($edit_id) {
        $update_data = Defaults::findOrFail($edit_id);
        return view('edit', compact('update_data'));
    }

    public function dataUpdate(Request $request) {

        Defaults::findOrFail($request->id)->update($request->all());
        return redirect('/');
    }
    
    public function dataDelete($delete_id) {

        Defaults::findOrFail($delete_id)->delete();
        return redirect('/');
    }
}
