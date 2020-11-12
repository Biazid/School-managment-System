<?php include "common.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Teachers Information</title>

	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
  

  <br>
<br>
  <div align="center">
    <h3>Teachers Information</h3>
  </div>
  <br>
	<br>
<style>
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;

}

th, td {
    text-align: left;
    padding: 16px;
}

tr:nth-child(even) {
    background-color: #f2f2f2
}
</style>
</head>
<body>

<?php

$conn = mysqli_connect('localhost', 'root', '', 'authentication');
if (!$conn) {die("Connection failed: " . mysqli_connect_error());}
$sql = "SELECT Photo,Name,DD FROM teacher";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "<table border=\"1\" align=\"center\">";
    echo "<tr><th>Photo</th>";
    echo "<th>Name</th>";
    echo "<th>Designation & Department</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr><td>";
      echo "<img style=\"height: 100px;width: 80px;\" src=".$row["Photo"].">";
      echo "</td><td>";
      echo $row["Name"];
      echo "</td><td>";
      echo $row["DD"];
      echo "</td></tr>";
    }
    echo "</table>";

}

else {echo "0 results";}

?>
</body>
</html>