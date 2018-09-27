<?php require('sub/top.php');?>

  <div class="container-fluid home-bg">
    <div class="container"><br>
      
    <?php require('sub/nav.php');?>
    <!-- ................................................. -->

	<?php
	    $sqlcode = "SELECT * FROM user WHERE user_ID = '".$_SESSION['MM_Username']."'";
		$query = mysqli_query($Acon,$sqlcode);
		$result = mysqli_fetch_array($query,MYSQLI_ASSOC);
	?>

     <h1>ข้อมูลส่วนตัว</h1>
     <dl class="row">
	  <dt class="col-sm-3">Username</dt>
	  <dd class="col-sm-9"><?php echo $result["user_ID"];?></dd>

	  <dt class="col-sm-3">ชื่อ - นามสกุล</dt>
	  <dd class="col-sm-9"><?php echo $result["user_name"];?> <?php echo $result["user_last"];?></dd>

	  <dt class="col-sm-3">เพศ</dt>
	  <dd class="col-sm-9"><?php echo $result["user_sex"];?></dd>

	  <dt class="col-sm-3">E-mail</dt>
	  <dd class="col-sm-9"><?php echo $result["user_mail"];?></dd>

	  <dt class="col-sm-3">เบอร์โทรศัพท์</dt>
	  <dd class="col-sm-9"><?php echo $result["user_tel"];?></dd>

	  <dt class="col-sm-3">ที่อยู่</dt>
	  <dd class="col-sm-9"><?php echo $result["user_add"];?></dd>
	</dl>

	<a href="info_edit.php" type="button" class="btn btn-warning btn-lg btn-block">แก้ไขข้อมูล</a>
	<hr>
	
	<h1>รายละเอียดการสั่งตัดเสื้อผ้า</h1>
	<dl class="row">
	  <dt class="col-sm-3">Username</dt>
	  <dd class="col-sm-9">..........</dd>

	  <dt class="col-sm-3">ชื่อ - นามสกุล</dt>
	  <dd class="col-sm-9">..........  .........</dd>

	  <dt class="col-sm-3">เพศ</dt>
	  <dd class="col-sm-9">..........</dd>

	  <dt class="col-sm-3">E-mail</dt>
	  <dd class="col-sm-9">...........</dd>

	  <dt class="col-sm-3">เบอร์โทรศัพท์</dt>
	  <dd class="col-sm-9">...........</dd>

	  <dt class="col-sm-3">ที่อยู่</dt>
	  <dd class="col-sm-9">............ ..... .. ......................... ... .......................... .................... ..................555555555 555 55555 55555555 5555 555555555 5555 5555555 5555555 555 555555555 55555544444 4444444 44444444................</dd>
	</dl>

     <br> 
	<!-- ................................................. -->
    </div><!-- container -->
  </div><!-- container-fluid home-bg -->

<?php require('sub/footer.php');?>