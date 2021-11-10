<html>
<head>
    <title>Update Student Infomation</title>
<style>
    body {
    background-color: #000;
    height: 100vh;
  }
table {
  font-family: arial, sans-serif;
  background-color: #15172b;
  border-collapse: collapse;
  width: 100%;
  color: #fff;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

input[type=text], select, input[type=number] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #08d;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

</style>
<?php  

$m= $_REQUEST['stuid'];
$conn = mysqli_connect("localhost", "root", "","christ");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
  
$sql = "SELECT * FROM stuinfo where stuid = $m";  

$retval=mysqli_query($conn, $sql);  
 
 ?>
 <form  action="update.php" method="get">
 
 <table width='200' border='1'>
 <?php
 
 while($row = mysqli_fetch_assoc($retval))
 {  
echo  "<tr><th>Student Name</th><th>Age</th></tr><tr><td><input type = 'text' name = 'stuname' value='$row[stuname]'></td><td><input type = 'number' name = 'age' value='$row[age]'></td></tr>";
	
  } 
 ?>
 <input type="hidden" name="stuid" value="<?php echo $m;?>" />
 
 </table>
 <input type="submit" value="submit">
 </form>
 <?php
mysqli_close($conn);  
?>  
</head>
</html>  