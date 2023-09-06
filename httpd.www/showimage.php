<?php

$servername = "technica-antwerpen.be.mysql";
$database = "technica_antwerpen_be_technica";
$username = "technica_antwerpen_be_technica";
$password = "Kgqr3RC6bbEiwyX75X";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


if(isset($_GET['Naam'])) {
  $naam=mysql_real_escape_string($_GET['Naam']);
  $query=mysql_query("SELECT * FROM Leden WHERE Naam=$naam");
  while($row=mysql_fetch_assoc($query)) {
      $imageData=$row["Foto"];
  }
  header("content-type: image/jpeg");
  echo $imageData;
} else {
  echo "Error";
}

?>