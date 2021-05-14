<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="Stylesheet" href="stylesheet.css"/>
  <title>Document</title>
</head>
<body>

<?php 
       
       $valiable = 500000;
       // ใช้สำหรับ ทศนิยมหาร 
        $num = number_format($valiable);
        $num1 = 500000;
       echo "$num1";  echo"<br>";
       echo '$num';  echo"<br>";
       echo "Valiable = ".$num;    echo"<br>";

       echo sprintf("%2f",$num1) ;echo"<br>";echo"<br>";


       $arr = array("blue","red","green","yellow");
       print_r(str_replace("red","pink",$arr,$i));
       echo "<br>" . "Replacements: $i";
         ?>
        <a href="Test.php?act=next">Line</a>

      
<table class="table" border="1" width="500" align="center">
	<caption>
		ตารางสูตรคุณ
	</caption>
	<?php
	for($i = 1; $i <= 10; $i++) {
		echo "<tr>";
	for ($j =1; $j <= 10; $j++) {
		echo "<td>" . ($i * $j) . "</td>";
	}
		echo "</tr>";
	} ?>


</table>

</body>
</html>
