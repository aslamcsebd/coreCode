@extends('layouts.app')

@section('pageTitle')
   Code Type Icon
@endsection
@section('content')
   <div class="content-wrapper">
      <div class="row justify-content-center">
         <div class="col-auto">
            <p class="codeTypeName pt-2">
               Code Type Icon
            </p>
         </div>
      </div>
      <div class="container-fluid iconList">         
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
         <table class="table table-bordered table-hover text-center">
            <thead>
               <tr>                         
                  <th>Icon</th>
                  <th>Name</th>
                  <th>Source</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>               
               {{-- Code Type Icon... --}}
               @php $icons = App\CodeTypeIcon::all(); @endphp

               @foreach($icons as $icon)
                  <tr>                         
                     <td>
                        <lable class="fas"> {!!$icon->iconLink!!} </lable> </td>
                     <td>
                        <lable>{{$icon->iconName}}</lable>
                     </td>
                     <td>
                        <small>  
                           <?= "<pre >". htmlspecialchars($icon->iconLink,ENT_QUOTES)."</pre>";?>
                        </small>                                   
                     </td>            
                     <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                           <a class="btn btn-sm btn-success text-light" data-toggle="modal" data-target="#editIcon" data-id="{{$icon->id}}" data-icon_name="{{$icon->iconName}}" data-icon_link="{{$icon->iconLink}}">Edit</a>
                     
                           <a class="btn btn-sm btn-danger text-light" onclick="return confirm('Are you want to delete this icon?')" href="{{ url('iconDelete', $icon->id)}}">Delete</a>

                           <a class="btn btn-sm btn-primary" data-toggle="modal" data-original-title="test" data-target="#addIcon">Add Icon</a>
                        </div>
                     </td>
                  </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
@endsection

