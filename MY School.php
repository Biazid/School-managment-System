<?php include "common.php" ?>
<!DOCTYPE html>
<html>
<head>
 <link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
</head>

<body>



<div class="info" >

 <img src="sld2.jpg" width="700" height="350">
 <br>
 <br>

 <p style="border: 3px solid #bbb; border-radius: 10px; background-color: white; width:140%; padding-bottom:10px;">

 St. Gregory High School & College, Bangladesh, is a Catholic High School founded in Dhaka, British India, in 1882 by Father Gregory De Groote, a Belgian Benedictine priest. The school, located on Subhas Bose Avenue of Luxmibazar neighborhood of old Dhaka, was named after Pope Gregory I (540-604). Brother Prodip Placid Gomes C.S.C is the current headmaster of the school.<br><br>
  
 St. Gregory's High School established by Rev. Father Gregory De Groote, a Benedictine Priest in January 1882 set many historical records towards its journey of education as well as humanitarian activities. The school came into being with a handful of boys. But soon school had to be closed down twice. The school resumed then in 1889 and Father Francis Boeres CSC took the charge of the school. Within twenty years, he set the school upon its solid foundation by his untiring efforts. The school was initially used to teach only Eurasian and European children. Indian students were only allowed under special permission and that was only fifteen percent. In 1898 there were six Bengali boys and two Bengali girls among the students. In 1912 the girls section was separated from the boys and St. Francis Xaviers came into existence....<br>
<br>
 Headmasters <br>
Fr.Gregory De Groote (1882-1888)<br>
Fr.F.A.Boeres CSC (1889-1910)<br>
Fr.J.Fieffer (1911)<br>
Rev.Fr.T.Crowly CSC (1912-1915)<br>
Fr.P.Boulay CSC (1916-1918)<br>
Fr.A.Blin CSC (1919-1921)<br>
Bro.Bertin CSC (1922-1924)<br>
Fr.Finner CSC (1925-1926)<br>
Bro.Anthony CSC (1926-1929)<br>
Rev.Bro.Walter CSC (1929-1933) & (1935-1937)<br>
Bro.Neil CSC (1934)<br>
Bro.John Heim CSC (1938)<br>
Bro.Bernadine CSC (1939-1940)<br>
Bro.Jude CSC (1940-1950)<br>
Bro.James CSC (1950-1955)<br>
Bro.Martinian CSC (1955-1957)<br>
Bro.Fulgence CSC (1957-1962)<br>
Bro.Thomas Moore CSC (1962-1968)<br>
Bro.Robert CSC (1968-1977)<br>
Bro.John Rozario CSC (1977-1981)<br>
Bro.Gerald Kraegar (1981-1992)<br>
Bro.Marcel Duchesne (1992-1995)<br>
Bro.Bijoy Rodrigues CSC (1995)<br>
Fr.J.S.Peixotto CSC (1998-2000)<br>
Bro.Robi Purification CSC (1995-2012)<br>
Bro.Prodip Placid Gomes CSC (2012–Present)<br>
 </p>

</div>


<div class="noticee" style="border: 1px solid red; border-radius: 10px; margin-right:40px; padding: 5px;background-color: white; font-size: 20px; ">
 <h3 align="center" style="padding-bottom: 10px; ">Notice</h3>

 <?php
$conn = mysqli_connect('localhost', 'root', '', 'authentication');
if (!$conn) {die("Connection failed: " . mysqli_connect_error());}
$sql = "SELECT * FROM notice order by id desc";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      ?>

   <a href ="http://localhost/School%20managment/notice2.php">
               <?php
               $string=$row["brief"];
               $string = strip_tags($string); if (strlen($string) > 50) { 
               $stringCut = substr($string, 0, 50);     
               $endPoint = strrpos($stringCut, ' '); 
               $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);     
               $string .= '...'; } 
               echo $string;
              ?>
   </a><br> <hr size="6">
   
<?php
    }
}
else {echo "<script>alert('0 result found')</script>";}
?>
</div>
<div class="result" style="border: 1px solid red; border-radius: 10px; padding: 15px; background-color: white; font-size: 20px;">
 <h3 style="text-align: center; padding-bottom: 10px; ">Club</h3>
   
   <a href ="http://localhost/School%20managment/english%20club.php"  style="padding-bottom: 20px;">English Club</a><br>
   <hr size="2">
   <a href ="http://localhost/school%20managment/science%20club.php" style="padding-bottom: 20px;">Science Club</a><br>
   <hr size="2">
   <a href ="http://localhost/school%20managment/cultural%20club.php" style="padding-bottom: 20px;">Cultural Club</a><br>
   <hr size="2">
   <a href ="http://localhost/school%20managment/debate%20club.php" style="padding-bottom: 20px;">Debate Club</a><br>
   <hr size="2">
   <a href ="http://localhost/school%20managment/scout%20club.php" style="padding-bottom: 20px;">Scout Club</a><br>
   <hr size="2">
   <a href ="http://localhost/school%20managment/sports%20club.php" style="padding-bottom: 20px;">Sports Club</a><br>
   <hr size="2">
   <a href ="http://localhost/school%20managment/math%20club.php" style="padding-bottom: 20px;">Math Club</a><br>

 
</div>
<div class="link">
 <h3>Important links</h3>

 <br>
   <a href ="http://www.educationboard.gov.bd/" target ="showframe">Education Board</a><br>
   <a href ="http://dhakaeducationboard.gov.bd/" target ="showframe">Dhaka Board</a><br>
   <a href ="https://www.rokomari.com/book" target ="showframe">Rokomari.com</a><br>
   <a href ="http://www.moedu.gov.bd/" target ="showframe">Ministry of education</a><br>
   <a href ="http://www.bteb.gov.bd/" target ="showframe">Technical education board</a><br>
   

</body>
</html>