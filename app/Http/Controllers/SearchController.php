<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\Routing\ResponseFactory;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Generic;
use DB;

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
   public function show($term)
{
    $generics = DB::table('generic')
        ->where('constituent', 'LIKE',  $term . '%')
        ->orWhere('constituent', '=' , '$term   ')
        ->take(10)
        ->get();

    return response()->json($generics);
}
 public function genericDetail($id)
 {
   $generic=DB::table('generic')
             ->where('id',$id)
             ->first();

    return view('genericdetail')->with('generic',$generic);
 }

}
