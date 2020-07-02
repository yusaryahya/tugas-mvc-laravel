<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function form() {
        return view('form');
    }

    public function welcome(Request $request) {
        //var_dump($request);
        //dd($request['firstname']);
        return view('welcome1');
    }

    public function welcome_post(Request $request) {
        //dd($request->all());
        $nama = $request["firstname"];
        return $nama;
        //return 'OK';
    }
}
