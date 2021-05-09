<?php
//1. เชื่อมต่อ database:
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$h_id = $_REQUEST["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM tbl_history WHERE h_id='$h_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>


<?php include('h.php');?>

<form  name="history" action="history_form_edit_db.php" method="POST" id="history" class="form-horizontal">
<input type="hidden" name="h_id" value="<?php echo $h_id; ?>">  

      <div class="form-group">
            <div class="col-sm-6" align="left">    
              <input  name="h_year" type="text" required class="form-control" id="h_year" value="<?=$h_year; ?>" 
              placeholder="ปี เช่น 64" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-3" align="left">    
              <input  name="h_sex" type="text" required class="form-control" id="h_sex" value="<?=$h_sex; ?>"
              placeholder="เพศ" />
            </div>
          </div>

        <div class="form-group">
            <div class="col-sm-6" align="left">    
              <input  name="h_name" type="text" required class="form-control" id="h_name" value="<?=$h_name; ?>"
              placeholder="ชื่อ" />
            </div>
          </div>
          
          <div class="form-group">  
            <div class="col-sm-6" align="left">
              <input  name="h_family" type="test" required class="form-control" id="h_family" value="<?=$h_family; ?>"
              placeholder="สกุล" />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="h_idcasc" type="text" required class="form-control" id="h_idcasc" value="<?=$h_idcasc; ?>"
              placeholder="เลขที่บัตรประชาชน" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-6" align="right">
              <button type="submit" class="btn btn-success btn-sm" id="btn"> <span class="glyphicon glyphicon-saved"></span> บันทึก </button>      
            </div> 

          </div>
        </form>