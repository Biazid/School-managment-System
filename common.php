<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> My School </title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">

  <style>
      
      body{
          background-image:url('back.jpg');
           background-size: cover;
      }

  </style>

</head>
<body >

<?php 
if(isset($_GET['action']) && $_GET['action']=='logout'){
  setcookie('name', "", 0, "/");
  setcookie('password', "", 0, "/");
  unset($_SESSION['name']);
  unset($_SESSION['register']);
  header('location:MY School.php');
}

if(isset($_COOKIE['name'])) {
      $login= $_COOKIE['name'];
      $linklogin= "#";
      $register= "Logout";
      $linkregister= "MY School.php?action=logout";
} else {
    if( isset( $_SESSION['name'] ) ) {
      $login= $_SESSION['name'];
      $linklogin= "#";
      $register= "Logout";
      $linkregister= "MY School.php?action=logout";
      if($login=="Biazid"){
          $reg= "<li><a href=\"http://localhost/School%20managment/change.php\">Edit</a></li>";
      } else{
          $reg= "";
      }
    }else {
      $login= "Login";
      $linklogin= "lgn.php";
      $register= "Register";
      $linkregister= "register.php";
    }
}

?>

	<div class="d center">

		<div style="float: left;width: 20%">
			<img src="logo.jpg" height="80" width="120">
		</div>

		<div style="float: center; width: 80% "  >
			<h2 style="font-size: 40px; ">St. Gregory  High School </h2>
    </div>


      <div id="dc" class="clock"></div>
      <script type="text/javascript">
        function showTime(){
          var date = new Date();
          var h = date.getHours();
          var m = date.getMinutes();
          var s = date.getSeconds();
          var session = "AM";
          if(h == 0){
            h = 12;
          }
          if(h > 12){
           h = h-12;
          }
          if(h < 10){
          h = "0" + h;
            session = "PM";
          }
          if(m < 10){
          m = "0" + m;
          }
          if(s < 10){
          s = "0" + s;}
          var time = h + " :" + m + ":" +s + " " + session;
          document.getElementById("dc").innerText = time;
          document.getElementById("dc").textContent = time;
        }
            showTime();
              setInterval(showTime,1000); 
      </script>
		  <a href="<?php echo $linklogin; ?>" style="margin-left: 950px; padding:2px; background:#ddd; bo"><?php echo $login; ?></a> 
      <a href="<?php echo $linkregister; ?>" style="background-color: #ddd; padding:2px;"><?php echo $register; ?></a> 

	</div>

<ul class="common center" style="margin-left:20%;">
  <li> <a href="http://localhost/School%20managment/MY%20School.php">Home</a></li>
  <li> <a href="">About School</a>
    <div style="
    position: absolute;
    min-width: 10px;
    z-index: 0;" >
        <ul >
          <li><a href="http://localhost/School%20managment/history.php">History</a></li><br>
          <li><a href="http://localhost/school%20managment/vision%20and%20mission.php">Mission</a></li><br>
          <li><a href="http://localhost/school%20managment/who%20study%20here.php">Why study here</a></li><br>
          </ul>
        </div>
    </li>

    <li> <a>Academic</a>
    <div style="
      position: absolute;
      min-width: 10px;
      z-index: 0;" >
        <ul >
          <li><a href="http://localhost/School%20managment/discipline.php">Discipline</a></li><br>
          <li><a href="http://localhost/School%20managment/teachers.php">Teachers</a></li><br>
          <li><a href="http://localhost/School%20managment/students.php">Students</a></li><br>
          <li><a href="http://localhost/school%20managment/staffs.php">Staff</a></li>   
        </ul>
    </div> 
    </li>

    <li> <a>Events</a>
      <div style="
    position: absolute;
    min-width: 10px;
    z-index: 0;" >
        <ul >
          <li><a href="http://localhost/School%20managment/study%20tour.php">Study tour</a></li><br>
          <li><a href="http://localhost/School%20managment/sports.php">Sports</a></li><br>
          <li><a href="http://localhost/School%20managment/magazine.php">Magazine</a></li><br>
          
        </ul>
        </div>
    </li>

<style>
</style>


    <li > <a>Admission</a>
        <div style="
    position: absolute;
    min-width: 10px;
    z-index: 0;" >
        <ul>
          
          <li><a href="http://localhost/School%20managment/how%20to%20apply.php ">How to apply</a></li><br>
          <li><a href="http://localhost/School%20managment/result.php">Result</a></li><br>
        
        </ul>
      </div>
      </li>

    <?php echo $reg ?>

    <li><a href="http://localhost/School%20managment/contact.php">Contact us</a></li>
  </ul>
</body>

</html>