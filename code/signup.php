<?php

$dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $db='wingman';
   $d=$_GET["flyerno"];
   setcookie("freqflyer",$d, time()+3600, "/","", 0);
   $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
$sql = "SELECT destination FROM users where pnr=".$_GET["phone"].";";
 $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	setcookie("destination", $row["destination"], time()+3600, "/","", 0);
    }
} else {
    echo "0 results";
}

$conn->close();

header('Location: login.html');
exit;

?>