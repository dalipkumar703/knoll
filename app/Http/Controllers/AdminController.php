<?php

namespace App\Http\Controllers;

use Request;

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
    'file1' => 'required|mimes:jpeg,png,gif',
    'unit1' => 'required',
    'packageunit'=>'required',
    'price1'=>'required',
    'priceunit'=>'required'
    ]);

      if(Input::hasfile('file1'))
    {
      $file=Input::file('file1');
      $file->move('uploads',$file->getClientOriginalName());
        DB::table('brand')->insert([
    'brand' => $request->input('brand1'),
    'category' => $request->input('category'),
    'file'=> $file->getClientOriginalName(),
    'unit' => $request->input('unit1'),
    'packageunit' => $request->input('packageunit'),
    'price' => $request->input('price1'),
    'priceunit'=>$request->input('priceunit'),
    ]);
      }
   
   
     
     Session::flash('added_brand', 'Brand added successfully!');
    return redirect('admin/index');
  
  }
  public function updateBrand($id)
  {
   $brand=DB::table('brand')
             ->where('id',$id)
             ->first();
      
    return view('admin.updatebrand')->with('brand',$brand); 
  }
  public function updateBrandValue(Request $request)
  {
  $this->validate($request,[
    'brand1' => 'required',
    'category'=>'required',
    'file1' => 'mimes:jpeg,png,gif',
    'unit1' => 'required',
    'packageunit'=>'required',
    'price1'=>'required',
    'priceunit'=>'required'
    ]);
     
      if(Input::hasfile('file1'))
    {
      $file=Input::file('file1');
      $file->move('uploads',$file->getClientOriginalName());
     DB::table('brand')
     ->where('id',$request->input('id'))
     ->update([
     'brand' => $request->input('brand1'),
    'category' => $request->input('category'),
    'file'=> $file->getClientOriginalName(),
    'unit' => $request->input('unit1'),
    'packageunit' => $request->input('packageunit'),
    'price' => $request->input('price1'),
    'priceunit'=>$request->input('priceunit'),
    ]); 
    }
    else
    {

     DB::table('brand')
     ->where('id',$request->input('id'))
     ->update([
    'brand' => $request->input('brand1'),
    'category' => $request->input('category'),
    'unit' => $request->input('unit1'),
    'packageunit' => $request->input('packageunit'),
    'price' => $request->input('price1'),
    'priceunit'=>$request->input('priceunit'),
        ]); 
    } 
     Session::flash('updated_brand', 'Updated successfully!');
    return redirect('admin/index');
  }

  public function deleteBrand($id)
  {
      DB::table('brand')
        ->where('id',$id)->delete();
        Session::flash('deleted_brand',' Deleted successfully!');
        return redirect()->back();
  }
  private function _import_csv($path, $filename)
{

$csv = $path . $filename; 


$query = sprintf("LOAD DATA local INFILE '%s' INTO TABLE `generic` FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '\"' ESCAPED BY '\"' LINES TERMINATED BY '\\n' IGNORE 1 LINES (`name`, `brand`, `filepath`,`type`,`unit`,`constituent`,`package`, `price`)", addslashes($csv));

return DB::connection()->getpdo()->exec($query);

}
public function _import_brand_csv($path,$filename)
{
  $csv = $path . $filename; 


$query = sprintf("LOAD DATA local INFILE '%s' INTO TABLE `brand` FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '\"' ESCAPED BY '\"' LINES TERMINATED BY '\\n' IGNORE 1 LINES (`brand`, `category`, `file`,`unit`,`packageunit`,`price`, `priceunit`)", addslashes($csv));

return DB::connection()->getpdo()->exec($query);  
}
public function postUpload()
{

    if (Input::hasFile('file')){
        
        $file = Input::file('file');
        //check out the edit content on bottom of my answer for details on $storage
        // Moves file to folder on server
        $file->move('uploads',$file->getClientOriginalName());

        // Import the moved file to DB and return OK if there were rows affected
        if(Request::is('admin/generic/bulk/add'))
        {
         $this->_import_csv('uploads/',$file->getClientOriginalName()) ;
         Session::flash('csv_generic_uploaded','Uploaded Successfully!');
         return redirect()->back();
        }
                    
         if(Request::is('admin/brand/bulk/add'))
         {
           $this->_import_brand_csv('uploads/',$file->getClientOriginalName()) ;
           Session::flash('csv_brand_uploaded','Uploaded Sucessufully!');
           return redirect()->back();
         }           

     }
    
}

}
