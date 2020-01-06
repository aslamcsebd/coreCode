<div class="sidebar" data-color="green" data-image="assets/img/sidebar-5.jpg">
   <div class="sidebar-wrapper">
      <div class="logo">
          <a href="adminHome.php" class="simple-text">
             Code - Note - Guide
          </a>
      </div>
         <ul class="nav">
            <?php 
               $sql  ="select * from code_type order by id ASC";
               $result5  =  mysqli_query($code,$sql);
               while($codeType = mysqli_fetch_assoc($result5)) { ?>
                  <li>
                     <a class="btn btn-fill" href="view_code.php?type=<?= $codeType['code_name'] ?>">
                        <i class="pe-7s-plus"></i>
                        <p><?= $codeType['code_name'] ?></p>
                     </a>
                  </li>
               <?php } ?>
            <li>
               <a class="btn btn-fill" href="view_code.php?type=all">
                  <i class="pe-7s-plus"></i>
                  <p>All</p>
               </a>
            </li>
            
            <?php if ($_SESSION['adminName']=='aslamctg'){ ?>
               <li class="itemAdd">

                  &nbsp;

                  <div class="row" style="margin: 0px;">
                     <form method="POST" class="col-md-offset-2">
                        <input name="itemAdd" class="col-md-6" placeholder="Add new item" required style="padding: 0px;">
                        <button>Ok</button>
                     </form>
                  </div>

                  &nbsp;

                  <div class="row" style="margin: 0px;">                     
                     <form method="POST" class="col-md-offset-2">
                        <select name='delete_type' class="col-md-6" style="padding: 0px;">
                           <option value="">Delete type</option>
                           <?php 
                              $sql2 ="select * from code_type order by id ASC";
                              $result2 = mysqli_query($code,$sql2);
                              while($codeType2 = mysqli_fetch_assoc($result2)) { ?>
                                 <option value="<?= $codeType2['code_name'] ?>">
                                    <?= $codeType2['code_name'] ?>
                                 </option>
                           <?php } ?>
                        </select>                       
                        <button>Delete</button>
                     </form>
                  </div>
               </li>
            <?php } ?>
         </ul>
      <hr>
   </div>
</div>

<?php 
   if (isset($_POST['itemAdd'])) {
         $itemAdd = $_POST['itemAdd'];
         $sql="insert into code_type (id,code_name) values (null,'$itemAdd')";
         $result=mysqli_query($code,$sql);
            if ($result) {
               $sql2="CREATE TABLE $itemAdd (
                  id int NOT NULL AUTO_INCREMENT,
                  item varchar(100),
                  code varchar(1000),
                  PRIMARY KEY(id)         
               )";         
            $result2=mysqli_query($code,$sql2);
         }
   }

   if (isset($_POST['delete_type'])) {     
      $item_type = $_POST['delete_type'];

      $sql="delete from code_type where code_name='$item_type'";
      $result=mysqli_query($code,$sql);
      
      if ($result) {
         $sql2 = "DROP TABLE $item_type";        
         $result=mysqli_query($code, $sql2);
      }
   }   
 ?>