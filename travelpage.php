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
			<li><a href="homenew.html">Home</a></li>
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
		   <center>
		   <h2>Find Your Travel essentials...</h2>
		   <form action='http://localhost/travel.php' method='get'>
		   <input type='text' name='k' size='50' placeholder='Enter the name of place' value='<?php echo $_GET['k'];?>'/>
		   <input type='submit' value='search' />
		   </form>
	
		 <hr />
		 </center>
		 </div>
		 <div class="maincontent"
		


		 </div>
		
		<div class="fix footer">
		<p>&copy; SAKIFA AKTAR,All Rights Reserved</p>
		</div>
		</div>
		
</body>
</html