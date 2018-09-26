<?php 
ob_start();
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if(isset($_POST['login'])=="loginset"){
  require('connect/timeout.php');
  require_once('connect/acon.php');
  mysqli_select_db($Acon,$database_Acon);
  $querylogin = mysqli_query ($Acon,"SELECT * FROM user WHERE user_ID ='".mysqli_real_escape_string($Acon,$_POST['f_user'])."'
  and user_pass = '".mysqli_real_escape_string($Acon,$_POST['f_pass'])."'") or die(mysqli_error());
  $row_login = mysqli_fetch_array($querylogin);

  if(!$row_login)
    { 
      echo "<script>alert('Username or password Incorrect')</script>";
      echo "<script>window.location=' index.php';</script>";
    }else{

        $_SESSION['MM_Username'] = $row_login['user_ID'];
      //$_SESSION['status'] = $row_login['lg_status'];
      session_write_close();
      echo "<script>window.location='home.php';</script>";
    }
}
?>



<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="<?php echo htmlentities($loginFormAction);?>" method="post" >
      <img class="mb-4" src="images/logo.png" alt="" width="250" height="250">
      <h1 class="h3 mb-3 font-weight-normal">กรุณาเข้าสู่ระบบ</h1>
      <label for="inputusername" class="sr-only">Username</label>
      <input type="username" name="f_user"  class="form-control" placeholder="Username"  autofocus="">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="f_pass"  class="form-control" placeholder="Password" >
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>

      <input type="hidden" name="login" value="loginset">
      <button class="btn btn-lg btn-orange btn-block" type="submit">Sign in</button>
      
      <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
    </form>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>

  </body>

  </html>