














<?php
  session_start();

  function verify($data){
    $data = trim($data);
    $data = htmlspecialchars($data );
    $data = stripslashes($data );
    return $data;
  }

  if(isset($_POST['login1'])){
    //getting the form data
     $username = verify($_POST['username']);
      $password = verify($_POST['password']);

    //sql statement
    $sql = "SELECT * FROM usersasds WHERE username='$username' && password='$password'";
 
    //Db Connection
    require_once('conn.php');

    //qry
    $qry = mysqli_query ($conn, $sql) or die ("Login problem");
    $count = mysqli_num_rows($qry);
    if($count==1)
    {
      $_SESSION['user']= $username;
      //header("location: dashboard.php");
      header("location: filesscnhs.php");
      
    }


    if($count<>1);
    {
      $_SESSION['user']= $username;
      //header("location: dashboard.php");
    //  header("location: index.php");
  echo"<script>alert('Error=Incorrect User Name or password.')</script>";
   
    }





  {

    //sql statement
    $sql = "SELECT * FROM usersscces WHERE username='$username' && password='$password'";
 
    //Db Connection
    require_once('conn.php');

    //qry
    $qry = mysqli_query ($conn, $sql) or die ("Login problem");
    $count = mysqli_num_rows($qry);
    if($count==1)
    {
      $_SESSION['user']= $username;
      //header("location: dashboard.php");
      header("location: filesscces.php");
      
      
    }
   
  }




  
  {

    //sql statement
    $sql = "SELECT * FROM usersadmin WHERE username='$username' && password='$password'";
 
    //Db Connection
    require_once('conn.php');

    //qry
    $qry = mysqli_query ($conn, $sql) or die ("Login problem");
    $count = mysqli_num_rows($qry);
    if($count==1)
    {
      $_SESSION['user']= $username;
      //header("location: dashboard.php");
      header("location: index.php?page=files2");
      
      
    }
   
  }


    
  }



  

?>  

<!DOCTYPE html>
<html lang="en">

<head>












<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>




<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="icon" href="modal\css1\images\logo.png" type="image" />















<!-- icons sa Pass and User -->
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}



.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 18px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 30px;
  outline: 5px;
}

.input-field:focus {
  border: 20px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 20px 20px;
  border: 15px ;
  cursor: pointer;
  width: 100%;
  opacity: 1;
}

.btn:hover {
  opacity: 1;
}
</style>











  <!-- Required meta tags -->
   <title>M.E.M.O. | Division Davao del Sur</title>
  <!-- plugins:css -->
 
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/logo.png" />

  <style>
body {
  background-color: white;
}
</style>


</head>

<body>

<br><br>
<br>



  <div class="container">
   
    
      
      
        <div class="row w-100 mx-auto">
       
        
          <div class="col-lg- 100 mx-auto">







          <img src="memo.png" width="350" height="65">

            

       
             <form class="pt-3" method="post" name="login1" action="login1.php">
              
              <B><label>USERNAME</label></B><br>
              <div class="input-container">
                  
                  <i class="fa fa-user icon"></i>
                  <input type="text" name="username" class="form-control form-control-lg" id="username" placeholder="Username" 
                  value="<?php if(isset($_COOKIE['uname'])) echo $_COOKIE['uname'];?>">
                </div>
                
               <B> <label>PASSWORD</label></B>
               <div class="input-container">
    <i class="fa fa-key icon"></i>
               
                  <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password"
                   value="<?php if(isset($_COOKIE['upass'])) echo $_COOKIE['upass'];?>">
                </div>
                <div class="mt-3">
             <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name ="login1"  value="LOGIN" /> 
                </div>
              <!--    <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">


                   
                     <input type="checkbox" name ="remember" value="1" class="form-check-input">
                     Keep me signed in
                    </label>
                  </div>
                   <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="mdi mdi-facebook mr-2"></i> <a href="https://www.facebook.com" class="text-primary">Connect using facebook
                  </button>
                </div>
               <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.php" class="text-primary">Create</a>
                </div>-->
              </form>
           
        </div>
      </div>
      <!-- content-wrapper ends -->
   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
 
  <!-- endinject -->
      <!-- page-body-wrapper ends -->





  <!-- inject:js -->
 
  <!-- endinject -->
</body>

</html>
