<?php  

$m= $_REQUEST['stuid'];
$conn = mysqli_connect("localhost", "root", "","christ");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
  
$sql = "DELETE FROM stuinfo where stuid = $m";  

 mysqli_query($conn, $sql);  
  echo "Data Sucessfully Deleted<br><a href='view.php'>BACk</a>";
mysqli_close($conn);  

?>  