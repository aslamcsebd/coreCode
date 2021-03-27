<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

use App\User;
use App\allCode;
use App\codetype;


class CodeController extends Controller{

   // $user = Auth::user()->id;
  
   // Add Code type
      public function addItem(Request $request){
         $validated = $request->validate([
            'userId'=> 'required',
            'codeType'=>'required'
         ]);
         codeType::insert($validated);

         return back()->with('danger', 'Code Type Save Successfully');
      }

   // Add Code
      public function addCode(Request $request){
         $validated = $request->validate([
            'codeTypeId'=> 'required',
            'codeTitle'=>'required',
            'code'=>'required'
         ]);
         allCode::insert($validated);
         return back()->with('success','Code Type Save Successfully');
      }

   //Edit Code
      public function editCode(Request $request){
         if ($request->codeTypeId == null) {
            allCode::find($request->id)->update([
               'codeTitle'=>$request->codeTitle,    
               'code'=>$request->code
            ]);
         }
         
         if(isset($request->codeTypeId)){
             allCode::find($request->id)->update([
               'codeTypeId'=>$request->codeTypeId,    
               'codeTitle'=>$request->codeTitle,    
               'code'=>$request->code
            ]);
         }
         return back()->with('success', 'Code edit successfully');;
      }

   // View Code
      public function viewCode($id){
         $data['singleCodeType'] = allCode::where('codeTypeId', $id)->get();
         $data['CodeTypeName'] = codeType::find($id);
         return view('view_code', $data);
      }

      public function viewCodeAll(){
         if (Auth::user()){  
            $id = Auth::user()->id;
            $data['allCodeTypes'] = codeType::where('userId', $id)->get();         
            return view('view_code', $data);
         }else{
            $data['allCodeTypes'] = codeType::all();         
            return view('view_code', $data);
         }
      }

   //Trashed Code   
   public function trashedCode(){
      if (Auth::user()){  
         $id = Auth::user()->id;
         $data['trashedCodeTypes'] = codeType::where('userId', $id)->get();
         $data['trashedCode'] = 'All Trashed Code';
         return view('view_code', $data);
      }
   }

   //Soft Delete
      function softDelete($id){
         allCode::find($id)->delete();
         return back()->with('danger', 'Code soft delete successfully');
      }

      function restore($id){
         allCode::onlyTrashed()->find($id)->restore();
         return back()->with('success', 'Code restore successfully');
      }

      function forceDelete($id){
         allCode::onlyTrashed()->find($id)->forceDelete();
         return back()->with('forceDelete', 'Code permanently delete successfully');
      }

}
