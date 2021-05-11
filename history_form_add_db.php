<?php
include('condb.php');

$h_year = $_POST['h_year'];
$h_sex = $_POST['h_sex'];
$h_name = $_POST['h_name'];
$h_family = $_POST['h_family'];
$h_idcasc = $_POST['h_idcasc'];
$h_couter = $_POST['h_couter'];
$sql ="INSERT INTO tbl_history
    
    (h_year, h_sex, h_name, h_family, h_idcasc, h_couter)

    VALUES 

    ('$h_year', '$h_sex', '$h_name', '$h_family', '$h_idcasc' ,'$h_couter')";
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('เพิ่มข้อมูลเรียบร้อย');";
      echo "window.location ='history.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location ='history.php'; ";
      echo "</script>";
    }
?>