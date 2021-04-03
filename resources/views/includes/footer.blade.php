<footer class="main-footer">
   <strong>Copyright &copy; 2021 <a href="">Core Code Note</a>.</strong>
   All rights reserved.
   <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
   </div>
</footer>   

<!-- jQuery -->
   <script src="{{ asset('js/jquery.min.js') }}"></script>

   <!-- Bootstrap v4.6.0 -->
   <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

   <!-- overlayScrollbars -->
   <script src="{{ asset('js/jquery.overlayScrollbars.min.js') }}"></script>
   
   <!-- AdminLTE App -->
   <script src="{{ asset('js/adminlte.min.js') }}"></script>
   
   {{-- Pushmenu --}}
   <script src="{{ asset('js/custom.js') }}"></script>

   {{-- Datatable --}}
   <script src="{{ asset('js/dataTables.min.js') }}"></script>   

   {{-- clipboard --}}
   <script src="{{ asset('js/clipboard.min.js') }}"></script>   

{{-- script --}}
   {{-- Navbar Fixed --}}
      <script type="text/javascript">
         // if ($(window).width() > 992) {
           $(window).scroll(function(){
              if ($(this).scrollTop() > 0) { //default: 40
                 $('#navbar_top').addClass("fixed-top");
                 // add padding top to show content behind navbar
                 $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
               }else{
                 $('#navbar_top').removeClass("fixed-top");
                  // remove padding top from body
                 $('body').css('padding-top', '0');
               }   
           });
         // } // end
      </script>

   {{-- Bootstrap alert --}}
      <script type="text/javascript">
         window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
               $(this).remove(); 
            });
         }, 5000);
      </script>

      <script>
          $('.confirmation').on('click', function () {
              return confirm('Are you sure?');
          });
      </script>

   {{-- Datatable --}}
      <script type="text/javascript">
         $(document).ready( function () {
            $('.table').DataTable();
         } );

         // $('.table').dataTable( {
         //    "pageLength": 3
         // } );
      </script>

      <script type="text/javascript">
         $('.table').DataTable({
            "lengthMenu": [ [5, 10, 25, 50, -1], [5, 10, 25, 50, "All"] ]
         });
      </script>

   <!-- ClipboardJS -->
      <script type="text/javascript">
         var clipboard = new ClipboardJS('.copy');
         clipboard.on('success', function(e) {
             console.info('Action:', e.action);
             console.info('Text:', e.text);
             console.info('Trigger:', e.trigger);

             e.clearSelection();
         });
         clipboard.on('error', function(e) {
             console.error('Action:', e.action);
             console.error('Trigger:', e.trigger);
         });
      </script>

   {{-- Bootstrap Modal --}}
      <script type="text/javascript">
         $('#editCode').on('show.bs.modal', function (event) {
            // console.log('Model Opened')
            var button = $(event.relatedTarget)

            var id = button.data('id') 
            // var codeTitle = button.data('codeTitle') [Camel case not allow. So don't use it]
            var codeTitle = button.data('code_title') 
            var code = button.data('code') 
            
            var modal = $(this)
            
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #codeTitle').val(codeTitle);
            modal.find('.modal-body #code').val(code);
         })
      </script>
