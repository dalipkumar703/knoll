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
    Session::flash('added_generic', 'Generic added successfully!');
    return redirect()->back();
   }
   public function updateGeneric($id)
   {
     $generic=DB::table('generic')
             ->where('id',$id)
             ->first();
      
    return view('admin.updategeneric')->with('generic',$generic);
  }
  public function updateGenericValue(Request $request)
  {
    $this->validate($request,[
    'name' => 'required',
    'brand' => 'required',
    'file' => 'mimes:jpeg,png,gif',
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
     DB::table('generic')
     ->where('id',$request->input('id'))
     ->update([
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
    else
    {

     DB::table('generic')
     ->where('id',$request->input('id'))
     ->update([
    'name' => $request->input('name'),
    'brand' => $request->input('brand'),
    'type' => $request->input('type'),
    'unit' => $request->input('unit'),
    'constituent' => $request->input('constituent'),
    'package' => $request->input('package'),
    'price' => $request->input('price'),
    ]);
    } 
     Session::flash('added_generic', 'Generic added successfully!');
    return redirect('admin/index');
  }
  public function deleteGeneric($id)
  {
    DB::table('generic')
        ->where('id',$id)->delete();
        Session::flash('deleted_generic','Genereic deleted successfully');
        return redirect()->back();
  }
  public function addBrand(Request $request)
  {
    $this->validate($request,[
    'brand1' => 'required',
    'category'=>'required',
    'unit1' => 'required',
    'packageunit'=>'required',
    'price1'=>'required',
    'priceunit'=>'required'
    ]);
      DB::table('brand')->update([
    'brand' => $request->input('brand1'),
    'category' => $request->input('category'),
    'unit' => $request->input('unit1'),
    'packageunit' => $request->input('packageunit'),
    'price' => $request->input('price1'),
    'priceunit'=>$request->input('priceunit'),
    ]);
     
     Session::flash('added_brand', 'Brand added successfully!');
    return redirect('admin/index');
  
  }

}
