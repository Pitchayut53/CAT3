<html>
<head>
    <title>MCA Student</title>
<style>
    body {
    background-color: #000;
    height: 100vh;
  }
table {
  font-family: arial, sans-serif;
  background-color: #15172b;
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
  color: #000;
}

a:link, a:visited {
  background-color: white;
  color: black;
  border: 2px solid #15172b;
  border-radius: 12px;
  width: 50px;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #15172b;
  color: white;
}

.container
{
    width: 100%;
  margin: 0 auto;
  display: flex;
  justify-content: center;
}

#long {
    width: 90px
}
#longlong {
    width: 120px
}

</style>
<?php  

 
$conn = mysqli_connect("localhost", "root", "","christ");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
  
$sql = "SELECT * FROM stuinfo where course = 'MCA'";  

$retval=mysqli_query($conn, $sql);  
 
 ?>
 <table width='200' border='1'>
 <tr><th>Id</th><th>Student Name</th><th>Age</th><th>Gender</th><th>Course</th><th>Address</th><th colspan='2'>For modification</th></tr>
 <?php
 
 while($row = mysqli_fetch_assoc($retval))
 {  
echo  "<tr><td>$row[stuid]</td><td>$row[stuname]</td> <td>$row[age]</td><td>$row[gender]</td><td>$row[course]</td><td>$row[address]</td> <td><a href='update1.php?stuid=$row[stuid]'>Edit</a></td><td><a href='delete.php?stuid=$row[stuid]'>Delete</a></td>  </tr>";
	
  } 
 ?>
 </table>
 <div class = "container">
 <h4><a id="long" href="index.html">Homepage</a></h4>
 <h4><a id="longlong" href="view.php">Back To View</a></h4>
 </div>
 
 <?php
mysqli_close($conn);  
?>
</head>
</html>  