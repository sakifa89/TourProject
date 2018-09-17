<!DOCTYPE html>
<html>
<head>
<h1>Student information</h1>



<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #0000FF;
    text-align: center;
    padding: 8px;
}
th{
	background-color: #0000FF;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT s_id,name,age FROM student';
   mysql_select_db('rajshahi');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
	echo "<table>";
	echo "<tr>";
         echo "<th>"."s_id"."</th>";
		 echo "<th>"."name"."</th>";
         echo "<th>"."age"."</th>";
    
  echo "</tr>";
   while($row = mysql_fetch_assoc($retval)) {
   echo "<tr>";
   echo "<td align=center>".$row['s_id']."</td>";
   echo "<td align=center>".$row['name']."</td>";
   echo "<td align=center>".$row['age']."</td>";
   echo "</tr>";
    $empty = false;
      
   }
   echo "</table>";
   
   
 
   echo "Fetched data successfully\n";
   
   mysql_close($conn2);
?>
</body>
</html>