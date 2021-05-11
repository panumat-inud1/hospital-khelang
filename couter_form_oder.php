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
<form  name="couter" action="couter_form_oder_db.php" method="POST" id="couter" class="form-horizontal">

      <input type="hidden" name="h_id" value="<?php echo $h_id; ?>">  
      <div class="form-group">
              
            <div class="col-sm-3" align="left"> 
            <div class="fa-4">ค่า Lab</div>
              <input  name="h_lab" type="text" required class="form-control" id="h_lab" value="<?=$h_lab; ?>" 
              placeholder="ค่า Lab บาท" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
            </div>
          </div>

      <div class="form-group">
            <div class="fa-4">ค่า Xray</div>
            <div class="col-sm-3" align="left">
              <input  name="h_xay" type="text" required class="form-control" id="h_xay" value="<?=$h_xay; ?>"
              placeholder="ค่า Xray บาท" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" />
            </div>
          </div>

          <div class="form-group">
            <div class="fa-4">ค่าแพทย์</div>
            <div class="col-sm-3" align="left">
              <input  name="h_p" type="text" required class="form-control" id="h_p" value="<?=$h_p; ?>"
              placeholder="ค่า แพทย์ บาท" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" />
            </div>
          </div>

          <div class="form-group">
            <div class="fa-4">ส่วนลด %</div>
            <div class="col-sm-3" align="left">
              <input  name="h_discount" type="text" required class="form-control" id="h_discount" value="<?=$h_discount; ?>"
              placeholder="%" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-3" align="right">
              <button type="submit" class="btn btn-success btn-sm" id="btn"> <span class="glyphicon glyphicon-saved"></span> บันทึก </button> 
              <a href="couter.php" class="btn btn-danger btn-sm">ยกเลิก</a>     

            </div> 

          </div>
        </form>

        