<?php  

$a= $_REQUEST['stuname'];
$l= $_REQUEST['age'];
$b= $_REQUEST['gender'];
$c = $_REQUEST['course'];
$d = $_REQUEST['address'];


$conn = mysqli_connect("localhost", "root", "","christ");  

if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
  
$sql = "INSERT INTO `stuinfo` (`stuid`, `stuname`, `age`, `gender`,`course`,`address`) VALUES ('','$a','$l','$b','$c','$d');";  
 
?>
		 <script type="text/javascript">
				alert('Registration successful');
				window.location="view.php";
		 </script>
		<?php
  mysqli_query($conn, $sql); 
    ?>
	<!-- <script type="text/javascript">
				alert('Registration successful');
				window.location="login_reg.html";
		 </script>!>
	<?php

  mysqli_close($conn);
 
 ?>