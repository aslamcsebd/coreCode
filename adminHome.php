<?php  
   session_start();
   include('connection.php'); 
   $code = code();
?>

<?php include('header.php'); ?>

<div class="wrapper"> 
   <?php include('left_header.php');   ?>
   <div class="main-panel adminHomeBg">

      <?php include('nav_bar.php'); ?>  
      <div class="pull-right">
      </div>
      <div class="container">
         <div id="page-wrapper">
            <div class="row middle">

               <div class="row center-block adminHome">
                  <div class="first">
                     <section class="menu-section" >                    
                        <div class="profile text-center" >
                        <?php $rand=rand(1,3); ?>                          
                           <img src="admin_image/aslam_<?=$rand;?>.jpg">
                           <h5 class="ownerName">Md Aslam Hossain</h5>    
                        </div>               
                     </section>
                  </div>
               </div>

               <div class="row adminHome center-block adminHomeBg2">
                  <?php 
                     $sql ="select * from code_type order by id ASC";
                     $result = mysqli_query($code,$sql);
                     $sum=0;
                     while($codeType = mysqli_fetch_assoc($result)) {
                        $code_name=$codeType['code_name'];

                        $sql2 ="select * from $code_name";
                        $result2=mysqli_query($code,$sql2);
                        $total_code = mysqli_num_rows($result2); 
                                      
                        $sum = $sum + $total_code;
                     ?>
                     <div class="col-md-2 col-sm-6 col-xs-6 middle2">
                        <section class="menu-section" >  
                           <a href="view_code.php?type=<?= $code_name; ?>">
                               <div class="image-thumbnail"> 
                                 <h3><?php echo $total_code; ?></h3>
                                 <h5><?php echo $code_name ?></h5>
                              </div> 
                           </a>                               
                        </section>
                     </div>   
                  <?php } ?>  
               </div>

               <div class="row adminHome" align="center">
                  <div class="col-md-offset-5 col-md-2 ol-sm-offset-5 ol-sm-2 col-xs-offset-3 col-xs-6 middle3">
                     <section class="menu-section">
                        <a href="view_code.php?type=all">
                           <div class="image-thumbnail" >                             
                              <h3><?php echo $sum; ?></h3>
                              <h5><?php echo "Sum all code"; ?></h5>
                           </div>
                        </a>         
                     </section>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include('footer.php'); ?>