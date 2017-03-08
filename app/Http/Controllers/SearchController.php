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
         
        $data = Generic::where("name","LIKE","%{$request->input('query')}%")->get();

        return response()->json($data);

    }
    public function index()
    {
        $query = e(Input::get('q',''));

    // If the input is empty, return an error response
    if(!$query && $query == '') return Response::json(array(), 400);
     $names = Generic::where('name','like','%'.$query.'%')
    ->orderBy('name','asc')
    ->take(2)
    ->get()->toArray();
    }

    return Response::json(array(
        'data'=>$names
    ));
}
