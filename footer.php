   <script>
      //paste this code under head tag or in a seperate js file.
      // Wait for window load
      $(window).load(function () {
         // Animate loader off screen
         $(".se-pre-con").fadeOut("slow");
      });
   </script>

   <script>
       $('.confirmation').on('click', function () {
           return confirm('Are you sure?');
       });
   </script>

   <script>
         $(document).ready(function() {
            $('#dataTables-example').DataTable({
               responsive: true
            });
         });
   </script>

   <script type="text/javascript">
       $(document).ready(function () {

           demo.initChartist();

           $.notify({
               icon: 'pe-7s-gift',
               message: "Welcome to  Admin Panel."

           }, {
               type: 'info',
               timer: 4000
           });
       });
   </script>

   <script type="text/javascript">
      var clipboard = new ClipboardJS('.btn2');

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
      var clipboard = new ClipboardJS('.btn3');

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

   
 
   <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
   <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
   <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
   <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>
   <script src="assets/js/light-bootstrap-dashboard.js"></script>
 </body> 
</html>