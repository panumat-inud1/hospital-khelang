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
      <div class="col-md-8"> 
          
      <a href="couter.php?act=add" class="btn-info btn-sm"> สั่ง </a>
      <p></p>
      
      <?php
      
$act = $_GET['act'];
if($act == 'add'){
include('history_form_add.php');
}elseif ($act == 'edit') {
include('history_form_edit.php');
}
else {
include('history_list.php');
}
?>

      </div>
    </div>
  </div>
  </body>
</html>