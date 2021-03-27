@extends('layouts.app')

@section('pageTitle')
   Code List
@endsection

@section('content')

   <div class="content-wrapper">
      <div class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-4">
                  <h5 class="m-0 text-dark">Programming Code List</h5>
               </div>
               <div class="col-4 text-center">
                  @if(isset($allCodeTypes))
                     <b>All Code</b>
                  @elseif(isset($CodeTypeName))
                     <b>{{$CodeTypeName->codeType}}</b>
                  @elseif(isset($trashedCode))
                     <b>{{$trashedCode}}</b>
                  @endif
               </div>
               <div class="col-4">
                  <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                     <li class="breadcrumb-item active">View Code</li>
                  </ol>
               </div>
            </div>
         </div>
      </div> 

      <div class="container-fluid">
         @foreach (['success', 'danger', 'warning', 'info'] as $alert)         
            @if ($message = Session::get($alert))
               <div class="alert alert-{{$alert}} text-center alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>  
                  <strong>{{ $message }}</strong>
               </div>
            @endif
         @endforeach
         <div class="border">
            <table class="table order table-bordered able-hover">
               <thead class="text-center">
                  <tr>                         
                     <th width="10%">Title</th>
                     <th>Code</th>
                     @auth
                        <th width="12%">Action</th>
                     @endauth
                  </tr>      
               </thead>
               <tbody>
                  
                  {{-- Single code type... --}}
                  @if(isset($singleCodeType))
                     @foreach($singleCodeType as $all_Code)
                        <tr>                         
                           <td class="text-center">
                              <lable>{{$all_Code->codeTitle}}</lable>
                           </td>
                           <td class="text-light"> 
                              <button class="btn btn-sm btn-warning copy float-right" data-clipboard-target="#copy{{$all_Code->id}}">Copy</button>
                              <small id="copy{{$all_Code->id}}" >  
                                 <?php echo "<pre >". htmlspecialchars($all_Code->code,ENT_QUOTES)."</pre>";?>
                              </small>                                   
                           </td>                      
                           @auth
                           <!-- Action -->
                              <td class="text-center">
                                 <a class="btn btn-sm btn-success text-light my-1" data-toggle="modal" data-target="#editCode" data-id="{{$all_Code->id}}" data-code_title="{{$all_Code->codeTitle}}" data-code="{{$all_Code->code}}">Edit</a>
                              
                                 <a class="btn btn-sm btn-danger text-light my-1" onclick="return confirm('Are you want to soft Delete this code?')" href="{{ url('softDelete', $all_Code->id)}}">Soft-Delete</a>
                              </td>
                           @endauth
                        </tr>
                     @endforeach
                  @endif

                  {{-- All code type --}}
                  @if(isset($allCodeTypes))
                     @foreach($allCodeTypes as $codeType)
                        @php
                           $allCodes = App\allCode::where('codeTypeId', $codeType->id)->get();
                        @endphp

                        @foreach($allCodes as $all_Code)
                           <tr>                         
                              <td class="text-center">
                                 <lable>{{$all_Code->codeTitle}}</lable>
                              </td>
                              <td class="text-light"> 
                                 <button class="btn btn-sm btn-warning copy float-right" data-clipboard-target="#copy{{$all_Code->id}}">Copy</button>
                                 <small id="copy{{$all_Code->id}}" >  
                                    <?php echo "<pre >". htmlspecialchars($all_Code->code,ENT_QUOTES)."</pre>";?>
                                 </small>                                   
                              </td>                      
                              @auth
                              <!-- Action -->
                                 <td class="text-center">
                                    <a class="btn btn-sm btn-success text-light my-1" data-toggle="modal" data-target="#editCode" data-id="{{$all_Code->id}}" data-code_title="{{$all_Code->codeTitle}}" data-code="{{$all_Code->code}}">Edit</a>
                                    
                                    <a class="btn btn-sm btn-danger text-light my-1" onclick="return confirm('Are you want to delete this code?')" href="{{ url('softDelete', $all_Code->id)}}">Soft-Delete</a>
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
                           $allCodes = App\allCode::onlyTrashed()->where('codeTypeId', $codeType->id)->get();
                        @endphp

                        @foreach($allCodes as $all_Code)
                           <tr>                         
                              <td class="text-center">
                                 <lable>{{$all_Code->codeTitle}}</lable>
                              </td>
                              <td class="text-light"> 
                                 <button class="btn btn-sm btn-warning copy float-right" data-clipboard-target="#copy{{$all_Code->id}}">Copy</button>
                                 <small id="copy{{$all_Code->id}}" >  
                                    <?php echo "<pre >". htmlspecialchars($all_Code->code,ENT_QUOTES)."</pre>";?>
                                 </small>                                   
                              </td>                      
                              @auth
                              <!-- Action -->
                                 <td class="text-center">
                                    <a class="btn btn-sm btn-success text-light my-1" href="{{ url('restore', $all_Code->id)}}">Restore</a>
                                    <a class="btn btn-sm btn-danger text-light my-1" onclick="return confirm('Are you want to permanently delete this code?')" href="{{ url('forceDelete', $all_Code->id)}}">Fource-Delete</a>
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

   </div>
   <footer class="main-footer">
      <strong>Copyright &copy; 2021 <a href="">Core Code</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
         <b>Version</b> 3.0.5
      </div>
   </footer>
@endsection

