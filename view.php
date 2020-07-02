<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// disply botton name 
$sql = "SELECT Bl, Br, Bf,Bb,Bs FROM button ORDER BY id DESC
LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    foreach($row as $row){
      print"$row\t";
    }
  }
}

else {
  echo "0 results";
}

// close connection
$conn->close();
?>
<html lang="en" dir="ltr"> 
<head>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class="container">
        <header class="header">
          <h1 >Welcom in IOT</h1>
          <p class="description ">
            In this site I will do four buttons for moving Robots.
          </p>
        </header>
        <br>
        <br>
        </div>    
</body>
</html>