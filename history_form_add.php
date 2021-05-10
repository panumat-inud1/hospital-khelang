<?php include('h.php');?>

<form  name="history" action="history_form_add_db.php" method="POST" id="history" class="form-horizontal">
     
      <div class="form-group">
            <div class="col-sm-6" align="left">    
              <input  name="h_year" type="text" required class="form-control" id="h_year" 
              placeholder="ปี เช่น 64" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-3" align="left">    
              <input  name="h_sex" type="text" required class="form-control" id="h_sex" 
              placeholder="เพศ" />
            </div>
          </div>

        <div class="form-group">
            <div class="col-sm-6" align="left">    
              <input  name="h_name" type="text" required class="form-control" id="h_name" 
              placeholder="ชื่อ" />
            </div>
          </div>
          
          <div class="form-group">  
            <div class="col-sm-6" align="left">
              <input  name="h_family" type="test" required class="form-control" id="h_family" 
              placeholder="สกุล" />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="h_idcasc" type="text" required class="form-control" id="h_idcasc" 
              placeholder="เลขที่บัตรประชาชน" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-6" align="right">
              <button type="submit" class="btn btn-success btn-sm" id="btn"> <span class="glyphicon glyphicon-saved"></span> บันทึก </button> 
              <a href="history.php" class="btn btn-danger btn-sm">Cancel</a>     
            </div> 

          </div>
        </form>