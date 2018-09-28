<?php
//require_once('connect/acon.php');

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

//สมัครสมาชิก
if($_GET['cmd']=="insert")
  {
    $user_ID = $_POST['user_ID'];
    $user_pass = $_POST['user_pass'];
    $user_passconfirm = $_POST['user_passconfirm'];
    $user_title = $_POST['user_title'];
    $user_name = $_POST['user_name'];
    $user_last = $_POST['user_last'];
    $user_sex = $_POST['user_sex'];
    $user_mail = $_POST['user_mail'];
    $user_tel = $_POST['user_tel'];
    $user_add = $_POST['user_add'];

    $cmd = $_SERVER['PHP_SELF'];
    if (isset($_SERVER['QUERY_STRING'])) {
       $cmd .= "?" . htmlentities($_SERVER['QUERY_STRING']);
      }

      if($user_pass != $user_passconfirm){
        echo "
        <script>
        alert('Password ไม่ตรงกัน');
        window.location = 'register.php';
        </script>";
        exit;
       }else{ 
      $insertSQL = "INSERT INTO user (user_ID,user_pass,user_title,user_name,user_last,user_sex,user_mail,user_tel,user_add)VALUES 
        ('$user_ID','$user_pass','$user_title','$user_name','$user_last','$user_sex','$user_mail','$user_tel','$user_add')";
        
      $Result1 = mysqli_query($Acon, $insertSQL) or die(mysqli_error()."error");
      
      //$logoutAction;
      $goto="index.php";

      echo "<script>alert('สมัครสมาชิกเรียบร้อย');</script>";
      echo "<script>window.location='$goto';</script>";

      mysqli_close($conn);
      exit;
      }
    }

//แก้ไขข้อมูลสมาชิก
if($_GET['cmd']=="edit")
  {
    $user_ID = $_POST['user_ID'];
    $user_pass = $_POST['user_pass'];
    //$user_passconfirm = $_POST['user_passconfirm'];
    //$user_title = $_POST['user_title'];
    $user_name = $_POST['user_name'];
    $user_last = $_POST['user_last'];
    $user_sex = $_POST['user_sex'];
    $user_mail = $_POST['user_mail'];
    $user_tel = $_POST['user_tel'];
    $user_add = $_POST['user_add'];

    $cmd = $_SERVER['PHP_SELF'];
    if (isset($_SERVER['QUERY_STRING'])) {
       $cmd .= "?" . htmlentities($_SERVER['QUERY_STRING']);
      }

      $sqlcode = "SELECT * FROM user WHERE user_ID = '".$_SESSION['MM_Username']."'";
      $query = mysqli_query($Acon,$sqlcode);
      $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
      if($user_pass != '$resule["user_pass"]'){
        //echo $_SESSION['MM_Username'].'<br>'; 
        //echo $user_pass;
        $editSQL = "UPDATE user SET 
        user_name = '$user_name',
        user_last = '$user_last',
        user_sex= '$user_sex',
        user_mail = '$user_mail',
        user_tel = '$user_tel',
        user_add = '$user_add'
        WHERE user_ID = '$user_ID'";

        $Result1 = mysqli_query($Acon, $editSQL) or die(mysqli_error()."error");

        //$logoutAction;
        $goto="info.php";

        echo "<script>alert('แก้ไขข้อมูลสมัครสมาชิกเรียบร้อย');</script>";
        echo "<script>window.location='$goto';</script>";

        mysqli_close($conn);
        exit;
        
       }else{
        echo "
        <script>
        alert('Password ไม่ตรงกัน');
        window.location = 'info_edit.php';
        </script>";
        exit;
      
      }
    }



?>