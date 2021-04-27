@auth
   {{-- Add code type --}}
      <div class="modal fade" id="codeType" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Code Type</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
               </div>
               <div class="modal-body">
                  <form action="{{ url('addItem') }}" method="post" class="needs-validation" >
                     @csrf
                     <div class="row">
                        <div class="form-group col-5">
                           <label for="iconName">Icon Name :</label>                         
                           <select class="form-control" id="codeTypeSelect" name="codeTypeIconId">
                              <option value="">Select Icon... </option>
                              @php
                                 $userId = Auth::user()->id;
                                 $useIcons = App\CodeType::where('userId', $userId)->get();
                                 $usedIconIists = collect($useIcons)->pluck('codeTypeIconId');

                                 $allIcons = App\CodeTypeIcon::all();
                                 $allIconLists = collect($allIcons)->pluck('id');
                                 $unUsedIconLists = $allIconLists->diff($usedIconIists); 
                              @endphp

                              @foreach($unUsedIconLists as $id)
                                 @php 
                                    $icon = App\CodeTypeIcon::find($id);
                                 @endphp                           
                                 <option value="{{$icon->id}}">
                                    {{-- {!!$icon->iconLink!!} --}}
                                    {{$icon->iconName}}   [Logo]
                                 </option>
                              @endforeach
                           </select>
                           <small class="text-danger"><b>N:B</b> <i>Not Mandatory</i></small>                           
                        </div>
                        <div class="form-group col">
                           <label for="codeType">Code Type Name :</label>
                           <input id="codeType" name="codeType" class="form-control mb-2" type="text" value="{{ old('codeType')}}" placeholder="Ex: HTML5, CSS3 etc [One time]" required>
                        </div>
                     </div>

                     <div class="modal-footer">
                        <div class="btn-group" role="group" aria-label="Basic example">
                           <button class="btn btn-success btn-sm" type="submit">Save</button>
                           <button class="btn btn-danger btn-sm" type="button" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>

   {{-- Add code --}}
      <div class="modal fade" id="addCode" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title f-w-600" id="exampleModalLabel">Add code</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
               </div>
               <div class="modal-body">                  
                  <form action="{{ url('addCode') }}" method="post" enctype="multipart/form-data" class="needs-validation" >
                     @csrf
                     <div class="form">
                        <div class="form-group">
                           <label for="codeTypeSelect" class="mb-1">Code Type : </label>
                           <select required="required" class="form-control" id="codeTypeSelect" name="codeTypeId">
                              <option selected>Choose... </option>
                              @php
                                 $user = Auth::user()->id;
                                 $codeTypes = App\CodeType::where('userId',  $user)->get();
                              @endphp
                              @foreach($codeTypes as $codeType)
                                  @php 
                                    $number = App\AllCode::where('codeTypeId', $codeType->id)->get()->count();
                                  @endphp
                                    <option value="{{$codeType->id}}">{{$codeType->codeType}}  [{{$number}}]</option>
                              @endforeach
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="codeTitle" class="mb-1">Code title :</label>
                           <input name="codeTitle" class="form-control" id="codeTitle" type="text" value="{{ old('codeTitle')}}" placeholder="Ex: This is html code etc" required>
                        </div>
                        <div class="form-group">
                           <label for="code" class="mb-1">Full Code :</label>
                           <textarea name="code" class="form-control" id="code" type="text" rows="5" value="{{ old('code')}}" required></textarea>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <div class="btn-group" role="group" aria-label="Basic example">
                           <button class="btn btn-success btn-sm" type="submit">Save</button>
                           <button class="btn btn-danger btn-sm" type="button" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>

   {{-- Edit code type --}}
      <div class="modal fade" id="editCode" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title f-w-600" id="exampleModalLabel">Edit code</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
               </div>
               <div class="modal-body">
                  
                  <form action="{{ url('editCode') }}" method="post" enctype="multipart/form-data" class="needs-validation" >
                     @csrf
                     <div class="form">
                        <div class="form-group">
                           <label for="codeTypeSelect" class="mb-1">Change Code Type : [If need]</label>
                           <select class="form-control" id="codeTypeSelect" name="codeTypeId">
                              <option value="">Choose... </option>
                              @php
                                 $userId = Auth::user()->id;
                                 $codeTypes = App\CodeType::where('userId', $userId)->get();
                              @endphp
                              @foreach($codeTypes as $codeType)
                                 <option value="{{$codeType->id}}">{{$codeType->codeType}}</option>
                              @endforeach
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="codeTitle" class="mb-1">Code title :</label>
                           <input name="codeTitle" class="form-control" id="codeTitle" type="text">
                           <input name="id" class="form-control" id="id" type="hidden">
                        </div>
                        <div class="form-group">
                           <label for="code" class="mb-1">Full Code :</label>
                           <textarea name="code" class="form-control" id="code" type="text" rows="5"></textarea>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <div class="btn-group" role="group" aria-label="Basic example">
                           <button class="btn btn-success btn-sm" type="submit">Change Code</button>
                           <button class="btn btn-danger btn-sm" type="button" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                  </form>
                  
               </div>
            </div>
         </div>
      </div>

   {{-- Add code type icon --}}
      <div class="modal fade" id="addIcon" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title f-w-600" id="exampleModalLabel">Edit code type icon</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
               </div>
               <div class="modal-body">         
                  <form action="{{ url('addIcon') }}" method="post" enctype="multipart/form-data" class="needs-validation">
                     @csrf
                     <div class="form">
                        <div class="row">
                           <div class="form-group col-4">
                              <label for="iconName">Icon Name :</label>
                              <input name="iconName" class="form-control" type="text" placeholder="Ex: Html5, Css3..." required>
                           </div>
                           <div class="form-group col">
                              <label for="iconLink">Icon Link :</label>
                              <input name="iconLink" class="form-control mb-2" type="text" placeholder="Ex: <i class='fab fa-Name'></i>" required>
                              
                              <a class="btn-sm btn-success" href="https://fontawesome.com/" target="_blank">Search Font</a>
                           </div>
                        </div>                        
                     </div>

                     <div class="modal-footer">
                        <div class="btn-group" role="group" aria-label="Basic example">
                           <button class="btn btn-success btn-sm" type="submit">Change Icon</button>
                           <button class="btn btn-danger btn-sm" type="button" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                  </form>                  
               </div>
            </div>
         </div>
      </div>

   {{-- Edit code type icon --}}
      <div class="modal fade" id="editIcon" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title f-w-600" id="exampleModalLabel">Edit code type icon</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
               </div>
               <div class="modal-body">         
                  <form action="{{ url('editIcon') }}" method="post" enctype="multipart/form-data" class="needs-validation">
                     @csrf
                     <div class="form">
                        <div class="row">                           
                           <div class="form-group col-3">
                              <label for="iconName">Icon Name :</label>
                              <input name="iconName" class="form-control" id="iconName" type="text">
                              <input name="id" class="form-control" id="id" type="hidden">
                           </div>
                           <div class="form-group col">
                              <label for="iconLink">Icon Link :</label>
                              <input name="iconLink" class="form-control mb-2" id="iconLink" type="text">
                              
                              <a class="btn-sm btn-success" href="https://fontawesome.com/" target="_blank">Search Font</a>
                           </div>
                        </div>                        
                     </div>

                     <div class="modal-footer">
                        <div class="btn-group" role="group" aria-label="Basic example">
                           <button class="btn btn-success btn-sm" type="submit">Change Icon</button>
                           <button class="btn btn-danger btn-sm" type="button" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                  </form>                  
               </div>
            </div>
         </div>
      </div>
@endauth
