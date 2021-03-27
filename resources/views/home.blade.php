@extends('layouts.app')

@section('pageTitle')
   Code List
@endsection

@section('content')
   <div class="content-wrapper">
            
      <div class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-6">
                  <h4 class="m-0 text-dark">Programming Code List</h4>
               </div>
               <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
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

         @auth
            <div class="row row-cols-3 row-cols-sm-4 row-cols-md-5 row-cols-lg-6 border">
               @php 
                  $id = Auth::user()->id;
                  $codeTypes = App\codeType::where('userId', $id)->get();
               @endphp
               @foreach($codeTypes as $codeType)
                  @php 
                     $codeTypeName = App\allCode::where('codeTypeId', $codeType->id)->get(); 
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
            <div class="row justify-content-center order order_extra ">
               <div class="col-md-2 col-sm-2 col-xs-6 sum">
                  <section class="menu-section">
                     <a class="btn btn-fill" href="{{ url('viewCodeAll') }}">      
                        <span>
                           @php
                              $total = 0;
                              foreach($codeTypes as $codeType){
                                 $sum = App\allCode::where('codeTypeId', $codeType->id)->get()->count();
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

            <div class="row row-cols-3 row-cols-sm-4 row-cols-md-5 row-cols-lg-6 border">
               @php 
                  $codeTypes = App\codeType::all();
               @endphp                           
               
               @foreach($codeTypes as $codeType)
                  @php $codeTypeName = App\allCode::where('codeTypeId', $codeType->id)->get(); @endphp

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
                     <a class="btn btn-fill" href="{{ url('viewCodeAll') }}">      
                        <span>
                           @php
                              $total = 0;
                              foreach($codeTypes as $codeType){
                                 $sum = App\allCode::where('codeTypeId', $codeType->id)->get()->count();
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
   <footer class="main-footer">
      <strong>Copyright &copy; 2014-2019 <a href="">গ্রন্থশালা</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
         <b>Version</b> 3.0.5
      </div>
   </footer>
@endsection
