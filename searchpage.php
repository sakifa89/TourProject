<!Doctype html>
<html>
	<head>
		<title>main page</title>
		<link rel="stylesheet" type="text/css" href="css/bar/bar.css"/>
		<link rel="stylesheet" type="text/css" href="css/dark/dark.css"/>
		<link rel="stylesheet" type="text/css" href="css/default/default.css"/>
		<link rel="stylesheet" type="text/css" href="css/light/light.css"/>
		<link rel="stylesheet" type="text/css" href="css/nivo-slider.css"/>
		<link rel="stylesheet" type="text/css" href="style3.css"/>
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
		<div class="fix header">
			<center>
               <h2>Search the desire place.....</h2>			
			</center>
		</div>
		<div class="fix slider">
		
		<div class="slider-wrapper theme-light">
		<div class="nivoslider" id="slider">
		
		<img src="picture/jaflong.jpg" alt="" title="Jaflong"/>
		<img src="picture/ratargul.jpg" alt="" title="Ratargul swamp forest"/>
		<img src="picture/basna.jpg" alt="" title="Bisnakandhi"/>
		<img src="picture/Ahsanmanzil.jpg" alt="" title="Ahsanmanzil"/>
		<img src="picture/cox.jpg" alt="" title="Cox's Bazer"/>
		<img src="picture/dhakeshwari.jpg" alt="" title="Dhakeshwari Temple"/>
		<img src="picture/sajek.jpg" alt="" title="Sajek"/>
		<img src="picture/inani.jpg" alt="" title="Inani sea beach"/>
		<img src="picture/hatirjheel.jpg" alt="" title="Hatirjheel"/>
		<img src="picture/lalbag.jpg" title="Lalbag Fort"/>
		<img src="picture/ratargul.jpg" title="Ratargul Swamp Forest"/>
		<img src="picture/saint.jpg" title="Saint Martin Sea Beach"/>
		<img src="picture/shaitgumbuj.jpg" title="Shaitgumbuj Mosque"/>
		<img src="picture/sonargaon.jpg" title="Sonargaon"/>
		<img src="picture/sunderban.png" title="Shundarban"/>
		
		</div> 
		</div>
		</div>
		<div class="fix maincontent">
	        <div class="fix Search">
			    
				<center>
		   <h2>Search place name ...</h2>
		   <form action='http://localhost/search.php' method='get'>
		   <input type='text' name='k' size='80' placeholder='Enter the name of place' />
		   <input type='submit' value='search' />
		   </form>
		</center>
			
			</div>


		</div>
		<div class="fix footer">
		<center><p>&copy; SAKIFA AKTAR,All Rights Reserved</p></center>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
	<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script> 
	</body>
</html>