<?php  

$r = $_REQUEST['stuname'];
$n = $_REQUEST['age'];
$m = $_REQUEST['stuid'];


$conn = mysqli_connect("localhost", "root", "","christ");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
 
  $sql = "update stuinfo set stuname = '$r' ,age = '$n' where stuid = $m";  
echo "Data has updated Sucessfully<br><a href='view.php'>BACK</a>";
echo $sql;

 mysqli_query($conn, $sql);  
 
mysqli_close($conn);  
?>  