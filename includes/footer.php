
      <script src="../assets/js/jquery.min.js"></script>
      <script src="../assets/js/bootstrap.min.js"></script>

      <script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>      
      <script src="https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"></script> 
   
      <script type="text/javascript">
         window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
               $(this).remove(); 
            });
         }, 5000);
      </script>
   
   </body>
</html>


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