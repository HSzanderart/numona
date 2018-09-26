<?php
require_once('connect/acon.php');
$actionedit = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
   $actionedit .= "?" . htmlentities($_SERVER['QUERY_STRING']);
  }
if(isset($_POST['insert'])=="insert")
  {
      $insertSQL = "INSERT INTO user (user_ID,user_pass,user_title,user_name,user_last,user_sex,user_mail,user_tel,user_add)VALUES 
        ('".$_POST['user_ID']."','".$_POST['user_pass']."','".$_POST['user_title']."','".$_POST['user_name']."','".$_POST['user_last']."','".$_POST['user_sex']."','".$_POST['user_mail']."','".$_POST['user_tel']."','".$_POST['user_add']."')";
        
      $Result1 = mysqli_query($Acon, $insertSQL) or die(mysqli_error()."error");
      
      //$logoutAction;
      $goto="index.php";

      echo "<script>alert('เพิ่มข้อมูลเรียบร้อย');</script>";
      echo "<script>window.location='$goto';</script>";
      }
?>


<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>NUMONA SHOP</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/_mycss.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body>
    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-6 pt-1">
            <img class="mb-4" src="images/logo.png" alt="" width="150" height="150
            ">
          </div>
          <div class="col-6 d-flex justify-content-end align-items-center">
            <div class="btn-group">
              <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ณํฐดนัย ซอหมัด
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">ข้อมูลส่วนตัว</a>
                <a class="dropdown-item" href="#">เปลี่ยนรหัสผ่าน</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">ออกจากระบบ</a>
              </div>
            </div>

          </div>
        </div>
      </header>
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-10 px-0">
          <h1 class="display-4 font-italic">รับตัดเย็บเสื้อผ้า  สุภาพสตรี</h1>
          <p class="lead my-3">คิดจะสวย คิดดีๆ ถ้าคิดจริงคิดถึง ห้องเสื้อนูโมนา :)
          รับตัดเย็บและจำหน่าย ชุดสตรีหลากหลายแบบ หลายสไตล์ อาทิ <br>
           - ชุดเดรสสำหรับมุสลิมมะห์ <br>
           - ชุดเดรสแฟชั่น <br>
           - ชุดเดรสสำหรับเด็ก <br>
           - ชุดออกงาน <br>
           - โต๊ป ฮิญาบ ฯลฯ.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>
    </div>

    <div class="container-fluid home-bg">
   

      <center><h1>สมัครสมาชิก</h1></center>
       <center><h5>NUMONA SHOP</h5></center>      
       
      <form class="row" name="form-member" method="POST" action="<?php echo $actionedit;?>"
                enctype="multipart/from-data">
          <div class="col-md-3"></div>
          <div class="col-md-6 px-0">
       

        <div class="form-group">
          <label for="exampleFormControlInput1">ข้อมูลเข้าสู่ระบบ</label>
          <input  class="form-control"  placeholder="Username"name="user_ID"  >
        </div>
        <div class="form-group">
          <input type="password" class="form-control"  placeholder="Password" name="user_pass">
        </div>
        <div class="form-group">
          <input type="password" class="form-control"   placeholder="Confirm Password" >
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">ข้อมูลส่วนตัว</label>
          <select class="form-control" name="user_title">
            <option>เลือกคำนำหน้าชื่อ</option>
            <option>นาย</option>
            <option>นางสาว</option>
            <option>นาง</option>
          </select><br>
           <div class="form-group">
          <input class="form-control"  placeholder="ชื่อ" name="user_name">
        </div>
            <div class="form-group">
          <input  class="form-control" id="exampleFormControlInput1" placeholder="นามสกุล"
          name="user_last">
        </div>
        <div class="form-group">
            <select class="form-control" name="user_sex" >
            <option>เลือกเพศ</option>
            <option value="ชาย">ชาย</option>
            <option value="หญิง">หญิง</option>
            </select>
        </div>
        <div class="form-group">
          <input  class="form-control"  placeholder="E-mail"name="user_mail">
        </div>
           <div class="form-group">
          <input  class="form-control"  placeholder="เบอร์โทรศัพท์" name="user_tel">
        </div>
        </div>
        
        <div class="form-group">
          <textarea class="form-control" name="user_add" rows="3"placeholder="ที่อยู่"></textarea>
        </div>

      </form>   <br>  

           <center>
      <input type="hidden" name="insert" value="insert">
      <button type="submit" class="btn btn-primary btn-lg  ">ยืนยัน</button>

      <a href="index.php">
        <button type="button" name="Cancle" class="btn btn-primary1 btn-lg  ">ยกเลิก</button></a></center>
       <br>

    </div><!-- container -->
  </div><!-- container-fluid home-bg -->

  <!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

          <!-- Content -->
          <h5 class="font-weight-bold text-uppercase mb-4">Footer Content</h5>
          <p>Here you can use rows and columns here to organize your footer content.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet numquam iure provident voluptate esse
            quasi, veritatis totam voluptas nostrum.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

          <ul class="list-unstyled">
            <li>
              <p>
                <a href="#!">PROJECTS</a>
              </p>
            </li>
            <li>
              <p>
                <a href="#!">ABOUT US</a>
              </p>
            </li>
            <li>
              <p>
                <a href="#!">BLOG</a>
              </p>
            </li>
            <li>
              <p>
                <a href="#!">AWARDS</a>
              </p>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

          <!-- Contact details -->
          <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>

          <ul class="list-unstyled">
            <li>
              <p>
                <i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
            </li>
            <li>
              <p>
                <i class="fa fa-envelope mr-3"></i> info@example.com</p>
            </li>
            <li>
              <p>
                <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
            </li>
            <li>
              <p>
                <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

          <!-- Social buttons -->
          <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

          <!-- Facebook -->
          <h3><a href="#" class="fa fa-facebook btn btn-outline-Dark">
          </a></h3>
            <br>
          <!-- Facebook -->
          <h3><a href="#" class="fa fa-instagram btn btn-outline-Dark">
          </a></h3>
          

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://mdbootstrap.com/bootstrap-tutorial/"> NUMONA</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>

  </body>

  </html>