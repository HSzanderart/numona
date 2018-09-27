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
  </head>

  <body>
    <form class="row" name="form-member" method="POST" action="process.php?cmd=insert" enctype="multipart/from-data">
      <div class="col-sm-3 col-md-4"></div>
      <div class="col-sm-6 col-md-3">
        <br>
        <center><img src="images/logo.png" width="200" height="200"></center>
        <div class="form-group">
          <center><h1>สมัครสมาชิก</h1></center>
          <center><h5>NUMONA SHOP</h5></center>  
          <hr>
        <div class="form-group">
          <label for="exampleFormControlInput1">ข้อมูลเข้าสู่ระบบ</label>
          <input  class="form-control"  placeholder="Username"name="user_ID"  >
        </div>
        <div class="form-group">
          <input type="password" class="form-control"  placeholder="Password" name="user_pass">
        </div>
        <div class="form-group">
          <input type="password" class="form-control"   placeholder="Confirm Password" name="user_passconfirm">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">ข้อมูลส่วนตัว</label>
          <select class="form-control" name="user_title">
            <option>เลือกคำนำหน้าชื่อ</option>
            <option>นาย</option>
            <option>นางสาว</option>
            <option>นาง</option>
          </select>
        </div>
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
        <hr>
        <center>
          <button type="submit" class="btn btn-lg btn-warning" value="insert">ตกลง</button>
          <a href="index.php" role="button" class="btn btn-lg btn-light">ยกเลิก</a>
        </center>
      </form>   
      <br>  
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>

  </body>

  </html>
