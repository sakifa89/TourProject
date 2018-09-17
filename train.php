<!DOCTYPE html>
<html>
<head>
<title>search engine-Search</title>
<link rel="stylesheet" type="text/css" href="train.css">
<script src="./searchControl.js"></script>
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
		
		<div class="fix maincontent">
		<center><h2><b>Train Schedule</b></h2></center>
		   
		
		   <div class="fix content"> 
		   
		   <h2>Train schedule .....</h2>
		   
		   <form action="" method="get">
            Leaving From:
                <select name="search_leavingform" id="search_leavingform" class="select">

                	<option value="Rajshahi" label="Rajshahi">Rajshahi</option>
                	<option value="Dhaka" label="Dhaka">Dhaka</option>
                    <option value="Chittagong" label="Chittagong">Chittagong</option>
                    <option value="Sylhet" label="Sylhet">Sylhet</option>
                    <option value="Khulna" label="Khulna">Khulna</option>
                    <option value="Jessore" label="Jessore">Jessore</option>
					<option value="Mymansingh" label="Jessore">Mymansingh</option>
                </select>
                <span class="required">*</span>
            
            <br><br>
            Going To:
                <select name="search_goingto" id="search_goingto" class="select">

                	<option value="Dhaka" label="Dhaka">Dhaka</option>
                    <option value="Rajshahi" label="Rajshahi">Rajshahi</option>
                    <option value="Chittagong" label="Chittagong">Chittagong</option>
                    <option value="Sylhet" label="Sylhet">Sylhet</option>
                    <option value="Khulna" label="Khulna">Khulna</option>
                    <option value="Jessore" label="Jessore">Jessore</option>
					<option value="Mymansingh" label="Jessore">Mymansingh</option>
                </select> 
                <span class="required">*</span>
             <br><br>
            Departing On:
            <input type="date" id="date" name = "date"/>
            <span class="required" id="datereq">*</span>
            <br> <br>                                                                                                        
            <button type="button" id='search_submit' name='search_submit' onclick = "return showTableTrain()" >Search</button>

    	</form>
		<br>

		 <hr />

<div id="txtHint"><b></b></div>

<hr/>
		 </div>
		   <div class="fix pic">
		<img src="images/train.jpg" style:"width:500px;height:455px;">

		</div>
	
		 </div>
		 
		
		<div class="fix footer">
		<center><p>&copy; SAKIFA AKTAR,All Rights Reserved</p></center>
		</div>
		</div>
		
		
</body>
</html


