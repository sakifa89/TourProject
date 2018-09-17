<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// $s_counter = $_REQUEST["search_leavingform"];
// $e_counter = $_REQUEST["search_goingto"];
// $tim = $_REQUEST["date"];


$s_counter = $_REQUEST["q"];
$e_counter = $_REQUEST["p"];



$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 $sql = "SELECT * FROM businfo where startcounter = '$s_counter' AND endcounter = '$e_counter'";



$result = $conn->query($sql);



 echo "<div style='overflow-x:auto;'>";
 echo " <table id='BusRoute' border='1'>";
 echo "   <tr>";
 echo "<th>DEPARTING TIME</th>";
 echo "     <th>COACH NO</th>";
 echo "     <th>STARTING COUNTER</th>";
 echo "     <th>END COUNTER</th>";
 echo "     <th>NAME</th>";
 echo "     <th>FARE</th>";
 echo "     <th>ARRIVAL TIME</th>";
 echo "     <th>SEATS AVAILABLE</th>";
 echo "   </tr>";

$empty = true;

while($data =  $result->fetch_assoc())
{   
    //echo $data['departing'];
    echo "<tr>";
    echo "<td align=center>".$data['departing']."</td>";
    echo "<td align=center>".$data['code']."</td>";
    echo "<td align=center>".$data['startcounter']."</td>";
    echo "<td align=center>".$data['endcounter']."</td>";
	echo "<td align=center>".$data['name']."</td>";
    echo "<td align=center>".$data['ticketfare']."</td>";
    echo "<td align=center>".$data['arival']."</td>";
    echo "<td align=center>".$data['seat']."</td>";
    
    echo "</tr>";
    $empty = false;
}
echo "</table>";
echo "</div>";


if ($empty) echo "<br><h2 style='color:red;'>No route found!!</h2>";

$conn->close();
?>