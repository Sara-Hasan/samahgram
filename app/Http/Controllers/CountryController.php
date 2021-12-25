<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        $Getcountrylist = Country::pluck('iso', 'phonecode')->all();
        return view('auth/register', compact('Getcountrylist'));
    }
}
