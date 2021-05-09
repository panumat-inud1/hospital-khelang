<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
$h_id = $_REQUEST['h_id'];
$h_year = $_REQUEST['h_year'];
$h_sex = $_REQUEST['h_sex'];
$h_name = $_REQUEST['h_name'];
$h_family = $_REQUEST['h_family'];
$h_idcasc = $_REQUEST['h_idcasc'];

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
  
  $sql = "UPDATE tbl_history SET  
      h_year='$h_year' , 
      h_sex='$h_sex' , 
      h_name='$h_name' ,
      h_family='$h_family' , 
      h_idcasc='$h_idcasc'   
      WHERE h_id='$h_id' ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Update');";
  echo "window.location = 'history.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "</script>";
}
?>