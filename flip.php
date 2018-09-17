<!DOCTYPE html>
<html>


<head>
		<title>Flip galary</title>
		<link rel="stylesheet" type="text/css" href="flip.css"/>
		<style>
div.img {
    margin-left: 60px;
	margin-bottom:30px;
	
    border: 1px solid #ccc;
    float: left;
    width: 300px;
	border-top: 1px solid #151D42;
	border-left: 1px solid #151D42;
	border-right: 1px solid #151D42;
	border-bottom: 1px solid #151D42;
	
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: 200px;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    
    float: left;
    
}

@media only screen and (max-width: 700px){
    .responsive {
        width: 49.99999%;
        margin:26px 10px;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
</style>
	</head>
	<body style="background-color:#C7C7C7;width:1170px;margin-left:65px">
	<div class="mmm">
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
			<li><a href="homenew.html">Home</a></li>
			<li><a href="AboutBangladesh.html">About Bangladesh</a></li>
			
			<li><a href="searchcode.php">Things to see</a></li>
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
         
		   <br><br><br><center><h2>For your journey choose any transport</h2></center><br>
<h4></h4>

<div class="responsive">
  <div class="img">
    <a target="_blank" href="./airsearch.php">
      <img src="images/bus1.jpg" alt="Trolltunga Norway" width="450" height="200">
    </a>
    <div class="desc">By Bus</div>
  </div>
</div>


<div class="responsive">
  <div class="img">
    <a target="_blank" href="./train.php">
      <img src="images/train.jpg" alt="Forest" width="450" height="400">
    </a>
    <div class="desc">By Train</div>
  </div>
</div>


<div class="responsive">
  <div class="img">
    <a target="_blank" href="./plane.php">
      <img src="images/plane1.jpg" alt="Northern Lights" width="450" height="400">
    </a>
    <div class="desc">By Air</div>
  </div>
</div>







<div class="clearfix"></div>

<div style="padding:6px;">
  
</div>

		  
		<div class="fix footer">
		<center><p>&copy; SAKIFA AKTAR,All Rights Reserved</p></center>
		</div>
		</div>
	
		</body>
		</html>