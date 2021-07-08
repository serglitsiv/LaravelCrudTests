<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
      return view('welcome');
       //return response()->json(['first_test' => 'ok']);

    }
}
