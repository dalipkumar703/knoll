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
          $brands=DB::table('brand')
            ->where('brand','LIKE',$term.'%')
            ->get();
            return response()->json($brands);
       
    }
    public function showBrandDetail($type,$brand,$category)
    {
        
         $brand=DB::table('brand')
            ->where('brand','=',$brand)
            ->where('type','=',$type)
            ->where('category','=',$category)
            ->first();
            return response()->json($brand);
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
}
