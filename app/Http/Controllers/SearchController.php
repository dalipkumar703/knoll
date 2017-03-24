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
         
        $data = DB::table('product')->where("productname","LIKE","%{$request->input('query')}%")->get();

        return response()->json($data);

    }
   public function show($term)
{
    $generics = DB::table('product')
        ->where('composition', 'LIKE',  $term . '%')
        ->orWhere('composition', '=' , '$term')
        ->take(10)
        ->get();

    return response()->json($generics);
}
 public function genericDetail($id)
 {
   $generic=DB::table('product')
             ->where('id',$id)
             ->first();

    return view('genericdetail')->with('generic',$generic);
 }
 public function showBrand($term)
 {
    $brands=DB::table('product')
            ->where('composition','LIKE',$term.'%')
            ->get();
            return response()->json($brands);
 }
 public function  categorySearch($category)
 {
    $products=DB::table('product')
             ->where('category','LIKE',$category.'%')
             ->get();

    return view('categorydetail')->with('products',$products);
 }

}
