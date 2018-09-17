<!DOCTYPE html>
<html>
<head>
<head>
		
		<link rel="stylesheet" type="text/css" href="search.css"/>
	</head>

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
	<div class="fix menu">
		<ul>
			<li><a href="homenew.html">Home</a></li>
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
	    
		   <div class="fix Search">
			    
				<center>
				<br>
		   <h2>Enter district name here.....</h2>
		   <form action='http://localhost/search.php' method='get'>
		   <input type='text' name='k' size='80' placeholder='Enter district name here' />
		   <input type='submit' value='search' />
		   </form>
		</center>
			<br>
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
			$query = "SELECT * FROM search WHERE ";
		    foreach($terms as $each)
			{
			  $i++;
			  
			  if($i == 1)
			    $query .= "keywords LIKE '%$each%' ";
				else 
				$query .= "OR keywords LIKE '%$each%' ";
			}
			
		
   mysql_select_db('searchinfo');
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
		     $imagename=$row['imagename'];
			 $imagepath=$row['imagepath'];
		     $id=$row['id'];
			 $title=$row['title'];
			 $description=$row['description'];
			 $keywords=$row['keywords'];
			 $link=$row['link'];
			 $hotelinfo=$row['hotelinfo'];
			 
			 echo "<h2><a href='$link'>$title</a></h2>
			 $description<br /><br/>";
			 
			 echo "<td>"; ?><img src="<?php echo $row['imagepath'];?>" height="400" width="600" style:margin-left:"30"> <?php echo "</td><br/>";
			 echo $hotelinfo;
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
</html