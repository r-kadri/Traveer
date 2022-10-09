<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        $countries = Country::all();

        return view('test.index', ['countries' => $countries]);
    }
}
