<?php  
   include('../includes/connection.php'); 
   $code = code();
?>

<?php include('../includes/header.php'); ?>

   <div class="container-fluid admin">
      <?php include('../includes/navbar.php'); ?> 

      <div class="row">

         <div class="col-2 left-side-section">
            <?php include('../includes/left-side.php'); ?> 
         </div> 

         <div class="col-10 border">
            <div class="row justify-content-center border border_extra">
               <div class="col-2 text-center profile">   
                  <?php $rand=rand(1,3); ?>                          
                  <img class="img-thumbnail" src="../admin_image/aslam_<?=$rand;?>.jpg" alt="Responsive image">
                  <p class="ownerName text-white">Md Aslam Hossain</p>  
               </div>
            </div>
            <div class="border border_extra">
               <div class="row">
                  <?php 
                     $sql ="select * from code_type order by id ASC";
                     $result = mysqli_query($code,$sql);
                     $sum=0;
                     $loop = 1;
                     while($codeType = mysqli_fetch_assoc($result)) {
                        $code_name=$codeType['code_name'];
                        $sql2 ="select * from $code_name";
                        $result2=mysqli_query($code,$sql2);
                        $total_code = mysqli_num_rows($result2);                                       
                        $sum = $sum + $total_code;
                  ?>

                  <div class="col-md-2 col-sm-6 col-xs-6 firstView <?= (!($loop % 2) ? 'even_firstView' : 'odd_firstView') ?>">
                     <section class="menu-section">
                        <a class="btn btn-fill" href="view_code.php?type=<?= $code_name; ?>">
                           <span><?= $total_code; ?></span> <br>
                           <span><?= $code_name ?></span>
                        </a>
                     </section>
                  </div>   
                  <?php $loop++; } ?>  
               </div>
               <hr>
               <div class="row justify-content-center order order_extra">
                  <div class="col-md-2 col-sm-2 col-xs-6 sum">
                     <section class="menu-section">
                        <a class="btn btn-fill" href="view_code.php?type=all">      
                           <span><?= $sum; ?></span> <br>
                           <span><?= "Sum all code"; ?></span>
                        </a>         
                     </section>
                  </div>
               </div>
            </div>
         </div> 
      </div>
   </div>

<?php include('../includes/footer.php'); ?>