<!DOCTYPE html>
<html>
<head>
<title>search engine-Search</title>
<link rel="stylesheet" type="text/css" href="emergency.css">
</head>
<body>
		
		<div class="fix main">
		  <div class="fix ab">
	<div id="head_wrap">
	
	<div id="hhh">
	 <h1>Tourism Of Bangladesh</h1>
		<center><img src="images/logo1.png" style="float:center"/></center>
		
	</div>
	</div>
	</div>
	<div class="fix mainmenu">
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="AboutBangladesh.html">About Bangladesh</a></li>
			
			<li><a href="searchpage.php">Things to see</a></li>
			<li class="dropdown">
    <a href="" class="dropbtn">Where to stay</a>
    <div class="dropdown-content">
      <a href="slider.html">Hotels</a>
      <a href="resort.html">Resorts</a>
      
    </div>
	</li>
		<li><a href="flipgalary.html">Transportation</a></li>
			<li><a href="travelfinal.html">Travel Essential</a></li>
		</ul>
		</div>
		  <div class="sliderimg">
		  <img src="images/em5.jpg" alt="" title="Natural beauty" style="width:1200px;height:250px;border-bottom:10px solid #49033A;"/>
		  <br>
		  <br>
		  <br>
		 <center>
		 <h2>
		  Happy Travelling <br>
		  
		  </h2>
		  </center>
		  </div>
		   
		 <div class="fix maincontent">
		 <center>
		 <h2>Choose Emergency Number</h2></center>
		 <br><br><br>
		 <center>
		 <button class="button"><a href="hospital.php">Hospital</a></button>
<button class="button button2"><a href="police.php">Police station</a>
</button>
<button class="button button3"><a href="">Fire-service</a></button>
</center><br>
<center><h3>Select Your nearest fire service</h3></center>
<div class="fix Search">
			    
				<center>
		   <h2>Enter district name here.....</h2>
		   <form action='http://localhost/search3.php' method='get'>
		   <input type='text' name='k' size='80' placeholder='Enter district name here' />
		   <input type='submit' value='search' />
		   </form>
		</center>
			
			</div>





		</div>
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
			$query = "SELECT * FROM fire WHERE ";
		    foreach($terms as $each)
			{
			  $i++;
			  
			  if($i == 1)
			    $query .= "keywords LIKE '%$each%' ";
				else 
				$query .= "OR keywords LIKE '%$each%' ";
			}
			
		
   mysql_select_db('fireinfo');
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
		
			 $description=$row['description'];
			 
		

			 
			 
			 echo $description;
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
		<center><p>&copy; SAKIFA AKTAR,All Rights Reserved</p></center>
		</div>
		</div>
		
</body>
</html>