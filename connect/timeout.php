<?php
function setSessionTime(
            $_timeSecond, //อายุการอยู่บนเว็บ	
            $url=null,  //ไฟล์ที่ต้องการลิ้งไปหลังหมดเวลาหรืออก
            $return=null,
            $check_access=null,
            $renewTime=null
        ){
//&& $url!=""
    /*if($check_access==null ){
       //header("location:".$url); 
	   echo "<script>alert('Pless Login');window.location='$url';</script>";         
        exit;
    }*/
    
    $data_back=0; // 0 คือ ยังไม่ล้างตัวแปร 1 คือ ล้างค่าตัวแปรแล้ว
    if(!isset($_SESSION['ses_time_life'])){
        $_SESSION['ses_time_life']=time();
    }
    if(isset($_SESSION['ses_time_life']) && time()-$_SESSION['ses_time_life']>$_timeSecond){
        if(count($_SESSION)>0){
            // วนลูป unset ตัวแปร session ทั้งหมด      
               /*foreach($_SESSION as $key=>$value){
                unset($$key);
                unset($_SESSION[$key]);
               }*/
			   

            //    หรือเฉพาะตัวแปรที่ต้องการ
          unset($_SESSION['MM_Username']); // กำหนดตัวแปร session อื่นๆ ที่ต้องการ unset ต่อจากนี้ได้
          unset($_SESSION['ses_time_life']);  // กรณีกำหนดเฉพาะ ต้องมี บรรทัดนี้ด้วยเสมอ
          echo "<script>alert('ระบบจะออกภายใน 30 นาทีหากไม่ได้ใช้งาน');</script>";
            if($return){
                $data_back=1;
                return $data_back;
                exit;
            }            

            // ถ้ามีการกำหนด url หลังจาก unset ก็ให้ ลิ้งค์ไปหน้านั้นๆ
            if($url){
                //header("location:".$url);
				echo "<script>window.location='$url';</script>";
                exit();
            }
        }
    }else{
        // อัพเดทเป็นเวลาล่าสุด
        if($renewTime==true){
            $_SESSION['ses_time_life']=time();
        }
        if($return){
            $data_back=0;
            return $data_back;
            exit;
        }        
    }
}

$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['ses_time_life'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['ses_time_life']);
 // unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>