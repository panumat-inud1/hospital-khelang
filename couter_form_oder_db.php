<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
$h_id = $_REQUEST['h_id'];
$h_lab = $_REQUEST['h_lab'];
$h_xay = $_REQUEST['h_xay'];
$h_p = $_REQUEST['h_p'];
$h_discount = $_REQUEST['h_discount'];

$total = $h_lab + $h_lab + $h_xay;

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
  
  $sql = "UPDATE tbl_history SET  
      h_lab='$h_lab' , 
      h_xay='$h_xay' , 
      h_p='$h_p',
      h_total='$total'
      WHERE h_id='$h_id' ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Update');";
  echo "window.location = 'couter.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "</script>";
}
?>