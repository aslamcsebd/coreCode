
<aside class="main-sidebar sidebar-dark-primary elevation-4" >
   <a href="{{url('/')}}" class="brand-link">
      <i lass="nav-icon fas fa-school"></i>
      <span class="brand-text font-weight-light text-center pl-2">Victory Loves Preparation</span>
   </a>
   <div class="sidebar">
      <nav class="mt-2">
         @auth
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
               @php
                  $user = Auth::user()->id;
                  $codeTypes = App\CodeType::where('userId', $user)->get();
               @endphp

               @foreach($codeTypes as $codeType)
                  @php $number = App\AllCode::where('codeTypeId', $codeType->id)->get()->count(); @endphp                  
                     <li class="nav-item">
                        <a href="{{ url('viewCode',$codeType->id) }}" class="nav-link ctive">
                           <i class="nav-icon fas fa-chart-pie"></i>
                           <p>{{ $codeType->codeType}} [{{$number}}]</p>
                        </a>
                     </li>
               @endforeach
            </ul>
         @else
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
               @php
                  $codeTypes = App\CodeType::all();
               @endphp

               @foreach($codeTypes as $codeType)
                  @php $number = App\AllCode::where('codeTypeId', $codeType->id)->get()->count(); @endphp                  
                     <li class="nav-item">
                        <a href="{{ url('viewCode',$codeType->id) }}" class="nav-link ctive">
                           <i class="nav-icon fas fa-chart-pie"></i>
                           <p>{{ $codeType->codeType}} [{{$number}}]</p>
                        </a>
                     </li>
               @endforeach
            </ul>
         @endauth
      </nav>
   </div>
</aside>
