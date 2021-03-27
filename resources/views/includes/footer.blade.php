
   <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
   <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
   <script>
      $.widget.bridge('uibutton', $.ui.button)
   </script>
   <!-- Bootstrap 4 -->
   <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
   <!-- Sparkline -->
   <script src="{{ asset('assets/js/sparkline.js') }}"></script>
   <!-- Tempusdominus Bootstrap 4 -->
   <script src="{{ asset('assets/js/bootstrap-4.min.js') }}"></script>
   <!-- overlayScrollbars -->
   <script src="{{ asset('assets/js/jquery.overlayScrollbars.min.js') }}"></script>
   <!-- AdminLTE App -->
   <script src="{{ asset('assets/js/adminlte.js') }}"></script>
   <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
   <script src="{{ asset('assets/js/dashboard.js') }}"></script>
   <!-- AdminLTE for demo purposes -->
   <script src="{{ asset('assets/js/demo.js') }}"></script>
   <script src="{{ asset('assets/js/custom.js') }}"></script>
   
  
   {{-- <link rel="stylesheet" href="{{ asset('assets/css/jquery.dataTables.min.css') }}"> --}}

  <script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>     
      <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>

   <script src="https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"></script> 
   <script type="text/javascript">
      window.setTimeout(function() {
         $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
         });
      }, 5000);
   </script>     

   <script type="text/javascript">
      $(document).ready( function () {
         $('.table').DataTable();
      } );

      // $('.table').dataTable( {
      //    "pageLength": 3
      // } );
   </script>

    <!-- optional -->
   <script type="text/javascript">
      $('.table').DataTable({
         "lengthMenu": [ [5, 10, 25, 50, -1], [5, 10, 25, 50, "All"] ]
      });
   </script>

   <script>
       $('.confirmation').on('click', function () {
           return confirm('Are you sure?');
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

   <script type="text/javascript">
      
      if ($(window).width() > 992) {
        $(window).scroll(function(){  
           if ($(this).scrollTop() > 40) {
              $('#navbar_top').addClass("fixed-top");
              // add padding top to show content behind navbar
              $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
            }else{
              $('#navbar_top').removeClass("fixed-top");
               // remove padding top from body
              $('body').css('padding-top', '0');
            }   
        });
      } // end
   </script>


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

  
 </body>
</html>