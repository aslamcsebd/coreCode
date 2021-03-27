<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\codeType;
use Carbon\Carbon;

class leftSide extends Controller{

   public function addItem(Request $request){
   	
   	// $validated = $request->validate([
    //      'name'=> 'required|unique:categories,name',
    //      'description'=> 'nullable|string',
    //      'category_image'=> 'nullable|image|mimes:jpeg,jpg,png'
    //   ]);

      codeType::insert([
               'userId'=>12,
               'codeType'=>$request->addItem,
               'created_at'   => Carbon::now()
            ]);

     	// codeType::create($validated);
      return back()->with('success','Song Type Save Successfully');
   }
}
