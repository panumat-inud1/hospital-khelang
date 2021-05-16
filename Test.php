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

 <?php

echo(min(0, 150, 30, 20, -8, -200)); echo"<br>"; // returns -200 
echo(max(0, 150, 30, 20, -8, -200));  // returns 150

 ?>
 
<?php

 // define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  //$data = trim($data);
  //$data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

<?php 

  $x = 5;
  $y = 15; 
  $z = $x + $y;
  echo $z;

?>






</body>
</html>
