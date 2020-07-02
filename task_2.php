
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
// add Left Botton
if(isset($_POST['Bl'])){
  $Left= $_POST['Bl'];
$sql = "INSERT INTO button (Bl, Br, Bf,Bb,Bs)
VALUES ('L', '', '','','')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
// add Right Botton
if(isset($_POST['Br'])){
  $Right= $_POST['Br'];
$sql = "INSERT INTO button (Bl, Br, Bf,Bb,Bs)
VALUES ('', 'R', '','','')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
// add Forward Botton
if(isset($_POST['Bf'])){
  $Forward= $_POST['Bf'];
$sql = "INSERT INTO button (Bl, Br, Bf,Bb,Bs)
VALUES ('', '', 'F','','')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
// add Backword Botton
if(isset($_POST['Bb'])){
  $Backword= $_POST['Bb'];
$sql = "INSERT INTO button (Bl, Br, Bf,Bb,Bs)
VALUES ('', '', '','B','')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}
// add Stop Botton
if(isset($_POST['Bs'])){
  $Backword= $_POST['Bs'];
$sql = "INSERT INTO button (Bl, Br, Bf,Bb,Bs)
VALUES ('', '', '','','S')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

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
        <form action="" method="post">
          
          <button type="sumbit" title="Forward" name="Bf" class="button  btnBlueGreen ">Forward</button>
          <button type="sumbit" title="Righ" name="Br" class="button  btnLightBlue ">Right</button>
          <button type="sumbit" title="Lef" name="Bl" class="button  btnPurple ">Left</button>
          <button type="sumbit" title="Backward" name="Bb" class="button  btnOrange ">Backward</button>
          <button type="sumbit" title="Stop" name="Bs" class="button  btnRed ">Stop</button>
         
          <br> <br>
         
          </form> 
          
          <a href="view.php" > View Button Movement </a>
           

       </div>    
</body>
</html>