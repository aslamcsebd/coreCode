
   <div class="left-side border">
      <h6 class="text-center">
         <a href="../pages/admin.php" class="text-white"> Code - Note - Guide </a>
      </h6>
      <hr>
      <ul>
         <?php 
            $sql = "select * from code_type order by id ASC";
            $result5 = mysqli_query($code,$sql);
            $loop = 1;
            while($codeType = mysqli_fetch_assoc($result5)) { ?>
               
               <?php 
               $sql2 ="select * from $codeType[code_name]";
                  $result2=mysqli_query($code,$sql2);
                  $total_code = mysqli_num_rows($result2);  ?>
               <li>
                  <a class="btn btn-fill <?= (!($loop % 2) ? 'even' : 'odd') ?>" href="view_code.php?type=<?= $codeType['code_name'] ?>">
                     <?= $codeType['code_name']." (".$total_code.")" ; ?> 
                  </a>
               </li>               
            <?php $loop ++; } ?>
            <li>
               <a class="btn btn-fill bg-success all" href="view_code.php?type=all">All</a>
            </li>
      </ul>

      <hr>
      <div class="left-side-add">

         <?php if ($_SESSION['adminName']=='aslamctg'){ ?>
            <form method="POST">
               <div class="row itemAdd justify-content-center">
                  <input name="itemAdd" class="col-6 text-center" placeholder="Add item" required>
                  &nbsp;
                  <button type="submit" class="btn-sm btn-danger col-4">Add</button>
               </div>
            </form>



            <form method="POST">
               <div class="row justify-content-center">                     
                  <select name='delete_type' class="col-md-6">
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
                  &nbsp;             
                   <button type="submit" class="btn-sm btn-danger col-4">Delete</button> 
               </div>
            </form>
         <?php } ?>
      </div>
      <hr>
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
