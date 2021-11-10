<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search by Id</title>
    <style>
    body {
    background-color: #000;
    height: 100vh;
    color: #fff;
    font-family: arial, sans-serif;
  }
    button {
  width: 100%;
  background-color: #08d;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=text]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
    </style>
</head>

<body>
    <form action="" method="post">
        <input type="text" placeholder="Search" name="search">
        <button type="submit" name="submit">Search</button>
    </form>
</body>

</html>
<?php


if (isset($_POST['submit'])) {
    $searchValue = $_POST['search'];
    $con = new mysqli("localhost", "root", "", "christ");
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } else {
        $sql = "SELECT * FROM stuinfo WHERE stuid LIKE '%$searchValue%'";

        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo $row['stuname'] . "<br>";
            echo $row['address'] . "<br>";
        }

      
    }   
}



?>