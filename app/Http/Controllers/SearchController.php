<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Generic;

class SearchController extends Controller
{
        public function search()
         {
        return view('generic');
    }



    public function autocomplete(Request $request)

    {
         alert("hello autocomplete");
        $data = Generic::where("name","LIKE","%{$request->input('query')}%")->get();

        return response()->json($data);

    }
}
