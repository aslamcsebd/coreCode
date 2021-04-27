@extends('layouts.app')

@section('pageTitle')
   Code List
@endsection

@section('content')
   <div class="content-wrapper">
      <div class="container-fluid">
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
         @auth
            <div class="row row-cols-2 row-cols-sm-4 row-cols-md-5 row-cols-lg-6 border">
               @php 
                  $id = Auth::user()->id;
                  $codeTypes = App\CodeType::where('userId', $id)->get();
               @endphp
               @foreach($codeTypes as $codeType)
                  @php 
                     $codeTypeName = App\AllCode::where('codeTypeId', $codeType->id)->get(); 
                  @endphp
                  @if ($codeTypeName->count() > 0)
                     <div class="col firstView {{ (!($loop->index % 2) ? 'even_firstView' : 'odd_firstView') }}">
                        <section class="menu-section">
                           <a class="btn btn-fill" href="{{ url('viewCode',$codeType->id) }}">
                              <span> {{ $codeTypeName->count() }} </span> <br>
                              <span>{{ $codeType->codeType }}</span>
                           </a>
                        </section>
                     </div>                     
                  @endif
               @endforeach
            </div>            
            <hr>
            <div class="row row-cols-2 row-cols-sm-4 row-cols-md-5 row-cols-lg-6 justify-content-center">
               <div class="col sum">
                  <section class="menu-section">
                     <a class="btn btn-fill" href="{{ url('viewAllCode') }}">      
                        <span>
                           @php
                              $total = 0;
                              foreach($codeTypes as $codeType){
                                 $sum = App\AllCode::where('codeTypeId', $codeType->id)->get()->count();
                                 $total = $sum + $total; 
                              }
                           @endphp
                           {{$total}}
                        </span> <br>
                        <span>Sum all code</span>
                     </a>         
                  </section>
               </div>
            </div>

         @else

            <div class="row row-cols-2 row-cols-sm-4 row-cols-md-5 row-cols-lg-6 border">
               @php 
                  $codeTypes = App\CodeType::all();
               @endphp                           
               
               @foreach($codeTypes as $codeType)
                  @php $codeTypeName = App\AllCode::where('codeTypeId', $codeType->id)->get(); @endphp

                     @if ($codeTypeName->count() > 0)
                        <div class="col firstView {{ (!($loop->index % 2) ? 'even_firstView' : 'odd_firstView') }}">
                           <section class="menu-section">
                              <a class="btn btn-fill" href="{{ url('viewCode', $codeType->id) }}">
                                 <span> {{ $codeTypeName->count() }} </span> <br>
                                 <span>{{ $codeType->codeType }}</span>
                              </a>
                           </section>
                        </div>
                     @endif
               @endforeach
            </div>                
            <div class="row justify-content-center order order_extra ">
               <div class="col-md-2 col-sm-2 col-xs-6 sum">
                  <section class="menu-section">
                     <a class="btn btn-fill" href="{{ url('viewAllCode') }}">      
                        <span>
                           @php
                              $total = 0;
                              foreach($codeTypes as $codeType){
                                 $sum = App\AllCode::where('codeTypeId', $codeType->id)->get()->count();
                                 $total = $sum + $total; 
                              }
                           @endphp
                           {{$total}}
                        </span><br>
                        <span>Sum all code</span>
                     </a>         
                  </section>
               </div>
            </div>
         @endauth
      </div>
   </div>
@endsection
