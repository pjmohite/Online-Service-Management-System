<?php 
include('dbConnection.php');
if(isset($_REQUEST['rSignup']))
{
  // Checking for Empty Fields
  if(($_REQUEST["rEmail"] == "")){

  }


  if(($_REQUEST['rName'] == "") || ($_REQUEST["rEmail"] == "") || ($_REQUEST['rPassword'] == ""))
   {
    $regmsg = '<div class="alert alert-warning mt-2" role="alert">All Fields are Required</div>';
   } 
  
  else 
  {
    // Email Already Registered
    $sql = "SELECT r_email FROM requesterlogin_tb WHERE r_email ='".$_REQUEST['rEmail']."'";
    $result = $conn->query($sql);
    if($result->num_rows==1)
    {
      $regmsg = '<div class="alert alert-warning mt-2" role="alert">Email ID Already Registered</div>';
    } 
    else 
    {
        // Assigning User's Values to Variables
        $rName = $_REQUEST['rName'];
        $rEmail = $_REQUEST['rEmail'];
        $rPassword = $_REQUEST['rPassword'];
        $sql = "INSERT INTO requesterlogin_tb(r_name, r_email, r_password) VALUES('$rName', '$rEmail', '$rPassword')";
        if($conn->query($sql) == TRUE)
        {
          $regmsg = '<div class="alert alert-success mt-2" role="alert">Account Succefully Created</div>';
        } 
        else 
        {
          $regmsg = '<div class="alert alert-danger mt-2" role="alert">Unable to Create Account</div>';
        }
      }
  } 
}
?>
<style>
.formerror{
  color: red;
  margin:0px;
  text-align: left;
}


</style>
<html>
<div class="container pt-5" id="registration">
  <h2 class="text-center">Create an Account</h2>
  <div class="row mt-4 mb-4">
   <div class="col-md-6 offset-md-3">
    <form action="" name="myform" onsubmit="return validation()" class="shadow-lg p-4" method="POST">

     <div class="form-group">
      <i class="fas fa-user"></i> <label for="name" class="font-weight-bold pl-2">Name</label>
      <input type="text" class="form-control" placeholder="Name" name="rName" id="name" autocomplete="off">      
     </div>

     <div class="form-group">
      <i class="fas fa-user"></i> <label for="email" class="font-weight-bold pl-2">Email</label>
      <input type="email" class="form-control" placeholder="Email" name="rEmail" id="email" autocomplete="off">
      <small class="form-text">We'll never share your email with anyone else.</small>           
    </div>

     <div class="form-group">
      <i class="fas fa-key"></i> <label for="pass" class="font-weight-bold pl-2">Password</label>
      <input type="password" class="form-control" placeholder="Password" name="rPassword" id="password">             
    </div>

     <div class="form-group">
      <i class="fas fa-key"></i> <label for="pass" class="font-weight-bold pl-2">Confirm Password</label>
      <input type="password" class="form-control" placeholder="Confirm Password" name="conPassword" id="confpassword">      
    </div>

     <button type="submit" class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold" name="rSignup">Sign Up</button>
     <em style="font-size:10px;">Note - By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy</em>
     <?php if(isset($regmsg)) {echo $regmsg;} ?>
    </form>
   </div>
  </div>
 </div>

<script type="text/javascript">
  function validation()
  {
    var name=document.myform.name.value;
    var password=document.myform.password.value;

    if (name.length>20) {
      alert("Name must be less than 20 char");
    }
    if(password.length<8){
      alert("password must be 8 char long");
      
    }
    else
      { 
        if(password==confpassword){
          return true;
         }
         else{
          alert("password must be same");
          
         }
      }
  }
</script>

</html>
