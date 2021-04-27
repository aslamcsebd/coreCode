<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Validator;
use Redirect;

use App\AllCode;
use App\CodeIcon;
use App\CodeType;
use App\CodeTypeIcon;
use App\User;

class CodeController extends Controller{

   // Code type Icon
      public function viewIcon(Request $request){        
         return view('viewCodeIcon');
      }

      public function addIcon(Request $request){
         $validator = Validator::make($request->all(),[
            'iconName'=> 'required|unique:code_type_icons,iconName',
            'iconLink'=> 'required|unique:code_type_icons,iconLink'
         ]);

         if($validator->fails()) {
            $messages = $validator->messages();    
            return Redirect::back()->withErrors($validator);
         }

         CodeTypeIcon::insert([
            'iconName' => $request->iconName,
            'iconLink' => $request->iconLink,
            'created_at' => Carbon::now(),
         ]);
         return back()->with('success', 'Code type icon add successfully');
      }

      public function editIcon(Request $request){
         CodeTypeIcon::find($request->id)->update([
            'iconName'=>$request->iconName,
            'iconLink'=>$request->iconLink
         ]);
         return back()->with('success', 'Icon edit successfully');
      }

      function iconDelete($id){
         CodeTypeIcon::find($id)->delete();
         return back()->with('danger', 'Icon delete successfully');
      }
   
   // Add Code type
      public function addItem(Request $request){
         $userId = Auth::user()->id;
         $validator = Validator::make($request->all(),[
            'codeType' => 'required|unique:code_types,codeType,userId'.\Auth::user()->id,
         ]);

         if($validator->fails()) {
            $messages = $validator->messages();      
            return Redirect::back()->withErrors($validator);
         }
   
         if ($request->codeTypeIconId == null) {
            CodeType::insert([
               'userId' => $userId,
               'codeType' => $request->codeType,
               'created_at' => Carbon::now(),
            ]);
         }else{
            CodeType::insert([
               'userId' => $userId,
               'codeTypeIconId' => $request->codeTypeIconId,
               'codeType' => $request->codeType,
               'created_at' => Carbon::now(),
            ]);
         }
         return back()->with('success', 'Code type add successfully');
      }

   // Add Code
      public function addCode(Request $request){

         $validator = Validator::make($request->all(),[
            'codeTypeId'=> 'required',
            'codeTitle'=>'required',
            'code'=>'required'
         ]);

         if($validator->fails()) {
            $messages = $validator->messages();    
            return Redirect::back()->withErrors($validator);
         }

         AllCode::insert([
            'codeTypeId' => $request->codeTypeId,
            'codeTitle' => $request->codeTitle,
            'code' => $request->code,
            'created_at' => Carbon::now(),
         ]);
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
