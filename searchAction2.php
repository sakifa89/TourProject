<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginplane";

// $s_counter = $_REQUEST["search_leavingform"];
// $e_counter = $_REQUEST["search_goingto"];
// $tim = $_REQUEST["date"];


$s_counter = $_REQUEST["q"];
$e_counter = $_REQUEST["p"];



$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 $sql = "SELECT * FROM planeinfo where startairport = '$s_counter' AND endairport = '$e_counter'";



$result = $conn->query($sql);



 echo "<div style='overflow-x:auto;'>";
 echo " <table id='BusRoute' border='1'>";
 echo "   <tr>";
 echo "<th>DEPARTING TIME</th>";
 
 echo "     <th>STARTING AIRPORT</th>";
 echo "     <th>END AIRPORT</th>";
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
    
    echo "<td align=center>".$data['startairport']."</td>";
    echo "<td align=center>".$data['endairport']."</td>";
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