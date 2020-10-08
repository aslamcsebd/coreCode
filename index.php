<?php include('includes/connection.php');  

   $code  =  code();
   if(isset($_POST['submit'])){
      $userId=$_POST['userId'];
      $password=$_POST['password'];
   
      $sql="select * from admin where userId='$userId' AND password='$password' ";
      $result=mysqli_query($code, $sql);
      $rowcount=mysqli_num_rows($result);

      if($rowcount>0) {
         $allAdmin=mysqli_fetch_assoc($result);
         $adminName=  $allAdmin['userId'];
         $_SESSION['adminName']=$adminName;
         $_SESSION['adminLogin']=true;   
         header("Location: pages/admin.php");
      }else{
         $_SESSION['loginFail']="User id & password don't match";   
      }
   }
?>

<?php include('includes/header.php'); ?>

   <div class="container">
      <div class="row justify-content-center pt-5">
         <div class="col-md-6">
            <div class="card default">
               <div class="card-header text-center bg-secondary text-light">Login</div>

                  <?php if(isset($_SESSION['loginFail'])) { ?>
                     <div class="alert bg-warning text-center">
                        <strong>Sorry!</strong>  <?= $_SESSION['loginFail']; ?>
                     </div>
                  <?php } ?>

                  <div class="card-body">
                     <form method="POST" action=""> 
                        <div class="form-group row">
                           <label for="email" class="col-md-4 col-form-label text-md-right">User ID</label>
                           <div class="col-md-6">
                              <input id="email" type="text" class="form-control" name="userId" autocomplete="email" value="aslamctg" autofocus>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                           <div class="col-md-6">
                              <input id="password" type="password" value="aslamctg" class="form-control" name="password" autofocus>
                           </div>
                        </div>
                        <div class="row form-group">
                           <div class="btn-group offset-md-4 col-md-6" role="group">
                              <button type="submit" name="submit" class="btn btn-sm btn-primary">Login</button>
                              <a href="#" class="btn btn-sm btn-warning">User</a>
                           </div>
                        </div>
                        <div class="form-group row">
                           <div class="offset-4 col-md-6">                              
                              <a href="#" class="btn btn-sm btn-info btn-block">Create account</a>
                           </div>
                        </div>
                     </form>
                  </div>
            </div>
         </div>
      </div>
   </div>

   <?php include('includes/footer.php'); ?>
   <?php unset($_SESSION['loginFail']); ?>

