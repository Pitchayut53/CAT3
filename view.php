<html>
<head>
    <title>View Student Info</title>
<style>
    body {
	height: 100%;
}

body {
	margin: 0;
	background: linear-gradient(45deg, #49a09d, #5f2c82);
	font-family: sans-serif;
	font-weight: 100;
}
.con {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}

table {
	width: 800px;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

th,
td {
	padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;
}

th {
	text-align: left;
}

thead {
	th {
		background-color: #55608f;
	}
}

tbody {
	tr {
		&:hover {
			background-color: rgba(255,255,255,0.3);
		}
	}
	td {
		position: relative;
		&:hover {
			&:before {
				content: "";
				position: absolute;
				left: 0;
				right: 0;
				top: -9999px;
				bottom: -9999px;
				background-color: rgba(255,255,255,0.2);
				z-index: -1;
			}
		}
	}
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
    width: 150px
}

</style>
<?php  

 
$conn = mysqli_connect("localhost", "root", "","christ");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
  
$sql = "SELECT * FROM stuinfo";  

$retval=mysqli_query($conn, $sql);  
 
 ?>
 <div class = "con">
 <table width='200' border='1'>
 <thead>
 <tr><th>Id</th><th>Student Name</th><th>Age</th><th>Gender</th><th>Course</th><th>Address</th><th colspan='2'>For modification</th></tr>
</thead>
<?php
 
 while($row = mysqli_fetch_assoc($retval))
 {  
echo  "<tbody><tr><td>$row[stuid]</td><td>$row[stuname]</td> <td>$row[age]</td><td>$row[gender]</td><td>$row[course]</td><td>$row[address]</td> <td><a href='update1.php?stuid=$row[stuid]'>Edit</a></td><td><a href='delete.php?stuid=$row[stuid]'>Delete</a></td>  </tr><tbody>";
	
  } 
 ?>
 </table>
 <div class = "container">
 <h4><a href="index.html">Back</a></h4>
 <h4><a href="mca.php">MCA</a></h4>
 <h4><a id ="long" href="search.php">Search Student Id</a></h4>
 </div>
 </div>
 <?php
mysqli_close($conn);  
?>
</head>
</html>  