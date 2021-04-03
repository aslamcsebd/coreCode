<?php
namespace App\Http\Controllers;

//use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

use App\AllCode;
use App\CodeIcon;
use App\CodeType;
use App\User;

class CodeController extends Controller{

   // $user = Auth::user()->id;
  
   // Add Code type
      public function addItem(Request $request){
         $userId= 22;
         $validated = $request->validate([
            'userId'=> 'required',
            'codeType'=>'required|unique:code_types,codeType'
            //"email|unique:users, email, '.$id.', user_id"
         ]);
         CodeType::insert($validated);
         return back()->with('success', 'Code type add successfully');
      }

   // Add Code
      public function addCode(Request $request){
         $validated = $request->validate([
            'codeTypeId'=> 'required',
            'codeTitle'=>'required',
            'code'=>'required'
         ]);
         AllCode::insert($validated);
         return back()->with('success','Code type save successfully');
      }

   //Edit Code
      public function editCode(Request $request){
         if ($request->codeTypeId == null) {
            AllCode::find($request->id)->update([
               'codeTitle'=>$request->codeTitle,
               'code'=>$request->code
            ]);
         }
         
         if(isset($request->codeTypeId)){
             AllCode::find($request->id)->update([
               'codeTypeId'=>$request->codeTypeId,    
               'codeTitle'=>$request->codeTitle,    
               'code'=>$request->code
            ]);
         }
         return back()->with('success', 'Code edit successfully');;
      }

   // View Code
      public function viewCode($id){
         $data['singleCodeType'] = AllCode::where('codeTypeId', $id)->get();
         $data['codeTypeName'] = CodeType::find($id);
         return view('viewCode', $data);     
      }

      public function viewAllCode(){
         if (Auth::user()){  
            $id = Auth::user()->id;
            $data['allCodeTypes'] = CodeType::where('userId', $id)->get();         
            return view('viewCode', $data);
         }else{
            $data['allCodeTypes'] = CodeType::all();         
            return view('viewCode', $data);
         }
      }

   //Trashed Code   
   public function trashedCode(){
      if (Auth::user()){  
         $id = Auth::user()->id;
         $data['trashedCodeTypes'] = CodeType::where('userId', $id)->get();
         $data['trashedCode'] = 'All Trashed Code';
         return view('viewCode', $data);
      }
   }

   //Soft Delete
      function softDelete($id){
         AllCode::find($id)->delete();
         return back()->with('danger', 'Code soft delete successfully');
      }

      function restore($id){
         AllCode::onlyTrashed()->find($id)->restore();
         return back()->with('success', 'Code restore successfully');
      }

      function forceDelete($id){
         AllCode::onlyTrashed()->find($id)->forceDelete();
         return back()->with('forceDelete', 'Code permanently delete successfully');
      }

}
