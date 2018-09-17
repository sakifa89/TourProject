<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #49033A;
    text-align: center;
    padding: 8px;
}
th{
	background-color: #49033A;
	color:white
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.ab{
    margin:0;
	padding:0;
	background-color:#C18D9A;
}

#head_wrap{
     width:100%;
	 height:100px;
	 border-bottom:10px solid #49033A;
	 padding:10px;
	 background:#7C0361;

}



#hhh{
    margin-left:120px;
	height:100px;
	width:1000px;
	float:180px left;
}
#hhh  h1{
  color:white;
  font-size:40px;
  margin-left:100px;
  float:right;

}
.menu {background:#EDEDED;overflow:hidden;border-bottom:10px solid #49033A;}
.menu ul{margin:0;padding:0;list-style:none;}
.menu ul li{margin-left:30px;float:left;border-right:2px solid;}
.menu ul li a{display:block;padding:10px 40px;color:#49033A;text-decoration:none;}
.menu ul li a:hover{background:#C18D9A;}
.header{margin-left:30px;color:#C18D9A;}
.header h1{margin-left:30px;color:#C18D9A;}
.header h3{margin-left:30px;color:#C18D9A;margin-bottom:40px;}

</style>

</head>
<body>

     

    <div class="fix ab">
	<div id="head_wrap">
	
	<div id="hhh">
	 <h1>Tourism Of Bangladesh</h1>
		<img src="images/logo1.png" style="float:center"/>
		
	</div>
	</div>
	</div>
	<div class="fix menu">
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="AboutBangladesh.html">About Bangladesh</a></li>
			<li><a href="flipgalary.html">Things to do</a></li>
			<li><a href="searchcode.php">Things to see</a></li>
			<li><a href="./hotelstay.php">Where to stay</a></li>
			<li><a href="travelfinal.html">Travel Essential</a></li>
		</ul>
		</div>
		<div class="header">
	 <h1>Accommodation facilities of BPC</h1>

<h3>BANGLADESH PARJATAN CORPORATION</h3>
<h3>HOTEL INFORMATION</h3>
</div>
<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT Place,Unit FROM hotel';
   mysql_select_db('hotel_info');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
	echo "<table>";
	echo "<tr>";
         echo "<th>"."Place"."</th>";
         echo "<th>"."Unit"."</th>";
    
  echo "</tr>";
   while($row = mysql_fetch_assoc($retval)) {
   echo "<tr>";
   echo "<td align=center>".$row['Place']."</td>";
   echo "<td align=center>".$row['Unit']."</td>";
   echo "</tr>";
    $empty = false;
      
   }
   echo "</table>";
   
   
 
   echo "Fetched data successfully\n";
   
   mysql_close($conn2);
?>
</body>
</html>