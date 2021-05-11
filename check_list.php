<?php
      include('h.php');
                //1. เชื่อมต่อ database:
                include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
                //2. query ข้อมูลจากตาราง tb_admin:
                $query = "SELECT * FROM tbl_history ORDER BY h_id ASC" or die("Error:" . mysqli_error());
                //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
                $result = mysqli_query($con, $query);
                //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
                echo ' <table class="table table-hover">';
                  //หัวข้อตาราง 
                    echo "
                      <tr bgcolor ='#AED6F1'>
                      <td>เลขที่ใบเสร็จ</td>
                      <td>วันที่ตรวจ</td>
                      <td>รหัสผู้ป่วย</td>
                      <td>ยอดรวม</td>
                      <td>ส่วนลด</td>
                      <td>จำนวณเงิน</td>
                      <td>Delete</td>
                    </tr>";
                
                  while($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                    echo "<td>" .$row["h_year"]."-".$row["h_id"]."</td> ";
                    echo "<td>" .$row["h_sex"] .  "</td> ";
                    echo "<td>" .$row["h_name"] .  "</td> ";
                    echo "<td>" .$row["h_family"] .  "</td> ";
                    echo "<td>" .$row["h_idcasc"] .  "</td> ";
                    

                    //แก้ไขข้อมูล
                    echo "<td><a href='history.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";
                    
                    //ลบข้อมูล
                    echo "<td><a href='history_del_db.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
                  echo "</tr>";
                  }
                echo "</table>";
                //5. close connection
                mysqli_close($con);
                ?>