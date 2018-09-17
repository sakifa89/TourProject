<!DOCTYPE html>
<html>
<head>
<title>search engine-Search</title>
<link rel="stylesheet" type="text/css" href="search.css">
</head>
<body>
		
		<div class="fix main">
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
			<li><a href="travelpage.php">Travel Essential</a></li>
		</ul>
		</div>
		  <div class="sliderimg">
		  <img src="images/t2.jpg" alt="" title="Natural beauty" style="width:1100px;height:250px;"/>
		  <br>
		  <br>
		  <br>
		 <center>
		 <h3>Here you can find<br> 
		  1.Travel tips<br>
		  2.List of Bangladesh Embassies abroad<br>
		  3.Money Excahange point<br>
		  4.Emergency Numbers<br>
		  5.Government holidays<br>
		  </h3>
		  </center>
		  </div>
		   <div class="fix slider"> 
		   
		   <h2>Find Your Travel essentials...</h2>
		   <form action='http://localhost/travel.php' method='get'>
		   <input type='text' name='k' size='50' placeholder='Enter the name of place' value='<?php echo $_GET['k'];?>'/>
		   <input type='submit' value='search' />
		   </form>
	
		 <hr />
		 </div>
		 <div class="maincontent"
		 <?php
		 
		 
		    $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = 
   
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
             if(! $conn ) {
                 die('Could not connect: ' . mysql_error());
                }
		 
		    $k=$_GET['k'];
			$terms= explode(" ",$k);
			$query = "SELECT * FROM travel WHERE ";
		    foreach($terms as $each)
			{
			  $i++;
			  
			  if($i == 1)
			    $query .= "keywords LIKE '%$each%' ";
				else 
				$query .= "OR keywords LIKE '%$each%' ";
			}
			
		
   mysql_select_db('travelinfo');
   $retval = mysql_query( $query );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }	
		
		$query = mysql_query($retval);
		$numrows = mysql_num_rows($retval);
		
		if($numrows>0)
		{
		//echo "<table>";
		  while($row = mysql_fetch_assoc($retval))
		  {  
		  
		    //echo "<tr>";
		     $id=$row['id'];
			 $keywords=$row['keywords'];
			 $info=$row['info'];
			 
			 echo $info;
			//echo "<td>"; echo $row['description']; echo "</td>";
			
			//echo "</tr>";
			
		  } //echo "</table>";
		
		
		
		}
		else
		 echo "No result is found for \"<b>$k</b>\" ";
		
		
		mysql_close();
		 
		 
		 ?>
		 </div>
		
		<div class="fix footer">
		<p>&copy; SAKIFA AKTAR,All Rights Reserved</p>
		</div>
		</div>
		
</body>
</html