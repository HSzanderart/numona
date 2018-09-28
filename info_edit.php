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
     <hr>
     <form action="process.php?cmd=edit" method="POST" enctype="multipart/from-data">

	    <div class="form-group row">
			<label class="col-sm-3 col-form-label text-right"><strong>Username</strong></label>
			<div class="col-sm-9">
				<input type="text" readonly class="form-control-plaintext" value="<?php echo $result["user_ID"];?>" name="user_ID">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label text-right"><strong>ชื่อ</strong></label>
			<div class="col-sm-9">
				<input type="text" class="form-control" name="user_name" value="<?php echo $result["user_name"];?>">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label text-right"><strong>นามสกุล</strong></label>
			<div class="col-sm-9">
				<input type="text" class="form-control" name="user_last" value="<?php echo $result["user_last"];?>">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label text-right"><strong>เพศ</strong></label>
			<div class="col-sm-9">
				<select class="form-control" name="user_sex">
		            <option><?php echo $result["user_sex"];?></option>
		            <option><?php if ($result["user_sex"] == "ชาย") echo "หญิง"; else echo "ชาย";?></option>
		        </select>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label text-right"><strong>E-mail</strong></label>
			<div class="col-sm-9">
				<input type="text" class="form-control" name="user_mail" value="<?php echo $result["user_mail"];?>">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label text-right"><strong>เบอร์โทรศัพท์</strong></label>
			<div class="col-sm-9">
				<input type="text" class="form-control" name="user_tel" value="<?php echo $result["user_mail"];?>">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label text-right"><strong>ที่อยู่</strong></label>
			<div class="col-sm-9">
				<textarea class="form-control" name="user_add" rows="3"><?php echo $result["user_add"];?></textarea>
			</div>
		</div>
		<hr>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label text-right"><strong>กรุณายืนยันรหัสผ่าน</strong></label>
			<div class="col-sm-9">
				<input type="password" class="form-control" name="user_pass">
			</div>
		</div>
		<div class="form-group row">
		<div class="col-sm-3"></div>
		<div class="col-sm-9 text-center">
				<button type="submit" class="btn btn-lg btn-warning" value="edit">ตกลง</button>
	          	<a href="info.php" role="button" class="btn btn-lg btn-light">ยกเลิก</a>
		</div>
		</div>
	 </form>


     <br> 
	<!-- ................................................. -->
    </div><!-- container -->
  </div><!-- container-fluid home-bg -->

<?php require('sub/footer.php');?>