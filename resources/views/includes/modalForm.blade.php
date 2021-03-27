@auth
   {{-- Add code type --}}
   <div class="modal fade" id="codeType" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title f-w-600" id="exampleModalLabel">Add Code Type</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
               
               <form action="{{ url('addItem') }}" method="post" class="needs-validation" >
                  @csrf
                  
                  <input name="userId" type="hidden" value="{{Auth::user()->id}}">

                  <div class="form justify-content-center">
                     <div class="form-group">
                        <label for="codeType" class="mb-1">Add Item Name :</label>
                        <input name="codeType" class="form-control" id="codeType" type="text" value="{{ old('name')}}" placeholder="Ex: HTML5, CSS3 etc [Only one time]..." required>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button class="btn btn-outline-primary" type="submit">Save</button>
                     <button class="btn btn-outline-secondary" type="button" data-dismiss="modal">Close</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>

   {{-- Add code --}}
   <div class="modal fade" id="addCode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <select class="form-select" id="codeTypeSelect" name="codeTypeId">
                           <option selected>Choose... </option>
                           @php
                              $user = Auth::user()->id;
                              $codeTypes = App\codeType::where('userId',  $user)->get();
                           @endphp
                           @foreach($codeTypes as $codeType)
                              <option value="{{$codeType->id}}">{{$codeType->codeType}}</option>
                           @endforeach

                        </select>
                     </div>
                     <div class="form-group">
                        <label for="codeTitle" class="mb-1">Code title :</label>
                        <input name="codeTitle" class="form-control" id="codeTitle" type="text" value="{{ old('codeTitle')}}" placeholder="Ex: This is html code etc" required>
                     </div>
                     <div class="form-group">
                        <label for="code" class="mb-1">Full Code :</label>
                        <textarea name="code" class="form-control" id="code" type="text" rows="5" value="{{ old('code')}}"></textarea>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button class="btn btn-primary" type="submit">Save</button>
                     <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
  
   {{-- Edit code type --}}
   <div class="modal fade" id="editCode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <select class="form-select" id="codeTypeSelect" name="codeTypeId">
                           <option value="">Choose... </option>
                           @php
                              $userId = Auth::user()->id;
                              $codeTypes = App\codeType::where('userId', $userId)->get();
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
                     <button class="btn btn-primary" type="submit">Change Code</button>
                     <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                  </div>
               </form>
               
            </div>
         </div>
      </div>
   </div>

@endauth
