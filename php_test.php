<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <?php include('h.php');
error_reporting(E_NOTICE);
?>
    <?php include('h.php');?>
    <link rel="Stylesheet" href="test.css">

</head>
<body>
    <div class="container">
<?php

    // define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);

  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  คำนวณ  <input type="text" name="name" pattern="^" title="กรุณาใส่ตัวเลข">
  <br><br>
  คำนวณ: <input type="text" name="email">

  <br><br>
  <input type="submit" name="active" value="คำนวณ">

</form>

<?php
 $total = $name +$email;
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $total;

$x = "Hello";
var_dump(is_numeric($x));

if($total<0){

  echo "<script type='text/javascript'>";
  echo "window.location = 'php_test.php'; ";
  echo "</script>";
}

?>  

    </div>



</body>
</html>