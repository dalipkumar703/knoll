<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session; 
use DB;
use Illuminate\Support\Facades\Input;
class AdminController extends Controller
{
   public function login($username,$password)
   {
    if($username=='knoll' && $password=='123')
    {  
        Session::set('user_logged',true);
        return response()->json(true);
    }
    else
    {
        return response()->json(false);
    }
   }
   public function indexShow()
   {
    if(Session::has('user_logged'))
    {
       return view('admin.index');
    }
    else
    {
        return redirect('admin');
    }
   }
   public function deleteSession()
   {
    if(Session::has('user_logged'))
    {
       Session::forget('user_logged');
       return redirect('admin');
    }
   }
   public function addGeneric(Request $request)
   {
      $this->validate($request,[
    'name' => 'required',
    'brand' => 'required',
    'file' => 'required|mimes:jpeg,png,gif',
    'type' => 'required',
    'unit' => 'required',
    'constituent' => 'required',
    'package'=>'required',
    'price'=>'required'
    ]);

    if(Input::hasfile('file'))
    {
      $file=Input::file('file');
      $file->move('uploads',$file->getClientOriginalName());
     DB::table('generic')->insert([
    'name' => $request->input('name'),
    'brand' => $request->input('brand'),
    'filepath' => $file->getClientOriginalName(),
    'type' => $request->input('type'),
    'unit' => $request->input('unit'),
    'constituent' => $request->input('constituent'),
    'package' => $request->input('package'),
    'price' => $request->input('price'),
    ]); 
    }
    dd("uploaded succesfully");
   }
}
