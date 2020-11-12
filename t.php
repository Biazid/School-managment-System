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

$name= $_POST["name"] ;
$dd= $_POST["dd"];
$img= "\"".$_POST["fileToUpload"]."\"";

  $sql="INSERT INTO teacher( Photo, Name, DD ) VALUES('$img','$name','$dd')";

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
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name.." required>

    <label for="DD">DD</label>
    <input type="text" id="DD" name="dd" placeholder="Your DD..">

    <label for="Image">Image</label><br><br>
    <input type="file" name="fileToUpload" id="fileToUpload" required><br><br>

    <input type="submit" value="Submit" name="submit" >
  </form>
</div>

</body>
</html>