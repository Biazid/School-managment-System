<?php 
ob_start();
session_start();  
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="page27.css">
</head>
<body>

<?php

$db = mysqli_connect("localhost","root", "", "authentication");

if(isset($_POST['submit'])){

$detail= $_POST["detail"];

  $sql="INSERT INTO notice( brief ) VALUES('$detail')";

  if (mysqli_multi_query($db, $sql)) {
    echo "<script>alert('New records created successfully')</script>";
  } else {
    echo "<script>alert('Sorry, No records created. Try again.')</script>";
  }
}

?>

<h3 style="text-align: center;">Writer Form</h3>

<div class="container">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="Details">Details</label>
    <textarea id="Details" name="detail" placeholder="Write details.." style="height:200px" required></textarea>
    <input type="submit" value="Submit" name="submit" >
  </form>
</div>

</body>
</html>