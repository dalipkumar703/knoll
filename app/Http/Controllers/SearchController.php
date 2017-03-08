<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Generic;

class SearchController extends Controller
{

    public function index()
    {
        $query = Input::get('keywords');
     $names = Generic::where('name','like','%'.$query.'%')
    ->orderBy('name','asc')
    ->take(2)
    ->get();
    return View::make('searchGeneric')->with('result',$names);
    }

    
}
