<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Generic;
class ApiSearchController extends BaseController {

	public function index()
	{
		$query = e(Input::get('q',''));
		if(!$query && $query == '') return Response::json(array(), 400);
		$generics = Generic::where('published', true)
			->where('name','like','%'.$query.'%')
			->take(2)
			->get()->toArray();
		// Data normalization
		
		// Add type of data to each item of each set of results
		
		return Response::json(array(
			'data'=>$generics
		));
	}


}
