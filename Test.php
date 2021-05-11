<?php 
        if($_POST>0){
        $lab = $_POST['h_lab'];
        $xral = $_POST['h_xray'];
        $p = $_POST['h_p'];


        $total = $lab + $xral + $p;
        echo "<tr>";

        echo"<td>"."$lab"."+"."$xral"."+"."$p"."="."$total"."<td>";

        echo "</tr>";
      }

        ?>