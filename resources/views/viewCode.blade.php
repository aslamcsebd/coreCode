@extends('layouts.app')

@section('pageTitle')
   Code List
@endsection
@section('content')
   <div class="content-wrapper">

      <div class="container-fluid">
         <p class="codeTypeName mt-2">
            @if(isset($allCodeTypes))
               All Code
            @elseif(isset($codeTypeName))
               {{$codeTypeName->codeType}}
            @elseif(isset($trashedCode))
               {{$trashedCode}}
            @endif
         </p>

         @foreach (['success', 'danger', 'warning', 'info'] as $alert)         
            @if ($message = Session::get($alert))
               <div class="alert alert-{{$alert}} text-center alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>  
                  <strong>{{ $message }}</strong>
               </div>
            @endif
         @endforeach
        
         @if($errors)
            @foreach ($errors->all() as $error)
               <div class="alert alert-danger text-center alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>  
                  <strong>{{ $error }}</strong>
               </div>
            @endforeach
         @endif

         <table id="abc" class="table table-bordered table-hover">
            <thead class="text-center">
               <tr>                         
                  <th width="10%">Title</th>
                  <th>Code</th>
                  @auth
                     <th idth="16%">Action</th>
                  @endauth
               </tr>
            </thead>
            <tbody>               
               {{-- Single code type... --}}
               @if(isset($singleCodeType))
                  @foreach($singleCodeType as $all_Code)
                     <tr >                         
                        <td class="text-center">
                           <lable>{{$all_Code->codeTitle}}</lable>
                        </td>
                        <td class="text-light"> 
                           <button class="btn btn-sm btn-warning copy float-right" data-clipboard-target="#copy{{$all_Code->id}}" onclick="copy(this); copy2(this);">Copy</button>
                           <audio id="audio" src="https://s3.amazonaws.com/freecodecamp/drums/Heater-1.mp3"></audio>
                           <small id="copy{{$all_Code->id}}">  
                              <?php echo "<pre >". htmlspecialchars($all_Code->code,ENT_QUOTES)."</pre>";?>
                           </small>                                   
                        </td>                      
                        @auth
                        <!-- Action -->
                           <td class="text-center">
                              <div class="btn-group" role="group" aria-label="Basic example">
                                 <a class="btn btn-sm btn-success text-light my-1" data-toggle="modal" data-target="#editCode" data-id="{{$all_Code->id}}" data-code_title="{{$all_Code->codeTitle}}" data-code="{{$all_Code->code}}">Edit</a>
                              
                                 <a class="btn btn-sm btn-danger text-light my-1" onclick="return confirm('Are you want to soft Delete this code?')" href="{{ url('softDelete', $all_Code->id)}}">Soft-Delete</a>
                              </div>
                           </td>
                        @endauth
                     </tr>
                  @endforeach
               @endif

               {{-- All code type --}}
               @if(isset($allCodeTypes))
                  @foreach($allCodeTypes as $codeType)
                     @php
                        $AllCodes = App\AllCode::where('codeTypeId', $codeType->id)->get();
                     @endphp

                     @foreach($AllCodes as $all_Code)
                        <tr>                         
                           <td class="text-center">
                              <lable>{{$all_Code->codeTitle}}</lable>
                           </td>
                           <td class="text-light"> 
                              <button class="btn btn-sm btn-warning copy float-right" data-clipboard-target="#copy{{$all_Code->id}}" onclick="copy(this); copy2(this);">Copy</button>
                              <small id="copy{{$all_Code->id}}" >  
                                 <?php echo "<pre >". htmlspecialchars($all_Code->code,ENT_QUOTES)."</pre>";?>
                              </small>                                   
                           </td>                      
                           @auth
                           <!-- Action -->
                              <td class="text-center">
                                 <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-sm btn-success text-light my-1" data-toggle="modal" data-target="#editCode" data-id="{{$all_Code->id}}" data-code_title="{{$all_Code->codeTitle}}" data-code="{{$all_Code->code}}">Edit</a>
                                    
                                    <a class="btn btn-sm btn-danger text-light my-1" onclick="return confirm('Are you want to delete this code?')" href="{{ url('softDelete', $all_Code->id)}}">Soft-Delete</a>
                                 </div>
                              </td>
                           @endauth
                        </tr>
                     @endforeach
                  @endforeach
               @endif

               {{-- Soft Delete code --}}
               @if(isset($trashedCodeTypes))
                  @foreach($trashedCodeTypes as $codeType)
                     @php
                        $AllCodes = App\AllCode::onlyTrashed()->where('codeTypeId', $codeType->id)->get();
                     @endphp

                     @foreach($AllCodes as $all_Code)
                        <tr>                         
                           <td class="text-center">
                              <lable>{{$all_Code->codeTitle}}</lable>
                           </td>
                           <td class="text-light"> 
                              <button class="btn btn-sm btn-warning copy float-right" data-clipboard-target="#copy{{$all_Code->id}}" onclick="copy(this); copy2(this);">Copy</button>
                              <small id="copy{{$all_Code->id}}" >  
                                 <?php echo "<pre >". htmlspecialchars($all_Code->code,ENT_QUOTES)."</pre>";?>
                              </small>                                   
                           </td>                      
                           @auth
                           <!-- Action -->
                              <td class="text-center">
                                 <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-sm btn-success text-light my-1" href="{{ url('restore', $all_Code->id)}}">Restore</a>
                                    <a class="btn btn-sm btn-danger text-light my-1" onclick="return confirm('Are you want to permanently delete this code?')" href="{{ url('forceDelete', $all_Code->id)}}">Fource Delete</a>
                                 </div>
                              </td>
                           @endauth
                        </tr>
                     @endforeach
                  @endforeach
               @endif
            </tbody>
         </table>
      </div>

   </div>
@endsection
