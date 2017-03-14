<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session; 

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
}
