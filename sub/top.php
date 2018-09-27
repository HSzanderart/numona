<?php 
ob_start();
if (!isset($_SESSION)) {
  session_start();
}
require_once('connect/acon.php');
if(!isset($_SESSION['MM_Username'])){
  //header("location:Setting0.php");
  echo "<script>alert('Pless Login');window.location='index.php';</script>";
  exit();
}
require('connect/timeout.php');
setSessionTime(1800,"index.php",null,@$_SESSION['MM_Username'],true); 
mysqli_select_db($Acon,$database_Acon);

$query_get = mysqli_query($Acon,"SELECT * FROM user WHERE user_id='".@$_GET['pro_ct']."'") or die (mysqli_error());
$row_ad = mysqli_fetch_assoc($query_get);

?>

<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>NUMONA</title>

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
            <div class="btn-group btn-group-lg">
              <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php 
                $sqlcode = "SELECT * FROM user WHERE user_id = '".$_SESSION['MM_Username']."' ";
                $query = mysqli_query($Acon,$sqlcode);
                $result = mysqli_fetch_array($query,MYSQLI_ASSOC);

                echo $result["user_name"];
                 ?>  <?php echo $result["user_last"]; ?>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="info.php">ข้อมูลส่วนตัว</a>
                <a class="dropdown-item" href="#">เปลี่ยนรหัสผ่าน</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="connect/timeout.php?doLogout">ออกจากระบบ</a>
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