<?php require('sub/top.php');?>

  <div class="container-fluid home-bg">
    <div class="container"><br>
      
    <?php require('sub/nav.php');?>
    <!-- ................................................. -->
    
     <h1>กรุณากรอกรายละเอียด</h1>
     <hr>
     <form>
	  <div class="form-group h5">
	  	<blockquote class="blockquote">
		  <p class="mb-0">ยาวหน้า</p>
		  <footer class="blockquote-footer">วัดจากปุ่มคอหน้าถึงเอว</footer>
		</blockquote>
	    <label>ยาวหน้า <small>- วัดจากปุ่มคอหน้าถึงเอว</small></label>
	    <small class="form-text text-muted">วัดจากปุ่มคอหน้าถึงเอว</small>
	    <input type="text" class="form-control" placeholder="วัดจากปุ่มคอหน้าถึงเอว">

	  </div>
	  <div class="form-group h5">
	    <label for="exampleFormControlSelect1">Example select</label>
	    <select class="form-control" id="exampleFormControlSelect1">
	      <option>1</option>
	      <option>2</option>
	      <option>3</option>
	      <option>4</option>
	      <option>5</option>
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="exampleFormControlSelect2">Example multiple select</label>
	    <select multiple class="form-control" id="exampleFormControlSelect2">
	      <option>1</option>
	      <option>2</option>
	      <option>3</option>
	      <option>4</option>
	      <option>5</option>
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="exampleFormControlTextarea1">Example textarea</label>
	    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
	  </div>
	  <div class="form-group">
    	<label for="exampleFormControlFile1">กรุณาส่งแบบชุด</label>
    	<input type="file" class="form-control-file" id="exampleFormControlFile1">
 	  </div>
	</form>

     <br> 
	<!-- ................................................. -->
    </div><!-- container -->
  </div><!-- container-fluid home-bg -->

<?php require('sub/footer.php');?>