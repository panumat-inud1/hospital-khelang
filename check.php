<?php
//1. เชื่อมต่อ database:
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$c_id = $_REQUEST["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM tbl_couter WHERE c_id='$c_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>

    <!DOCTYPE html>
<html>
<head>
<?php include('h.php');
error_reporting(E_NOTICE);
?>


<head>
  <body>
    <div class="container">
  <?php include('navbar.php');?>
  <p></p>
    <div class="row">
      <div class="col-md-3">
        <!-- Left side column. contains the logo and sidebar -->
        <?php include('menu_left.php');?>
        <!-- Content Wrapper. Contains page content -->
      </div>
      
      <div class="col-md-6"> 
      

      <form class="form-inline my-2 my-lg-0"  method="POST">
      <input class="form-control mr-sm-2" type="search" placeholder="รหัสผู้ป่วย" aria-label="ค้นหา">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">ค้นหา</button>
      </form>

      </div>
    </div>
  </div>
  </body>
</html>