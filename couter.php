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
     
        <?php include('menu_left.php');?>
        
      </div>
      <div class="col-md-9"> 
          
     
      <p></p>
      
      <?php
      
$act = $_GET['act'];
if($act == 'oder'){
include('couter_form_oder.php');
}elseif ($act == 'edit') {
include('couter_form_edit.php');
}else {
include('couter_list.php');
}
?>

      </div>
    </div>
  </div>
  </body>
</html>