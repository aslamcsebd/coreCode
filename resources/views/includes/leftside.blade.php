
<!-- Side bar -->
   <aside class="main-sidebar sidebar-dark-primary">
      <!-- Brand Logo -->
      <!-- <a href="index.html" class="brand-link bbg-light">
         <i class="nav-icon fas fa-school pl-3"></i>
         <span class="brand-text font-weight-light text-center pl-2">গ্রন্থশালা</span>
      </a> -->
      <!-- Sidebar -->
      <div class="sidebar">
         <nav class="mt-2">
            @auth
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  @php
                     $user = Auth::user()->id;
                     $codeTypes = App\codeType::where('userId', $user)->get();
                  @endphp

                  @foreach($codeTypes as $codeType)
                     @php $number = App\allCode::where('codeTypeId', $codeType->id)->get()->count(); @endphp
                     <li class="nav-item has-treeview">
                        <a href="{{ url('viewCode',$codeType->id) }}" class="nav-link">
                           {{-- <i class="nav-icon fas fa-book"></i> --}}
                           <p>
                              {{ $codeType->codeType}} [{{$number}}]
                              {{-- <i class="right fas fa-angle-left"></i> --}}
                           </p>
                        </a>
                     </li>
                  @endforeach
               </ul>
            @else
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  @php
                     $codeTypes = App\codeType::all();
                  @endphp

                  @foreach($codeTypes as $codeType)
                  @php $number = App\allCode::where('codeTypeId', $codeType->id)->get()->count(); @endphp
                     <li class="nav-item has-treeview">
                        <a href="{{ url('viewCode',$codeType->id) }}" class="nav-link">
                           {{-- <i class="nav-icon fas fa-book"></i> --}}
                           <p>
                              {{ $codeType->codeType}} [{{$number}}]
                              {{-- <i class="right fas fa-angle-left"></i> --}}
                           </p>
                        </a>
                     </li>
                  @endforeach
               </ul>            
            @endauth
         </nav>
      </div>

   </aside>
