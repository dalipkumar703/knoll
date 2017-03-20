<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Contracts\Routing\ResponseFactory;
use DB;
class brandController extends Controller
{
    /**
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($term)
    {
          $brands=DB::table('product')
            ->where('productname','LIKE',$term.'%')
            ->take(10)
            ->get();
            return response()->json($brands);
       
    }
    public function showBrandDetail($brand,$category)
    {
        
         $brand=DB::table('product')
            ->where('productname',$brand)
            ->orWhere('category',$category)
            ->take(10)
            ->get();
            return response()->json($brand);
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
}
