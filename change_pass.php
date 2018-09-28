<?php require('sub/top.php');?>

  <div class="container-fluid home-bg">
    <div class="container"><br>
      
    <?php require('sub/nav.php');?>
    <!-- ................................................. -->

 	<h1>เปลี่ยนรหัสผ่าน</h1>
 	<hr>
		 <div class="form-group row">
			<label class="col-sm-3 col-form-label text-right"><strong>Password ใหม่</strong></label>
			 <div class="col-sm-9">
				<input type="password"  class="form-control"  name="user_ID">
			</div>
		</div>
		 <div class="form-group row">
			<label class="col-sm-3 col-form-label text-right"><strong>ยืนยันอีกที</strong></label>
			 <div class="col-sm-9">
				<input type="password"  class="form-control"  name="user_ID">
			</div>
		</div><br>
		<div class="form-group row">
		<div class="col-sm-3"></div>
		<div class="col-sm-9 text-center">
				<button type="submit"  class="btn btn-lg btn-warning" value="edit">ตกลง</button>
	          	<a href="info.php" role="button" class="btn btn-lg btn-light">ยกเลิก</a>
		</div>
		</div>


     <br>
	<!-- ................................................. -->
    </div><!-- container -->
  </div><!-- container-fluid home-bg -->

<?php require('sub/footer.php');?>