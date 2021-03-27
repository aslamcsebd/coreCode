<?php 
   include('../includes/connection.php'); 
   $code  =  code();

   if (isset($_GET['type']) || $_SESSION['code_type']) { 

      if (isset($_GET['type'])){
         $type=$_GET['type'];
         $_SESSION['code_type']=$type;
      }     

      $type=$_SESSION['code_type'];

      if ($type=='all') {
         // all item without last item
         $type = 'code_type';

         $all_item ="select *from $type where id!=(select max(id) from $type)";
         $all_row_result = mysqli_query($code,$all_item);

         $last_item ="SELECT * FROM $type ORDER BY ID DESC LIMIT 1";
         $last_result = mysqli_query($code,$last_item);

         $first_part = null; 
         while($all_row = mysqli_fetch_assoc($all_row_result)) {
            $first_part = $first_part . "select id,item,code from " . $all_row['code_name'] . " UNION all ";
         }            

         $second_part = null;
         while($last_row = mysqli_fetch_assoc($last_result)) {
            $second_part =  $second_part . "select id,item,code from " . $last_row['code_name'];
         }

         $all_part = $first_part . $second_part;   
         $result  =  mysqli_query($code,$all_part);

      }else{
         $sql  ="select * from $type";
         $result  =  mysqli_query($code,$sql);
      }
   }
?>

<?php include('../includes/header.php'); ?>

   <div class="container-fluid view_code">

      <?php include('../includes/navbar.php'); ?> 

      <div class="row">

         <div class="col-2 left-side-section">
            <?php include('../includes/left-side.php'); ?> 
         </div> 

         <div class="col-10 border">

            <?php if ($_SESSION['adminName']=='aslamctg'){ ?>
               <a href="action.php?InsertCodeButton='InsertCodeNow'" class="btn btn-sm btn-success add_more">
                  Add more code
               </a>  
            <?php }?> 
          
            <?php if(isset($_SESSION['code_insert_successfully'])) { ?>
               <?php 
                  if (isset($_GET['type'])) {
                     $code_type =  $_GET['type'];
                  }
                  echo '<script type="text/javascript">
                        alert("[  '.$code_type.'  ] code insert successfully.");
                     </script>';
               ?> 
            <?php } ?>
            <?php if(isset($_SESSION['code_delete_fail'])) { ?>
               <?php 
                  if (isset($_GET['type'])) {
                     $code_type =  $_GET['type'];
                  }
                  echo '<script type="text/javascript">
                        alert("Sorry! ['.$code_type.'] code delete fail. Try again.");
                     </script>';
               ?> 
            <?php } ?>
            <?php if(isset($_SESSION['code_delete_successfully'])) { ?>
               <?php 
                  if (isset($_GET['type'])) {
                     $code_type =  $_GET['type'];
                  }
                  echo '<script type="text/javascript">
                        alert("['.$code_type.'] code delete successfully.");
                     </script>';
               ?> 
            <?php } ?>
            <?php if(isset($_SESSION['from_all_code_delete_successfully'])) { ?>
               <?php 
                  if (isset($_GET['all_type'])) {
                     $code_type =  $_GET['all_type'];
                  }
                  echo '<script type="text/javascript">
                        alert("['.$code_type.'] code delete successfully.");
                     </script>';
               ?> 
            <?php } ?>
            <?php if(isset($_SESSION['edit_code_successfully'])) { ?>
               <?php 
                  if (isset($_GET['sms'])) {
                     $code_type =  $_GET['sms'];
                  }
                  echo '<script type="text/javascript">
                        alert("['.$code_type.'] code edit successfully.");
                     </script>';
               ?> 
            <?php } ?>
            <?php if(isset($_SESSION['old_code_move_successfully'])) { ?>
               <?php 
                  if (isset($_GET['old_code'])) {
                     $old_code =  $_GET['old_code'];
                     $move_to =  $_GET['move_to'];
                     
                  }
                  echo '<script type="text/javascript">
                        alert("Old code['.$old_code.'] move to [ '.$move_to.' ] successfully.");
                     </script>';
               ?> 
            <?php } ?>

            <p class="code_type"><?= $type." Code"; ?></p>  
            <?php 
               $string ="A&#039;B";
               $string = str_replace("&#039;","'", $string);

               $search  = array('&#039;', '&quot;');
               $replace = array("'", '"');
               $subject = '&quot;';
               // str_replace($search, $replace, $subject);
            ?>
            <table class="table order able-bordered able-hover">
               <thead class="text-center">
                  <tr>                         
                     <th width="10%">Item</th>
                     <th>Code</th>
                        <?php if(isset($_SESSION['adminLogin'])) { ?>
                           <th width="10%">Action</th>
                        <?php } ?>
                  </tr>      
               </thead>                          
                    
               <tbody>
                  <?php while($row = mysqli_fetch_assoc($result)) { ?>
                  <tr>                         
                     <td class="text-center">
                        <lable> <?= $row['item'] ?></lable>
                     </td>
                     <td> 
                        <button class="btn btn-sm btn-warning copy float-right" data-clipboard-target="#copy<?= $row['id'] ?>">Copy</button>
                        <small id="copy<?= $row['id'] ?>">  
                           <?php echo "<pre>". htmlspecialchars($row['code'],ENT_QUOTES)."</pre>";?>
                        </small>                                   
                     </td>                      
                    <?php if(isset($_SESSION['adminLogin'])) { ?>
                     <!-- Action -->
                     <td class="text-center">
                        <div class="btn-group" role="group">
                           <a class="btn btn-sm btn-success" href="action.php?edit_code_type=<?php echo $type; ?>&edit_code_id=<?php echo $row['id']; ?>&edit_item=<?php echo $row['item']; ?>">Edit</a>

                           <a class="btn btn-sm btn-danger" onclick="return confirm('Are you want to delete this code?')" href="action.php?delete_code_type=<?php echo $type; ?>&delete_code_id=<?php echo $row['id']; ?>&item=<?php echo $row['item']; ?>">Delete</a>
                        </div> 
                     </td>   
                    <?php } ?>
                  </tr>
                  <?php } ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>


<?php unset($_SESSION['code_insert_successfully']); ?> 
<?php unset($_SESSION['code_delete_fail']); ?>
<?php unset($_SESSION['code_delete_successfully']); ?>
<?php unset($_SESSION['from_all_code_delete_successfully']); ?>
<?php unset($_SESSION['edit_code_successfully']); ?>
<?php unset($_SESSION['old_code_move_successfully']); ?>
<?php include('../includes/footer.php'); ?>



